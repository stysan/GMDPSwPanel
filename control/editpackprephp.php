<?php require_once '!chkpass.php';

$stmp = $db->prepare('SELECT * FROM `mappacks` WHERE `ID` = ?');
$stmp->execute([$_POST['packid']]);
$obj = $stmp->fetch(PDO::FETCH_OBJ);

$numbers = explode(",", $obj->levels);
$result = array_map(function($number) {
    return '"' . $number . '"';
}, $numbers);
$lvls = implode(",", $result);

echo '["'.
$obj->name.'",'.
$lvls.',"'.


$obj->stars.'","'.
$obj->coins.'","'.
$obj->difficulty.'","'.
$obj->rgbcolors.'","'.
$obj->colors2.'"]';

?>