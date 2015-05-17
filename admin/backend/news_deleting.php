<?php 

require_once "db.php";

$id = isset($_GET['news_id']) ? $_GET['news_id'] : "";

if (!empty($id)) {
	echo $id;

	$db = new db\Connector();
	$db->query("delete from news where news_id = :id");
	$db->bind(":id", $id);
	$db->execute();
}

header ("Location: ../pages/news.php");

?>