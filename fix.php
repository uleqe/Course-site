<?php
	sleep(2);

	require_once "link.php";

	$sql = $link->prepare("Select email from users");

	$sql->execute();

	$result = $sql->get_result();

	$row = $result->fetch_assoc();

	$counter = 0;

	foreach ($row as $value) {
		if($row['email'] == $_POST['email']){
			$counter++;	
		}
	}

	if($counter == 0){
		$return = "Email is free";
	}else{
		$return = "This email is already based";
	}

	echo (json_encode($return));
?>