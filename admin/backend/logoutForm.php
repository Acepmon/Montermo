<?php

include "session.php";
session_start();

Session::delete("user");
header("Location: ../pages/login.html");

?>