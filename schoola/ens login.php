<?php
include_once('lgr.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>enseignants login</title>
	<script>
		javascript:window.history.forward(1);
	   function myFunction()
		{
			var un = document.forms["myForm"]["Uname"].value;
			var pw = document.forms["myForm"]["Pass"].value;
			if(un=="ens" && pw=="ens0000")
				{
					window.location.href="espace enseignants.php";
				}
			else
				{
					alert("invalid !");
				}
		}
	</script>
	<style>
		.box{
			width: 300px;
			padding: 30px;
			
			top: 50%;
			left: 30%;
			transform: translate(60%,0%);
			background: rgba(1,1,0,0.4);
			text-align: center;
			}
		.box input[type="text"],.box input[type="password"]
		{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 3px solid #0367fd;
			padding: 14px 10px;
			width: 220px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25px;
		}
		.box input[type="text"]:focus,.box input[type="password"]:focus
		{
			width: 270px;
			border-color: #ffc400ec;
		}
		.box input[type="button"]
		{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 3px solid #0367fd;
			padding: 14px 10px;
			outline: none;
			color: white;
			border-radius: 24px;
			transition: 0.25px;
			cursor: pointer;
		}
		.box input[type="button"]:hover
		{
			background: #ffc400ec;
		}
	
	</style>
	
</head>
<body>
	<div style="height: 1cm;"><a href="accueil.php"> <img src="photos/retr.png" style="height: 3cm; width: 3cm;"></a> </div>
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
               <li><a href="ens login.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="ens login.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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

      <div class="c" style="margin-right: 0cm;">
      
            <div class="bolck_head"><?php echo $lang['secon']; ?> </div>
            
            
               
				<div class="notes">
					
                  <form class="box" name="myForm" method="post">
                    <input type="text" name="Uname" placeholder="<?php echo $lang['entrvtn']; ?>" id="username">
                     <input type="password" name="Pass" placeholder="<?php echo $lang['entrvrm']; ?>" id="password">
                    <input type="button" name="log" value="<?php echo $lang['secon']; ?>" onclick="myFunction()" id="logButton">
                                
                                                                  
                                   
                                                              
                  </form> 
				   
		          </div>
                        
            
                     
              
            
         </div>
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