<?php
require_once('includes/config.php');
if (isset($_GET['cat']) && isset($_GET['table'])) {
	$cat = $_GET['cat'];
	$table = $_GET['table'];
	if ($table === 'plant') {
		$table = 'dbpr';
	} elseif ($table === 'algea') {
		$table = 'fbpa';
	} elseif ($table === 'latest') {
		$table = 'ldbpr';
	} elseif ($table === 'cbdb') {
		$table = 'cbdb';
	}
	elseif ($table === 'co19pdb') {
		$table = 'co19pdb';
	}elseif ($table === 'cdbptms') {
		$table = 'cdbptms';
	} else {
		$table = 'db_table';
	}
	$query = "Select * from $table where db_category = '$cat'";
	// $query = "Select * from dbpr where db_category = '$cat' order by db_date";
	$result = mysqli_query($conn, $query);
	// echo "<pre>";
	
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php require_once("includes/head-tag-elements.php"); ?>
	<style>
	    .dbbox{
	        font-size: 1.2rem !important;
	        color black;
	        
	        
	    }
	    
	    .db-box{
	        
	        background-color: white;
	    }
	    .dbbox:hover{
	        background-color: #f5f5f5!important;
	        text-decoration: none;
	    }
	    .db-box:hover{
	        background-color: #f5f5f5!important;
	            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
	            
	    }
	</style>
</head>

<body>
	<div id="wrapper">

		<?php
		require_once("includes/header.php");
		require_once("includes/nav.php");
		?>
		<div id="main-content">
			<div id="sidebar">
				<div id="categories" class="boxed">
					<div class="row py-3">
						<div class="col">
							<h2 class="text-center">Our Services</h2>
						</div>
					</div>
					<?php require_once('includes/sidenav.php'); ?>
					<div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
						<div><img width="100%" src="images/news_table.gif" /></div>
						<marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
							<p align=center>
								<?php require_once("includes/news.php"); ?>
							</p>
						</marquee>
					</div>
				</div>
			</div>
			<div id="posts">
				<div class="post">
					<p>&nbsp;</p>
					<div class="meta">
						<p class="date">
							<h2 class="title"><?php  ($cat == 'ppoi') ? print('Protein Protein & Other Interaction (PP&OI)') : (print( $cat. " Data Base")) ?></h2>
						</p>

					</div>
					<div class="story">
						<div class="alert alert-info alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Info!</strong> Tap on one of the database below to read more about the database being searched. It contains the name of the database, the type of the database, and a link to the official website.
						</div>
						<p>
							<?php
							$cat_name = $_GET['cat'];
							$table = $_GET['table'];
							
							if ($table === 'plant') {
								$table = 'plant_cat_table';
							} elseif ($table === 'algea') {
								$table = 'fbpa_cat';
							} elseif ($table === 'latest') {
								$table = 'ldbpr_cat';
							} elseif ($table === 'cbdb') {
								$table = 'cbdb_cat';
							} elseif ($table === 'co19pdb') {
								$table = 'co19pdb_cat';
							}elseif ($table === 'cdbptms') {
								$table = 'cdbptms_cat';
							} 
							else {
								$table = 'categories';
							}
							$query2 = "Select * from $table where cat_name = '$cat_name'";
						
							$result2 = mysqli_query($conn, $query2);

							if ($result2) {
								while ($row = mysqli_fetch_array($result2)) {
									echo $row['cat_desc'];
								}
							}
							?>
						</p>
					</div>
				</div>
			</div>
			<div id=posts>
				<div class="container">
					<div class="row">
						<div class="col-xm-12 ">

							<div class="" style="display:flex; flex-wrap: wrap; justify-content: center;">
								<?php
								$table = $_GET['table'];
								while ($row = mysqli_fetch_array($result)) {
									echo '
								<div class=" col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xm-12" style="width:100%">
								
									<a class="dbbox" href="show_desc.php?q=' . $row['db_id'] . '&table=' . $table . '">
										<p class="db-box p-4 m-3 border rounded text-capitalize text-center">'
										. $row['db_name'] .
										'</p>
									</a>
								</div>';
								}

								?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<?php require_once('includes/footer.php'); ?>
		</div>
	</div>
	<script type="text/javascript" src="js/nav.js"></script>

</body>
</html>