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

$id = $_GET['del_id'];
echo $id;

$db = new db\Connector();
$db->query("delete from brands where brand_id = :id");
$db->bind(":id", $id);

deleteDir("../../images/brand_images/brand_".$id);
$db->execute();

header("Location: ../pages/brand.php");

?>