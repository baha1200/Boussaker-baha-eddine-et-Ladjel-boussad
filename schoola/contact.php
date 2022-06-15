<?php
include_once('lgr.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
    <link rel="stylesheet" href="css.css" >
	

<title>contact</title>
	<style>
	
	.container{
	width: 100%;
	height: 100vh;
	background: #012531;
	display: flex;
	align-items: center;
	justify-content: center;
}
.form2{
	background: #fff;
	display: flex;
	flex-direction: column;
	padding: 2vw 4vw;
	width: 90%;
	max-width: 600px;
	border-radius: 10px;
}
		.form2 h3{
			color: #555;
			font-weight: 800;
			margin-bottom: 20px;
		}
		.form2 input,.form2 textarea{
			border: 0;
			margin: 10px 0;
			padding: 20px;
			outline: none;
			background: #f5f5f5;
			font-size: 16px;
		}
		.form2 button{
			padding: 15px;
			
			background: #ff5361;
			color: #fff;
			font-size: 18px;
			border: 0;
			outline: none;
			cursor: pointer;
			width: 120px;
			margin: 20px auto 0;
			border-radius: 30px;
		}
		 
	</style>
</head>

<body>
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
            <li><a href="contact.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="contact.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
        <div class="container">
		    <form action="https://formspree.io/f/mqknjoqr" method="post" class="form2" >
			 <h3><?php echo $lang['vosqst']; ?></h3>
			<input name="nom" type="text" id="name" placeholder="<?php echo $lang['entrvtn']; ?>" required>
			<input name="email" type="email" id="email" placeholder="<?php echo $lang['entrvte']; ?>" required>
			<input name="phone" type="text" id="phone" placeholder="<?php echo $lang['vtrnmr']; ?>" required>
			<textarea name="message" id="message" rows="4" placeholder="<?php echo $lang['cmntpt']; ?>" required></textarea>
			<button type="submit"><?php echo $lang['envo']; ?></button>
			</form>
		</div>
		
		
		
		</body>
	</html>