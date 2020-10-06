<?php
require("includes/config.php");
$query = "Select db_name, db_link from db_public_";
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
              </div>
          </div>
        </div>
		<div id=posts>
		<?php
		
		if(isset($_POST['submit'])){
			
			$query = mysqli_real_escape_string($conn, $_POST['search']);
			
			$sql = "SELECT * FROM public_db WHERE db_name LIKE '$query' OR db_short_desc LIKE '%$query%' OR db_long_desc LIKE '%$query%'";
			$response = mysqli_query($conn, $sql) or die("<br>error searching data");
			
			$rows = mysqli_num_rows($response);
			echo "<h2> $rows Database(s) Founded</h2><br>";
			//echo '<div class="box-wrap">';
			while($row = mysqli_fetch_array($response)){
						
								
			echo '	<div class="accordion" id="accordionExample">
					<div class="card">
					<div class="card-header" id="headingOne">
					<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
						echo $row['db_name'];
					echo '</button>
					</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body"> ';
						echo $row['tool_long_desc'];
						echo '<br><a href="';
						echo $row['db_link'];
						echo '" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Details</a>';				
									 echo ' </div>
									</div>
								  </div>

								  
								</div>';
						}
						
						echo "</div>";	
				echo '</div>';
					}
		else	{
					
		
	echo "	<p>Welcome to our public database page, we've gathered almost all biological databases and with time we're going to update for scientists, we've placed the search tool at the top of the menu bar for quick search, please enter the name you need.</p> ";
	echo '	<div class="box-wrap">';
       
		
		 
			   
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
			
		  
		}
echo '</div>';
		  ?>
  </div>
      <?php require('includes/footer.php'); ?>
    </div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
