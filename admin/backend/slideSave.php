<?php

require_once "db.php";

$id = isset($_POST['slide_id']) ? $_POST['slide_id'] : "";
$title = isset($_POST['slide_title']) ? $_POST['slide_title'] : "";
$desc = isset($_POST['slide_desc']) ? $_POST['slide_desc'] : "";
$link = isset($_POST['slide_link']) ? $_POST['slide_link'] : "";
$lang = isset($_POST['slide_lang']) ? $_POST['slide_lang'] : "";
$image = isset($_FILES['slide_image']) ? $_POST['slide_image'] : "";

echo $id."<br>";
echo $title."<br>";
echo $desc."<br>";
echo $link."<br>";
echo $lang."<br>";

if (!empty($id) & !empty($title) & !empty($desc) & !empty($link) & !empty($lang)) {
	$db = new db\Connector();
	$lang = strtolower($lang);
	if (isset($_POST['slide_image_change']) > 1) {
		$db->query("update slides set slide_title = :title, slide_description = :desc, slide_link = :link, slide_lang = :lang, slide_image = :image where slide_id = :id");
		$img_name = $image['name'];
		if (move_uploaded_file($image['tmp_name'], "../../images/".$img_name)) {
			$db->bind(":title", $title);
			$db->bind(":desc", $desc);
			$db->bind(":link", $link);
			$db->bind(":lang", $lang);
			$db->bind(":id", $id);
			$db->bind(":image", $img_name);
		}
	} else {
		$db->query("update slides set slide_title = :title, slide_description = :desc, slide_link = :link, slide_lang = :lang where slide_id = :id");
		$db->bind(":title", $title);
		$db->bind(":desc", $desc);
		$db->bind(":link", $link);
		$db->bind(":lang", $lang);
		$db->bind(":id", $id);
	}
	$db->execute();

}

header ("Location: ../pages/");

?>