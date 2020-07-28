<?php


require_once('conexao.php');
@$search = $_POST['search'];

$query = "SELECT * FROM items WHERE nome LIKE '%$search%' OR descricao LIKE '%$search%' OR categoria LIKE '%$search%'";

$searching = $mysqli->query($query);

echo '
<div id="slider" class="slider">
        <div class="wrapper">
            <div id="items" class="items">
                <form method="POST" action="#">
';

while($item = $searching->fetch_assoc()){
            echo '
                    
                <div class="slide">
                    <div class="img">
                        <img src="../img/foods/',$item['imagens'],'" alt="">
                    </div>
                    
                    <div class="info">
                        <h4>',$item['nome'],'</h4>
                        <p>R$ ',$item['preco'],'</p>
                    </div>
                    <a href="http://localhost/foodsite/pages/index.php?showItem=',$item['id'],'">+</a>
                </div>
                    
                '; }
            echo '
                </form>
            </div>

            <a id="prev" class="control prev"></a>
            <a id="next" class="control next"></a>
        </div>
    </div>
    ';



?>