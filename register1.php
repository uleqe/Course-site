<?php
require_once "link.php";

header('Content-Type: application/json');
if(!empty($_POST["email"]) && !empty($_POST["fname"]) && !empty($_POST["pass"]))
{

	$sqli = $link->prepare("Select email from users");
	$sqli->execute();

	$results = $sqli->get_result();

	$row = $results->fetch_assoc();
		
	$sql = $link->prepare("INSERT INTO users(fname,lname,email,password,url,bdate)
	VALUES ('".$_POST["fname"]."','".$_POST["email"]."','".$_POST["pass"]."')");
	
	$sql->execute();

	$result = $sql->get_result();	
	
	$return = array(
		'message' => "success");
}

	echo (json_encode($return));

?>