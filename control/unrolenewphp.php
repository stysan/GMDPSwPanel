<?php require_once '!chkpass.php';

$set = $db->prepare("DELETE FROM `roles` WHERE `roles`.`roleID` = ?");
$set->execute([$_POST['roleid']])
?>