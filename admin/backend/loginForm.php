<?php 

include "db.php";
include "session.php";
session_start();

$user = isset($_POST['username']) ? $_POST['username'] : "";
$pass = isset($_POST['password']) ? $_POST['password'] : "";

if (!empty($user) & !empty($pass)) {

	$db = new db\Connector();
	$db->query("select * from users where username = :user AND password = :pass");
	$db->bind(":user", $user);
	$db->bind(":pass", $pass);
	$result = $db->single();

	if (empty($result)) {
		header("Location: ../pages/login.html");
	} else {
		Session::set("user", "admin");
		header("Location: ../pages/index.php");
	}

} else {
	header("Location: ../pages/login.html");
}


?>