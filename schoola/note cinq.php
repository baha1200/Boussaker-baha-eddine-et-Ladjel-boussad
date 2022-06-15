<?php
include_once('lgr.php');
include_once 'con gr.php';
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>note cinqieme</title>
	<style>
    table{border-collapse: collapse;height: 2cm;   margin-top: 10px; text-align: center; width: 100%;table-layout: fixed; word-wrap: break-word;}
		table td{color: #FFF;}
		
	</style>
</head>
<body>
    <div class="top_head">
        <div id="logo"><a href="accueil.php"><img  src="photos/logo sp.png" width="150" height="150" /></a></div>
        <div id="name_school">
            <strong>
                <?php echo $lang['wiz1']; ?><br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <?php echo $lang['wiz2']; ?>
            </strong>
        </div>
    </div>
    <div class="nev">
        <ul>
            <li><a href="note cinq.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="note cinq.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
    <div class="news"><marquee ><?php echo $lang['pre']; ?></marquee></div>
    
        <div class="c" style="margin-right: 0cm;">
         
            <div class="bolck_head"><?php echo $lang['notel']; ?></div>
			
            <div class="bolck_body"></div>
			
			 <p style="font-size: 30px; text-align: center;"><?php echo $lang['clas1']; ?></p>
                                    
<table border="2" cellpadding="0" bordercolor="#6a9497" style="background:#012531; border-radius: 20px; ">
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
			<p style="font-size: 30px;text-align: center;"><?php echo $lang['clas2']; ?></p>
                                  
<table border="2" cellpadding="0" bordercolor="#6a9497" style="background:#012531; border-radius: 20px; " >
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
			
			
			<br><br><br><br><br><br>
			 </div>
			 <div class="l_center">
    <div class="bolck_head"><?php echo $lang['act']; ?></div>
        <div class="tech">
            <img src="photos/belaid belkacem 2.png" height="80px" width="80px">
            <h4><a href="le hero BELAID BELKACEM.php"><?php echo $lang['acta']; ?></a></h4>
            <p><?php echo $lang['acta1']; ?></p>
            <h5><?php echo $lang['acta2']; ?></h5>
        </div>
        <div class="tech">
            <img src="photos/k41.png" height="80px" width="80px">
            <h4><a href="journée de savoir.php"><?php echo $lang['actb']; ?></a></h4>
            <p><?php echo $lang['actb1']; ?></p>
            <h5><?php echo $lang['actb2']; ?></h5>
        </div>
        <div class="tech">
            <img src="photos/chajra.png" height="80px" width="80px">
            <h4><a href="jour nationale de l'arbre.php"><?php echo $lang['actc']; ?></a></h4>
            <p><?php echo $lang['actc1']; ?></p>
			<h5>'</h5>

        </div>
		
        <div class="tech">
            <img src="photos/joumhorya.png" height="80px" width="80px">
            <h4><a href="annul siziem.php"><?php echo $lang['actd1']; ?></a></h4>
            <p><?php echo $lang['actd2']; ?></p>
            <br>
        </div>
		<div class="tech">
            <img src="photos/exampr.jpg" height="80px" width="80px">
            <h4><a href="exament3.php"><?php echo $lang['acte1']; ?></a></h4>
            <p><?php echo $lang['acte2']; ?></p>
            <br>
        </div>
        <br>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <div class="do_footer"><?php echo $lang['actf1']; ?></div>
    </div>
</body>
</html>