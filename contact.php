<?php


include("includes/config.php");
if (isset($_POST['submit'])) {
	$visitor_name = $_POST['visitor_name'];
	$visitor_email = $_POST['visitor_email'];
	$visitor_email_subject = $_POST['visitor_email_subject'];
	$visitor_message = wordwrap($_POST['visitor_message'], 70);
	$to = "drshahid@habdsk.org";
	$to = "dridechina@gmail.com";

	$headers = "From: $visitor_email" . "\r\n" .
		"CC: dridechina@gmail.com";

	if (mail($to, $visitor_email_subject, $visitor_message, $headers)) {
		echo "true";
	} else {
		echo "false";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<?php
	include("includes/head-tag-elements.php"); ?>

	<title>Contact US|SKLAB</title>
</head>

<body>
	<div id="wrapper">
		<?php include("includes/header.php");	?>
		<?php include("includes/nav.php");	?>


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
					<marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
						<p align=center>

							<?php require("includes/news.php"); ?>
						</p>

					</marquee>




				</div>
			</div>
			<div id="posts">
				<div class="post">
					<h2 class="title">
						<h2 class="title">&nbsp;</h2>
					</h2>
					<div class="meta">
						<p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>

					</div>
					<div class="story">
						<p>
							We are currently recruiting master, and undergraduate students. If you have any interest please contact us.
						</p>
						<p><i class="fas fa-mobile-alt fa-lg"></i> +1 424 393 8809</p>
						<p><i class="fas fa-envelope fa-lg"></i> shahidullah@hust.edu.cn, shahid@szu.edu.cn</p>
						<div class="contact1">
							<div class="container-contact1">
								<div class="contact1-pic js-tilt" data-tilt>
									<img src="images/img-01.png" alt="IMG">
								</div>

								<form class="contact1-form validate-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
									<span class="contact1-form-title">
										Get in touch
									</span>

									<div class="wrap-input1 validate-input" data-validate="Name is required">
										<input class="input1" type="text" name="visitor_name" placeholder="Name" required>
										<span class="shadow-input1"></span>
									</div>

									<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
										<input class="input1" type="text" name="visitor_email" placeholder="Email" required>
										<span class="shadow-input1"></span>
									</div>

									<div class="wrap-input1 validate-input" data-validate="Subject is required">
										<input class="input1" type="text" name="visitor_email_subject" placeholder="Subject" required>
										<span class="shadow-input1"></span>
									</div>

									<div class="wrap-input1 validate-input" data-validate="Message is required">
										<textarea class="input1" name="visitor_message" placeholder="Message" required></textarea>
										<span class="shadow-input1"></span>
									</div>

									<div class="container-contact1-form-btn">
										<button name="submit" class="contact1-form-btn">
											<span>
												Send Email
												<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
											</span>
										</button>
									</div>
								</form>
							</div>
						</div>

					</div>

				</div>
				<!-- Card 1 ended -->
			</div>
		</div>
		<?php require("includes/footer.php"); ?>
	</div>

	<script src="js/nav.js"></script>

</body>

</html>