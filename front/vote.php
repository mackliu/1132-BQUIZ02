<?php 

$subject=$Que->find($_GET['id']);
$options=$Que->all(['main_id'=>$_GET['id']]);
?>

<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
<h3><?=$subject['text'];?></h3>
<form action="./api/vote.php" method="post">
<?php 
foreach($options as $option){
    echo "<p>";
    echo "<input type='radio' name='opt' value='{$option['id']}'> ";
    echo $option['text'];
    echo "</p>";
}
?>
<div class="ct">
    <input type="submit" value="我要投票">
</div>
</form>
    

</fieldset>