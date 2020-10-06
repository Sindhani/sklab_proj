<?php
include("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
<?php
	include("includes/head-tag-elements.php");
?>
	<title>About Us | SKHAN LAB</title>
  </head>

  <body>
    <div id="wrapper">
      <?php	include("includes/header.php");	?>
	  <?php	include("includes/nav.php");	?>
     

      <div id="main-content">
	  <div id="sidebar">
          <div id="categories" class="boxed">
		  <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require('includes/sidenav.php'); ?>
          </div>
		  <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
		   <div><img width="100%" src="images/news_table.gif" alt="News Image"/></div>
           <marquee 
			behavior= "scroll" 
			direction="up" 
			onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" 
			onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" 
			height='250px' >
		   <p align=center>
			
						<?php require("includes/news.php"); ?>
			</p>
		   
		   </marquee>
           
            
           
			
          </div>
        </div>
        <div id="posts">
          <div class="post">
            <h2 class="title">&nbsp;</h2>
            <div class="meta">
              <p class="date"><h1>SK-Lab Supervisor and Team</h1></p>
              
            </div>
            <div class="story">
			
			<div class="alert-info">Click on the Cards for further information</div>
              
             <div class="cv-box">
				<a href="shahidcv.php"><div class="cv-card">
					<div class="cv-imgBx">
						<img src="images/students/shahid.jpg" alt="images">
					</div>
					<div class="details">
						<h2>Dr. Shahid Ullah<br><span>Researcher</span></h2>
					</div>
				</div></a>
				<a href="students.php">
				<div class="cv-card">
					<div class="cv-imgBx">
						<img src="images/group-icon.png" />
												
					</div>
					<div class="details">
						<h2>Our Team<br><span>Click to Know More</span></h2>
					</div>
				</div></a>
            </div>
			
          </div>
          
        </div>
        
      </div>
      
    </div>
	<?php require("includes/footer.php");?>
	
	</div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
