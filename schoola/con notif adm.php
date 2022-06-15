<?php
// database connection code
 error_reporting(0);
{
	$file=""; 
	
}

$con = mysqli_connect('localhost', 'root', '','schoola');


if(isset($_POST['ENVOI'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
$notification =  mysqli_real_escape_string($con,$_POST['file']);

}

$sql = "INSERT INTO `les notifications adm`(`id`, `notification`) VALUES ('0','$notification');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notifications admin.php?INSERT=success");
}

?>