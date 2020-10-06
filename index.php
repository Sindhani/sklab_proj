<?php
include("includes/config.php");
?>

<html>
  <head>
<?php
	include("includes/head-tag-elements.php");
	?>
	<script>
	//paste this code under the head tag or in a separate js file.
	  // Wait for window load
	  $(function() {
		$(".se-pre-con").fadeOut("slow");
	  });
	</script>
<meta name="description" content="The DBHR is an online data resource specifically designed for human research, which provides access to almost all latest human database on easy and friendly finding way, the classification based on data type is informative and straightforward, we assign one major category to each database, although one database may correspond to multiple categories. In what follows, we focus on databases categorized as DNA, RNA, protein, expression, pathway and disease. Dr. Shahid"/>
	<meta name="robots" content="index, follow" />
	<title>Home Page|SKLAB </title>
  </head>

  <body>
  <div class="se-pre-con"></div>
    <div id="wrapper">
      <?php	include("includes/header.php");	?>
	 <nav> 
	  <?php	include("includes/nav.php");	?>
     </nav>

      <div id="main-content">
	   <div id="sidebar">
          <div id="categories" class="boxed">
		  <div class="row py-3">
					<div class="col">
						<h2 class="text-center">Our Services</h2>
					</div>
				</div>
            <?php require('includes/sidenav.php'); ?>
           <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
		   <div><img width="100%" src="images/news_table.gif" /></div>
           <marquee 
			behavior= "scroll" 
			direction="up" 
			onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" 
			onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" 
			height='250px' >
		   <p align=center>
			
						<?php require("includes/news.php"); ?>
			</p>
		   
		   </marquee>
           
            
           
			
          </div>
        </div>
		</div>
        <div id="posts">
          <div class="post">
		  <h2 class="title">&nbsp;</h2>
		   <div class="meta">
				<h1><p class="date">About <span style="font-size: 2.5rem" class="text-success">S</span >hahid-<span style="font-size: 2.5rem" class="text-primary">K</span>han Lab (<span style="font-size: 2.5rem" class="text-success">S</span><span style="font-size: 2.5rem" class="text-primary">K</span>han LAB)</p></h1>
			</div>
			<div class="story">
            <span class="red">H</span>ome of
			<span class="green">A</span>ll
			<span class="pink">B</span>iological
			<span class="yellow">D</span>atabase 
				(
				<span class="red" style="word-spacing: 2px;">H</span><span class="green">A</span><span class="pink">B</span><span class="yellow">D</span> 
			S-Khan ) Lab works flexibly and responsively to achieve their goals and objectives, our research is focused on the interface of chemistry and biology, based on the experience and methodology of computational structural biology, and we hope to uncover the molecular mechanism of important protein in life sciences. Currently, our aim is to collect all biological databases to one platform and give an easy way to the scientific community for all scientific data, we strongly agree that every researcher should have access to important scientific information to aid in their study and research. For that, we freely provide access on easy and friendly finding way to scientific databases and tools (i.e. resources) in various life sciences research areas including proteomics, systems biology, genomics, biochemistry, molecular biology, transcriptomics, population genetics. We need to establish the benefits that the (HABDs-K) is for our users. This will enable us to continue to provide HABDs-k as a resource, freely available to the scientific community, and hope to develop HABDS-K to best meet your requirements. As biological data accumulate at larger scales and increases at exponential paces, thanks principally to higher-throughput and lower-cost DNA sequencing technologies, the number of biological databases that have been developed to manage such data deluge is growing at ever-faster rates. The major objectives of biological databases are not only to store, organize and share data in a structured and searchable manner with the aim to facilitate data retrieval and visualization for humans, but also to provide web application programming interfaces (APIs) for computers to exchange and integrate data from various database resources in an automated manner. Therefore, developing databases to deal with gigantic volumes of biological data is a fundamentally essential task in bioinformatics. To be short, biological databases integrate enormous amounts of omics data, serving as crucially important resources and becoming increasingly indispensable for scientists from wet-lab biologists to in silico bioinformaticians. According to ‘Fernandez-Suarez XM at all’ Molecular Biology Database Collection in the journal Nucleic Acids Research, there is a sum of 1637 databases that are publicly accessible online. It should be noted, however, that such count of publicly accessible databases is conservative. In fact, there are some databases providing online services without publication in the peer-reviewed journal. We would love to hear your feedback, suggestions, or reports on errors or inconsistencies. The quickest way of reaching us is by contacting us directly on Email, Twitter. You can also use our lab's feedback form and we will direct your message to the appropriate expert. However, keep in mind we get a large volume of feedback, and although we read every message, we cannot guarantee a turnaround time.</div>
			</div>
            
          </div>
        </div>
		
      <?php require("includes/footer.php");?>
    </div>
	<script type="text/javascript" src="js/nav.js"></script>
      
  </body>
</html>
