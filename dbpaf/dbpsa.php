<?php
include("includes/config.php");
$table = "dbpsa";
$query = "Select * from $table";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
	include("includes/head-tag-elements.php");
	?>
	<meta name="description" content="The DBHR is an online data resource specifically designed for human research, which provides access to almost all latest human database on easy and friendly finding way, the classification based on data type is informative and straightforward, we assign one major category to each database, although one database may correspond to multiple categories. In what follows, we focus on databases categorized as DNA, RNA, protein, expression, pathway and disease. Dr. Shahid" />
	<meta name="robots" content="index, follow" />
</head>

<body>
	<div id="wrapper">
		<?php include("includes/header.php");	?>
		<?php include("includes/nav.php");	?>
		<div id="main-content">
			<div id="sidebar">
				<h2>Our Services</h2>
				<?php require('includes/sidenav.php'); ?>
				<div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
					<div><img width="100%" src="images/news_table.gif" /></div>
					<marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
						<p align=center>
							<?php require("includes/news.php"); ?>
						</p>
					</marquee>
				</div>
			</div>
			<div id="posts">
				<div class="post">
					<h2 class="title">Welcome to Our data base</h2>
					<div class="container">
						<div class="row">
							<div class="col">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat modi porro sit odio esse fuga eius reprehenderit impedit nemo consectetur! Maiores nobis ullam necessitatibus facilis aliquid nostrum vitae provident, itaque earum ea ad tempora corrupti? Voluptates recusandae modi, impedit facilis in asperiores aspernatur.
							</div>
						</div>
						<div class="row">
							<form action="dbpsa_result.php" method="POST">
								<div class="form-row">
									<div class="col">
									<!-- <input type="text" class="form-control" id="dbpsaid" placeholder="dbpsa_id" name="dbpsa_id"> -->
										<select class="form-control" name="select_field" id="select_field">
											<option value="any_value">Any Value</option>
											<option value="dbpsa_id">dbPSA ID</option>
											<option value="protein_name">Protein Name</option>
											<option value="protien_alias">Protein Alias</option>
											<option value="gene_name">Gene Name</option>
											<option value="gene_alias">Gene Alias</option>
											<option value="species">Species</option>
											<option value="function">Function</option>

										</select>
									</div>
									<div class="col">
										<input type="text" class="form-control" placeholder="dbPSID" name="dbpsaid">
									</div>

									<div class="col">
										<input type="submit" name="submit" class="form-control">
									</div>
									
								</div>
							</form>
							<div class="col-2">
										<button onclick="load_data()" id="example" type="submit" name="example" class="form-control">Show Example</button>
							</div>

						</div>

					</div>
				</div>
			</div>
			<?php require("includes/footer.php"); ?>
		</div>
		
		<script type="text/javascript" src="js/nav.js"></script>
	</div>
</body>

</html>