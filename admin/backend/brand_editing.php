<?php

require_once "db.php";

$db = new db\Connector();

function getValues($id) {
	$db->query("select * from brands where brand_id = ".$id);
	$res = $db->single();
	echo $res['brand_id'].":::".$res['brand_title'].":::".$res['brand_desc'].":::".$res['brand_logo'].":::".$res['brand_img'].":::".$res['brand_lang'];
}

function updateValues($id,$title,$desc,$logo,$img,$lang) {
	
}



?>