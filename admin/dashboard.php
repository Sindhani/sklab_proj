<?php
require("includes/config.php");
$sql_cat = "select * from categories";
$result_cat = mysqli_query($conn, $sql_cat);

$sql_public_db = "select * from db_table";
$result_public_db = mysqli_query($conn, $sql_public_db);


 ?>


<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php require("includes/head-tag-elements.php");?>
</head>
<body>

<?php require('includes/nav.php');?>

<div class="content">
	
	<div class="row">
	
			<div class="card bg-light mb-3" style="max-width: 18rem;">
				<div class="card-header">Total Number of Categories</div>
				  <div class="card-body">
					<p class="card-text">
								<?php 
										echo "<h1 class='text-center'>".mysqli_num_rows($result_cat)."</h1>";
								?>
					</p>
				  </div>
				</div>
				
				<div class="card bg-light mb-3" style="max-width: 18rem;">
				<div class="card-header">Total Number of Public Databases</div>
				  <div class="card-body">
					<p class="card-text">
								<?php 
										echo "<h1 class='text-center'>".mysqli_num_rows($result_public_db)."</h1>";
								?>
					</p>
				  </div>
				</div>
				
				<div class="card bg-light mb-3" style="max-width: 18rem;">
				<div class="card-header">Total Number of Categories</div>
				  <div class="card-body">
					<p class="card-text">
								<?php 
										echo "<h1 class='text-center'>".mysqli_num_rows($result_public_db)."</h1>";
								?>
					</p>
				  </div>
				</div>
				
				<hr><hr>
				
		</div>
		
		
	
	<div id="chart_div"></div>
</div>
</body>
</html>
