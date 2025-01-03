<?php include_once "db.php";
$id=$_POST['id'];
$row=$News->find($id);
echo "<h3>{$row['title']}</h3>";
echo nl2br($row['news']);


