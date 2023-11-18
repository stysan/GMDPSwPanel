<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `roleassign` WHERE `roleassign`.`assignID` = ?");
$set->execute([$_POST['assid']])
?>