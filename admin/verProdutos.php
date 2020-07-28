<?php

require_once('../conexao.php');

include('components/header.php');
include('components/top.php');
include('components/leftMenu.php');





$query = "SELECT * FROM items";




?>




<div class="content">

    <div class="flex">
        <table style="color: white;">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagens</th>
                <th>Disponibilidade</th>
            </tr>
            <tr>
        <?php

        $search = $mysqli->query($query);
        while($result = $search->fetch_assoc()){
            echo '
                <tr>
                    <td>',$result['id'],'</td>
                    <td>',$result['nome'],'</td>
                    <td>',$result['descricao'],'</td>
                    <td>',$result['preco'],'</td>
                    <td>',$result['imagens'],'</td>
                    <td>',$result['disponibilidade'],'</td>
                </tr>
             
            ';
        }

        ?>
        </table>
    </div>
        



</div>












<?php
include('components/footer.php');
?>