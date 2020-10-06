<?php
require_once('includes/config.php');
if (isset($_GET['q']) && isset($_GET['table'])) {
	$id = $_GET['q'];
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
	}
	else {
		$table = 'db_table';
	}
	$query = "Select * from $table where db_id = '$id'";
	
	$result = mysqli_query($conn, $query);
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php require_once("includes/head-tag-elements.php"); ?>

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
					<h2 class="title">&nbsp;</h2>
					<div class="meta">
						<p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>
						<p>&nbsp;</p>
					</div>

				</div>
			</div>
			<div id=posts>

			</div>
			<?php require_once('includes/footer.php'); ?>
		</div>
		<script type="text/javascript" src="js/nav.js"></script>
</body>

</html>