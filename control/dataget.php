<?php require_once '!chkpass.php';

$tables = $db->query('SELECT * FROM '.$_POST['table']);

$columnNames = [];

for ($i = 0; $i < $tables->columnCount(); $i++) {
    $columnMeta = $tables->getColumnMeta($i);
    $columnNames[] = $columnMeta['name'];
}
echo '<tr>';
foreach ($columnNames as $columnName) {
    echo '<th>';
    echo $columnName;
    echo '</th>';
}
echo '</tr>';
foreach ($tables as $table) {
    echo '<tr>';
    foreach ($columnNames as $columnName) {
        echo '<td>';
        echo $table[$columnName];
        echo '</td>';
    }
    echo '</tr>';
}
?>