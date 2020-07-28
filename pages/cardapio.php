<?php

include('../components/top.php');

include('../conexao.php');



?>

<div class="cardapio">
    <div class="itemsCardapio">
        <div class="itemCardapio">
            <div class="icon">
                <img src="../img/icon/pizza.png" alt="">
            </div>
            <div class="com">
                <?php 
                    $sql = "SELECT nome, descricao FROM items WHERE categoria = 'pizza'";
                    $search = $mysqli->query($sql);
                    while($row = $search->fetch_assoc()){
                        echo '<h3>',$row['nome'],': <span>',$row['descricao'],'</span> </h3>';
                    }
                ?>
                
            </div>
        </div>
        <div class="itemCardapio">
            <div class="icon">
                <img src="../img/icon/burguer.png" alt="">
            </div>
            <div class="com">
                <?php 
                    $sql = "SELECT nome, descricao FROM items WHERE categoria = 'lanche'";
                    $search = $mysqli->query($sql);
                    while($row = $search->fetch_assoc()){
                        echo '<h3>',$row['nome'],': <span>',$row['descricao'],'</span> </h3>';
                    }
                ?>
               
            </div>
        </div>
        <div class="itemCardapio">
            <div class="icon">
                <img src="../img/icon/alcool.png" alt="">
            </div>
            <div class="com">
                <?php 
                    $sql = "SELECT nome, descricao FROM items WHERE categoria = 'bebida'";
                    $search = $mysqli->query($sql);
                    while($row = $search->fetch_assoc()){
                        echo '<h3>',$row['nome'],'</h3>';
                    }
                ?>
                
            </div>
        </div>
    </div>
</div>








<?php

include('../components/footer.php');

?>