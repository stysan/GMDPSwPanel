<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `quests` WHERE `quests`.`ID` = ?");
$set->execute([$_POST['quesid']])
?>