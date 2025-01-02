<?php  include_once "db.php";

if(isset($_POST['ids'])){
    foreach($_POST['ids'] as $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $News->del($id);
        }else{
            $row=$News->find($id);
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            $News->save($row);
        }
    }
}