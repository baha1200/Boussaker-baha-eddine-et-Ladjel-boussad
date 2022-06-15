<?php

 error_reporting(0);
{
	$id=""; 
	$matieremt=""; 
	$commentairemt=""; 
	$fichiermt=""; 
}

$con = mysqli_connect('localhost', 'root', '','schoola');


if(isset($_POST['ENVOI1'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matieremt =  mysqli_real_escape_string($con,$_POST['matieremt']);
	$commentairemt =  mysqli_real_escape_string($con,$_POST['commentairemt']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `maternelle`(`id`, `matieremt`, `commentairemt`, `fichier`) VALUES ('0','$matieremt','$commentairemt','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}


 $rt = mysqli_query($con, $sql);


}}
if(isset($_POST['ENVOI2'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matierepr =  mysqli_real_escape_string($con,$_POST['matierepr']);
	$commentairepr =  mysqli_real_escape_string($con,$_POST['commentairepr']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `premiere`(`id`, `matierepr`, `commentairepr`, `fichier`) VALUES ('0','$matierepr','$commentairepr','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}


 $rt = mysqli_query($con, $sql);


}}
if(isset($_POST['ENVOI3'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matieredx =  mysqli_real_escape_string($con,$_POST['matieredx']);
	$commentairedx =  mysqli_real_escape_string($con,$_POST['commentairedx']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `deuxieme`(`id`, `matieredx`, `commentairedx`, `fichier`) VALUES ('0','$matieredx','$commentairedx','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}


 $rt = mysqli_query($con, $sql);


}}

if(isset($_POST['ENVOI4'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matieretr =  mysqli_real_escape_string($con,$_POST['matieretr']);
	$commentairetr =  mysqli_real_escape_string($con,$_POST['commentairetr']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `troisieme`(`id`, `matieretr`, `commentairetr`, `fichier`) VALUES ('0','$matieretr','$commentairetr','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}


 $rt = mysqli_query($con, $sql);


}}

if(isset($_POST['ENVOI5'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matiereqt =  mysqli_real_escape_string($con,$_POST['matiereqt']);
	$commentaireqt =  mysqli_real_escape_string($con,$_POST['commentaireqt']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `quatrieme`(`id`, `matiereqt`, `commentaireqt`, `fichier`) VALUES ('0','$matiereqt','$commentaireqt','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}


 $rt = mysqli_query($con, $sql);


}}

if(isset($_POST['ENVOI6'])){
	
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $matierecq =  mysqli_real_escape_string($con,$_POST['matierecq']);
	$commentairecq =  mysqli_real_escape_string($con,$_POST['commentairecq']);
	$fichier =  mysqli_real_escape_string($con,$_POST['fichier']);
	
	$fileext = explode('.',$_FILES['fichier']['name']);
	$fileactualext = strtolower(end($fileext));
	$allowed = array('png');
	header("Location: accueil.php?upload=errortype");
	$Target ="FFF/".basename($_FILES['fichier']['name']);
	echo $Target;
	
	



if(!empty($Target)){
$sql = "INSERT INTO `cinqieme`(`id`, `matierecq`, `commentairecq`, `fichier`) VALUES ('0','$matierecq','$commentairecq','$Target');";


		
if(move_uploaded_file($_FILES['fichier']['tmp_name'],$Target)){
			header("Location: enseignements ens.php?upload=success");
			
		}
		else{
		    header("Location: con enseignement ens.php?upload=error");
		}

 
 $rt = mysqli_query($con, $sql);


}}


?>