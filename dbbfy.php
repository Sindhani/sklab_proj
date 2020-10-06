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
	<style>
		.story a {

			text-decoration: underline;
			font-style: italic;
		}

		.story a:hover {
			color: red;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
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
								<div class="col-8">
									<div class="dbhr" style="font-size: 20px; word-spacing: 5px; ">
										<p class="date"><span class="red">D</span><span class="green">B</span>-<span class="pink">F</span><span class="green">B</span><span class="yellow">P</span><span class="red">A</span> (
											<span class="red">D</span>ata<span class="green">B</span>ase of
											<span class="pink">F</span>ungus,
											<span class="green">B</span>acteria,
											<span class="yellow">P</span>rotozoa &
											<span class="red">A</span>lgae
											)
										</p>
									</div>
								</div>
								<div class="col-4">
									<div style="float: right;">
										<form method=post action="">
											<div class="form-row">
												<div class="col-8 text-center">
													<input type="text" class="form-control " name="search" placeholder="Search By Database"></input>
												</div>
												<div class="col text-center">
													<input type="submit" class="btn btn-outline-success" name="search_submit" value="Search">
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
											<a href=' . $row['db_link'] . '><p>' . $row['db_name'] . '</p></a>
								</div>';
						}
						echo "</div>";
					} else {
					?>
						<div class="story">
							<p>
								Warm welcome to
								DataBase of Fungus, Bacteria, Protozoa and Algae, (DB-FBPA), DB-FBPA is a comprehensive database of 2020. It includes a set of manually collected and integrated collocation of updated databases, (eg <a href="http://www.indexfungorum.org/
" title="Fungorum DataBase Link" target="_blank">Fungorum, 2020</a>, <a href="http://www.mushroom.world/mushrooms/list
" title="mushroom db 2020 Official Web Page" target="_blank">mushroom db 2020</a>, <a href="http://csdb.glycoscience.ru/bacterial/
" title="CSDB 2020" target="_blank">CSDB 2020</a>, <a href="https://portal.biobase-international.com/build_ghpywl/idb/1.0/html/bkldoc/index.html?page=source%2Fbkl%2Fproteome%2Fproteome_ypd_intro.html
" title="" target="_blank">YPD 2020</a> ) Which are well known and useable databases for scientific community, Sk-Lab has tried to include all scientific data for fast browsing, since we have developed DB-FBPA in 4 categories, Fungus, Bacteria, Protozoa and Algae, and given 3 search choices that can be browsed either by clicking on the name or images of the following species or by typing a name of the database in the search bar given above. However, we have compiled and optimized 187 databases from previously published literatures by using different search parameters.</p>
						</div>
				</div>
				<div class="post">
					<div class="container">
						<div class="row align-items-center">
							<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 text-center">
								<b style="color: #bc2731;">Browse By Name</b>
								<div class="database-names text-center"><a href="show_db.php?cat=bacteria&table=algea" title="Bacteria Databases">Bacteria </a></div>
								<div class="database-names"><a href="show_db.php?cat=fungus&table=algea" title="Fungus Databases">Fungus </a></div>
								<div class="database-names"><a href="show_db.php?cat=protozoa&table=algea" title="Protozoa Databases">Protozoa </a></div>
								<div class="database-names"><a href="show_db.php?cat=algae&table=algea" title="Algae Databases">Algae </a></div>
							</div>
							<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-9">


								<!-- Image Map Generated by http://www.image-map.net/ -->
								<img src="images/dbbfy.png" usemap="#image-map" class="img-center img-fluid">

								<map name="image-map">
									<area target="" alt="Fungus Databases" title="Fungus Databases" href="show_db.php?cat=fungus&amp;table=algea" coords="19,131,88,210" shape="rect">
									<area target="" alt="Protozoa Databases" title="Protozoa Databases" href="show_db.php?cat=protozoa&amp;table=algea" coords="417,125,493,215" shape="rect">
									<area target="" alt="Bacteria Databases" title="Bacteria Databases" href="show_db.php?cat=bacteria&amp;table=algea" coords="9,355,93,434" shape="rect">
									<area target="" alt="Algae Databases" title="Algae Databases" href="show_db.php?cat=algae&amp;table=algea" coords="413,349,491,433" shape="rect">
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