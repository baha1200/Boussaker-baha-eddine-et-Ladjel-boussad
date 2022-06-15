



<?php
include_once('lgr.php');
include_once 'con gr.php';

if (isset($_GET['id'])){
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"DELETE FROM `l'absence des enseignants admin` WHERE `id`='$id' ;");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>absence des enseignants admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
	table{border-collapse: collapse; width: 100%; border-color:#012531;table-layout: fixed; word-wrap: break-word;}
	table th{padding:10px; border-color:#000000;}
	table td{font-size: 1.2em; padding: 10px; text-align: center;border-color:#000000;}
	.btn{ font-size: 1.2em; color:yellow; padding: 5px 30px; text-decoration: none;}
	.btn:hover{background: darkred; color: #FFF;}
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
        margin-right: 35px;
        background: #6a9497;
    }
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
            <li><a href="absence des enseignants admin.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="absence des enseignants admin.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
      
            <div class="bolck_head"><?php echo $lang['absds']; ?></div>
            <div class="bbolck_body"></div>
            <p>
                <div class="absence">
                  <form method="post" action="con abs ens adm.php" id="contactForm" name="fc">
					    
                                  <label><strong style="font-size: 25px;"><?php echo $lang['nom']; ?></strong></label><br>
                                  <input type="text" name="nom"  style="padding: 10px;" required>  
                                                    <br><br>
                                   <label><strong style="font-size: 25px;"><?php echo $lang['clss']; ?></strong></label><br>
                                   <input type="text" name="matiere"  style="padding: 10px;" required> 
                                                    <br><br>
                                    <label><strong style="font-size: 25px;"><?php echo $lang['date']; ?></strong></label><br>
                                    <input type="date" name="date" id="tx" style="padding: 10px;"  required > 
                                    
                                    <script>
                                         $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#tx').attr('min', minDate);
});
                                    </script>
            
                                     
                       
                     
                                                    <br><br>
  <button type="submit" name="ENVOI" style="padding: 10px; background-color: #66FF00; font-size:18px;" ><?php echo $lang['envo']; ?></button></pre>
                                               <input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;" value="<?php echo $lang['actua']; ?>" type="reset">  
                                                                    </form>
					  
					
			<br><br><br>
					  
		  <table  border="3" cellpadding="0" bordercolor="#00000000" >
		      
                  <tr >
                  
			       <th style="font-size:25px;"><?php echo $lang['nom']; ?></th>
                   <th style="font-size:25px;"><?php echo $lang['clss']; ?></th>   
                   <th style="font-size:25px;"><?php echo $lang['date']; ?></th>
                   
                  </tr>
			  
		                  
		   <?php     
		  $sql = "SELECT * FROM `l'absence des enseignants admin`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo "
			  <tr>
			       <td>".$data['nom']."</td>
				   <td>".$data['matiere']."</td>
				   <td>".$data['date']."
				    <td >
				    <a href ='absence des enseignants admin.php?id=".$data['id']."' class='btn' >".$lang['sup']."</a>
				   </td>
			  </tr>
			  ";
		  }
		  
		             ?>
		   <tr>
			       <td></td>
				   <td></td>
				   <td></td>
			  </tr>
              
			  </table>
              
    <br><br><br>                    
            </div>
                     
              
            </p>
         </div>
         
         
    </body>
    </html>