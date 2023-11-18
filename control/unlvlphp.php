<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `levels` WHERE `levels`.`levelID` = ?");
$set->execute([$_POST['lvlid']])
?>