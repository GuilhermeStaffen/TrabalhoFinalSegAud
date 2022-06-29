<?php
session_start();
session_unset();
session_destroy();
header('Location: ../../view/Login/login.php?r='. md5(uniqid(mt_rand(), true)) .'');