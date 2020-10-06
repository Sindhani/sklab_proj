<?php
include("includes/config.php");
$query = "Select * from categories";
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
				<div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
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
					<h2 class="title">&nbsp;</h2>

					<div class="meta">
						<div class="container">
							<div class="row">
								<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 push-left">
									<div class="dbhr" style="font-size: 20px; word-spacing: 5px; ">
										<p class="date"><span class="red">D</span><span class="green">B</span><span class="pink">H</span><span class="yellow">R</span> (
											<span class="red">D</span>ata<span class="green">B</span>ase of
											<span class="pink">H</span>uman
											<span class="yellow">R</span>esearch)</p>
									</div>
								</div>
								<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<form method="post" action="" style="width: 100%;">
										<div class="form-row">
											<div class="col  col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center">
												<input type="text" class="form-control " name="search" placeholder="Search DBHR">
											</div>
											<div class="col col-xm-12 col-lg-4 col-xl-4 text-center">
												<input type="submit" class="btn btn-outline-success" name="submit" value="Search">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				if (isset($_POST['submit'])) {
					$query = mysqli_real_escape_string($conn, $_POST['search']);
					$sql = "SELECT * FROM db_table WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
					
					$response = mysqli_query($conn, $sql) or die("<br>error searching data");
					
					$rows = mysqli_num_rows($response);
					echo "<h2> $rows Database(s) Founded</h2><br>";
					echo '<div class="box-wrap">';
					while ($row = mysqli_fetch_array($response)) {
						echo  '<div class="box">
											<a href=' . $row['db_link'] .' target="_blank"><p>' . $row['db_name'] . '</p></a>
								</div>';
					}
					echo "</div>";
				} else {
				?>

					<div class="story">
						<p style="text-align:justify;">
							The biological databases are libraries of life sciences information, provides access to genomic data,(Wheeler, Church et al., 2002) analysis of genetic diseases, genetic genealogy or genetic fingerprinting for criminology (Ulrich-Merzenich, Panek et al. 2009), physical, chemical and biological information on sequence, domain structure, function, three dimensional structure and protein-protein interactions (Cho, Park et al. 2002), relationships between medical conditions, symptoms, and medications (Rebhan, Chalifa-Caspi et al. 1997), and information on cell signaling pathways (Bauer‐Mehren, Furlong et al. 2009), is the great contribution by the scientific community.
							We are therefore bringing together a set of human-related database that are commonly used and currently available. As database classification based on data type is insightful, we allocate one major category to each database, although a single database can lead to multiple categories. In what follows, the emphasis is on databases classified as <b class="cat" style="color: #ff1b2d;">DNA Database</b>, <span><b class="cat" style="color: #ff1b2d;">RNA Database</b>, <b class="cat" style="color: #ff1b2d;">Protein Database</b>, <b class="cat" style="color: #ff1b2d;">Expression Database</b>, <b class="cat" style="color: #ff1b2d;">Pathway Database</b> and <b class="cat" style="color: #ff1b2d;">Disease Database</b>. The (DBHR) can be explored in three ways, i.e. it can be searched either by clicking on the name or the picture or by entering the name of the database in the search bar above.

						</p>

					</div>
					<div class="post">
						<div class="container">

							<div class="row align-items-center">
								<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 text-center">
									<b style="color: #bc2731;" class="text-center">Browse By Name</b>
									<div class="database-names"><a href="show_db.php?cat=dna&table=" title="DNA Databases">DNA</a></div>
									<div class="database-names"><a href="show_db.php?cat=rna&table=" title="DNA Databases">RNA</a></div>
									<div class="database-names"><a href="show_db.php?cat=protein&table=" title="DNA Databases">Protein</a></div>
									<div class="database-names"><a href="show_db.php?cat=expression&table=" title="DNA Databases">Expression</a></div>
									<div class="database-names"><a href="show_db.php?cat=pathway&table=" title="DNA Databases">Pathway</a></div>
									<div class="database-names"><a href="show_db.php?cat=diseases&table=" title="DNA Databases">Disease</a></div>
								</div>
								<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-9 text-center">

									<b style="color: blue; " class="text-center">Browse by Expression</b>
									<img src="images/imagemap3.png" usemap="#image-map" class="img-center img-fluid">
									<map name="image-map">
										<area target="" alt="DNA" title="DNA" href="show_db.php?cat=dna&table=" coords="62,126,7,14" shape="rect">
										<area target="" alt="RNA" title="RNA" href="show_db.php?cat=rna&table=" coords="7,164,61,278" shape="rect">
										<area target="" alt="Protein" title="Protein" href="show_db.php?cat=protein&table=" coords="6,311,82,416" shape="rect">
										<area target="" alt="Disease" title="Disease" href="show_db.php?cat=diseases&table=" coords="395,317,478,427" shape="rect">
										<area target="" alt="Pathway" title="Pathway" href="show_db.php?cat=pathway&table=" coords="397,173,483,276" shape="rect">
										<area target="" alt="Expression" title="Expression" href="show_db.php?cat=expression&table=" coords="384,13,495,136" shape="rect">
										<area target="" alt="DBHR" title="DBHR" href="#" coords="167,148,287,280" shape="rect">
									</map>
								</div>
								<!-- Card 1 ended -->
							</div>
						</div>
					</div>
				<?php } ?>



			</div>


		</div>
		<?php require("includes/footer.php"); ?>
	</div>
	<script type="text/javascript" src="js/nav.js"></script>
</body>

</html>