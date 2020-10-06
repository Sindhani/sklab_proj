<?php
require("includes/config.php");
$query = "Select db_name, db_link from db_table where db_category = 'pathway'";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php require("includes/head-tag-elements.php"); 
        ?>
  </head>

  <body>
    <div id="wrapper">
       <?php require("includes/header.php"); 
       require("includes/nav.php"); ?>

      <div id="main-content">
        <div id="sidebar">
          <div id="categories" class="boxed">
          <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require('includes/sidenav.php'); ?>
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
        </div>
        <div id="posts">
          <div class="post">
          <h2 class="title">&nbsp;</h2>
            <div class="meta">
             <p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>
              <p>&nbsp;</p>
            </div>
            <div class="story">
              
              </p>
              <p>
                <?php 
                $query2 = "Select cat_description from categories where cat_name = 'pathway'";
					$result2 = mysqli_query($conn, $query2);
					while($row = mysqli_fetch_array($result2)){
						echo $row['cat_description'];
					}
				?>
              </p>
            </div>
          </div>
        </div>
		<div id=posts>
		<div class="box-wrap">
        <?php
		
		 
			   
			   while($row = mysqli_fetch_array($result)){
				echo'
					<div class="box">
						<a href='.$row['db_link'].' target=_blank>
							<p>'
							.$row['db_name'].
							'</p>
						</a>
					</div>';
				}
			
		  ?>
</div>
  </div>
      <?php require('includes/footer.php'); ?>
    </div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
