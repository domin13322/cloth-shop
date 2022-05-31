<?php
    require "usersModel.php";
    class UsersControler extends usersModel{
        public function addUser($login,$pass,$email){
            $this->setUser($login,$pass,$email);
        }
    }