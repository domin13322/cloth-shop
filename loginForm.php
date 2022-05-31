<div id="loginFormDiv">
                <div class="wrapper">
                    <a href="#" class="close">&times;</a>
                    <br>
                    <h3>Zaloguj się</h3>
                    Aby korzystać, ze wszystkich ofert oraz promocji
                    <br>
                    <br>
                    <form action="login.php" method="post" class="loginForm" id="loginform">
                        <label for="mailInput" class="logFormLabel">E-mail</label>
                        <br>
                        <input type="email" name="mailInput" class="loginInput">
                        <br>
                        <label for="passwordInput" class="logFormLabel">Hasło</label>
                        <br>
                        <input type="password" name="passwordInput" class="loginInput">
                        <br>
                        <label class="rememberBox" for="rememberMe">Zapamiętaj mnie </label>
                        <input type="checkbox" name="rememberMe" class="rememberBox"> 
                        <a class="forgotPassword" href="passwordForgot.php">Nie pamiętasz hasła?</a>
                        <br>
                        <button type="submit" class="loginBtn">Zaloguj się</button>
                        <br>
                    </form>
                    <a href="#registerForm"><button class="registerBtn">Załóż konto</button></a>
                </div>
            </div>