<?php 
    include('header.php');

?>

<section class="news">
        <div class="container2">
        <?php 

            $info = $sen->get();

            if(isset($_POST['enviar'])){
                $search = $_POST['searc'];
                $result = $sen->search($search);
            }

            if(empty($info[0])){
                ?>
                <div class="aviso">
                    <h1 class="warnign">SEM NOTÍCIAS</h1>
                    <h1>Clique no botão abaixo para criar uma!</h1>
                    <a href="perguntar.php"><button class="btn btn-primary" type="button">CRIAR</button></a>
                </div>
            <?php
            }else{
                if(isset($result)){
            foreach ($result as $key => $value) {
    
        ?>
        <form class="card text-center ajust" method="post">
        <button class="close" name="del" value=<?php echo $value['id']?>><i class="fas fa-times"></i></button>
                <div class="card-header">
                <h5 class="card-title"><?php echo $value['title']?></h5>
                </div>
            <div class="card-body">
                
                <p class="card-text"><?php echo $value['author']?></p>
                <a href="#" class="btn btn-primary">Ir para a Página</a>
            </div>
            <div class="card-footer text-muted">
            <?php echo 'Autor: '.$value['content']?>
            </div>
            </form>      
            <?php
                }
                if(isset($_POST['del'])){
                    $id = $_POST['del'];
                    $sen->delete($id);
                }
            }else{
                foreach ($info as $key => $value) {
                    ?>
                    <form class="card text-center ajust" method="post">
                        <button class="close" name="del" value=<?php echo $value['id']?>><i class="fas fa-times"></i></button>
                            <div class="card-header">
                            <h5 class="card-title"><?php echo $value['title']?></h5>
                            </div>
                        <div class="card-body">
                            
                            <p class="card-text"><?php echo $value['author']?></p>
                            <a href="#" class="btn btn-primary">Ir para a Página</a>
                        </div>
                        <div class="card-footer text-muted">
                        <?php echo 'Autor: '.$value['content']?>
                        </div>
                        </form>      
                        <?php
                            }
                            if(isset($_POST['del'])){
                                $id = $_POST['del'];
                                $sen->delete($id);
                            }
            }
            }
                 ?>
        </div>
    </section>