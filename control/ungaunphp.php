<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `gauntlets` WHERE `gauntlets`.`ID` = ?");
$set->execute([
$_POST['gaunid']
])
?>