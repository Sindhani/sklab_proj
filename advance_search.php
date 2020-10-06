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
	<title>Advance Search</title>
</head>

<body>
	<div id="wrapper">
		<?php include("includes/header.php");	?>
		<?php include("includes/nav.php");	?>
		<div id="main-content">
			<div id="sidebar">
				<div class="row pt-3 pr-5 pb-1 pl-5 ">
					<div class="col">
						<h2>Our Services</h2>
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
					<h2 class="title">Welcome to Our data base</h2>

					<div class="container">
						<div class="row">
							<form style="width:100%;">
								<div class="container">
									<fieldset>
										<legend>Advance Search</legend>
										<div class="row">

											<div class="col-4">
												<div class="form-group">
													<select class="form-control" id="exampleFormControlSelect1">
														<option value=0>Any Field</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Something Here">
												</div>
											</div>
											<div class="col-4">
												<div class="form-group form-check">
													<input type="checkbox" class="form-check-input" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">Exclude</label>
												</div>
											</div>
							
						</div>
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect1">
										<option value=0>Any Field</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Something Here">
								</div>
							</div>
							<div class="col-4">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Exclude</label>
								</div>
							</div>
							</form>
						</div>
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect1">
										<option value=0>Any Field</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Something Here">
								</div>
							</div>
							<div class="col-4">
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Exclude</label>
								</div>
							</div>
							</form>
						</div>
						</fieldset>
</from>
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