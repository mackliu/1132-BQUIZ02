<?php include_once "db.php";

$id=$_POST['id'];
$user=$_SESSION['user'];

$chk=$Log->count(['news'=>$id,'user'=>$user]);

if($chk>0){
    $Log->del(['news'=>$id,'user'=>$user]);
}else{
    $Log->save(['news'=>$id,'user'=>$user]);

}