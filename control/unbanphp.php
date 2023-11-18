<?php require_once '!chkpass.php';

$set = $db->prepare("UPDATE `accounts` SET `isActive` = 1 WHERE `accounts`.`accountID` = ?");
$set->execute([$_POST['accid']])
?>