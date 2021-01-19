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

        public function get()
        {
            global $pdo;
            $sql = $pdo->prepare('SELECT * FROM news');
            $sql->execute();
            $info = $sql->fetchAll();

            return $info;
        }

        public function delete($id)
        {
            global $pdo;
            if(isset($_POST['del'])){
                $id = $_POST['del'];
                $del = $pdo->prepare("DELETE FROM news WHERE news.id=?");
                $del->execute(array($id));
            }
        }

        public function search($search)
        {
            global $pdo;
            $pesq = $pdo->prepare("SELECT * FROM news WHERE title LIKE '%$search%'");
            $pesq->execute();
            $result = $pesq->fetchAll();

            return $result;
        }

    }

?>
