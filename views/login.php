
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="../css/main.css" media="screen" rel="stylesheet">
    <link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
        <form action="" id="loginform" method="post"name="loginform">
            <p><label for="user_login">Имя пользователя<br>
                <input class="input" id="username" name="username"size="20"
                       type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                <input class="input" id="password" name="password"size="20"
                       type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
            <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
        </form>
    </div>
</div>
</body>
</html>