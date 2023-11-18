<?php require_once '!chkpass.php';

$set = $db->prepare("UPDATE `levels` SET
`levelName` = ?
WHERE `levels`.`levelID` = ?");
$set->execute([$_POST['lvlname'], $_POST['lvlid']])
?>