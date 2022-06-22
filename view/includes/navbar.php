<?php
$is_admin = $_SESSION["is_admin"];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../Dashboard/main.php">Currículos</a>
            </div>
            <ul class="nav navbar-nav nav-pills">
                <li><a href="../Dashboard/main.php">Início</a></li>
                <?php
                if ($is_admin == 1) {
                ?>
                    <li><a href="../Dashboard/listaCurriculos.php">Ver currículos</a></li>
                <?php
                } ?>
                <li><a href="../../controller/Logout/processaLogout.php">Sair</a></li>
            </ul>

        </div>
    </nav>
</header>







