<?php include("includes/config.php");
$stmt = "select * from team_members";
$query = mysqli_query($conn, $stmt);


?>
<html>

<head>
	<?php include("includes/head-tag-elements.php");	?>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
	    .team-img{
	        background-image: url('images/team.jpg');
	        width: 100%;
	        height: 300px;
	        background-repeat: no-repeat;
	        background-size: cover;
	        background-position: center;
	        display:flex;
	        justify-content: center;
	        align-items: center;
	           }
	    .team-img p{
	        background-color: rgba(255, 255, 255, .5);
	        border-radius: 10px;
	        
	        z-index: 2;
	        font-family: 'Anton', sans-serif;
	        color: black;
	        font-size: 2.5rem;
	        text-align: center;
	        text-transform: uppercase;
	    }
	    @media screen and (max-width: 500px){
	        .team-img p{
	            display: none;
	        }
	        
	    }
	</style>
</head>

<body>
	<div id="wrapper">
		<?php //include("includes/header.php");	?>
		<?php include("includes/nav.php");	?>
		<div id="main-content">
			<div id="sidebar">
				<div class="row pt-3 pr-5 pb-1 pl-5 ">
					<div class="row py-3">
						<div class="col">
							<h2 class="text-center">Our Services</h2>
						</div>
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
					<div class="container-fluid team-img" >
					    <!--<img class="img-fluid team-img" src="/images/team.jpg" width=100% height=200 />-->
					    <p>S-K Lab staff works flexibly & responsively to achieve their goals and objectives.</p>
					    </div>
					<!--<div class="meta">-->
					<!--	<p class="date">S Khan Lab staff works flexibly and responsively to achieve our goals and objectives. (Posted on January 20, 2020 by Dr. Shahid Ullah)</p>-->
					<!--</div>-->
				
				<div class="story">
					<div class="demo">
						<div class="container">
							<div class="row">
								<?php
								while ($row = mysqli_fetch_assoc($query)) {
									// <div class="col-md-4 col-sm-6">
									echo '
								 <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 py-5">
									<div class="our-team">
										<div class="pic">
											<img src="images/students/' . $row['team_member_picture'] . '" alt="">
										</div>
										<ul class="social">
											<li><a href="#" class="fab fa-facebook"></a></li>
											<li><a href="#" class="fab fa-google-plus"></a></li>
											<li><a href="#" class="fab fa-twitter"></a></li>
										</ul>
										<div class="team-content">
											<h3 class="title">' . $row['team_member_name'] . '</h3>
											<span>' . $row['team_member_current_position'] . '</span>
										</div>
										<div class="description">
											<div class="row">
												<div style="font-size: 12px; class="col">Research Area:</div>
												<div style="font-size: 12px;" class="col">' . $row['team_member_research_area'] . '</div>
											</div>
											<div class="row">
												<div style="font-size: 12px; class="col">Education:</div>
												<div style="font-size: 12px;" class="col">' . $row['team_member_education'] . '</div>
											</div>
											<div class="row">
												<div style="font-size: 12px; class="col">Email:</div>
												<div style="font-size: 12px;" class="col">' . $row['team_member_email'] . '</div>
											</div>
										</div>
									</div>
								</div>';
								}
								//  Above Data is taken from below site
								//  https://bestjquery.com/tutorial/our-team/demo72/
								?>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require("includes/footer.php"); ?>
	<script type="text/javascript" src="js/nav.js"></script>
</body>

</html>