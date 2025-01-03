<?php include_once "db.php";

$opt_id=$_POST['opt'];
$option=$Que->find($opt_id);
$subject=$Que->find($option['main_id']);
$option['vote']++;
$subject['vote']++;
$Que->save($option);
$Que->save($subject);

to("../index.php?do=result&id={$option['main_id']}");