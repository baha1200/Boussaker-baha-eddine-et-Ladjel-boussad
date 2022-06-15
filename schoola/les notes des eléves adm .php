<?php
include_once('lgr.php');
include_once 'con gr.php';
if (isset($_GET['arabemtc1'])){
	$arabemtc1=$_GET['arabemtc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note mt c1` WHERE `arabemtc1`='$arabemtc1' ;");}
if (isset($_GET['arabemtc2'])){
	$arabemtc2=$_GET['arabemtc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note mt c2` WHERE `arabemtc2`='$arabemtc2' ;");}
if (isset($_GET['arabeprc1'])){
	$arabeprc1=$_GET['arabeprc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note pr c1` WHERE `arabeprc1`='$arabeprc1' ;");}
if (isset($_GET['arabeprc2'])){
	$arabeprc2=$_GET['arabeprc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note pr c2` WHERE `arabeprc2`='$arabeprc2' ;");}
if (isset($_GET['arabedxc1'])){
	$arabedxc1=$_GET['arabedxc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note dx c1` WHERE `arabedxc1`='$arabedxc1' ;");}
if (isset($_GET['arabedxc2'])){
	$arabedxc2=$_GET['arabedxc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note dx c2` WHERE `arabedxc2`='$arabedxc2' ;");}
if (isset($_GET['arabetrc1'])){
	$arabetrc1=$_GET['arabetrc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note tr c1` WHERE `arabetrc1`='$arabetrc1' ;");}
if (isset($_GET['arabetrc2'])){
	$arabetrc2=$_GET['arabetrc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note tr c2` WHERE `arabetrc2`='$arabetrc2' ;");}
if (isset($_GET['arabeqtc1'])){
	$arabeqtc1=$_GET['arabeqtc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note qt c1` WHERE `arabeqtc1`='$arabeqtc1' ;");}
if (isset($_GET['arabeqtc2'])){
	$arabeqtc2=$_GET['arabeqtc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note qt c2` WHERE `arabeqtc2`='$arabeqtc2' ;");}
if (isset($_GET['arabecqc1'])){
	$arabecqc1=$_GET['arabecqc1'];
	$delete=mysqli_query($conn,"DELETE FROM `note cq c1` WHERE `arabecqc1`='$arabecqc1' ;");}
if (isset($_GET['arabecqc2'])){
	$arabecqc2=$_GET['arabecqc2'];
	$delete=mysqli_query($conn,"DELETE FROM `note cq c2` WHERE `arabecqc2`='$arabecqc2' ;");}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>les notes des eléves admin</title>
	
	<style>
	table{border-collapse: collapse;height: 2cm;   margin-top: 10px; text-align: center;table-layout: fixed; word-wrap: break-word;}
	    .bbolck_head{
        height: 45px;
        text-align: center;
        background: #012531;
        color: #FFFFFF;
        border: #000000 solid 1px;
        font-size: 23px;
        table-layout: fixed; word-wrap: break-word;
    }
		table td input{
			width: 91%;
			border-radius: 10px;
			
		}
    .bbolck_body p {
        text-align: justify;
        
       padding-left: 500px;
        font-size: 16px;
        direction: rtl;
        color: #012531;
    }
    .cc {
        width: 1300px;
        border: #012531 solid 1px;
        float: right;
        margin-right: 22px;
        background: #6a9497;
    }
		.btn{background: red;  }
	.btn:hover{background: darkred; color: #FFF;}
		
</style>
	<script>
	function preventBack() { window.history.forward(); }
	setTimeout("preventBack()", 0);
	window.onunload = function () { null };

</script>
</head>
<body>
	<div style="height: 1cm;"><a href="administration0.php"> <img src="photos/retr.png" style="height: 3cm; width: 3cm;"></a> </div>
    <div class="top_head">
        <div id="logo"><a href="accueil.php"><img src="photos/logo sp.png" width="150" height="150" /></a></div>
        <div id="name_school">
            <strong>
               <?php echo $lang['wiz1']; ?><br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <?php echo $lang['wiz2']; ?>
            </strong>
        </div>
    </div>
    <div class="nev">
        <ul>
				<li><a href="administration login.php"><?php echo $lang['dec']; ?></a></li>
            <li><a href="les notes des eléves adm .php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="les notes des eléves adm .php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
            <li><a href="contact.php"><?php echo $lang['cont']; ?></a></li>
            <li><a href="Présentation de l'école.php"><?php echo $lang['pres']; ?></a></li>
            <li><a href="enseignements.php"><?php echo $lang['ens']; ?></a></li>
            <li><a href="accueil.php"><?php echo $lang['acc']; ?></a></li>
        </ul>
        <form>
           
            <input type="search" style="border-radius: 20px;" id="search"  value="" onchange="ouvrirpage()">
  <input type="submit" style="background: #FFED00;border-radius: 20px;" value="<?php echo $lang['rec']; ?>" onclick="ouvrirpage()">
            <script > 
            
                function ouvrirpage(){
                                    
                                    var a = document.getElementById("search").value;
                                    
                                     if(a ==="accueil"){
                                        window.open("accueil.php","_self");
                                    }
					                if(a ==="enseignements"){
                                        window.open("enseignements.php","_self");
                                    }
					                if(a ==="contact"){
                                        window.open("contact.php","_self");
                                    }
					                if(a ==="espace enseignants"){
                                        window.open("espace enseignants.php","_self");
                                    }
					                if(a ==="espace parent d'eléve"){
                                        window.open("espace parent d'eléve.php","_self");
                                    }
					                if(a ==="espace administration"){
                                        window.open("administration0.php","_self");
                                    }
                
                                }
                            </script>
             </form>
    </div>
      <div class="news"><marquee><?php echo $lang['pre']; ?></marquee></div>

      <div class="cc">
      
            <div class="bbolck_head"><?php echo $lang['notel']; ?></div>
            <div class="bbolck_body"></div>
            <p>
                
                <div class="programe">
                  <div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;border: 2px solid #042c39;text-align: center;"><?php echo $lang['ii']; ?></p>
                      <ol> 
						 
                      <p style="font-size: 30px; text-align: center;"><?php echo $lang['clas1']; ?></p>
						  
						   
					     <form method="post" action="con notes elév adm.php" id="contactForm">
      <table border="2" cellpadding="0"  id="table" name="tb" style="background:#012531;width: 100%; " >
									 
		            <tr >
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th style=><button name="ENVOI1" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button> </th>
						
			       </tr>
					<tr>
<td><input type="text" pattern="[a-zA-Z- ]+"  name="nometprenom"  required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabemtc1" id="d1" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquemtc1" id="d2" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquemtc1" id="d3" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="reveilscientifiquemtc1" id="d4" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivilemtc1" id="d5" required/></td>
<td><input step="0.01"  type="number" max="10" min="0" name="moyennemtc1" id="result"  required/>
						<button onClick="calca();">=</button>
						</td>
       <td><input  type="number" min="1" max="3" name="trimestremtc1"   required/></td>
						
						
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
						<script>
							
		       function calca(){
				   var d1 = document.getElementById('d1').value;
				   var d2 = document.getElementById('d2').value;
				    var d3 = document.getElementById('d3').value;
				    var d4 = document.getElementById('d4').value;
				    var d5 = document.getElementById('d5').value;
				   
				    var a= ((parseFloat(d1)+parseFloat(d2)+parseFloat(d3)+parseFloat(d4)+parseFloat(d5))/5).toFixed(2);
				   
				 var result = document.getElementById('result').value = a;
				  
			   }
		                </script>			  
			       </table>
                                                                 
						  </form>
						  <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
						  
						  		<table border="2" cellpadding="0" style="background: #FFF; width: 100%;" >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note mt c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
						
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabemtc1']."</td>
				   <td>".$data['mathematiquemtc1']."</td>
				   <td>".$data['etudeislamiquemtc1']."</td>
				   <td>".$data['reveilscientifiquemtc1']."</td>
				   <td>".$data['etudecivilemtc1']."</td>
				   <td>".$data['moyennemtc1']."</td>
				   <td>".$data['trimestremtc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabemtc1=".$data['arabemtc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
				   
			        </tr>
			  " ;
		  }
									
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>
					<td></td>
							   
					</tr>		   
					
					</table>
	<hr>
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
						  <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
                         
							            <table border="2" cellpadding="0" style="background:#012531; width: 100%;" >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI2" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			       <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="arabemtc2" id="d11" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="mathematiquemtc2" id="d12" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="etudeislamiquemtc2" id="d13" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="reveilscientifiquemtc2" id="d14" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="etudecivilemtc2" id="d15" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennemtc2" id="result2" required/>
						<button onClick="calcb();">=</button>
						</td>
<td><input  type="number" min="1" max="3" name="trimestremtc2" required/></td>
<td> <input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
												<script>
							
		       function calcb(){
				   var d11 = document.getElementById('d11').value;
				   var d12 = document.getElementById('d12').value;
				    var d13 = document.getElementById('d13').value;
				    var d14 = document.getElementById('d14').value;
				    var d15 = document.getElementById('d15').value;
				    var a= ((parseFloat(d11)+parseFloat(d12)+parseFloat(d13)+parseFloat(d14)+parseFloat(d15))/5).toFixed(2);
				   
				 var result2 = document.getElementById('result2').value = a;
				  
			   }
		                </script>
			       </table>
							  </form>
						  <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note mt c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
						
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabemtc2']."</td>
				   <td>".$data['mathematiquemtc2']."</td>
				   <td>".$data['etudeislamiquemtc2']."</td>
				   <td>".$data['reveilscientifiquemtc2']."</td>
				   <td>".$data['etudecivilemtc2']."</td>
				   <td>".$data['moyennemtc2']."</td>
				   <td>".$data['trimestremtc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabemtc2=".$data['arabemtc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>
							   
					</tr>		   
					
					</table>
	<hr>	  	  	  
                   	  
						  
						  
                     </ol> 
                    </li></div><br>
					<hr style="height: 0.5cm;background: #012531;">
                    <div class="ens"><li >  <p style=" border-radius: 8px ;font-size: 30px;border: 2px solid #012531;text-align: center;"><?php echo $lang['jj']; ?></p>
                      <ol> 
						 
                      <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas1']; ?></p>
						  
	 <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							
							   <table border="2" cellpadding="0" style="background:#012531;width: 100%; " >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI3" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			       <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenomprc1" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabeprc1" id="d21" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiqueprc1" id="d22" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiqueprc1" id="d23" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivileprc1" id="d24" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiqueprc1" id="d25" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyenneprc1" id="result3" required/>
						<button onClick="calcc();">=</button>
						</td>
					<td><input type="number" min="1" max="3" name="trimestreprc1"  required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
								   <script>
							
		       function calcc(){
				   var d21 = document.getElementById('d21').value;
				   var d22 = document.getElementById('d22').value;
				    var d23 = document.getElementById('d23').value;
				    var d24 = document.getElementById('d24').value;
				    var d25 = document.getElementById('d25').value;
				   
				    
				    var a= ((parseFloat(d21)+parseFloat(d22)+parseFloat(d23)+parseFloat(d24)+parseFloat(d25))/5).toFixed(2);
				   
				 var result3 = document.getElementById('result3').value = a;
				  
			   }
		                </script>
			       </table>
						  </form>
						  <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note pr c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabeprc1']."</td>
				   <td>".$data['mathematiqueprc1']."</td>
				   <td>".$data['etudeislamiqueprc1']."</td>
				   <td>".$data['etudecivileprc1']."</td>
				   <td>".$data['etudescientifiqueprc1']."</td>
				   <td>".$data['moyenneprc1']."</td>
				   <td>".$data['trimestreprc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabeprc1=".$data['arabeprc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
						
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
							   
					</tr>		   
					
					</table>
	<hr>	  	  	  
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
						  <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
							   <table border="2" cellpadding="0" style="background:#012531;width: 100%; " >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI4" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
		 <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenomprc2"  required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="arabeprc2" id="d28" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="mathematiqueprc2" id="d29" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="etudeislamiqueprc2" id="d30" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="etudecivileprc2" id="d31" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="etudescientifiqueprc2" id="d32" required/></td>
<td><input step="0.01" type="number" max="10" min="0"  name="moyenneprc2" id="result4" required/>
						<button onClick="calcd();">=</button>
						</td>
	<td><input type="number" min="1" max="3" name="trimestreprc2" required/></td>
	<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
								   <script>
							
		       function calcd(){
				   var d28 = document.getElementById('d28').value;
				   var d29 = document.getElementById('d29').value;
				    var d30 = document.getElementById('d30').value;
				    var d31 = document.getElementById('d31').value;
				    var d32 = document.getElementById('d32').value;
			
				   
				   
				    var a= ((parseFloat(d28)+parseFloat(d29)+parseFloat(d30)+parseFloat(d31)+parseFloat(d32))/5).toFixed(2);
				   
				 var result4 = document.getElementById('result4').value = a;
				  
			   }
		                </script>
			       </table>
                         
							  </form>
						  <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note pr c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }

		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabeprc2']."</td>
				   <td>".$data['mathematiqueprc2']."</td>
				   <td>".$data['etudeislamiqueprc2']."</td>
				   <td>".$data['etudecivileprc2']."</td>
				   <td>".$data['etudescientifiqueprc2']."</td>
				   <td>".$data['moyenneprc2']."</td>
				   <td>".$data['trimestreprc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabeprc2=".$data['arabeprc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
							   
					</tr>		   
					
					</table>
	<hr>	  	  
						  
						  
                     </ol> 
                    </li></div><br>
					<hr style="height: 0.5cm;background: #012531;">
                    <div class="ens"><li >  <p style="border-radius: 8px ;font-size: 30px;border: 2px solid #012531;text-align: center;"><?php echo $lang['kk']; ?></p>
                       <ol> 
						 
                      <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas1']; ?></p>
						  
	 <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
			 <table border="2" cellpadding="0" style="background:#012531;width: 100%; ">
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI5" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
      <td><input  pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabedxc1" id="d36" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquedxc1" id="d37" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquedxc1" id="d38" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeciviledxc1" id="d39" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquedxc1" id="d40" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennedxc1" id="result5" required/>
						<button onClick="calce();">=</button>
						</td>
					<td><input type="number" max="3" min="1" name="trimestredxc1" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
				 <script>
							
		       function calce(){
				    var d36 = document.getElementById('d36').value;
				    var d37 = document.getElementById('d37').value;
				    var d38 = document.getElementById('d38').value;
				    var d39 = document.getElementById('d39').value;
				    var d40 = document.getElementById('d40').value;
				    
				    var a= ((parseFloat(d36)+parseFloat(d37)+parseFloat(d38)+parseFloat(d39)+parseFloat(d40))/5).toFixed(2);
				   
				 var result5 = document.getElementById('result5').value = a;
				  
			   }
		                </script>
			       </table>
							
						  </form>
						   <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
				<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note dx c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabedxc1']."</td>
				   <td>".$data['mathematiquedxc1']."</td>
				   <td>".$data['etudeislamiquedxc1']."</td>
				   <td>".$data['etudeciviledxc1']."</td>
				   <td>".$data['etudescientifiquedxc1']."</td>
				   <td>".$data['moyennedxc1']."</td>
				   <td>".$data['trimestredxc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabedxc1=".$data['arabedxc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
							   
					</tr>		   
					
					</table>
	<hr>	  
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
	 <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
				<table border="2" cellpadding="0" style="background:#012531;width: 100%; " >
		            <tr>
			        <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI6" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			       <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number"  max="10" min="0" name="arabedxc2" id="d44" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquedxc2" id="d45" required/></td>
<td><input step="0.01" type="number"  max="10" min="0" name="etudeislamiquedxc2" id="d46" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeciviledxc2" id="d47" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquedxc2" id="d48" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennedxc2" id="result6" required/>
						<button onClick="calcf();">=</button>
						</td>
					<td><input type="number" max="3" min="1" name="trimestredxc2" required/></td>
	<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
					 <script>
							
		       function calcf(){
				    var d44 = document.getElementById('d44').value;
				    var d45 = document.getElementById('d45').value;
				    var d46 = document.getElementById('d46').value;
				    var d47 = document.getElementById('d47').value;
				    var d48 = document.getElementById('d48').value;
				  
				    var a= ((parseFloat(d44)+parseFloat(d45)+parseFloat(d46)+parseFloat(d47)+parseFloat(d48))/5).toFixed(2);
				   
				 var result6 = document.getElementById('result6').value = a;
				  
			   }
		                </script>
			       </table>
							  </form>
						<p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>   
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					 <th><?php echo $lang['noepr']; ?></th>
				   <th><?php echo $lang['arab']; ?></th>
				   <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note dx c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabedxc2']."</td>
				   <td>".$data['mathematiquedxc2']."</td>
				   <td>".$data['etudeislamiquedxc2']."</td>
				   <td>".$data['etudeciviledxc2']."</td>
				   <td>".$data['etudescientifiquedxc2']."</td>
				   <td>".$data['moyennedxc2']."</td>
				   <td>".$data['trimestredxc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabedxc2=".$data['arabedxc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
							   
					</tr>		   
					
					</table>
	<hr>		   			   
						   
                     </ol> 
                    </li></div><br>
                     <hr style="height: 0.5cm;background: #012531;">
                      <li> <div class="ens"><li >  <p style="border-radius: 8px ;font-size: 30px;border: 2px solid #012531;text-align: center;"><?php echo $lang['LL']; ?></p>
                           <ol> 
						 
                      <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas1']; ?></p>
						  
						  <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
							   <table border="2" cellpadding="0" style="background:#012531; width: 100%;" >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th style="color: #FFF;"><button name="ENVOI7" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button> </th>
			       </tr>
					<tr>
			       <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabetrc1" id="d52" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquetrc1" id="d53" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquetrc1" id="d54" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeciviletrc1" id="d55" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquetrc1" id="d56" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiquetrc1" id="d57" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaistrc1" id="d58" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennetrc1" id="result7" required/>
						<button onClick="calcz();">=</button>
						</td>
					<td><input type="number" max="3" min="1" name="trimestretrc1" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
								   	 <script>
							
		       function calcz(){
				    var d52 = document.getElementById('d52').value;
				    var d53 = document.getElementById('d53').value;
				    var d54 = document.getElementById('d54').value;
				    var d55 = document.getElementById('d55').value;
				    var d56 = document.getElementById('d56').value;
				    var d57 = document.getElementById('d57').value;
				    var d58 = document.getElementById('d58').value;
				  
				   var a= ((parseFloat(d52)+parseFloat(d53)+parseFloat(d54)+parseFloat(d55)+parseFloat(d56)+parseFloat(d57)+parseFloat(d58))/7).toFixed(2);
				   
					 var result7 = document.getElementById('result7').value = a;
				  
			   }
		                </script>
			       </table>
							
						  </form>
					<p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>		   
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note tr c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabetrc1']."</td>
				   <td>".$data['mathematiquetrc1']."</td>
				   <td>".$data['etudeislamiquetrc1']."</td>
				   <td>".$data['etudeciviletrc1']."</td>
				   <td>".$data['etudescientifiquetrc1']."</td>
				   <td>".$data['historiqueetgeographiquetrc1']."</td>
				   <td>".$data['francaistrc1']."</td>
				   <td>".$data['moyennetrc1']."</td>
				   <td>".$data['trimestretrc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabetrc1=".$data['arabetrc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>		   			   
						  
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
		 <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
			<table border="2" cellpadding="0" style="background:#012531; width: 100%;" >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th style="color: #FFF;"><button name="ENVOI8" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			   <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabetrc2" id="d62" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquetrc2" id="d63" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquetrc2" id="d64" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeciviletrc2" id="d65" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquetrc2" id="d66" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiquetrc2" id="d67" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaistrc2" id="d68" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennetrc2" id="result8" required/>
						<button onClick="calch();">=</button>
						</td>
		<td><input type="number" max="3" min="1" name="trimestretrc2" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
				 <script>
							
		       function calch(){
				    var d62 = document.getElementById('d62').value;
				    var d63 = document.getElementById('d63').value;
				    var d64 = document.getElementById('d64').value;
				    var d65 = document.getElementById('d65').value;
				    var d66 = document.getElementById('d66').value;
				    var d67 = document.getElementById('d67').value;
				    var d68 = document.getElementById('d68').value;
				
				    var a= ((parseFloat(d62)+parseFloat(d63)+parseFloat(d64)+parseFloat(d65)+parseFloat(d66)+parseFloat(d67)+parseFloat(d68))/7).toFixed(2);
				   
				 var result8 = document.getElementById('result8').value = a;
				  
			   }
		                </script>
			       </table>
                         
							  </form>
							   <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note tr c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabetrc2']."</td>
				   <td>".$data['mathematiquetrc2']."</td>
				   <td>".$data['etudeislamiquetrc2']."</td>
				   <td>".$data['etudeciviletrc2']."</td>
				   <td>".$data['etudescientifiquetrc2']."</td>
				   <td>".$data['historiqueetgeographiquetrc2']."</td>
				   <td>".$data['francaistrc2']."</td>
				   <td>".$data['moyennetrc2']."</td>
				   <td>".$data['trimestretrc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabetrc2=".$data['arabetrc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>		   		   
							   
                     </ol> 
                      </li><br>
                      <hr style="height: 0.5cm;background: #012531;">
                      <li>  <div class="ens"><li >  <p style="border-radius: 8px ;font-size: 30px;border: 2px solid #012531;text-align: center;"> <?php echo $lang['MM']; ?></p>
                           <ol> 
						 
                      <p style="font-size: 30px;text-align: center;"> <?php echo $lang['clas1']; ?></p>
						  
			<form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
							   <table border="2" cellpadding="0" style="background:#012531; width: 100%; "  >
		            <tr>
			           
				  <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th ><button name="ENVOI9" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button> </th>
			       </tr>
					<tr>
			      <td><input pattern="[a-zA-Z- ]+"  name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabeqtc1" id="d72" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiqueqtc1"id="d73" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiqueqtc1" id="d74" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivileqtc1" id="d75" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiqueqtc1" id="d76" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiqueqtc1" id="d77" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaisqtc1" id="d78" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyenneqtc1" id="result9" required/>
						<button onClick="calci();">=</button>
						</td>
					<td><input type="number" max="10" min="0" name="trimestreqtc1" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
								   <script>
							
		       function calci(){
				    var d72 = document.getElementById('d72').value;
				    var d73 = document.getElementById('d73').value;
				    var d74 = document.getElementById('d74').value;
				    var d75 = document.getElementById('d75').value;
				    var d76 = document.getElementById('d76').value;
				    var d77 = document.getElementById('d77').value;
				    var d78 = document.getElementById('d78').value;
			
				    var a= ((parseFloat(d72)+parseFloat(d73)+parseFloat(d74)+parseFloat(d75)+parseFloat(d76)+parseFloat(d77)+parseFloat(d78))/7).toFixed(2);
				   
				 var result9 = document.getElementById('result9').value = a;
				  
			   }
		                </script>
			       </table>
							
						  </form>
						<p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>  
					<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note qt c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabeqtc1']."</td>
				   <td>".$data['mathematiqueqtc1']."</td>
				   <td>".$data['etudeislamiqueqtc1']."</td>
				   <td>".$data['etudecivileqtc1']."</td>
				   <td>".$data['etudescientifiqueqtc1']."</td>
				   <td>".$data['historiqueetgeographiqueqtc1']."</td>
				   <td>".$data['francaisqtc1']."</td>
				   <td>".$data['moyenneqtc1']."</td>
				   <td>".$data['trimestreqtc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabeqtc1=".$data['arabeqtc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>		   
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
						  <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
							   <table border="2" cellpadding="0" style="background:#012531;width: 100%; " >
		            <tr>
			       <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI10" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			        <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabeqtc2" id="d82" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiqueqtc2" id="d83" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiqueqtc2" id="d84" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivileqtc2" id="d85" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiqueqtc2" id="d86" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiqueqtc2" id="d87" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaisqtc2" id="d88" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyenneqtc2" id="result10" required/>
						<button onClick="calcj();">=</button>
						</td>
					<td><input type="number" max="10" min="0" name="trimestreqtc2" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
								    <script>
							
		       function calcj(){
				    var d82 = document.getElementById('d82').value;
				    var d83 = document.getElementById('d83').value;
				    var d84 = document.getElementById('d84').value;
				    var d85 = document.getElementById('d85').value;
				    var d86 = document.getElementById('d86').value;
				    var d87 = document.getElementById('d87').value;
				    var d88 = document.getElementById('d88').value;
				
				    var a= ((parseFloat(d82)+parseFloat(d83)+parseFloat(d84)+parseFloat(d85)+parseFloat(d86)+parseFloat(d87)+parseFloat(d88))/7).toFixed(2);
				   
				 var result10 = document.getElementById('result10').value = a;
				  
			   }
		                </script>
			       </table>
                         
							  </form>
						<p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>	   
			<table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note qt c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  //print_r($datas);
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabeqtc2']."</td>
				   <td>".$data['mathematiqueqtc2']."</td>
				   <td>".$data['etudeislamiqueqtc2']."</td>
				   <td>".$data['etudecivileqtc2']."</td>
				   <td>".$data['etudescientifiqueqtc2']."</td>
				   <td>".$data['historiqueetgeographiqueqtc2']."</td>
				   <td>".$data['francaisqtc2']."</td>
				   <td>".$data['moyenneqtc2']."</td>
				   <td>".$data['trimestreqtc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabeqtc2=".$data['arabeqtc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>
							   
                     </ol> 
                      </li><br>
                      <hr style="height: 0.5cm;background: #012531;">
                      <li> <div class="ens"><li >  <p style="border-radius: 8px ;font-size: 30px;border: 2px solid #012531;text-align: center;"> <?php echo $lang['NN']; ?></p>
                           <ol> 
						 
                      <p style="font-size: 30px;text-align: center"><?php echo $lang['clas1']; ?></p>
						  
		 <form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
		<table border="2" cellpadding="0" style="background:#012531;width: 100%; " >
		            <tr>
				    <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
			        <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				    <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI11" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></th>
			       </tr>
					<tr>
			       <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabecqc1" id="d92" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquecqc1" id="d93" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquecqc1" id="d94" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivilecqc1" id="d95" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquecqc1" id="d96" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiquecqc1" id="d97" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaiscqc1" id="d98" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennecqc1" id="result11" required/>
						<button onClick="calck();">=</button>
						</td>
					<td><input type="number" max="3" min="1" name="trimestrecqc1" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
			    <script>
							
		       function calck(){
				    var d92 = document.getElementById('d92').value;
				    var d93 = document.getElementById('d93').value;
				    var d94 = document.getElementById('d94').value;
				    var d95 = document.getElementById('d95').value;
				    var d96 = document.getElementById('d96').value;
				    var d97 = document.getElementById('d97').value;
				    var d98 = document.getElementById('d98').value;
				  
				    var a= ((parseFloat(d92)+parseFloat(d93)+parseFloat(d94)+parseFloat(d95)+parseFloat(d96)+parseFloat(d97)+parseFloat(d98))/7).toFixed(2);
				   
				 var result11 = document.getElementById('result11').value = a;
				  
			   }
		                </script>
			       </table>
							
						  </form>
							   
					<p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>		   
							   
							   
							   
	
			   <table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note cq c1`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabecqc1']."</td>
				   <td>".$data['mathematiquecqc1']."</td>
				   <td>".$data['etudeislamiquecqc1']."</td>
				   <td>".$data['etudecivilecqc1']."</td>
				   <td>".$data['etudescientifiquecqc1']."</td>
				   <td>".$data['historiqueetgeographiquecqc1']."</td>
				   <td>".$data['francaiscqc1']."</td>
				   <td>".$data['moyennecqc1']."</td>
				   <td>".$data['trimestrecqc1']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabecqc1=".$data['arabecqc1']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>					   
                                  
                          <p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
		<form method="POST"  action="con notes elév adm.php" id="Form"  enctype="multipart/form-data">
							  
			 <table border="2" cellpadding="0" style="background:#012531;width: 100% " >
		            <tr>
			        <th style="color: #FFF;"><?php echo $lang['noepr']; ?></th>
			        <th style="color: #FFF;"><?php echo $lang['arab']; ?></th>
				   <th style="color: #FFF;"><?php echo $lang['matma']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdi']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['etdcien']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['histegeo']; ?></th>	
					<th style="color: #FFF;"><?php echo $lang['frnci']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['moyn']; ?></th>
					<th style="color: #FFF;"><?php echo $lang['trimstr']; ?></th>
					<th><button name="ENVOI12" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; border-radius:10px; "><?php echo $lang['envo']; ?></button></th>
			       </tr>
					<tr>
			      <td><input pattern="[a-zA-Z- ]+" type="text" name="nometprenom" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="arabecqc2" id="d102" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="mathematiquecqc2" id="d103" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudeislamiquecqc2" id="d104" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudecivilecqc2" id="d105" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="etudescientifiquecqc2" id="d106" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="historiqueetgeographiquecqc2" id="d107" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="francaiscqc2" id="d108" required/></td>
<td><input step="0.01" type="number" max="10" min="0" name="moyennecqc2" id="result12" required/>
						<button onClick="calcl();">=</button>
						</td>
					<td><input type="number" max="10" min="0" name="trimestrecqc2" required/></td>
					<td><input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"></td>
			       </tr>
				     <script>
							
		       function calcl(){
				    var d102 = document.getElementById('d102').value;
				    var d103 = document.getElementById('d103').value;
				    var d104 = document.getElementById('d104').value;
				    var d105 = document.getElementById('d105').value;
				    var d106 = document.getElementById('d106').value;
				    var d107 = document.getElementById('d107').value;
				    var d108 = document.getElementById('d108').value;
				 
				    var a= ((parseFloat(d102)+parseFloat(d103)+parseFloat(d104)+parseFloat(d105)+parseFloat(d106)+parseFloat(d107)+parseFloat(d108))/7).toFixed(2);
				   
				 var result12 = document.getElementById('result12').value = a;
				  
			   }
		                </script>
			       </table>
                         
							  </form>
				   <p style="font-size: 30px; text-align: center;"><?php echo $lang['reslt']; ?></p>
				    <table border="2" cellpadding="0" bordercolor="#000000" style="background: #FFF; width: 100%;"  >
		            <tr>
					<th ><?php echo $lang['noepr']; ?></th>
			        <th><?php echo $lang['arab']; ?></th>
				    <th><?php echo $lang['matma']; ?></th>
					<th><?php echo $lang['etdi']; ?></th>
					<th><?php echo $lang['etdci']; ?></th>
					<th><?php echo $lang['etdcien']; ?></th>
					<th><?php echo $lang['histegeo']; ?></th>	
					<th><?php echo $lang['frnci']; ?></th>
					<th><?php echo $lang['moyn']; ?></th>
					<th><?php echo $lang['trimstr']; ?></th>
					<th></th>
					
			        </tr>					   
					    <?php     
		  $sql = "SELECT * FROM `note cq c2`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['nometprenom']."</td>
				   <td>".$data['arabecqc2']."</td>
				   <td>".$data['mathematiquecqc2']."</td>
				   <td>".$data['etudeislamiquecqc2']."</td>
				   <td>".$data['etudecivilecqc2']."</td>
				   <td>".$data['etudescientifiquecqc2']."</td>
				   <td>".$data['historiqueetgeographiquecqc2']."</td>
				   <td>".$data['francaiscqc2']."</td>
				   <td>".$data['moyennecqc2']."</td>
				   <td>".$data['trimestrecqc2']."</td>
				   <td>
				    <a href ='les notes des eléves adm .php?arabecqc2=".$data['arabecqc2']."' class='btn' >".$lang['sup']."</a>
				   </td>
				   
			        </tr>
			  " ;
		  }
		
		             ?>		   
							   
					<tr>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					<td></td>		   		   
					<td></td>		   
					<td></td>		   
					<td></td>		   
					</tr>		   
					
					</table>
	<hr>
							   
                     </ol> 
                      </li>
                      
                      </ul>
                     </div>
               
        
      </p>
         </div>
         </div>
		         </form>
        



    </body>
    </html>