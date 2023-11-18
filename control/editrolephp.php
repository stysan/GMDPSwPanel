<?php require_once '!chkpass.php';


$_POST['isDefault'] = $_POST['isDefault'] ? '1' : '0';
$_POST['profilecommandDiscord'] = $_POST['profilecommandDiscord'] ? '1' : '0';
$_POST['actionRateDemon'] = $_POST['actionRateDemon'] ? '1' : '0';
$_POST['actionRateStars'] = $_POST['actionRateStars'] ? '1' : '0';
$_POST['actionRateDifficulty'] = $_POST['actionRateDifficulty'] ? '1' : '0';
$_POST['actionSuggestRating'] = $_POST['actionSuggestRating'] ? '1' : '0';
$_POST['actionDeleteComment'] = $_POST['actionDeleteComment'] ? '1' : '0';
$_POST['toolLeaderboardsban'] = $_POST['toolLeaderboardsban'] ? '1' : '0';
$_POST['toolPackcreate'] = $_POST['toolPackcreate'] ? '1' : '0';
$_POST['toolQuestsCreate'] = $_POST['toolQuestsCreate'] ? '1' : '0';
$_POST['toolModactions'] = $_POST['toolModactions'] ? '1' : '0';
$_POST['toolSuggestlist'] = $_POST['toolSuggestlist'] ? '1' : '0';

$_POST['commandRate'] = $_POST['commandRate'] ? '1' : '0';
$_POST['commandFeature'] = $_POST['commandFeature'] ? '1' : '0';
$_POST['commandEpic'] = $_POST['commandEpic'] ? '1' : '0';
$_POST['commandUnepic'] = $_POST['commandUnepic'] ? '1' : '0';
$_POST['commandVerifycoins'] = $_POST['commandVerifycoins'] ? '1' : '0';
$_POST['commandDaily'] = $_POST['commandDaily'] ? '1' : '0';
$_POST['commandWeekly'] = $_POST['commandWeekly'] ? '1' : '0';
$_POST['commandDelete'] = $_POST['commandDelete'] ? '1' : '0';
$_POST['commandSetacc'] = $_POST['commandSetacc'] ? '1' : '0';
$_POST['commandRenameOwn'] = $_POST['commandRenameOwn'] ? '1' : '0';
$_POST['commandRenameAll'] = $_POST['commandRenameAll'] ? '1' : '0';
$_POST['commandPassOwn'] = $_POST['commandPassOwn'] ? '1' : '0';
$_POST['commandPassAll'] = $_POST['commandPassAll'] ? '1' : '0';
$_POST['commandDescriptionOwn'] = $_POST['commandDescriptionOwn'] ? '1' : '0';
$_POST['commandDescriptionAll'] = $_POST['commandDescriptionAll'] ? '1' : '0';
$_POST['commandPublicOwn'] = $_POST['commandPublicOwn'] ? '1' : '0';
$_POST['commandPublicAll'] = $_POST['commandPublicAll'] ? '1' : '0';
$_POST['commandUnlistOwn'] = $_POST['commandUnlistOwn'] ? '1' : '0';
$_POST['commandUnlistAll'] = $_POST['commandUnlistAll'] ? '1' : '0';
$_POST['commandSharecpOwn'] = $_POST['commandSharecpOwn'] ? '1' : '0';
$_POST['commandSharecpAll'] = $_POST['commandSharecpAll'] ? '1' : '0';
$_POST['commandSongOwn'] = $_POST['commandSongOwn'] ? '1' : '0';
$_POST['commandSongAll'] = $_POST['commandSongAll'] ? '1' : '0';
$_POST['profilecommandDiscord'] = $_POST['profilecommandDiscord'] ? '1' : '0';

$set = $db->prepare("
UPDATE `roles` SET
`roleName`=?
,`priority`=?
,`modipCategory`=?
,`isDefault`=?
,`commentColor`=?
,`modBadgeLevel`=?
,`profilecommandDiscord`=?
,`actionRateDemon`=?
,`actionRateStars`=?
,`actionRateDifficulty`=?
,`actionSuggestRating`=?
,`actionDeleteComment`=?
,`toolLeaderboardsban`=?
,`toolPackcreate`=?
,`toolQuestsCreate`=?
,`toolModactions`=?
,`toolSuggestlist`=?

,`commandRate`=?
,`commandFeature`=?
,`commandEpic`=?
,`commandUnepic`=?
,`commandVerifycoins`=?
,`commandDaily`=?
,`commandWeekly`=?
,`commandDelete`=?
,`commandSetacc`=?
,`commandRenameOwn`=?
,`commandRenameAll`=?
,`commandPassOwn`=?
,`commandPassAll`=?
,`commandDescriptionOwn`=?
,`commandDescriptionAll`=?
,`commandPublicOwn`=?
,`commandPublicAll`=?
,`commandUnlistOwn`=?
,`commandUnlistAll`=?
,`commandSharecpOwn`=?
,`commandSharecpAll`=?
,`commandSongOwn`=?
,`commandSongAll`=?
,`profilecommandDiscord`=?

WHERE `roleID`=?");

$set->execute([
$_POST['roleName'],
$_POST['priority'],
$_POST['modipCategory'],
$_POST['isDefault'],
$_POST['commentColor'],
$_POST['modBadgeLevel'],
$_POST['profilecommandDiscord'],
$_POST['actionRateDemon'],
$_POST['actionRateStars'],
$_POST['actionRateDifficulty'],
$_POST['actionSuggestRating'],
$_POST['actionDeleteComment'],
$_POST['toolLeaderboardsban'],
$_POST['toolPackcreate'],
$_POST['toolQuestsCreate'],
$_POST['toolModactions'],
$_POST['toolSuggestlist'],

$_POST['commandRate'],
$_POST['commandFeature'],
$_POST['commandEpic'],
$_POST['commandUnepic'],
$_POST['commandVerifycoins'],
$_POST['commandDaily'],
$_POST['commandWeekly'],
$_POST['commandDelete'],
$_POST['commandSetacc'],
$_POST['commandRenameOwn'],
$_POST['commandRenameAll'],
$_POST['commandPassOwn'],
$_POST['commandPassAll'],
$_POST['commandDescriptionOwn'],
$_POST['commandDescriptionAll'],
$_POST['commandPublicOwn'],
$_POST['commandPublicAll'],
$_POST['commandUnlistOwn'],
$_POST['commandUnlistAll'],
$_POST['commandSharecpOwn'],
$_POST['commandSharecpAll'],
$_POST['commandSongOwn'],
$_POST['commandSongAll'],
$_POST['profilecommandDiscord'],
$_POST['roleid']
])
?>