<?php

include "db.php";

function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

$product_id = isset($_GET['del_product_id']) ? $_GET['del_product_id'] : "";
$brand_id = isset($_GET['brand_id']) ? $_GET['brand_id'] : "";

$db = new db\Connector();

if (!empty($product_id) & !empty($brand_id)) {
	echo $product_id."<br>".$brand_id;
	$db->query("delete from product_img where products_product_id = :product_id");
	$db->bind(":product_id", $product_id);
	$db->execute();
	$db->query("delete from products where product_id = :product_id");
	$db->bind(":product_id", $product_id);
	$db->execute();

	$path = "../../images/brand_images/brand_".$brand_id."/product_".$product_id."/";
	deleteDir($path);
}

header("Location: ../pages/product.php");

?>