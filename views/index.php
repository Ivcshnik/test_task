
<div class="container">

    <section>
        <div id="container_demo" >
            <!--Окно авторизации/регистрации пользователя. Скрытые anchor использованы для предотвращеия скачков--!>
            <!-- http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">

                    <form  action="?act=login" autocomplete="on" method="post">
                        <h1>Авторизация</h1>
                        <p>
                            <label for="username" class="uname" data-icon="u" > Введите имя пользователя </label>
                            <input id="username" name="username" required="required" type="text" placeholder="Имя пользователя"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Введите пароль </label>
                            <input id="password" name="password" required="required" type="password" placeholder="Пароль" />
                        </p>

                        <p class="login button">
                            <input type="submit" name="submitLogin" value="Войти" />


                        </p>
                        <p class="change_link">
                            
                            <a href="#toregister" class="to_register">Регистрация</a>
                        </p>

                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  action="?act=reg" autocomplete="on" method="post">
                        <h1> Регистрация </h1>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Введите имя пользователя</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Имя пользователя" />
                        </p>
                        <p>
                            <label for="userloginsignup" class="uname" data-icon="u">Введите логин</label>
                            <input id="userloginsignup" name="userloginsignup" required="required" type="text" placeholder="Логин" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e" > Введите e-mail</label>
                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="E-mail"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" data-icon="p">Введите пароль </label>
                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="Пароль"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Подтвердите пароль </label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="Re пароль"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" name="submitReg" value="Регистрация"/>
                        </p>
                        <p class="change_link">
                            Уже зарегистрированы?
                            <a href="#tologin" class="to_register"> Войти </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>

