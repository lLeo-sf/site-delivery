<?php

require_once('../conexao.php');

include('components/header.php');
include('components/top.php');
include('components/leftMenu.php');

@$id = $_GET['id'];



$query = "SELECT * FROM items WHERE id = '$id'";


if(!empty($id)){

    $search = $mysqli->query($query);

    while($result = $search->fetch_assoc()){
        echo '
        <div class="content">
            <div class="flex">
                <form action="#" method="POST">
                    <input type="text" name="nome" value="',$result['nome'],'"><br>
                    <input type="text" name="descricao" value="',$result['descricao'],'"><br>
                    <input type="number" name="preco" value="',$result['preco'],'"><br>
                    <select name="categoria">
                        <option value=""><strong>',$result['categoria'],'<strong></option>
                        <option value="lanche">Lanche</option>
                        <option value="pizza">Pizza</option>
                        <option value="Bebida">Bebida</option>
                    </select><br>
                    <input type="submit" value="atualizar">
            
                </form>
            </div>
        </div>
        
        ';
    }

    @$nome = $_POST['nome'];
    @$descricao = $_POST['descricao'];
    @$preco = $_POST['preco'];
    @$categoria = $_POST['categoria'];

    $queryUpdate = "UPDATE items set nome = '$nome', descricao = '$descricao', preco = '$preco', categoria = '$categoria' WHERE id = '$id'";

    if(!empty($nome) && !empty($descricao) && !empty($preco) && !empty($categoria)){
        $update = $mysqli->query($queryUpdate);
        echo '<script> alert("Produto Atualizado!")</script>';

    }else{
        echo '<script> alert("Todos os campos devem ser preenchidos")';
    }

    
}else{
    echo '
    <div class="content">
        <div class="flex">
            <form action="#" method="GET">
                <p style="color:white;">veja o id do produto a ser atualizado em: <a href="verProdutos.php">Ver produtos</a></p>
                <input type="text" name="id" placeholder="Id do produto"><br>
                <input type="submit" value="buscar">
            </form>
        </div>
    </div>
    ';
}


?>















<?php
include('components/footer.php');
?>