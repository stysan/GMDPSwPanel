<?php require_once '!chkpass.php';

$set = $db->prepare('UPDATE `gauntlets` SET 
`ID`=?,
`level1`=?,
`level2`=?,
`level3`=?,
`level4`=?,
`level5`=?
WHERE `ID`=?');
$set->execute([$_POST['gaunid'],
$_POST['gaunlvl1'],
$_POST['gaunlvl2'],
$_POST['gaunlvl3'],
$_POST['gaunlvl4'],
$_POST['gaunlvl5'],
$_POST['gaunidold']])
?>