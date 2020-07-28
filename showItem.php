<?php

require_once('conexao.php');

$item = $_GET['showItem'];

$query = "SELECT * FROM items WHERE id = '$item'";

$searching = $mysqli->query($query);

while($result = $searching->fetch_assoc()){
   $pedido = "Olá, gostaria de um " . $result['nome'] . " no capricho, por favor :)";
    echo '
        <div class="showItem">

            <div class="imgItem">
                <img src="../img/foods/',$result['imagens'],'" alt="">
            </div>

            <button id="close" onclick="close();">X</button>

            <div class="desc">
                <h3>',$result['nome'],'</h3>
                <p>',$result['descricao'],'</p>
                <button><a href="https://api.whatsapp.com/send?phone=5535984282859&text=',$pedido,'">Fazer Pedido</button>
            </div>

        </div>
    '; 
 }

?>
