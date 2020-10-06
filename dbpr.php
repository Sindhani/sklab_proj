<?php
include "includes/config.php";
$query = "Select * from categories";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <?php
    include "includes/head-tag-elements.php";
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
        <?php include "includes/header.php"; ?>
        <?php include "includes/nav.php"; ?>
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
                        <div class="contaier">
                            <div class="row">
                                <div class="col-8">
                                    <div class="dbhr" style="font-size: 20px; word-spacing: 5px; ">
                                        <p class="date"><span class="red">D</span><span class="green">B</span>-<span class="pink">P</span><span class="green">R</span> (
                                            <span class="red">D</span>ata<span class="green">B</span>ase of
                                            <span class="pink">P</span>lants,
                                            <span class="green">R</span>esearch )
                                        </p>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="float: right;">
                                        <form method=post action="">
                                            <div class="form-row">
                                                <div class="col-9 text-center">
                                                    <input type="text" class="form-control " name="search" placeholder="Search By Database"></input>
                                                </div>
                                                <div class="col-3 text-center">
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
                    if (isset($_POST['search_submit'])) {
                        $query = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT * FROM dbpr WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
                        $response = mysqli_query($conn, $sql) or die("<br>error searching data");
                        $rows = mysqli_num_rows($response);
                        $num = mysqli_num_rows($response);
                        $num > 1 ? $num = "Databases" : $num = "Database";
                        echo "<h2> $rows $num Founded</h2><br>";
                        echo '<div class="box-wrap">';
                        while ($row = mysqli_fetch_array($response)) {
                            // echo  '<div class="box">
                            //                 <a href=' . $row['db_link'] . '><p>' . $row['db_name'] . '</p></a>
                            //     </div>';

                            echo '	<div class="card">
								  <h5 class="card-header">Database Name: ' . $row['db_name'] . '</h5>
								  <div class="card-body">
									<h5 class="card-title text-muted font-italic">DataBase Category: ' . $row['db_category'] . '</h5>
									<p class="card-text">' . $row['db_description'] . '</p>
									<a href="' . $row['db_link'] . '" target="_blank" class="btn btn-outline-info">Visit Official Website</a>
								  </div>
								</div>';
                        }
                        echo "</div>";
                    } else {
                    ?>
                        <a href="" title="" target="_blank"></a>
                        <div class="story">
                            <p>
                                Databases of plants have been an integral part of modern biology. Enormous quantities of data are produced from plants, such as protein functions, and particularly sequences, MPIM database <a href="https://webapps.plantenergy.uwa.edu.au/applications/mpimp/index.html
" target="_blank" target="_blank" title="Orsini, Oliveira et al. 2015">(Orsini, Oliveira et al. 2015)</a>, P3DB <a href="http://www.p3db.org/
" title="Gao, Agrawal et al. 2009" target="_blank">(Gao, Agrawal et al. 2009)</a>, plant RNA database and web-site incorporates knowledge from numerous independent computer-assisted searches and databases such as PsnoRNA database <a href="http://bioinf.scri.sari.ac.uk/cgi-bin/plant_snorna/home
" title="(Brown, Echeverria et al. 2003)" target="_blank">(Brown, Echeverria et al. 2003)</a>, PceRBase database <a href="http://bis.zju.edu.cn/pcernadb/index.jsp" title="(Yuan, Meng et al. 2017)" target="_blank">(Yuan, Meng et al. 2017)</a> and CSRDB <a href="http://sundarlab.ucdavis.edu/smrnas/" title="(Johnson, Bowman et al. 2007)" target="_blank">(Johnson, Bowman et al. 2007)</a>, The Pathway database is a database of biochemical pathways for metabolic, signaling, reaction and control. eg <a href="http://metacrop.ipk-gatersleben.de/apex/f?p=269:111::::::" title="(Fabregat, Jupe et al. 2018, MetaCrop" target="_blank">(Fabregat, Jupe et al. 2018, MetaCrop)</a>
                                ,PLaMoMdb <a href="http://www.byanbioinfo.org//
" title="" target="_blank">(Guan, Yan et al. 2016)</a> while plant DNA database have genomic details of different plants, such as PLAZA <a href="https://bioinformatics.psb.ugent.be/plaza/" target="_blank" title="">(Vandepoele, Van Bel et al. 2013)</a> , Planteome <a href="" target="_blank" title="http://planteome.org/">(Cooper, Meier et al. 2018)</a>,AtGDB <a href="http://www.plantgdb.org/AtGDB/" target="_blank" title=""> (Dong, Schlueter et al. 2004)</a>,According to the above query, we have collected and integrated 118 far more popular and accessible plants databases from the latest published literature and have constructed a well-known plant database (<span class="red">D</span><span class="green">B</span>-<span class="pink">P</span><span class="green">R</span>) that will be very convenient and supportive for science community. From the existing literature, we have categorized the collection of plants databases into 5 sections, DNA, RNA, Protein, Expression and Pathway, and have provided 3 forms of search options, either navigate by clicking the name, images, or search by name in the search bar.
                        </div>
                </div>
                <div class="post">
                    <div class="container">
                        <div class="row">


                        </div>
                        <div class="row align-items-center">

                            <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 text-center ">
                                <b style="color: #bc2731;">Browse By Name</b>
                                <div class="database-names"><a href="show_db.php?cat=dna&table=plant" title="DNA Databases">DNA</a></div>
                                <div class="database-names"><a href="show_db.php?cat=rna&table=plant" title="DNA Databases">RNA</a></div>
                                <div class="database-names"><a href="show_db.php?cat=protein&table=plant" title="DNA Databases">Protein</a></div>
                                <div class="database-names"><a href="show_db.php?cat=expression&table=plant" title="DNA Databases">Expression</a></div>
                                <div class="database-names"><a href="show_db.php?cat=pathway&table=plant" title="DNA Databases">Pathway</a></div>
                            </div>
                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-9 align-self-center">
                            
                                <div class="center-blocks"> <img class="img-center img-fluid" src="images/dbpr.png" usemap="#image-map" >

                                <map name="image-map">
    <area target="" alt="DNA Database" title="DNA Database" href="show_db.php?cat=dna&amp;table=plant" coords="7,85,75,168" shape="rect">
    <area target="" alt="RNA Database" title="RNA Database" href="show_db.php?cat=rna&amp;table=plant" coords="1,288,60,364" shape="0">
    <area target="" alt="Expression Database" title="Expression Database" href="show_db.php?cat=expression&amp;table=plant" coords="183,364,307,426" shape="0">
    <area target="" alt="Pathway Database" title="Pathway Database" href="show_db.php?cat=pathway&amp;table=plant" coords="406,281,498,368" shape="0">
    <area target="" alt="Protein Database" title="Protein Database" href="show_db.php?cat=protein&amp;table=plant" coords="407,70,490,162" shape="0">
</map>
                                </div>
                            </div>

                            <!-- Card 1 ended -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <?php require "includes/footer.php"; ?>
    </div>
    <script type="text/javascript" src="js/nav.js"></script>
</body>

</html>