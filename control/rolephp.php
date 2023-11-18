<?php require_once '!chkpass.php';

$set = $db->prepare("INSERT INTO `roleassign` (`assignID`, `roleID`, `accountID`) VALUES
(?,?,?)");
$set->execute([
$_POST['assid'],
$_POST['roleid'],
$_POST['accid']
])
?>