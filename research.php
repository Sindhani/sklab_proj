<?php
include("includes/config.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<?php
	include("includes/head-tag-elements.php");
?>
  
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
		   <div><img width="100%" src="images/news_table.gif" /></div>
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
				<p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>
			</div>
			<div class="story">
			<p>
			<ul>
                <li><p>Computational study of Post translation modification of Protein (PTMs)</p></li>
				<li><p>Computational study of phosphorylation related enzyme and there classification</p></li>
				<li><p>Algorithm design for prediction of phosphorylation site and functional phosphorylation site</p></li>
				<li><p>Computational study of high phosphorylation data</p></li>
				<li><p>Development of methodology for analysis of genetic variation that influence the phosphorylation</p></li>
				<li><p>Drug discovery and development, Rational drug designing (Computer-aided drug design, structure-based drug design).</p>
				</li>
			</ul>
			<b>New Research area:</b>
			<ul>
			<li><p>Development of functional nanomaterials including carbon nanomaterials, upconversion nanoparticles, organic nanomaterials, protein-based carriers, and other multifunctional composite nanostructures, for the exploration of novel disease diagnostic and cancer therapeutic approaches.</p></li>
			</ul>
              </p>
			</div>
		</div>
		  
       
        
      </div>
      
    </div>
	<?php require("includes/footer.php");?>
	</div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
