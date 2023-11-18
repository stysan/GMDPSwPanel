<?php require_once '!chkpass.php';

$set = $db->prepare("INSERT INTO `roles` (`roleID`, `priority`, `roleName`) VALUES
(?,?,?)");
$set->execute([
$_POST['roleid'],
$_POST['priority'],
$_POST['rolename']
])
?>