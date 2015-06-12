<?php

require_once "db.php";

$db = new db\Connector();
$db->query("select brand_id from brands order by brand_id desc limit 1");
$res = $db->single();

$id = 1;
if (empty($res)) {
	$id = 1;
} else {
	$id = ((int) $res['brand_id']) + 1;
}

$title = isset($_POST['brand_title']) ? $_POST['brand_title'] : "";
$s_desc = isset($_POST['brand_short_desc']) ? $_POST['brand_short_desc'] : "";
$desc = isset($_POST['brand_description']) ? $_POST['brand_description'] : "";
$lang = isset($_POST['brand_lang']) ? $_POST['brand_lang'] : "english";
$lang = strtolower($lang);

if (!empty($title) || !empty($desc) || !empty($s_desc)) {

	$logo_type = $_FILES['brand_logo']['type'];
	$img_type = $_FILES['brand_img']['type'];

	$logo_type = explode("/", $logo_type)[1];

	$target_dir = "../../images/brand_images/";
	$cont_dir = "brand_".$id."/";

	$logo_file = $cont_dir."logo_".$id.".".$logo_type;

	$logo_target_file = $target_dir.$logo_file;

	if (!file_exists($target_dir.$cont_dir)) {
		$oldmask = umask(0);
	    mkdir($target_dir.$cont_dir, 0777, true);
	    umask($oldmask);
	}

	// Move Logo
	move_uploaded_file($_FILES['brand_logo']['tmp_name'], $logo_target_file);


	$db->query("insert into brands (brand_title, brand_short_desc, brand_description, brand_logo, brand_lang) values (:title, :s_desc, :desc, :logo, :lang)");
	$db->bind(":title", $title);
	$db->bind(":s_desc", $s_desc);
	$db->bind(":desc", $desc);
	$db->bind(":logo", $logo_file);
	$db->bind(":lang", $lang);
	$db->execute();
	
}
header ("Location: ../pages/brand.php");	

?>