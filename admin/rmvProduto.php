<?php

require_once('../conexao.php');

include('components/header.php');
include('components/top.php');
include('components/leftMenu.php');

@$id = $_POST['id'];



$query = "DELETE FROM items WHERE id='$id'";

if(!empty($id)){
    $insert = $mysqli->query($query);
    echo '<script> alert("Produto removido!") </script>';
}else{
    echo '<script> alert("O campo "ID" precisa ser preenchido!") </script>';
}


?>




<div class="content">

    <div class="flex">
        <form action="#" method="POST">
            <p style="color:white;">veja o id do produto a ser removido em: <a href="verProdutos.php">Ver produtos</a></p>
            <input type="text" name="id" placeholder="Id do produto"><br>
            
            <input type="submit" value="remover">
        
        </form>
    </div>
        



</div>












<?php
include('components/footer.php');
?>