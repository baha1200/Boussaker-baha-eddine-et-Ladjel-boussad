<?php
// database connection code
error_reporting(0);
{
	$id=""; 
	$nometprenom="";
	$arabemtc1="";
	$mathematiquemtc1=""; 
	$etudeislamiquemtc1=""; 
	$reveilscientifiquemtc1=""; 
	$etudecivilemtc1=""; 
	$dessinmtc1=""; 
	$educationrythmiquemtc1=""; 
	$theatremtc1=""; 
	$musiquemtc1=""; 
	$etudesportifmtc1=""; 
	$moyennemtc1=""; 
	$trimestremtc1="";
	
}

$con = mysqli_connect('localhost', 'root', '','schoola');

//maternelle c1
if(isset($_POST['ENVOI1'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabemtc1 =  mysqli_real_escape_string($con,$_POST['arabemtc1']);
	$mathematiquemtc1 =  mysqli_real_escape_string($con,$_POST['mathematiquemtc1']);
	$etudeislamiquemtc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiquemtc1']);
	$reveilscientifiquemtc1 =  mysqli_real_escape_string($con,$_POST['reveilscientifiquemtc1']);
	$etudecivilemtc1 =  mysqli_real_escape_string($con,$_POST['etudecivilemtc1']);
	$dessinmtc1 =  mysqli_real_escape_string($con,$_POST['dessinmtc1']);
	$educationrythmiquemtc1 =  mysqli_real_escape_string($con,$_POST['educationrythmiquemtc1']);
	$theatremtc1 =  mysqli_real_escape_string($con,$_POST['theatremtc1']);
	$musiquemtc1 =  mysqli_real_escape_string($con,$_POST['musiquemtc1']);
	$etudesportifmtc1 =  mysqli_real_escape_string($con,$_POST['etudesportifmtc1']);
	$moyennemtc1 =  mysqli_real_escape_string($con,$_POST['moyennemtc1']);
	$trimestremtc1 =  mysqli_real_escape_string($con,$_POST['trimestremtc1']);
	
	
$sql = "INSERT INTO `note mt c1`(`id`, `nometprenom`, `arabemtc1`, `mathematiquemtc1`, `etudeislamiquemtc1`, `reveilscientifiquemtc1`, `etudecivilemtc1`, `dessinmtc1`, `etuderythmiquemtc1`, `theatremtc1`, `musiquemtc1`, `etudesportifmtc1`, `moyennemtc1`, `trimestremtc1`) VALUES ('0','$nometprenom','$arabemtc1','$mathematiquemtc1','$etudeislamiquemtc1','$reveilscientifiquemtc1','$etudecivilemtc1','$dessinmtc1','$educationrythmiquemtc1','$theatremtc1','$musiquemtc1','$etudesportifmtc1','$moyennemtc1','$trimestremtc1');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
}


//maternelle c2


if(isset($_POST['ENVOI2'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabemtc2 =  mysqli_real_escape_string($con,$_POST['arabemtc2']);
	$mathematiquemtc2 =  mysqli_real_escape_string($con,$_POST['mathematiquemtc2']);
	$etudeislamiquemtc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiquemtc2']);
	$reveilscientifiquemtc2 =  mysqli_real_escape_string($con,$_POST['reveilscientifiquemtc2']);
	$etudecivilemtc2 =  mysqli_real_escape_string($con,$_POST['etudecivilemtc2']);
	$dessinmtc2 =  mysqli_real_escape_string($con,$_POST['dessinmtc2']);
	$etuderythmiquemtc2 =  mysqli_real_escape_string($con,$_POST['etuderythmiquemtc2']);
	$theatremtc2 =  mysqli_real_escape_string($con,$_POST['theatremtc2']);
	$musiquemtc2 =  mysqli_real_escape_string($con,$_POST['musiquemtc2']);
	$etudesportifmtc2 =  mysqli_real_escape_string($con,$_POST['etudesportifmtc2']);
	$moyennemtc2 =  mysqli_real_escape_string($con,$_POST['moyennemtc2']);
	$trimestremtc2 =  mysqli_real_escape_string($con,$_POST['trimestremtc2']);
	
	
$sql = "INSERT INTO `note mt c2`(`id`, `nometprenom`, `arabemtc2`, `mathematiquemtc2`, `etudeislamiquemtc2`, `reveilscientifiquemtc2`, `etudecivilemtc2`, `dessinmtc2`, `etuderythmiquemtc2`, `theatremtc2`, `musiquemtc2`, `etudesportifmtc2`, `moyennemtc2`, `trimestremtc2`) VALUES ('0','$nometprenom','$arabemtc2','$mathematiquemtc2','$etudeislamiquemtc2','$reveilscientifiquemtc2','$etudecivilemtc2','$dessinmtc2','$etuderythmiquemtc2','$theatremtc2','$musiquemtc2','$etudesportifmtc2','$moyennemtc2','$trimestremtc2');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
}

  //premiere c1


if(isset($_POST['ENVOI3'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenomprc1 =  mysqli_real_escape_string($con,$_POST['nometprenomprc1']);
	$arabeprc1 =  mysqli_real_escape_string($con,$_POST['arabeprc1']);
	$mathematiqueprc1 =  mysqli_real_escape_string($con,$_POST['mathematiqueprc1']);
	$etudeislamiqueprc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiqueprc1']);
	$etudecivileprc1 =  mysqli_real_escape_string($con,$_POST['etudecivileprc1']);
	$etudescientifiqueprc1 =  mysqli_real_escape_string($con,$_POST['etudescientifiqueprc1']);
	$etudeartistiqueprc1 =  mysqli_real_escape_string($con,$_POST['etudeartistiqueprc1']);
	$etudesportifprc1 =  mysqli_real_escape_string($con,$_POST['etudesportifprc1']);
	$moyenneprc1 =  mysqli_real_escape_string($con,$_POST['moyenneprc1']);
	$trimestreprc1 =  mysqli_real_escape_string($con,$_POST['trimestreprc1']);
	
	
$sql = "INSERT INTO `note pr c1`(`id`, `nometprenom`, `arabeprc1`, `mathematiqueprc1`, `etudeislamiqueprc1`, `etudecivileprc1`, `etudescientifiqueprc1`, `etudeartistiqueprc1`, `etudesportifprc1`, `moyenneprc1`, `trimestreprc1`) VALUES ('0','$nometprenomprc1','$arabeprc1','$mathematiqueprc1','$etudeislamiqueprc1','$etudecivileprc1','$etudescientifiqueprc1','$etudeartistiqueprc1','$etudesportifprc1','$moyenneprc1','$trimestreprc1');";


 
$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

  //premiere c2


if(isset($_POST['ENVOI4'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenomprc2 =  mysqli_real_escape_string($con,$_POST['nometprenomprc2']);
	$arabeprc2 =  mysqli_real_escape_string($con,$_POST['arabeprc2']);
	$mathematiqueprc2 =  mysqli_real_escape_string($con,$_POST['mathematiqueprc2']);
	$etudeislamiqueprc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiqueprc2']);
	$etudecivileprc2 =  mysqli_real_escape_string($con,$_POST['etudecivileprc2']);
	$etudescientifiqueprc2 =  mysqli_real_escape_string($con,$_POST['etudescientifiqueprc2']);
	$etudeartistiqueprc2 =  mysqli_real_escape_string($con,$_POST['etudeartistiqueprc2']);
	$etudesportifprc2 =  mysqli_real_escape_string($con,$_POST['etudesportifprc2']);
	$moyenneprc2 =  mysqli_real_escape_string($con,$_POST['moyenneprc2']);
	$trimestreprc2 =  mysqli_real_escape_string($con,$_POST['trimestreprc2']);
	
	
$sql = "INSERT INTO `note pr c2`(`id`,`nometprenom`, `arabeprc2`, `mathematiqueprc2`, `etudeislamiqueprc2`, `etudecivileprc2`, `etudescientifiqueprc2`, `etudeartistiqueprc2`, `etudesportifprc2`, `moyenneprc2`, `trimestreprc2`) VALUES ('0','$nometprenomprc2','$arabeprc2','$mathematiqueprc2','$etudeislamiqueprc2','$etudecivileprc2','$etudescientifiqueprc2','$etudeartistiqueprc2','$etudesportifprc2','$moyenneprc2','$trimestreprc2');";


 
$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

  //deuxieme c1


if(isset($_POST['ENVOI5'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabedxc1 =  mysqli_real_escape_string($con,$_POST['arabedxc1']);
	$mathematiquedxc1 =  mysqli_real_escape_string($con,$_POST['mathematiquedxc1']);
	$etudeislamiquedxc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiquedxc1']);
	$etudeciviledxc1 =  mysqli_real_escape_string($con,$_POST['etudeciviledxc1']);
	$etudescientifiquedxc1 =  mysqli_real_escape_string($con,$_POST['etudescientifiquedxc1']);
	$etudeartistiquedxc1 =  mysqli_real_escape_string($con,$_POST['etudeartistiquedxc1']);
	$etudesportifdxc1 =  mysqli_real_escape_string($con,$_POST['etudesportifdxc1']);
	$moyennedxc1 =  mysqli_real_escape_string($con,$_POST['moyennedxc1']);
	$trimestredxc1 =  mysqli_real_escape_string($con,$_POST['trimestredxc1']);
	
	
$sql = "INSERT INTO `note dx c1`(`id`, `nometprenom`, `arabedxc1`, `mathematiquedxc1`, `etudeislamiquedxc1`, `etudeciviledxc1`, `etudescientifiquedxc1`, `etudeartistiquedxc1`, `etudesportifdxc1`, `moyennedxc1`, `trimestredxc1`) VALUES ('0','$nometprenom','$arabedxc1','$mathematiquedxc1','$etudeislamiquedxc1','$etudeciviledxc1','$etudescientifiquedxc1','$etudeartistiquedxc1','$etudesportifdxc1','$moyennedxc1','$trimestredxc1');";


 
$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//deuxieme c2


if(isset($_POST['ENVOI6'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabedxc2 =  mysqli_real_escape_string($con,$_POST['arabedxc2']);
	$mathematiquedxc2 =  mysqli_real_escape_string($con,$_POST['mathematiquedxc2']);
	$etudeislamiquedxc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiquedxc2']);
	$etudeciviledxc2 =  mysqli_real_escape_string($con,$_POST['etudeciviledxc2']);
	$etudescientifiquedxc2 =  mysqli_real_escape_string($con,$_POST['etudescientifiquedxc2']);
	$etudeartistiquedxc2 =  mysqli_real_escape_string($con,$_POST['etudeartistiquedxc2']);
	$etudesportifdxc2 =  mysqli_real_escape_string($con,$_POST['etudesportifdxc2']);
	$moyennedxc2 =  mysqli_real_escape_string($con,$_POST['moyennedxc2']);
	$trimestredxc2 =  mysqli_real_escape_string($con,$_POST['trimestredxc2']);
	
	
$sql = "INSERT INTO `note dx c2`(`id`, `nometprenom`, `arabedxc2`, `mathematiquedxc2`, `etudeislamiquedxc2`, `etudeciviledxc2`, `etudescientifiquedxc2`, `etudeartistiquedxc2`, `etudesportifdxc2`, `moyennedxc2`, `trimestredxc2`) VALUES ('0','$nometprenom','$arabedxc2','$mathematiquedxc2','$etudeislamiquedxc2','$etudeciviledxc2','$etudescientifiquedxc2','$etudeartistiquedxc2','$etudesportifdxc2','$moyennedxc2','$trimestredxc2');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//troisieme c1


if(isset($_POST['ENVOI7'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabetrc1 =  mysqli_real_escape_string($con,$_POST['arabetrc1']);
	$mathematiquetrc1 =  mysqli_real_escape_string($con,$_POST['mathematiquetrc1']);
	$etudeislamiquetrc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiquetrc1']);
	$etudeciviletrc1 =  mysqli_real_escape_string($con,$_POST['etudeciviletrc1']);
	$etudescientifiquetrc1 =  mysqli_real_escape_string($con,$_POST['etudescientifiquetrc1']);
$historiqueetgeographiquetrc1 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiquetrc1']);
	$francaistrc1 =  mysqli_real_escape_string($con,$_POST['francaistrc1']);
	$etudeartistiquetrc1 =  mysqli_real_escape_string($con,$_POST['etudeartistiquetrc1']);
	$etudesportiftrc1 =  mysqli_real_escape_string($con,$_POST['etudesportiftrc1']);
	$moyennetrc1 =  mysqli_real_escape_string($con,$_POST['moyennetrc1']);
	$trimestretrc1 =  mysqli_real_escape_string($con,$_POST['trimestretrc1']);
	
	
$sql = "INSERT INTO `note tr c1`(`id`, `nometprenom`, `arabetrc1`, `mathematiquetrc1`, `etudeislamiquetrc1`, `etudeciviletrc1`, `etudescientifiquetrc1`, `historiqueetgeographiquetrc1`, `francaistrc1`, `etudeartistiquetrc1`, `etudesportiftrc1`, `moyennetrc1`, `trimestretrc1`) VALUES ('0','$nometprenom','$arabetrc1','$mathematiquetrc1','$etudeislamiquetrc1','$etudeciviletrc1','$etudescientifiquetrc1','$historiqueetgeographiquetrc1','$francaistrc1','$etudeartistiquetrc1','$etudesportiftrc1','$moyennetrc1','$trimestretrc1');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//troisieme c2


if(isset($_POST['ENVOI8'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabetrc2 =  mysqli_real_escape_string($con,$_POST['arabetrc2']);
	$mathematiquetrc2 =  mysqli_real_escape_string($con,$_POST['mathematiquetrc2']);
	$etudeislamiquetrc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiquetrc2']);
	$etudeciviletrc2 =  mysqli_real_escape_string($con,$_POST['etudeciviletrc2']);
	$etudescientifiquetrc2 =  mysqli_real_escape_string($con,$_POST['etudescientifiquetrc2']);
$historiqueetgeographiquetrc2 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiquetrc2']);
	$francaistrc2 =  mysqli_real_escape_string($con,$_POST['francaistrc2']);
	$etudeartistiquetrc2 =  mysqli_real_escape_string($con,$_POST['etudeartistiquetrc2']);
	$etudesportiftrc2 =  mysqli_real_escape_string($con,$_POST['etudesportiftrc2']);
	$moyennetrc2 =  mysqli_real_escape_string($con,$_POST['moyennetrc2']);
	$trimestretrc2 =  mysqli_real_escape_string($con,$_POST['trimestretrc2']);
	
	
$sql = "INSERT INTO `note tr c2`(`id`, `nometprenom`, `arabetrc2`, `mathematiquetrc2`, `etudeislamiquetrc2`, `etudeciviletrc2`, `etudescientifiquetrc2`, `historiqueetgeographiquetrc2`, `francaistrc2`, `etudeartistiquetrc2`, `etudesportiftrc2`, `moyennetrc2`, `trimestretrc2`) VALUES ('0','$nometprenom','$arabetrc2','$mathematiquetrc2','$etudeislamiquetrc2','$etudeciviletrc2','$etudescientifiquetrc2','$historiqueetgeographiquetrc2','$francaistrc2','$etudeartistiquetrc2','$etudesportiftrc2','$moyennetrc2','$trimestretrc2');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//quatriem c1


if(isset($_POST['ENVOI9'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabeqtc1 =  mysqli_real_escape_string($con,$_POST['arabeqtc1']);
	$mathematiqueqtc1 =  mysqli_real_escape_string($con,$_POST['mathematiqueqtc1']);
	$etudeislamiqueqtc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiqueqtc1']);
	$etudecivileqtc1 =  mysqli_real_escape_string($con,$_POST['etudecivileqtc1']);
	$etudescientifiqueqtc1 =  mysqli_real_escape_string($con,$_POST['etudescientifiqueqtc1']);
$historiqueetgeographiqueqtc1 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiqueqtc1']);
	$francaisqtc1 =  mysqli_real_escape_string($con,$_POST['francaisqtc1']);
	$etudeartistiqueqtc1 =  mysqli_real_escape_string($con,$_POST['etudeartistiqueqtc1']);
	$etudesportifqtc1 =  mysqli_real_escape_string($con,$_POST['etudesportifqtc1']);
	$moyenneqtc1 =  mysqli_real_escape_string($con,$_POST['moyenneqtc1']);
	$trimestreqtc1 =  mysqli_real_escape_string($con,$_POST['trimestreqtc1']);
	
	
$sql = "INSERT INTO `note qt c1`(`id`, `nometprenom`, `arabeqtc1`, `mathematiqueqtc1`, `etudeislamiqueqtc1`, `etudecivileqtc1`, `etudescientifiqueqtc1`, `historiqueetgeographiqueqtc1`, `francaisqtc1`, `etudeartistiqueqtc1`, `etudesportifqtc1`, `moyenneqtc1`, `trimestreqtc1`) VALUES ('0','$nometprenom','$arabeqtc1','$mathematiqueqtc1','$etudeislamiqueqtc1','$etudecivileqtc1','$etudescientifiqueqtc1','$historiqueetgeographiqueqtc1','$francaisqtc1','$etudeartistiqueqtc1','$etudesportifqtc1','$moyenneqtc1','$trimestreqtc1');";


 
$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//quatriem c2


if(isset($_POST['ENVOI10'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabeqtc2 =  mysqli_real_escape_string($con,$_POST['arabeqtc2']);
	$mathematiqueqtc2 =  mysqli_real_escape_string($con,$_POST['mathematiqueqtc2']);
	$etudeislamiqueqtc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiqueqtc2']);
	$etudecivileqtc2 =  mysqli_real_escape_string($con,$_POST['etudecivileqtc2']);
	$etudescientifiqueqtc2 =  mysqli_real_escape_string($con,$_POST['etudescientifiqueqtc2']);
$historiqueetgeographiqueqtc2 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiqueqtc2']);
	$francaisqtc2 =  mysqli_real_escape_string($con,$_POST['francaisqtc2']);
	$etudeartistiqueqtc2 =  mysqli_real_escape_string($con,$_POST['etudeartistiqueqtc2']);
	$etudesportifqtc2 =  mysqli_real_escape_string($con,$_POST['etudesportifqtc2']);
	$moyenneqtc2 =  mysqli_real_escape_string($con,$_POST['moyenneqtc2']);
	$trimestreqtc2 =  mysqli_real_escape_string($con,$_POST['trimestreqtc2']);
	
	
$sql = "INSERT INTO `note qt c2`(`id`, `nometprenom`, `arabeqtc2`, `mathematiqueqtc2`, `etudeislamiqueqtc2`, `etudecivileqtc2`, `etudescientifiqueqtc2`, `historiqueetgeographiqueqtc2`, `francaisqtc2`, `etudeartistiqueqtc2`, `etudesportifqtc2`, `moyenneqtc2`, `trimestreqtc2`) VALUES ('0','$nometprenom','$arabeqtc2','$mathematiqueqtc2','$etudeislamiqueqtc2','$etudecivileqtc2','$etudescientifiqueqtc2','$historiqueetgeographiqueqtc2','$francaisqtc2','$etudeartistiqueqtc2','$etudesportifqtc2','$moyenneqtc2','$trimestreqtc2');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//cinqieme c1


if(isset($_POST['ENVOI11'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabecqc1 =  mysqli_real_escape_string($con,$_POST['arabecqc1']);
	$mathematiquecqc1 =  mysqli_real_escape_string($con,$_POST['mathematiquecqc1']);
	$etudeislamiquecqc1 =  mysqli_real_escape_string($con,$_POST['etudeislamiquecqc1']);
	$etudecivilecqc1 =  mysqli_real_escape_string($con,$_POST['etudecivilecqc1']);
	$etudescientifiquecqc1 =  mysqli_real_escape_string($con,$_POST['etudescientifiquecqc1']);
$historiqueetgeographiquecqc1 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiquecqc1']);
	$francaiscqc1 =  mysqli_real_escape_string($con,$_POST['francaiscqc1']);
	$etudeartistiquecqc1 =  mysqli_real_escape_string($con,$_POST['etudeartistiquecqc1']);
	$etudesportifcqc1 =  mysqli_real_escape_string($con,$_POST['etudesportifcqc1']);
	$moyennecqc1 =  mysqli_real_escape_string($con,$_POST['moyennecqc1']);
	$trimestrecqc1 =  mysqli_real_escape_string($con,$_POST['trimestrecqc1']);
	
	
$sql = "INSERT INTO `note cq c1`(`id`, `nometprenom`, `arabecqc1`, `mathematiquecqc1`, `etudeislamiquecqc1`, `etudecivilecqc1`, `etudescientifiquecqc1`, `historiqueetgeographiquecqc1`, `francaiscqc1`, `etudeartistiquecqc1`, `etudesportifcqc1`, `moyennecqc1`, `trimestrecqc1`) VALUES ('0','$nometprenom','$arabecqc1','$mathematiquecqc1','$etudeislamiquecqc1','$etudecivilecqc1','$etudescientifiquecqc1','$historiqueetgeographiquecqc1','$francaiscqc1','$etudeartistiquecqc1','$etudesportifcqc1','$moyennecqc1','$trimestrecqc1');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

//cinqieme c2


if(isset($_POST['ENVOI12'])){
	$id =  mysqli_real_escape_string($con,$_POST['id']);
    $nometprenom =  mysqli_real_escape_string($con,$_POST['nometprenom']);
	$arabecqc2 =  mysqli_real_escape_string($con,$_POST['arabecqc2']);
	$mathematiquecqc2 =  mysqli_real_escape_string($con,$_POST['mathematiquecqc2']);
	$etudeislamiquecqc2 =  mysqli_real_escape_string($con,$_POST['etudeislamiquecqc2']);
	$etudecivilecqc2 =  mysqli_real_escape_string($con,$_POST['etudecivilecqc2']);
	$etudescientifiquecqc2 =  mysqli_real_escape_string($con,$_POST['etudescientifiquecqc2']);
$historiqueetgeographiquecqc2 =  mysqli_real_escape_string($con,$_POST['historiqueetgeographiquecqc2']);
	$francaiscqc2 =  mysqli_real_escape_string($con,$_POST['francaiscqc2']);
	$etudeartistiquecqc2 =  mysqli_real_escape_string($con,$_POST['etudeartistiquecqc2']);
	$etudesportifcqc2 =  mysqli_real_escape_string($con,$_POST['etudesportifcqc2']);
	$moyennecqc2 =  mysqli_real_escape_string($con,$_POST['moyennecqc2']);
	$trimestrecqc2 =  mysqli_real_escape_string($con,$_POST['trimestrecqc2']);
	
	
$sql = "INSERT INTO `note cq c2`(`id`, `nometprenom`, `arabecqc2`, `mathematiquecqc2`, `etudeislamiquecqc2`, `etudecivilecqc2`, `etudescientifiquecqc2`, `historiqueetgeographiquecqc2`, `francaiscqc2`, `etudeartistiquecqc2`, `etudesportifcqc2`, `moyennecqc2`, `trimestrecqc2`) VALUES ('0','$nometprenom','$arabecqc2','$mathematiquecqc2','$etudeislamiquecqc2','$etudecivilecqc2','$etudescientifiquecqc2','$historiqueetgeographiquecqc2','$francaiscqc2','$etudeartistiquecqc2','$etudesportifcqc2','$moyennecqc2','$trimestrecqc2');";



$rt = mysqli_query($con, $sql);

if($rt)
{
	header("Location: les notes des eléves adm .php?INSERT=success");
}
	
}

?>