<?php require_once '!chkpass.php';

$set = $db->prepare("UPDATE `levels` SET `userName` = ? WHERE `levels`.`levelID` = ?");
$set->execute([$_POST['author'], $_POST['lvlid']])
?>