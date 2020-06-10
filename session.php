<?php

session_start();

if (isset($_SESSION['user'])) {
    header("Location: auth.php");
    return;
}

require_once "link.php";
$stmt = $link->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['user']['email']);

$stmt->execute();


$result = $stmt->get_result();

$row = $result->fetch_assoc();

?>