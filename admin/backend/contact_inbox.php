<?php
	
$id = isset($_POST['contact_inbox_id']) ? $_POST['contact_inbox_id'] : null;

if (!is_null($id)) {

	require_once "db.php";
	$db = new db\Connector();
	$db->query("delete from contact_inbox where contact_inbox_id = :id");
	$db->bind(":id", $id);
	$db->execute();

}
?>