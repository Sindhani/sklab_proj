<?php
include("includes/config.php");
?>
<html>

<head>
	<title>Dr. Shahid Ullah</title>
	<?php require('includes/head-tag-elements.php'); ?>

	<meta name="description" content="The Curriculum Vitae of Dr. Shahid Ullah. HABDsK Dr. Shahid Ullah DBHR Dr Shahid Ullah Skhan Group Shahid Ullah" />
	<meta charset="UTF-8" />

	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
	</link>

	<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
.degree{
	font-size: 20px;
	font-weight: bold;
	
	display: inline;
}

</style>
</head>

<body>
	<div id="wrapper">
		<?php include("includes/header.php"); ?>
		<?php include("includes/nav.php");	?>


		<div id="main-content">
			<div id="sidebar">
			<div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
                <!-- <h2 style="text-align: center;"></h2> -->
                <?php require 'includes/sidenav.php'; ?>
                <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
                    <div><img width="100%" src="images/news_table.gif" /></div>
                    <marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
                        <p align=center>

                            <?php require "includes/news.php"; ?>
                        </p>
                    </marquee>
                </div>
            </div>
			

			<div id="posts">
				<div class="post">
					<h2 class="title">&nbsp;</h2>
					<div class="meta">
						<p class="date"><h3>Curriculum Vitae of Dr. Shahid Ullah</h3></p>
						<p>&nbsp;</p>
					</div>
					<div class="story">
						<div class="container-fluid">
							<!--First Row  -->
							<div class="row pb-5">
								<div class="col align-self-center text-center">
									<h2>Dr. Shahid Ullah</h2>
								</div>
								<div class="col"><img src="images/students/shahid.jpg" class="rounded-circle" alt="Dr. Shahid Ullah" width=200 height=200 /></div>
							</div>

							<!-- Second Row -->
							<div class="row">
								

								<div class="col-xm-12 col-md-12 col-lg-12 col-xl-3 align-self-center text-center py-3">
								<i class='fas fa-graduation-cap' style='font-size:48px;'></i><h3>Education</h3>
								</div>

								<div class="col-xm-12 col-md-12 col-lg-12 col-xl-9 border-left px-4 border-success py-5 border-bottom border-top border-right">

									<div class="row py-1">

									
									<span class="degree">Postdoctoral</span><br>

										Chinese academy of Science & Shenzhen University
										Institute of Low-dimensional Materials Genome Initiative, College of Chemistry and Environmental Engineering, Shenzhen, Guangdong 518060, P. R. China</div>

									<div class="row py-1">
										<span class="degree">Doctorate of philosophy (PhD)</span><br>
										Huazhong University of Science and Technology (HUST) Wuhan
										Department of Bioinformatics & Systems Biology, Collage of life science and technology.
									</div>
									<div class="row py-1">
									<span class="degree">Master of Science in Biochemistry</span><br>
										Abdul Wali Khan University Mardan KPK Pakistan
										Department of Biochemistry
									</div>
									<div class="row py-1">
									<span class="degree">Bachelor of Science</span><br>
										Government Post Graduate College Timergara, University of Malakand and Khyber Pakhtuankhwa (KPK) Pakistan
										Department of Biochemistry
									</div>
									<div class="row py-1">
									<span class="degree">Bachelor of Education (B.Ed.)</span><br>
										University of Malakand Khybor Pakhtuankhwa (KPK) Pakistan
										Department of Education
									</div>
								</div>
							</div>



							<!-- Third Row -->

							<div class="row">
								<div class="col-xm-12 col-lg-12 col-xl-3 align-self-center text-center py-3">
								<i class='fas fa-microscope' style='font-size:48px'></i><h3>Research Interests</h3>
								</div>
								<div class="col-xm-12 col-lg-12 col-xl-9 py-5 px-4 border-left border-success border-bottom border-top border-right">
									<ul>
										<div class="row">
											<li>Computational study of Post translation modification of Protein (PTMs)</li>
										</div>
										<div class="row">
											<li>Computational study of phosphorylation related enzyme and there classification</li>
										</div>
										<div class="row">
											<li>Algorithm design for prediction of phosphorylation site and functional phosphorylation site</li>
										</div>
										<div class="row">
											<li>Computational study of high phosphorylation data</li>
										</div>
										<div class="row">
											<li>Development of methodology for analysis of genetic variation that influence the phosphorylation</li>
										</div>
										<div class="row">
											<li>Drug discovery and development, Rational drug designing (Computer-aided drug design, structure-based drug design)</li>
										</div>
										<div class="row">
											<li>Development of functional nanomaterials including carbon nanomaterials, upconversion nanoparticles, organic nanomaterials, protein-based carriers, and other multifunctional composite nanostructures, for the exploration of novel disease diagnostic and cancer therapeutic approaches.</li>
										</div>
									</ul>

								</div>
							</div>
							<!-- fourth row  -->
							<div class="row">
								<div class="col-xm-12 col-lg-12 col-xl-3 align-self-center text-center py-3">
								<i class='fas fa-award' style='font-size:48px;'></i><h3>Awards & <br>Scholarships</h3>
								</div>
								<div class="col-xm-12 col-lg-12 col-xl-9 px-4 py-5 border-left border-success border-bottom border-top border-right">
									<ul>
										<div class="row">
											<li>Appointed as a YOUNG SCIENTIST in Toronto University Canada.</li>
										</div>
										<div class="row">
											<li>Six months Research collaboration in OXFORD University England.</li>
										</div>
										<div class="row">
											<li>
												<p>Editor of Open Access Journal Of Complementary & Alternative Medicine.<br>
													<a href="https://lupinepublishers.com/complementary-alternative-medicine-journal/editorial-committee.php#">
														https://lupinepublishers.com/complementary-alternative-medicine-journal/editorial-committee.php#</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Editor of journals Nanomedicine and nanotechnology<br>
													<a href="https://medwinpublishers.com/NNOA/editorial-board.php">(https://medwinpublishers.com/NNOA/editorial-board.php)</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Editor of Acta Scientific Journals & (international open library)<br>
													<a href="https://www.actascientific.com/ASOR-EB.php">(https://www.actascientific.com/ASOR-EB.php)</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Editor of Salveregin Science Group Journals.<br>
													<a href="https://www.salveregin.com/pharmacology-international-conferences/porganising-commitee/">(https://www.salveregin.com/pharmacology-international-conferences/porganising-commitee/)</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												</p>Committee member of Bacteriology, Virology and Infectious Diseases, Tokyo Japan.<br>
												<a href="https://conferenceera.com/bacteriology-virology-infectious-diseases-conference/program-committee">(https://conferenceera.com/bacteriology-virology-infectious-diseases-conference/program-committee)</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Member of American Society for Biochemistry and Molecular Biology (ASBMS)<br>
													<a href="https://society.asbmb.org">https://society.asbmb.org</a></p>
											</li>
										</div>
										<div class="row">
											<li>
												<p>PhD scholarship awarded by Chinese government scholarship program (CSC).<br>
													<a href="http://iso.hust.edu.cn/info/1073/1235.htm">(http://iso.hust.edu.cn/info/1073/1235.htm)</a>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Got excellent student award among 60 thousand international students at HUST.<br>
													<a href="http://iso.hust.edu.cn/info/1080/1332.htm">(http://iso.hust.edu.cn/info/1080/1332.htm)</a>
											</li>
										</div>
										<div class="row">
											<li>
												<p>Master Scholarship awarded by Italian government
											</li>
										</div>
										<div class="row">
											<li>
												<p>Bachelor scholarship from Pakistani government
											</li>
										</div>
										<div class="row">
											<li>
												<p>Six month computer certificate scholarship awarded by Pakistani government
											</li>
										</div>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		<?php require("includes/footer.php"); ?>
	</div>

	<script type="text/javascript" src="js/nav.js"></script>
</body>

</html>