<?php require_once '!chkpass.php';

$stmp = $db->prepare('SELECT * FROM `gauntlets` WHERE `ID` = ?');
$stmp->execute([$_POST['gaunid']]);
$obj = $stmp->fetch(PDO::FETCH_OBJ);

echo '["'.
$obj->ID.'","'.
$obj->level1.'","'.
$obj->level2.'","'.
$obj->level3.'","'.
$obj->level4.'","'.
$obj->level5.'"]';

?>