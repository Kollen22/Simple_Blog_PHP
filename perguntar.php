    <?php 
        include('partials/header.php');
    ?>

    <div class="container3">
        <div class="card tam">
            <h4 class="card-header text-center">Nova Notícia</h4>
        <form method="post">
        <div class="form mb-4 card-body">
            <input type="text" class="form-control" name="title" placeholder="Titulo">
        </div>
        <div class="form mb-4 card-body">
            <input type="text" class="form-control" name="author" placeholder="Autor">
        </div>
        <div class="form card-body" >
        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" placeholder="Seu Conteudo" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
        
            
        </form>
        </div>
    </div>

<?php
    if(isset($_POST["title"]) == !null){

        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];

        if(!empty($title) && !empty($content) && !empty($author)){
            $sen->send($title, $author, $content);         

        }
    }else{
        
    }
?>
</body>
