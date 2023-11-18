<?php require_once '!chkpass.php';

$hashpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$accid = $_POST['accid'];

$set = $db->prepare("UPDATE `accounts` SET password = ? WHERE `accounts`.`accountID` = ?");
$set->execute([$hashpass, $accid]);
$obj = $set->fetch(PDO::FETCH_OBJ);

if ($obj->userName == $_GET['username'])exit('-228');

?>