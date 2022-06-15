<?php
include_once('lgr.php');
include_once 'con gr.php';
if (isset($_GET['notification'])){
	$notification=$_GET['notification'];
	$delete=mysqli_query($conn,"DELETE FROM `les notifications adm` WHERE `notification`='$notification' ;");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>les notifications admin</title>
	
	<style>
		table{border-collapse: collapse; width: 100%;table-layout: fixed; word-wrap: break-word;border-color: red; border: none;} 
	table th{padding:10px;}
	table td{ padding: 10px; text-align: center;}
	.btn{ font-size: 1.2em; color:yellow; padding: 5px 30px; text-decoration: none;}
	.btn:hover{background: darkred; color: #FFF;}
		
    .cc {
         
        border: #012531 solid 1px;
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
            <li><a href="les notifications admin.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="les notifications admin.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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

      
      
            <div class="bolck_head"><?php echo $lang['ntfi']; ?></div>
	<div class="cc">
            <div class="bbolck_body"></div>
            <p>
                <div class="notes">
                   <form method="post" action="con notif adm.php">
                    
 <br><br><br>
               
                        <label><strong style="font-size: 25px;"><?php echo $lang['ntfi']; ?></strong></label> <br>
                        <input type="text" name="file" id="file" style="padding: 12px;"> <br>
	   <input type="submit" name="ENVOI" value="<?php echo $lang['envo']; ?>" id="submit" style="font-size:18px;width:2.5cm;height:1.26cm; background-color: #66FF00; " > 
					   <input style="font-size:18px;width:2.5cm;height:1.26cm; background-color: yellow;margin-left: 0.1cm;" value="<?php echo $lang['actua']; ?>" type="reset">
                
                        
                    
                                   <br><br><br>
                                                                                      
                                                                           </form>  
		  <table border="3" cellpadding="0"  >
		      <tr >
			       <th><?php echo $lang['ntfi']; ?></th>
				   
			  </tr>
			  
                     <?php     
		  $sql = "SELECT * FROM `les notifications adm`;";
		  $result = mysqli_query($conn, $sql);
		  
		  $datas = array();
		  if (mysqli_num_rows($result)> 0){
			  while($row = mysqli_fetch_array($result)){
			  $datas[] = $row;
			  }
		  }
		  
		  foreach ($datas as $data){
			  echo  "<tr>
			       <td>".$data['notification']."</td>
				   
				   <td>
				    <a href ='les notifications admin.php?notification=".$data['notification']."' class='btn' >".$lang['sup']."</a>
				   </td>
			        </tr>
			  " ;
		  }
		  
		             ?>
			  <tr >
			       <td ></td>
				   
			  </tr >
			  </table >
                             
                             </p>
	
         </div>
         
         

    </body>
    </html>