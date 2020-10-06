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
                                        <p class="date">
                                            <span class="red text-primary">L</span><span class="green text-success">D</span><span class="pink">B</span><span class="green text-info">P</span><span class="green">R</span>(<span class="red text-primary">L</span>atest <span class="green text-success">D</span>atabase of <span class="pink">P</span>rotein, <span class="green">R</span>esearch )
                                        </p>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="float: right;">
                                        <form method=post action="">
                                            <div class="form-row">
                                                <div class="col-6 text-center">
                                                    <input type="text" class="form-control " name="search" placeholder="Search By Database"></input>
                                                </div>
                                                <div class="col-6 text-center">
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
                        $sql = "SELECT * FROM ldbpr WHERE db_name LIKE '$query' OR db_description LIKE '%$query%'";
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
                                A <span style="color: blue; font-weight: bold;">Latest</span> <span style="color: green; font-weight: bold;">Database</span> of <span style="color: deeppink; font-weight: bold;">Protein</span> <span style="color: green; font-weight: bold;">Research</span> (<span style="color: blue; font-weight: bold;">L</span><span style="color: green; font-weight: bold;">D</span><span style="color: green; font-weight: bold;">B</span><span style="color: deeppink; font-weight: bold;">P</span><span style="color: green; font-weight: bold;">R</span>) is a collection of latest Scientific data that has been raised from physical, chemical and biological information on Protein sequence, structure, Modal, domain, function, and protein‐protein interactions with others.
                                These data cannot be managed without the use of computational databases, which become a crucial part of modern biology, Database search is always the first step in the analysis of a new
                                protein, the use of several databases also helps researchers to understand the evolution, structure, and function of proteins.
                                We have collected almost all major and well known databases with short introduction, that how to illustrate their features and how they can be used effectively, such as <a href="https://www.ncbi.nlm.nih.gov/
" title="NCBI(Coordinators 2018)" target="_blank">NCBI(Coordinators 2018)</a>, <a href="https://www.uniprot.org/
" title="UniProt(Consortium 2018)" target="_blank">UniProt(Consortium 2018)</a>, <a href="https://string-db.org/cgi/about.pl
" title="STRING(Szklarczyk, Gable et al. 2019)" target="_blank">STRING(Szklarczyk, Gable et al. 2019)</a> , <a href="http://www.bindingdb.org/
" title="BindingDB (Gilson 2019)" target="_blank"> BindingDB (Gilson 2019)</a>, <a href="http://suba.latestenergy.uwa.edu.au/
" title="" target="_blank">SUBA (Hooper, Castleden et al. 2018)</a>.
Some widely known protein databases are far from being fully sued by the scientific community, which offers a starting point for researchers to explore the potential of protein databases on the Internet, therefore, we have collected 563 Databases and further categorized into 6 classes which are Protein Sequence Database, Protein Structure Database, Protein Model Database, Protein Protein and Other Interaction Database (PP&OI), Protein Pathway and Protein Expression Database. The (<span style="color: blue; font-weight: bold;">L</span><span style="color: green; font-weight: bold;">D</span><span style="color: green; font-weight: bold;">B</span><span style="color: deeppink; font-weight: bold;">P</span><span style="color: green; font-weight: bold;">R</span>) can be explored by three methods, i.e. can be browsed either by clicking on the name or images of the following species or by typing a name of the database in the search bar given above.

                        </div>
                </div>
                <div class="post">
                    <div class="container">
                        <div class="row">


                        </div>
                        <div class="row align-items-center">

                            <div class="col  col-sm-12 col-md-12 col-lg-12 col-xl-3 text-center ">
                                <b style="color: #bc2731;">Browse By Name</b>
                                <div class="database-names"><a href="show_db.php?cat=sequence&table=latest" title="Sequence Databases">Sequence</a></div>
                                <div class="database-names"><a href="show_db.php?cat=model&table=latest" title="Model Databases">Model</a></div>
                                <div class="database-names"><a href="show_db.php?cat=pathway&table=latest" title="Pathway Databases">Pathway</a></div>
                                <div class="database-names"><a href="show_db.php?cat=expression&table=latest" title="Exppression Databases">Exppression</a></div>
                                <div class="database-names"><a href="show_db.php?cat=ppoi&table=latest" title="PP&OI Databases">PP&OI</a></div>
                                <div class="database-names"><a href="show_db.php?cat=structure&table=latest" title="Structure Databases">Structure</a></div>
                            </div>
                            <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-9 align-self-center">

                                <div class="center-blocks"> <img class="img-center img-fluid" src="images/ldbpr.png" usemap="#image-map">
                                    <map name="image-map">
                                        <area target="" alt="Sequence Databases" title="Sequence Databases" href="show_db.php?cat=sequence&amp;table=latest" coords="32,57,118,151" shape="rect">
                                        <area target="" alt="Model Databases" title="Model Databases" href="show_db.php?cat=model&amp;table=latest" coords="14,306,118,433" shape="0">
                                        <area target="" alt="Pathway Databases" title="Pathway Databases" href="show_db.php?cat=pathway&amp;table=latest" coords="39,184,118,282" shape="0">
                                        <area target="" alt="PP&amp;OI Databases" title="PP&amp;OI Databases" href="show_db.php?cat=ppoi&table=latest" coords="399,318,484,432" shape="0">
                                        <area target="" alt="Expression Databases" title="Expression Databases" href="show_db.php?cat=expression&amp;table=latest" coords="394,191,492,279" shape="0">
                                        <area target="" alt="Structure Databases" title="Structure Databases" href="show_db.php?cat=structure&amp;table=latest" coords="385,42,482,152" shape="0">
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