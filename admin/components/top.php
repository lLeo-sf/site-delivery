<?php


echo '

    <div class="top">

            <div class="title">
                <h1>FoodSite Admin</h1>
            </div>
            <div class="search">
                <input type="text" placeholder="Search...">
                <div id="lupa"></div>
            </div>
            <div class="notification">
                <i class="fa fa-envelope"></i>
                <i class="fa fa-bell"></i>
            </div>
            <div class="perfil">
                <div id="imgPerfil"></div>
                <span>Leonardo</span>
                <i class="fa fa-angle-down"></i>
            </div>

            <div class="toggleMenu">
                <i class="fa fa-bars" onclick="toggle();"></i>
                <div class="hidden" id="toggle">
                    <nav>
                        <li>
                            <i class="fa fa-user"><a href="config.php">config</a></i>
                        </li>
                        <li>
                            <i class="fa fa-dashboard"><a href="index.html">Dashboard</a></i>
                        </li>
                        <li>
                            <i class="fa fa-copy"><a href="produtos.php">Produtos</a></i>
                        </li>
                       
                       

                    </nav>
                </div>
            </div>

    </div>
';

?>