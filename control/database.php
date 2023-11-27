<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once '!chkpass.php';

$tables = $db->query('SHOW TABLES');

?>
<div class="leftbardb">
<button onclick='location.href = "./control.php<?php echo '?username='.$_GET['username'].'&password='.$_GET['password']?>"'>Back</button>
<br><br>
<?php foreach ($tables as $table) {
    echo '<button onclick="table(\''.$table[0].'\')">'.$table[0]."</button><br>";
}?>
</div>
<script>
    
    function table(string) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'dataget.php<?php echo '?username='.$_GET['username'].'&password='.$_GET['password']?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        document.getElementById('tablez').innerHTML = '';

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                //if (xhr.responseText == '-229') {return teleport();}
                document.getElementById('tablez').insertAdjacentHTML('beforeend', xhr.responseText);
            }
        }

        xhr.send('table=' + string);
    }
    
</script>
<table id="tablez"></table>
</body>
</html>