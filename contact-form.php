<?php
if(!empty($_POST["send"])) {
	$Emri = $_POST["Name"];
	$Numer Telefoni = $_POST["Phone Number"];
	$Email = $_POST["Email"];
	$Mesazhi = $_POST["Message"];

	$toEmail = "evjola.goga@univlora.edu.al";
	$mailHeaders = "From: " . $Emri	. "<". $Email .">\r\n";
	if(mail($toEmail, $Numer Telefoni, $Mesazhi, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>
