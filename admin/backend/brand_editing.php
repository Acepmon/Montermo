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
	$db->bind(":lang", strtolower($lang));
	$db->bind(":id", $id);
	if ($db->execute()) {
		echo "success";
	} else {
		echo "fail";
	}
}
function replaceDir($current, $replacement, $new_name, $id) {
	echo "--> $current";
	echo " ===> $replacement -=-=-=-=> $new_name";
	if (strpos($current, "/")) {
		$dir = explode("/", $current);
	} else if (strpos($current, "\\")) {
		$dir = explode("\\", $current);
	}
	$type = explode(".", $dir[1]);
	$curr = str_replace("/", DIRECTORY_SEPARATOR, $current);
	move_uploaded_file($replacement, "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."brand_images".DIRECTORY_SEPARATOR."brand_".$id.DIRECTORY_SEPARATOR."logo_".$id.".".$type[1]);
	return "logo_".$id.".".$type[1];
}

try {
	$id = isset($_POST['brand_id']) ? $_POST['brand_id'] : "";
	$title = isset($_POST['brand_title']) ? $_POST['brand_title'] : "";
	$s_desc = isset($_POST['brand_s_desc']) ? $_POST['brand_s_desc'] : "";
	$desc = isset($_POST['brand_desc']) ? $_POST['brand_desc'] : "";
	$change = isset($_POST['brand_change']) ? $_POST['brand_change'] : "";
	$logo = isset($_FILES['brand_logo']) ? $_FILES['brand_logo'] : "";
	$lang = isset($_POST['brand_lang']) ? $_POST['brand_lang'] : "";

	echo $id."<br>";
	echo $title."<br>";
	echo $s_desc."<br>";
	echo $desc."<br>";
	echo $change."<br>";
	print_r($logo);
	echo "<br>".$lang."<br>";

	if (!empty($id) && !empty($title) && !empty($s_desc) && !empty($lang)) {

		$db = new db\Connector();
		$db->query("select brand_logo from brands where brand_id = :id");
		$db->bind(":id", $id);
		$old_logo = $db->single()['brand_logo'];
		if (strpos($old_logo, "/")) {
			$old_logo_name = explode("/", $old_logo)[1];
		} else if (strpos($old_logo, "\\")) {
			$old_logo_name = explode("\\", $old_logo)[1];
		}

		if ($change == "on") {
			$new_name = replaceDir($old_logo, $logo['tmp_name'], $old_logo_name, $id);
			$old_logo = "brand_".$id.DIRECTORY_SEPARATOR.$new_name;
		}

		updateValues($id, $title, $s_desc, $desc, $old_logo, $lang);
	}
} catch(Exception $ex) {
	echo $ex->message();
} finally {
	header("Location: ../pages/brand.php");
}




?>