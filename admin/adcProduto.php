<?php

require_once('../conexao.php');

include('components/header.php');
include('components/top.php');
include('components/leftMenu.php');

@$nome = $_POST['nome'];
@$descricao = $_POST['descricao'];
@$preco = $_POST['preco'];
@$categoria = $_POST['categoria'];
$disponibilidade = 1;

@$imagemName = $_FILES['imagens'][name];
@$imagemTmpName = $_FILES['imagens'][tmp_name];
$diretorio = "../img/foods/";



if(!empty($nome) && !empty($descricao) && !empty($preco) && !empty($categoria) && !empty($imagemName)){

    $newFile = $diretorio . $imagemName;

    if(!copy($imagemTmpName, $newFile)){
        echo 'erro';
    }
    
    $query = "INSERT INTO items (nome, descricao, preco, imagens, categoria, disponibilidade) VALUE ('$nome', '$descricao', '$preco', '$imagemName', '$categoria', '$disponibilidade')";

    $insert = $mysqli->query($query);
    echo '<script> alert("Novo item adicionado!") </script>';
}else{
    echo '<Script> alert("Todos campos devem ser preenchidos!") </script>';
}


?>




<div class="content">

    <div class="flex">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="text" name="nome" placeholder="nome"><br>
            <input type="text" name="descricao" placeholder="descrição"><br>
            <input type="number" name="preco" placeholder="preço"><br>
            <input type="file" name="imagens"><br>
            <select name="categoria">
                <option value="">Categoria</option>
                <option value="lanche">Lanche</option>
                <option value="pizza">Pizza</option>
                <option value="Bebida">Bebida</option>
            </select><br>
            <input type="submit" value="adicionar">
        
        </form>
    </div>
        



</div>












<?php
include('components/footer.php');
?>