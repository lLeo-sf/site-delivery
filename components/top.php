<?php

echo '

<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Leonardo Fernandes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">



    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <title></title>

    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>
<div class="toggle" onclick="menu();" id="menu">
        <span></span>
        <span></span>
        <span></span>
        <nav class="hidden" id="menuList">
            <div class="menu">
                <a href="../pages/index.php">Inicio</a>
                <a href="../pages/cardapio.php">Cardápio</a>
                <a href="../pages/onde_estamos.php">Onde estamos</a>
                <a href="../pages/contato.php">Contato</a>
            </div>

        </nav>
    </div>

';
?>