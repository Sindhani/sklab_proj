<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <?php
    include "includes/head-tag-elements.php";
    ?>
    <title>CDB-PTMs|SKLAB</title>
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
                                <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 push-left">
                                    <div class="dbhr" style="font-size: 20px; word-spacing: 5px; ">
                                        <p class="date">
                                            <span class="red text-primary">C</span><span class="green text-success">D</span><span class="pink">B</span><span class="yellow text-info">-P</span><span class="blue text-info">T</span><span class="green text-info">M</span><span class="green text-success">s</span> (<span class="red text-primary">C</span>ompherehensive <span class="green text-success">D</span>ata<span class="pink">B</span></span>ase  of<span class="yellow"> P</span>ost<span class="orange">T</span>ranslation <span class="pink">M</span>odifacation<span class="green">s</span> )
                                        </p>

                                    </div>
                                </div>
                                <div class="col col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <form method="get" action="" style="width: 100%;">
                                        <div class="form-row">
                                            <div class="col  col-xm-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-center">
                                                <input type="text" class="form-control " name="search" placeholder="Search By DB">
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
                    <?php
                    if (isset($_POST['search_submit'])) {
                        $query = mysqli_real_escape_string($conn, $_REQUEST['search']);
                        var_dump($query);
                        $sql = "SELECT * FROM co19pdb WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
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
                                Post-translational modifications (PTMs) are an important source of protein regulation; they fine-tune the function, localization, and interaction with other molecules of the majority of proteins and are partially responsible for their multifunctionality. PTMs increase the functional diversity of the proteome by the covalent addition of functional groups or proteins, proteolytic cleavage of regulatory subunits, or degradation of entire proteins. These modifications include phosphorylation, glycosylation, ubiquitination, methylation, acetylation, palmitoylation, sumoylation, and succinylation and influence almost all aspects of normal cell biology and pathogenesis. Usually, proteins have several potential modification sites, and their patterns of occupancy are associated with certain functional states. These patterns imply cross talk among PTMs within and between proteins, the majority of which are still to be discovered. Therefore, a lots of works have been done by bio-scientist in the form of wit lab research as well as computational work, numbers of well-known databases have been published such as, Phospho.ELM, http://phospho.elm.eu.org/about.html. PTMD http://ptmd.biocuckoo.org/, etc. To know more about, we have provided 53 PTMs databases of eight categories on a simple and fast way to find, user can search by clicking on the name or picture of the categories or search the name in the above search query.
                            </p>

                        </div>
                </div>
                <div class="post">
                    <div class="container">

                        <div class="row align-items-center">
                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center">

                                <div class="center-blocks">
                                    <img class="img-center img-fluid" src="images/cdbptm.png" usemap="#image-map">

                                    <map name="image-map">
                                        <area target="" alt="glycosylation" title="Glycosylation" href="show_db.php?cat=glycosylation&table=cdbptms" coords="25,89,143,90,138,191,23,189" shape="poly">
                                        <area target="" alt="palmitoylation" title="Palmitoylation" href="show_db.php?cat=palmitoylation&table=cdbptms" coords="238,78,385,78,381,160,238,158" shape="poly">
                                        <area target="" alt="phosphorylation" title="Phosphorylation" href="show_db.php?cat=phosphorylation&table=cdbptms" coords="432,105,433,90,541,90,541,215,434,217" shape="poly">
                                        <area target="" alt="methylation" title="Methylation" href="show_db.php?cat=methylation&table=cdbptms" coords="461,297,565,300,561,402,462,400" shape="poly">
                                        <area target="" alt="succinylation" title="Succinylation" href="show_db.php?cat=succinylation&table=cdbptms" coords="453,487,567,488,564,595,452,594" shape="poly">
                                        <area target="" alt="acetylation" title="Acetylation" href="show_db.php?cat=acetylation&table=cdbptms" coords="247,518,349,519,347,624,247,625" shape="poly">
                                        <area target="" alt="sumoylation" title="Sumoylation" href="show_db.php?cat=sumoylation&table=cdbptms" coords="1,474,135,473,135,592,0,593" shape="poly">
                                        <area target="" alt="ubiquitination" title="Ubiquitination" href="show_db.php?cat=ubiquitination&table=cdbptms" coords="17,289,133,291,131,408,15,406" shape="poly">
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
    <script>
        $(function() {

            $('img[usemap]').imageMap();
        });
    </script>
</body>

</html>