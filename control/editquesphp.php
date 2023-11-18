<?php require_once '!chkpass.php';

$set = $db->prepare('UPDATE `quests` SET
`type`=?,
`amount`=?,
`reward`=?,
`name`=?
WHERE `ID`=?');
$set->execute([
$_POST['questtype'],
$_POST['questamount'],
$_POST['questreward'],
$_POST['questname'],
$_POST['questid']
])
?>