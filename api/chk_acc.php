<?php include_once "db.php";

//$acc=$_GET['acc'];

//echo $res=$User->count(['acc'=>$acc]);

echo $User->count($_GET);


/* 
if($res>0){
    echo 1;
}else{
    echo 0;
} */



?>