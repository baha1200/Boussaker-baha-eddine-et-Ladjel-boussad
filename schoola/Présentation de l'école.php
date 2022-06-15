<?php
include_once('lgr.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css.css" >
    <title>présentation de l'école</title>
    <style>
    .hide{display: none;}
    .ad2 a {
      
        text-decoration: none;
        border: 2px solid #012531;
        padding: 30px ;
        font-size: 35px;
        margin: 50px;
        display: flex;
        background-color: #012531;
        color: #FFFFFF;
        text-align: center;
        
  
    }
    .ad2 a:hover{border-bottom: #F8FF02 2px solid; color: #FFFFFF; background: #012531;}
    
      .d_center {
        width: 1270px;
        border: #012531 solid 1px;
        float: right;
        text-align: center;
        
        background-color: #6a9497;
        border-radius:10px ;
    }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse ;
  width: 75%;
 margin-left: 4cm;
}


td, th ,tr{
  border: 2.5px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.slider{
  width: 650px;
  height: 400px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}


/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -120px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 380px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
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
            <li><a href="présentation de l'école.php?lang=ar"><input type="button" value="AR" size="45" /></a>&nbsp;&nbsp;<a href="présentation de l'école.php?lang=fr"><input type="button" value="FR" size="45"/></a></li>
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
    <div class="center">
        <div class="r_center">
            <div class="bolck_head"><?php echo $lang['mn']; ?></div>
            <div class="bolck_body">
                <div class="menu" style="text-align: end;">
                    <ul>
						<li><a href="administration login.php"><?php echo $lang['ea']; ?></a></li>
                        <li><a  href="ens login.php"><?php echo $lang['ee']; ?></a></li>
                        <li><a href="espace parent d'eléve.php"><?php echo $lang['ep']; ?></a></li>
                        
                        
                    </ul>
                </div>
                
            </div>
                  </div>
        <div class="c_center">
            <div class="suled">
              <div class="sl">
                <div class="slider">
                  <div class="slides">
                    
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    
                    <div class="slide first">
                      <img src="photos/primaire.png" alt="">
                    </div>
                    <div class="slide">
                      <img src="photos/pra.png" >
                    </div>
                    <div class="slide">
                      <img src="photos/prb.png" >
                    </div>
                    <div class="slide">
                      <img src="photos/pr3.jpg" alt="">
                    </div>
                   
                    <div class="navigation-auto">
                      <div class="auto-btn1"></div>
                      <div class="auto-btn2"></div>
                      <div class="auto-btn3"></div>
                      <div class="auto-btn4"></div>
                    </div>
                    
                  </div>
                  
                  <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                  </div>
                  
                </div></div>
                
            
                <script type="text/javascript">
                var counter = 1;
                setInterval(function(){
                  document.getElementById('radio' + counter).checked = true;
                  counter++;
                  if(counter > 4){
                    counter = 1;
                  }
                }, 3000);
                </script>
            </div>
            <div class="bolck_head"><?php echo $lang['pre1']; ?> </div>
            <div class="bolck_body"></div>
            <p style="font-size: 20px;">&nbsp;&nbsp;&nbsp;<?php echo $lang['ll']; ?>
              </p>
              </div>
              
              
  </div>
    <div class="d_c">
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
            <br><br><br>
        </div>
        
   
            
        </div>
        <div class="d_center">
          

          <div id="d1">
        
        </div>

        <div id="d2">
          <div id="togg2" class="ad2"><a style="padding:1cm 500px;"><?php echo $lang['ss']; ?></a></div>
            <ul id="l1" class="hide">
                <li>

                  
			<p style="font-size: 20px;float: right;"><?php echo $lang['pp']; ?></p>
               <table>
            <tr>
              <th style="font-size: 20px;"><?php echo $lang['ss']; ?></th>
              <th style="font-size: 20px;"><?php echo $lang['tt']; ?></th>
              
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['uu']; ?></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['vv']; ?></td>
              <td>17</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['ww']; ?></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['xx']; ?></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['yy']; ?></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['zz']; ?></td>
              <td>2</td>
            </tr>
            <tr>
                <td style="font-size: 20px;"><?php echo $lang['aa']; ?></td>
                <td>1</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['bb']; ?></td>
                <td>2</td>
              </tr>
          </table>
          </li>

                </li>
                
            </ul>
        </div>
        <br><br>
        </div>

        <div class="d_center">
        <div id="d3">
          <div id="togg2" class="ad2" ><a style="padding:1cm 490px;" ><?php echo $lang['elvvv']; ?></a></div>
          <ul id="l2" class="hide">
              <li>

         
			<p style="font-size: 20px;"><?php echo $lang['dd']; ?></p>
          <table>
            <tr>
              <th style="font-size: 20px;"><?php echo $lang['ff']; ?></th>
              <th style="font-size: 20px;"><?php echo $lang['gg']; ?></th>
              <th style="font-size: 20px;"><?php echo $lang['hh']; ?></th>
           
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['ii']; ?></td>
              <td>18</td>
              <td>22</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['jj']; ?></td>
              <td>55</td>
              <td>62</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['kk']; ?></td>
              <td>58</td>
              <td>59</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['LL']; ?></td>
                <td>53</td>
                <td>64</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['MM']; ?></td>
                <td>73</td>
                <td>82</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['NN']; ?></td>
                <td>57</td>
                <td>60</td>
              </tr>
          </table>
              </li>
             
          </ul>
      </div>
      <br><br>
       </div>

       <div class="d_center">
      <div id="d4">
        <div id="togg2" class="ad2"><a style="padding:1cm 470px;"><?php echo $lang['ensss']; ?></a></div>
        <ul id="l3" class="hide">
            <li>
              
          <p style="font-size: 20px;">&nbsp;&nbsp;<?php echo $lang['QQ']; ?></p>
       
          &nbsp; <table>
            <tr>
              <th style="font-size: 20px;"><?php echo $lang['RR']; ?></th>
              <th style="font-size: 20px;"><?php echo $lang['SS']; ?></th>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['TT']; ?></td>
              <td>17</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['UU']; ?></td>
              <td>3</td>
            </tr>
            </table>
            </li>
        </ul>
    </div>
    <br><br>
     </div>
     <div class="d_center">
    <div id="d5">
      <div id="togg2" class="ad2"><a  style="padding:1cm 490px;"><?php echo $lang['clsss']; ?></a></div>
      <ul id="l4" class="hide">
          <li>
            
          &nbsp; <table>
            <tr>
              <th style="font-size: 20px;"><?php echo $lang['ff']; ?></th>
              <th style="font-size: 20px;"><?php echo $lang['OO']; ?></th>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['ii']; ?></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['jj']; ?></td>
              <td>3</td>
            </tr>
            <tr>
              <td style="font-size: 20px;"><?php echo $lang['kk']; ?></td>
              <td>3</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['LL']; ?></td>
                <td>3</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['MM']; ?></td>
                <td>4</td>
              </tr>
              <tr>
                <td style="font-size: 20px;"><?php echo $lang['NN']; ?></td>
                <td>3</td>
              </tr>
            </table>
          </li>
      </ul>
      </div>
      <br><br>
  </div>
  <div id="d1">
        
  </div>

        <script>
          let d1 = document.getElementById("d1");
          let d2 = document.getElementById("d2");
          let d3 = document.getElementById("d3");
          let d4 = document.getElementById("d4");
          let d5 = document.getElementById("d5");
          let p1 = document.getElementById("p1");
          let l1 = document.getElementById("l1");
          let l2 = document.getElementById("l2");
          let l3 = document.getElementById("l3");
          let l4 = document.getElementById("l4");

         
          d1.addEventListener("mouseover", () => {p1.style.display = "block";});
          d1.addEventListener("mouseout", () => {p1.style.display = "none";});
          
          d2.onmouseover = aff;
          function aff(){
            l1.style.display = "block";
          }
          d2.onmouseout = cac;
          function cac(){
            l1.style.display = "none";
          }

          d2.addEventListener("mouseover", () => {l1.style.display = "block";});
          d2.addEventListener("mouseout", () => {l1.style.display = "none";});
          

          d3.onmouseover = aff;
          function aff(){
            l2.style.display = "block";
          }
          d3.onmouseout = cac;
          function cac(){
            l2.style.display = "none";
          }
          d3.addEventListener("mouseover", () => {l2.style.display = "block";});
          d3.addEventListener("mouseout", () => {l2.style.display = "none";});
          

          d4.onmouseover = aff;
          function aff(){
            l3.style.display = "block";
          }
          d4.onmouseout = cac;
          function cac(){
            l3.style.display = "none";
          }
          d4.addEventListener("mouseover", () => {l3.style.display = "block";});
          d4.addEventListener("mouseout", () => {l3.style.display = "none";});
          

          d5.onmouseover = aff;
          function aff(){
            l4.style.display = "block";
          }
          d5.onmouseout = cac;
          function cac(){
            l4.style.display = "none";
          }
          
                    
                      
                    </script>
        </div>
        
    <div class="clear"></div>
	<br><br><br><br>
    <div class="footer">
        <div class="do_footer"><?php echo $lang['actf1']; ?></div>
    </div>
</body>
</html>
