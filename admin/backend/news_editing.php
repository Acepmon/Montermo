<?php

require_once "db.php";

function updateValues($id,$text,$header,$date,$thumb,$lang) {
	$db = new db\Connector();
	$db->query("update news set news_text = :text, news_header = :header, news_date = :date, news_thumb = :thumb, news_lang = :lang where news_id = :id");
	$db->bind(":text", $text);
	$db->bind(":header", $header);
	$db->bind(":date", $date);
	$db->bind(":thumb", $thumb);
	$db->bind(":lang", $lang);
	$db->bind(":id", $id);
	$db->execute();
}

function replaceDir($current, $replacement, $new_name, $id) {
	if (strpos($current, "/")) {
		$dir = explode("/", $current);
	} else if (strpos($current, "\\")) {
		$dir = explode("\\", $current);
	}
	$type = explode(".", $dir[1]);
	$curr = str_replace("/", DIRECTORY_SEPARATOR, $current);
	move_uploaded_file($replacement, "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."news".DIRECTORY_SEPARATOR."news_".$id.".".$type[1]);
	return "logo_".$id.".".$type[1];
}
// try {
	$id = isset($_POST['news_edit_id']) ? $_POST['news_edit_id'] : "";
	$header = isset($_POST['news_edit_header']) ? $_POST['news_edit_header'] : "";
	$text = isset($_POST['news_edit_text']) ? $_POST['news_edit_text'] : "";
	$date = isset($_POST['news_edit_date']) ? $_POST['news_edit_date'] : "";
	$change = isset($_POST['news_edit_change']) ? $_POST['news_edit_change'] : "";
	$thumb = isset($_FILES['news_edit_thumb']) ? $_FILES['news_edit_thumb'] : "";
	$lang = isset($_POST['news_edit_lang']) ? $_POST['news_edit_lang'] : "";

	if (!empty($id) && !empty($header) && !empty($text) && !empty($lang)) {

		$db = new db\Connector();
		$db->query("select news_thumb from news where news_id = :id");
		$db->bind(":id", $id);
		$old_logo = $db->single()['news_thumb'];
		if (strpos($old_logo, "/")) {
			$old_logo_name = explode("/", $old_logo)[1];
		} else if (strpos($old_logo, "\\")) {
			$old_logo_name = explode("\\", $old_logo)[1];
		}

		if ($change == "on") {
			$new_name = replaceDir($old_logo, $logo['tmp_name'], $old_logo_name, $id);
			$old_logo = "news_".$id.DIRECTORY_SEPARATOR.$new_name;
		}

		updateValues($id, $text, $header, $date, $old_logo, strtolower($lang));
	}
// } catch (Exception $ex) {

// }

// header("Location: ../pages/news.php");


?>