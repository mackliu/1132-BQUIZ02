<?php include_once "db.php";


unset($_POST['pw2']);
echo $User->save($_POST);

?>