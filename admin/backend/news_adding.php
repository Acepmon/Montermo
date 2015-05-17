<?php 

require_once "db.php";

$db = new db\Connector();

$title = isset($_POST['news_header']) ? $_POST['news_header'] : "";
$text = isset($_POST['news_text']) ? $_POST['news_text'] : "";
$date = isset($_POST['news_date']) ? $_POST['news_date'] : "";
$lang = isset($_POST['news_lang']) ? $_POST['news_lang'] : "";
$thumb = isset($_FILES['news_thumb']) ? $_FILES['news_thumb'] : "";
$lang = strtolower($lang);

if (!empty($title) & !empty($text) & !empty($date) & !empty($lang)) {	
	echo "<br>Title : ".$title;
	echo "<br>Text : ".$text;
	echo "<br>Date : ".$date;
	echo "<br>Language : ".$lang;
	echo "<br><pre>", print_r($thumb), "</pre>";


	// insert into the database
	$db->query("insert into news (news_text, news_header, news_date, news_lang) values (:text, :header, :date, :lang) ");
	$db->bind(":text", $text);
	$db->bind(":header", $title);
	$db->bind(":date", $date);
	$db->bind(":lang", $lang);
	$db->execute();

	// get the inserted news id
	$db->query("select news_id from news order by news_id desc limit 1");
	$id = $db->single()['news_id'];

	if (!empty($thumb['name'])) {
		// upload the thumb image
		$img_type = explode(".", $thumb['name'])[1];
		$img_name = "news_".$id.".".$img_type;
		$dest_dir = "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."news".DIRECTORY_SEPARATOR;
		move_uploaded_file($thumb['tmp_name'], $dest_dir.$img_name);
		
		// update the name in database
		$db->query("update news set news_thumb = :thumb where news_id = :id");
		$db->bind(":thumb", $img_name);
		$db->bind(":id", $id);
		$db->execute();
	}

}

header ("Location: ../pages/news.php");


?>