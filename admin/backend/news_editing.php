<?php

$id = isset($_POST['news_edit_id']) ? $_POST['news_edit_id'] : "";
$header = isset($_POST['news_edit_header']) ? $_POST['news_edit_header'] : "";
$text = isset($_POST['news_edit_text']) ? $_POST['news_edit_text'] : "";
$thumb = isset($_FILES['news_edit_thumb']) ? $_POST['news_edit_thumb'] : "";
$lang = isset($_POST['news_edit_lang']) ? $_POST['news_edit_lang'] : "";

if (!empty($id) && !empty($header) && !empty($text) && !empty($thumb) && !empty($lang)) {
	
}

header ("Location: ../pages/news.php");

?>