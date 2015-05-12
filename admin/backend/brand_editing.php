<?php

require_once "db.php";

function getValues($id) {
	$db = new db\Connector();
	$db->query("select * from brands where brand_id = :id");
	$db->bind(":id", $id);
	$res = $db->single();
	echo $res['brand_id'].":::".$res['brand_title'].":::".$res['brand_short_desc'].":::".$res['brand_description'].":::".$res['brand_logo'].":::".$res['brand_lang'];
}

function updateValues($id,$title,$s_desc,$desc,$logo,$lang) {
	$db = new db\Connector();
	$db->query("update brands set brand_title = :title, brand_short_desc = :s_desc, brand_description = :desc, brand_logo = :logo, brand_lang = :lang where brand_id = :id");
	$db->bind(":title", $title);
	$db->bind(":s_desc", $s_desc);
	$db->bind(":desc", $desc);
	$db->bind(":logo", $logo);
	$db->bind(":lang", $lang);
	$db->bind(":id", $id);
	if ($db->execute) {
		echo "success";
	} else {
		echo "fail";
	}
}

$action = isset($_POST['action']) ? $_POST['action'] : "";
if (!empty($action)) {
	if ($action == "get") {
		$id = isset($_POST['id']) ? $_POST['id'] : "";
		if (!empty($id)) {
			getValues($id);
		}
	} else if ($action == "set") {
		$id = isset($_POST['id']) ? $_POST['id'] : "";
		$title = isset($_POST['title']) ? $_POST['title'] : "";
		$s_desc = isset($_POST['s_desc']) ? $_POST['s_desc'] : "";
		$desc = isset($_POST['desc']) ? $_POST['desc'] : "";
		$logo = isset($_POST['logo']) ? $_POST['logo'] : "";
		$lang = isset($_POST['lang']) ? $_POST['lang'] : "";
		if (!empty($id) && !empty($title) && !empty($s_desc) && !empty($desc) && !empty($logo) && !empty($lang)) {
			updateValues($id,$title,$s_desc,$desc,$logo,$lang);
		}
	}
}

?>