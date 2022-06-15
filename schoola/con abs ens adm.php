
	
	

<?php

 error_reporting(0);
{
	$nom=""; 
	$matiere="";
	$date="";
}

$con = mysqli_connect('localhost', 'root', '','schoola');


if(isset($_POST['ENVOI'])){
$id =  mysqli_real_escape_string($con,$_POST['id']);
$nom =  mysqli_real_escape_string($con,$_POST['nom']) ;

$matiere =  mysqli_real_escape_string($con,$_POST['matiere']) ;
$date = mysqli_real_escape_string($con,$_POST['date']) ;
}

$sql = "INSERT INTO `l'absence des enseignants admin`(`id`, `nom`, `matiere`, `date`) VALUES ('id','$nom','$matiere','$date');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: absence des enseignants admin.php?INSERT=success");
}
?>	