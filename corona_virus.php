<?php
require("includes/config.php");
$query = "Select id, country_name, country_abb from countries";
$result = mysqli_query($conn, $query);
if (isset($_GET['search_submit'])) {
	if (!empty($_GET['search'])) {
		$search_country = $_GET['search'];
		$query = "Select id, country_name, country_abb from countries where country_name like '%$search_country%'";
		$result = mysqli_query($conn, $query);
	}
}


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
			</div>
			<div id="posts">
				<div class="post">
					&nbsp;
					<div class="meta">
						<div class="row">
							<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 push-left">
								<div class="h2"><span class="text-primary">E</span><span class="text-success">D</span><span class="text-danger ">B</span><span class=" text-dark">C</span><span class="text-info ">O</span>-19 <span class="text-primary">E</span>mergency <span class="text-success">D</span>ata<span class="text-danger">B</span>ase of <span class="text-dark ">C</span><span class="text-info">O</span>VID-19

								</div>
							</div>
					<div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
						<form method="get" action="" style="width: 100%;">
							<div class="form-row">
								<div class="col  col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center">
									<input type="text" class="form-control " name="search" placeholder="Search By Country">
								</div>
								<div class="col col-xm-12 col-lg-4 col-xl-4 text-center">
									<input type="submit" class="btn btn-outline-success" name="search_submit" value="Search">
								</div>
							</div>
						</form>
					</div>
				</div>
					</div>

				</div>
			</div>
			<div id="posts">

				<div class="container-fluid text-justify">
					
					
					<span class="h text-primary">E</span>mergency <span class="h4 text-success">D</span>ata<span class="h4 text-danger">B</span>ase of <span class="h4 text-dark ">C</span><span class="h4 text-info">O</span>VID-19 (EDBCO-19) urgent build database about novel coronavirus for the comportment of scientific community. A corona disease epidemic in 2019 (COVID-19) has occurred in Wuhan China since December 2019 and has quickly spread, now being reported in several countries (Yang et al., 2020), approximately 190 out of 252 nations. Screening in high-risk populations and improving measurement sensitivity can help diagnose and handle the asymptomatic infection.(Hu and Ci, 2020) to know more about we have mini-review, which would include the dally and auto-notifications after 10 minutes, numerous new reported cases for period-over-period, multiple new confirmed cases for fixed-base, and the period-over-period rate of development of new confirmed cases, the EDBCO-19 will provide confirmed cases, number of death, recovered, number of new death, number of new cases, number of critical Cases, number of active cases and density of cases per meter of each and every country by clicking country flag, the aim of this study is to provide an easy way to the scientific community about COVID-19.
				</div>
				<?php
				echo '<div class="country_flag">';



				while ($row = mysqli_fetch_assoc($result)) {


					echo '<a href="country_result.php?id=' . $row['id'] . '&name=' . $row['country_name'] . '&abb=' . $row['country_abb'] . '"><div class="card text-center mt-3" style="width: 10rem; height: 16rem;">';
					echo '<img src="https://www.countryflags.io/' . $row['country_abb'] . '/shiny/64.png" class="card-img-top">';
					echo '  <div class="card-body">';
					echo '<p>' . $row['country_name'] . '</p></a>';
					echo '</div>
		</div>';
				}
				echo '</div><br><br><br><br><br><br>';

				?>
			</div>

			<?php require('includes/footer.php'); ?>
		</div>
		<script type="text/javascript" src="js/nav.js"></script>
</body>

</html>