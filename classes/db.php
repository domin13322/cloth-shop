<?php
    class Db{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $dbName="jedwabiem_i_kaszmirem";

        protected function connect(){
            $dsn='mysql:host='.$this->host.';dbname='.$this->dbName;
            $pdo=new PDO($dsn,$this->user,$this->password);
            // ustawiamy jak będziemy wyciągać dane z bazy
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
            //ustawiamy fetch mode na assoc czyli to czego uzywalem caly czas
            return $pdo;
        }
    }