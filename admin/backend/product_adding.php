<?php

require_once "db.php";

$db = new db\Connector();
$db->query("select product_id from products order by product_id desc limit 1");
$res = $db->single();

$id = 1;
if (empty($res)) {
	$id = 1;
} else {
	$id = ((int) $res['product_id']) + 1;
}

$name = isset($_POST['product_name']) ? $_POST['product_name'] : "";
$desc = isset($_POST['product_desc']) ? $_POST['product_desc'] : "";
$lang = isset($_POST['product_lang']) ? $_POST['product_lang'] : "";
$brand_id = isset($_POST['product_brand']) ? $_POST['product_brand'] : "";
$imgs = isset($_FILES['product_img']) ? $_FILES['product_img'] : "";

if (!empty($name) & !empty($lang) & !empty($brand_id) & !empty($imgs)) {
	echo $id."<br>".$name."<br>".$desc."<br>".$brand_id."<br>".$lang."<br>";
	$lang = strtolower($lang);

	$db->query("insert into products (brands_brand_id, product_name, product_description, product_lang) values (:brand_id, :name, :desc, :lang)");
	$db->bind(":brand_id", $brand_id);
	$db->bind(":name", $name);
	$db->bind(":desc", $desc);
	$db->bind(":lang", $lang);
	$db->execute();

	$uploaded_file_names = array();
	$uploads_dir = '../../images/brand_images/brand_'.$brand_id.DIRECTORY_SEPARATOR."products".DIRECTORY_SEPARATOR;
	foreach ($_FILES["product_img"]["error"] as $key => $error) {
		if (!file_exists($uploads_dir)) {
			mkdir($uploads_dir, 0777, true);
		}
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["product_img"]["tmp_name"][$key];
	        $type = explode(".", $_FILES["product_img"]["name"][$key])[1];
	        $name = "product_".$_FILES["product_img"]["name"][$key];
	        if (move_uploaded_file($tmp_name, "$uploads_dir".DIRECTORY_SEPARATOR.$name)) {
	        	array_push($uploaded_file_names, $name);
	        }
	    }
	}
	foreach ($uploaded_file_names as $names) {
		$db->query("insert into product_img (img_url, products_product_id) values (:url, :product_id)");
		$db->bind(":url", $names);
		$db->bind(":product_id", $id);
		$db->execute();
	}

}

// header("Location: ../pages/product.php");

?>