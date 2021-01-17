<?php
    class Usuario{
        private $pdo;
        public $msgErr = '';

        public function connect($host,$name,$r,$pass){
            global $pdo;
            global $msgErr;
            try {
                $pdo = new PDO("mysql:dbname=$name;host=$host", "$r", "$pass");
            } catch (PDOException $e) {
                $msgErr = $e->getMessage();
            }
           
        }

        public function send($title, $author, $content){
            global $pdo;
            $sql = $pdo->prepare("INSERT INTO `news` VALUES (null,?,?,?)");
            $sql->execute(array($title, $author, $content));
        }

    }

?>
