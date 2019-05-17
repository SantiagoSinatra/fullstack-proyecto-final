<?php
session_start();
session_destroy();
setcookie("passDelUsuario", "", time()-1);
header("location: index.php");