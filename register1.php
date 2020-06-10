<?php
require_once "link.php";

header('Content-Type: application/json');
if(!empty($_POST["email"]) && !empty($_POST["fname"]) && !empty($_POST["pass"]))
{

	$sqli = $link->prepare("Select email from users");
	$sqli->execute();

	$results = $sqli->get_result();

	$row = $results->fetch_assoc();
		
	$sql = $link->prepare("INSERT INTO users(username,fname,lname,email,password,public_info)
	VALUES ('".$_POST["fname"]."',null,null,'".$_POST["email"]."','".$_POST["pass"]."',null)");
	
	$sql->execute();

	$result = $sql->get_result();	
	
	$return = array(
		'message' => "success");
}

	echo (json_encode($return));

?>