<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `mappacks` WHERE `mappacks`.`ID` = ?");
$set->execute([$_POST['packid']])?>