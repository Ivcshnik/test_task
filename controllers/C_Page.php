<?php
/**
 * Подключение файла Model.php
 */

include_once('models/model.php');


class C_Page extends C_Base
{
	private $model;

    /**
     * Конструктор
     */
	public function __construct()
	{
		$this->model = Model::getInstance();
	}

    /**
     * Вывод шаблона по для Index файла
     */
	public function actionIndex()
    {
		$this->title .= 'Вход';
        $this->content = $this->Template('views/index.php');
	}

    /**
     * Авторизация пользователя.
     * После авторизации на странице выводится имя пльзователя.
     */
	public function actionLogin() {
		$this->title .= 'Интро';

		if (isset($_POST['submitLogin'])) {
			$_POST['username'] = trim(htmlspecialchars($_POST['username']));
			$_POST[''] = trim(htmlspecialchars($_POST['password']));
			$_POST['password'] = md5($_POST['password']);
			$result = $this->model->Login($_POST);

			foreach ($result as $key=>$value){
				$results = $value;

			}
			if (isset($results['name'])){
				$this->content = $this->Template('views/intro.php', ['result' => $results['name']]);
			}
			else{
				$this->content = $this->Template('views/index.php', ['Error' => $result]);
				echo ("<script>alert('Что то пошло не так!!!')</script>");
			}

		}


	}

	/**
	 * Регистрация пользователей и проверка разрешено ли пользователю регистриваться второй раз
     * лимит времени для повторной регистрации 10 минут.
     * После регистрации на странице выводится имя пльзователя.
     */
	public function actionReg() {

		$this->title .= 'Интро';

		if (isset($_POST['submitReg'])) {
			if (isset($_SERVER['REMOTE_ADDR'])){
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
			elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}

			$time = $this->model->userIp($ip);
			$time = (int)$time;
			$limit = 60 * 10;
			$diff = time() - $time;
			if ($diff > $limit) {
			$_POST['usernamesignup'] = trim(htmlspecialchars($_POST['usernamesignup']));
			$_POST['userloginsignup'] = trim(htmlspecialchars($_POST['userloginsignup']));
			$_POST['emailsignup'] = trim(htmlspecialchars($_POST['emailsignup']));
			$_POST['passwordsignup'] = trim(htmlspecialchars($_POST['passwordsignup']));
			$_POST['passwordsignup_confirm'] = trim(htmlspecialchars($_POST['passwordsignup_confirm']));
			if (strcmp($_POST['passwordsignup'],  $_POST['passwordsignup_confirm']) == 0){
				$_POST['passwordsignup'] = md5($_POST['passwordsignup']);
				$result = $this->model->Insert($_POST, $ip);
				$this->content = $this->Template('views/intro.php', ['result' => $result['name']]);
			}
			} else {
				echo($time);

				echo (time());
				echo('<br>');
				echo($diff);
				echo('<script>alert("С одного IP можно регистрироваться снова только через 10 минут")</script>');
				$this->content = $this->Template('views/index.php');
			}
		}




	}

}

