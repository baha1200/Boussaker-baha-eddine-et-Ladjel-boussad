<?php
include_once('lgr.php');
include_once 'con gr.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>enseignements enseignants</title>

<style>
	 .bbolck_body p {
        text-align: justify;
        
       padding-left: 500px;
        font-size: 16px;
        direction: rtl;
        color: #012531;
    }
    .cc {
        width: 1300px;
        
        float: right;
        margin-right: 22px;
        background: #6a9497;
    }
	table{border-collapse: collapse; width: 90%; margin-top: 10px;border-color: #6a9497;table-layout: fixed; word-wrap: break-word;margin-left: 2cm; text-align: center; }
	table th{padding:10px;}
	table td{ padding: 20px; }
	
	.btn{ color:red; padding: 5px 30px; }
	.btn:hover{ background: darkred; color: #FFF;}
</style>	
	<script>
	function preventBack() { window.history.forward(); }
	setTimeout("preventBack()", 0);
	window.onunload = function () { null };

</script>
</head>
<body>
	<div style="height: 1cm;"><a href="espace enseignants.php"> <img src="photos/retr.png" style="height: 3cm; width: 3cm;"></a> </div>
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
			<li><a href="ens login.php"><?php echo $lang['dec']; ?></a></li>
            <li><a href="enseignements ens.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="enseignements ens.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
      
            <div class="bolck_head"><?php echo $lang['ens']; ?></div>
            <div class="bbolck_body"></div>
            
            
                
                <div class="programe">
                  <div class="ens">  <p style=" color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['ii']; ?></p>
 <form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				
		<table border="1" style=" background:#012531;border-color:#6a9497;">	  	  
 <th><label><strong style="font-size: 30px; color:#FFF;"><?php echo $lang['matier']; ?></strong></label> <br>
	<input type="text"  name="matieremt" style="padding: 10px;" required>   </th>
	

 <th> <label><strong style="font-size: 30px; color:#FFF;"><?php echo $lang['conten']; ?></strong></label>
	<input type="text"  name="commentairemt" style="padding: 10px;" required> <br> </th>

 <th>	<label> <strong style="font-size: 30px; color:#FFF;"><?php echo $lang['fich']; ?></strong></label>
	<input type="file"  name="fichier" style="padding: 10px;" required> <br> </th>
					
  <th> <button type="submit" name="ENVOI1" style="background: #66FF00;width:2.5cm;height:1.26cm;font-size:20px;"><?php echo $lang['envo']; ?></button> <hr>
  <input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">
</th>
					
 

							</table>			  
		  </form>           
                    <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;">
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `maternelle`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matieremt']."</td>
				   <td>".$data['commentairemt']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matieremt=".$data['matieremt']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		      if (isset($_GET['matieremt'])){
	$matieremt=$_GET['matieremt'];
	$delete=mysqli_query($conn,"DELETE FROM `maternelle` WHERE `matieremt`='$matieremt';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
	                    <hr style="background: #000000; height: 0.5cm;"> 
		  
	              <div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['jj']; ?></p>
                         
<form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				<table border="1"  width="50%" style=" background:#012531; border-color:#6a9497;" >
			  	    
					  <th style="font-size:30px; color:#FFF;"><?php echo $lang['matier']; ?><br>
					  <input  style="padding: 10px;  " type="text" name="matierepr"  required> </th>
					  
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['conten']; ?>
				  	<input   type="text" name="commentairepr" style=" padding: 10px;" required></th>
					
					  <th style="font-size:30px; color:#FFF;"><?php echo $lang['fich']; ?>
					<input  style="padding: 10px;" type="file" name="fichier"  required> </th>
					
					
				  
					
					
					<th> <button type="submit" name="ENVOI2" style="font-size:20px;width:2.5cm;height:1.26cm; background-color: #66FF00;"><?php echo $lang['envo']; ?></button> <hr>
          	<input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset"> </th>
				
					  
				</table>	  
		  </form>
					   <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;" >
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `premiere`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matierepr']."</td>
				   <td>".$data['commentairepr']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matierepr=".$data['matierepr']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
							}
		    if (isset($_GET['matierepr'])){
	$matierepr=$_GET['matierepr'];
	$delete=mysqli_query($conn,"DELETE FROM `premiere` WHERE `matierepr`='$matierepr';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
					  
	                    <hr style="background: #000000; height: 0.5cm;">
	
	
<div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['kk']; ?></p>
                      
 <form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				<table border="2" name="tbl2" cellpadding="0" bordercolor="#000000" width="50%" style=" background:#012531;">
			  	   <tr>
					 <th style="font-size:30px; color:#FFF;"><?php echo $lang['matier']; ?><br><input  style="padding: 10px;" type="text" name="matieredx" style="width:100%;" required> </th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['conten']; ?><input  style="padding: 10px;" type="text" name="commentairedx" style="width:100%;" required> </th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['fich']; ?><input  style="padding: 10px;" type="file" name="fichier" style="width:100%;" required> </th>
					<th><button type="submit" name="ENVOI3" style="font-size:20px;width:2.5cm;height:1.26cm; background-color: #66FF00;"><?php echo $lang['envo']; ?></button> <hr>
			<input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">
				</th>
				  </tr> 
			
				 
				</table>	  
		  </form>
	                   <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;" >
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `deuxieme`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matieredx']."</td>
				   <td>".$data['commentairedx']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matieredx=".$data['matieredx']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
							}
		    if (isset($_GET['matieredx'])){
	$matieredx=$_GET['matieredx'];
	$delete=mysqli_query($conn,"DELETE FROM `deuxieme` WHERE `matieredx`='$matieredx';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
	
	                    <hr style="background: #000000; height: 0.5cm;">
	
	
                     <div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['LL']; ?></p>
                     
 <form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				<table border="2" name="tbl3" cellpadding="0" bordercolor="#000000" width="50%" style=" background:#012531;text-align: center;">
			  	    <tr>
					  <th style="font-size:30px; color:#FFF;" ><?php echo $lang['matier']; ?><br><input  type="text" name="matieretr" style="padding: 10px;" required></th>
					  <th style="font-size:30px; color:#FFF;"><?php echo $lang['conten']; ?><input  type="text" name="commentairetr" style="padding: 10px;" required> </th>
					  <th style="font-size:30px; color:#FFF;"><?php echo $lang['fich']; ?><input  type="file" name="fichier" style="padding: 10px;" required></th>
					<th><button type="submit" name="ENVOI4" style="font-size:20px;width:2.5cm;height:1.26cm; background-color: #66FF00;"><?php echo $lang['envo']; ?></button> <hr>
					<input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">
				</th>
				  </tr> 
		
		
				</table>	  
		  </form>
						 
						  <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;" >
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `troisieme`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matieretr']."</td>
				   <td>".$data['commentairetr']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matieretr=".$data['matieretr']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  if (isset($_GET['matieretr'])){
	$matieretr=$_GET['matieretr'];
	$delete=mysqli_query($conn,"DELETE FROM `troisieme` WHERE `matieretr`='$matieretr';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
						 
	                    <hr style="background: #000000; height: 0.5cm;">


                     <div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['MM']; ?></p>
                      
   <form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				<table border="2" name="tbl4" cellpadding="0" bordercolor="#000000" width="50%" style=" background:#012531;">>
			  	    <tr>
					  <th style="font-size:30px; color:#FFF;"><?php echo $lang['matier']; ?><br><input  type="text" name="matiereqt" style="padding: 10px;" required></th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['conten']; ?><input  type="text" name="commentaireqt" style="padding: 10px;" required></th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['fich']; ?><input  type="file" name="fichier" style="padding: 10px;" required></th>
					<th><button type="submit" name="ENVOI5" style="font-size:20px;width:2.5cm;height:1.26cm; background-color: #66FF00;"><?php echo $lang['envo']; ?></button> <hr>
				    <input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">
				</th>
				  </tr> 
			
				</table>	  
		  </form>
						 
						  <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;" >
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `quatrieme`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matiereqt']."</td>
				   <td>".$data['commentaireqt']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matiereqt=".$data['matiereqt']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  if (isset($_GET['matiereqt'])){
	$matiereqt=$_GET['matiereqt'];
	$delete=mysqli_query($conn,"DELETE FROM `quatrieme` WHERE `matiereqt`='$matiereqt';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
						 
	                    <hr style="background: #000000; height: 0.5cm;">


                      <div class="ens"><li >  <p style=" border-radius: 8px ;color: #042c39 ; font-size: 30px;margin-left: 8.5cm;margin-right:10.5cm ;border: 2px solid #042c39;text-align: center;"><?php echo $lang['NN']; ?></p>
                      
                     
<form method="post" action="con enseignement ens.php" id="contactForm" enctype="multipart/form-data">
				<table border="2" name="tbl" cellpadding="0" bordercolor="#000000" width="50%" style=" background:#012531;">>
			  	   <tr>
					 <th style="font-size:30px; color:#FFF;"><?php echo $lang['matier']; ?><br> <input  type="text" name="matierecq" style="padding: 10px;" required></th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['conten']; ?><input  type="text" name="commentairecq" style="padding: 10px;" required></th>
					<th style="font-size:30px; color:#FFF;"><?php echo $lang['fich']; ?><input  type="file" name="fichier" style="padding: 10px;" required></th>
					<th><button type="submit" name="ENVOI6" style="font-size:20px;width:2.5cm;height:1.26cm; background-color: #66FF00;"><?php echo $lang['envo']; ?></button> <hr>
					<input style="font-size:20px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">
				</th>
				  </tr> 
			
				</table>	  
		  </form>
						  
						   <hr>
					  	<table border="2" cellpadding="0" style="background: #FFF; border-radius: 20px;" >
							<tr>
							<th style="font-size:30px;"><?php echo $lang['matier']; ?></th>
					        <th style="font-size:30px;"><?php echo $lang['conten']; ?></th>
							<th style="font-size:30px;"><?php echo $lang['fich']; ?></th>
							</tr>
								    <?php     
		  $sql = "SELECT * FROM `cinqieme`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
							foreach ($datas as $data){
								echo  "<tr>
			       <td>".$data['matierecq']."</td>
				   <td>".$data['commentairecq']."</td>
				   <td>".$data['fichier']."</td>
				   <td>
				    <a href ='enseignements ens.php?matierecq=".$data['matierecq']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  if (isset($_GET['matierecq'])){
	$matierecq=$_GET['matierecq'];
	$delete=mysqli_query($conn,"DELETE FROM `cinqieme` WHERE `matierecq`='$matierecq';");
}
		             ?>	
							<tr>
							<td></td>
							<td></td>
							<td></td>
							</tr>
					  </table>
                    
	                    <hr style="background: #000000; height: 0.5cm;">




                    
                                  
                         
                                  
                          
                                  
                         
                                      
                              
                          
                      </li>
                      
                      </ul>
                     </div>
               
        
      </p>
                 
        </div>
    </div>
               
         
    </body>
    </html>