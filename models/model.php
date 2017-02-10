<?php

class Model extends PDO{

    private static $instance;

    /**
     *
     */
    public static function getInstance() {
        if (self::$instance == null)
            self::$instance = new Model("pgsql:host=localhost;dbname=gbphp;", 'postgres', '');

        return self::$instance;
    }


    /**
     * @param $ip - IP адрес пользователя
     * @return array - время начала регистрации
     */

    public function userIp($ip)
    {
        $sql = "SELECT str_time FROM users WHERE ip_adress='%s'";
        $query = sprintf($sql, $ip);
        $result = self::query($query, PDO::FETCH_LAZY);
        foreach ($result as $row=>$value){
            $time = $value;
        }
        return $time['str_time'];
    }

    /**
     * @param $userReg - массив с данными пользователя
     * @param $ip - IP адрес, пользователя
     * @return array - массив с данными о пользователе
     */
    public function Insert($userReg, $ip)
    {
        $name = $userReg['usernamesignup'];
        $mail = $userReg['emailsignup'];
        $pass = $userReg['passwordsignup'];
        $login = $userReg['userloginsignup'];
        // время регистрации пльзователя в формате Unix
        $str_time = time();

        // Добавляем пользователя в БД
        $sql = self::query("INSERT INTO users (name, email, password, ip_adress, login, str_time)"
            . " VALUES ('$name', '$mail', '$pass', '$ip', '$login', '$str_time')");
        self::exec($sql);

        // Вытаскиваем пользователя из БД
        $sql = "SELECT * FROM users WHERE login = '$name' or name = '$name' ";
        $query = sprintf($sql, $name);
        $result = self::query($query, PDO::FETCH_ASSOC);
        foreach ($result as $row=>$value){
            $uname = $value;

        }
        return $uname;
    }

    /**
     * @param $userLogin - имя или логин пользователя
     * @return array - имя пользователя если существует или массив с ошибкой
     */

    public function Login($userLogin)
    {
        $name = $userLogin['username'];
        $password = $userLogin['password'];

        // вытаскиваем пользователя из БД по логину или имени пользователя
        $sql = "SELECT * FROM users WHERE login = '$name' or name = '$name' ";
        $query = sprintf($sql, $name);
        $result = self::query($query, PDO::FETCH_ASSOC);
        foreach ($result as $row=>$value){
            $user = $value;

        }
        // проверяем пользователя по имени и логину, если пользователь не существует, заносим ошибку в массиив
        if ((empty($user['name'])) && (empty($user['login']))){
            $userError = true;
            $errors[]=['userError'=> $userError];

        }

        // проверяем пароль, если пароли не совпадают, заносим ошибку в массив
        elseif ($user['password'] != $password){
            $passError = true;
            $errors[]=['passError'=> $passError];

        }

        // если существует массив с ошибками, то возвращаем его, если нет то возвращаем имя пользователя
        if (isset($errors)){
            return $errors;
        }
        else {
            $name = $user['login'];
            $names[] = ['name'=> $name];
            return $names;
        }
    }
}
