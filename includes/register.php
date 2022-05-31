<?php

    require "../classes/usersControler.php";
    $login="login";
    $email=$_POST["mailInput"];
    $password=$_POST['passwordInput'];
    $passwordRep=$_POST['passwordRepeat'];
    $controler=new UsersControler();
    $controler->addUser($login,$password,$email);
    header("Location:index.php");