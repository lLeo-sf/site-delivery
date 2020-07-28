<?php

echo '
<div class="header">

    <form method="POST" action="#">
        <input type="search" placeholder="O que você quer comer hoje?" name="search">
  
        <div class="sugestions">
            <div class="sugestion">
                <button value="pizza" name="search"> <span>#pizzas</span> </button>
            </div>
            <div class="sugestion">
                <button value="lanche" name="search"> <span>#lanches</span> </button>
            </div>
            <div class="sugestion">
                <button value="acai" name="search"> <span>#açai</span> </button>
            </div>
            <div class="sugestion">
                <button value="bebida" name="search"> <span>#bebidas</span> </button>
            </div>
            <div class="sugestion">
                <button value="salgado" name="search"> <span>#salgados</span> </button>
            </div>
        </div>
    </form>
</div>
';
?>