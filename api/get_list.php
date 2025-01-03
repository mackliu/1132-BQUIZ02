<?php include_once "db.php";
$type=$_POST['type'];
$rows=$News->all(['type'=>$type]);

foreach($rows as $row){
    echo "<a href='' class='list-item'>{$row['title']}</a>";
}