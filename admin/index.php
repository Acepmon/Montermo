<?php

include "backend/session.php";
session_start();

$userType = Session::get('user');
if ($userType['type'] == 'admin') {
	header('Location: pages/');
} else {
	header('Location: pages/login.html');
}

?>