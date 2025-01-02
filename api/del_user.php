<?php include_once "db.php";

foreach($_POST['ids'] as $id){
    $User->del($id);
}