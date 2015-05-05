<?php

require_once "../admin/backend/db.php";

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$subject = isset($_REQUEST['subject']) ? $_REQUEST['subject'] : "";
$company_name = isset($_REQUEST['company_name']) ? $_REQUEST['company_name'] : "";
$message = isset($_REQUEST['message']) ? $_REQUEST['message'] : "";

$db = new db\Connector();

$db->query("insert into contact_inbox (name, email, position_title, company_name, message) values (:name, :email, :subject, :company_name, :message)");
$db->bind(":name", $name);
$db->bind(":email", $email);
$db->bind(":subject", $subject);
$db->bind(":company_name", $company_name);
$db->bind(":message", $message);
$db->execute();

?>