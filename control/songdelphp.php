<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `songs` WHERE `songs`.`ID` = ?");
$set->execute([$_POST['songid']])
?>