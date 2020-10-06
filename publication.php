<?php
include("includes/config.php");
$query = "select * from publication";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
              <p>&nbsp;</p>
            </div>
            <div class="story">
              <p>
                
              </p>
              <p>
                The table below contains our publications. Shortly we will upload new research papers that have been submitted to high-quality journals such as <b>Nucleic Acids Research (NAR)</b>,<b>Genomics, Proteomics & Bioinformatics</b>etc .
              </p>
            </div>
          </div>
          <div class="post">
            <!-- Card 1 -->
			
            <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Serial No</th>
								<th class="column2">Authors</th>
								<th class="column3">Publication Name</th>
								<th class="column4">Journal</th>
								<th class="column5">Date of Publication</th>
								<th class="column6">Reference</th>
							</tr>
						</thead>
						<tbody>
						<?php 
								$i = 1;
								while($row = mysqli_fetch_array($result)){
								echo'<tr>
										<td class="column1">'.$i.'</td>
										<td class="column2">'.$row['pub_authors'].'</td>
										<td class="column3">'.$row['pub_name'].'</td>
										<td class="column4">'.$row['pub_gernal'].'</td>
										<td class="column5">'.$row['pub_date'].'</td>
										<td class="column6">'.$row['pub_references'].'</td>
									</tr>';
								$i++;
								}
						?>		
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

            <!-- Card 1 ended -->
          </div>
        </div>
        
      </div>
      <?php require("includes/footer.php");?>
    </div>
	<script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
