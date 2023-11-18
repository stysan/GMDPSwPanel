<?php require_once '!chkpass.php';

$set = $db->prepare("INSERT INTO `quests` (`ID`, `type`, `amount`, `reward`, `name`)
VALUES (?,?,?,?,?)");
$set->execute([
$_POST['questid'],
$_POST['questtype'],
$_POST['questamount'],
$_POST['questreward'],
$_POST['questname']
])
?>