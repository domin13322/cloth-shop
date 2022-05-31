<div id="registerForm">
    <div class="wrapper">
        <a href="#" class="close">&times;</a>
        <br>
        <h3>Zarejestruj się</h3>
        Aby korzystać, ze wszystkich ofert oraz promocji
        <br>
        <br>
        <form action="includes/register.php" method="post" class="loginForm" id="loginform">
            <label for="mailInput" class="logFormLabel">E-mail</label>
            <br>
            <input type="email" name="mailInput" class="loginInput">
            <br>
            <label for="passwordInput" class="logFormLabel">Hasło</label>
            <br>
            <input type="password" name="passwordInput" class="loginInput">
            <br>
            <label for="passwordRepeat" class="logFormLabel">Powtórz hasło</label>
            <br>
            <input type="password" name="passwordRepeat" class="loginInput">
            <br>
            <label class="rememberBox" for="rememberMe">Akceptuje regulamin </label>
            <input type="checkbox" name="rememberMe" class="rememberBox"> 
            <a class="forgotPassword" href="passwordForgot.php">Wyświetl regulamin</a>
            <br>
            <button type="submit" class="loginBtn">Załóż konto</button>
            <br>
        </form>
    </div>
</div> 