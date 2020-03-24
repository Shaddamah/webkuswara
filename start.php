<?php
session_start();
$_SESSION['log_name'] = $_GET['name'];
$_SESSION['log_inst'] = $_GET['inst'];

if($_GET['name'] == ""){
    $_SESSION['log_name'] = "Pemain Anonim";
}
if($_GET['inst'] == ""){
    $_SESSION['log_inst'] = "Tidak disebutkan";
}

if($_GET['save'] == "save"){
    $_SESSION['log_save'] = true;
}else{
    $_SESSION['log_save'] = false;
}

header("Location: pages/quiz.php");
?>