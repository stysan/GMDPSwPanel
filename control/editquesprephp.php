<?php require_once '!chkpass.php';

$stmp = $db->prepare('SELECT * FROM `quests` WHERE `ID` = ?');
$stmp->execute([$_POST['quesid']]);
$obj = $stmp->fetch(PDO::FETCH_OBJ);

echo '["'.
$obj->ID.'","'.
$obj->type.'","'.
$obj->amount.'","'.
$obj->reward.'","'.
$obj->name.'"]'

?>