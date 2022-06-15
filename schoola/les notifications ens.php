<?php
include_once('lgr.php');
include_once 'con gr.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>les notifications enseignants</title>
	
<style>
	table{border-collapse: collapse; width: 100%;table-layout: fixed; word-wrap: break-word;background: #012531;border-color: #FFF; color: #FFF;}
	table th{padding:10px;}
	table td{font-size: 1.2em; padding: 10px; text-align: center;}
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
             <li><a href="les notifications ens.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="les notifications ens.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
      
            <div class="bolck_head"><?php echo $lang['ntfi']; ?></div>
            <div class="bbolck_body"></div>
            <p>
                
                <div class="programe">
                    <div class="ens">  
						
						<table border="1" cellpadding="0" >
		     
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
			  echo "
			  <tr>
			  <td>".$data['notification']."</td>
			  </tr>  "
				  ;
		  }
		  
		             ?>
                       <tr>
			       <td></td>
				   
			  </tr>
			  </table> 
                            <br><br><br><br><br>
					
                         </div>
					
     </div>
     </div>
        


    </body>
    </html>