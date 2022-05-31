<?php
    require "db.php";
    class usersModel extends Db{
        protected function setUser($login,$password,$email){
            $query="INSERT INTO users(userId,login,password,email) VALUES(NULL ? ? ?)";
            $stmt=$this->connect()->prepare($query);
            $stmt->execute([$login,$password,$email]);
        }
    }