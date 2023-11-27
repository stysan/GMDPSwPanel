<?php require_once '!chkpass.php';

$currentDirectory = $_GET['dir'];

if (strpos($_GET['dir'], '../..') == true) {
    exit('Access denied');
}

echo '<tr><th>File</th><th>Size</th></tr>';

if (is_dir($currentDirectory)) {
    $files = glob($currentDirectory . '/*');

    foreach ($files as $file) {
        if (is_dir($file)) {
            echo '<tr><td><button class="folderfile" onclick=recent("'.$file.'")>'.basename($file).'</button></td>
            <td>Folder</td></tr>';
        }
    }

    foreach ($files as $file) {
        if (!is_dir($file)) {
            echo '<tr><td><button class="filefile" onclick=opel("'.$file.'")>'.basename($file).'</button></td>
            <td>'.filesize($file).' bytes</td></tr>';
        }
    }

} else {
    echo 'Can\'t find this file or folder';
}
?>