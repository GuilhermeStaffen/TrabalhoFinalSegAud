<?php 
header('Location: ./view/Login/login.php?r='.md5(uniqid(mt_rand(), true)) .'');
?>