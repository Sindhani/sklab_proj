<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$fh = null;
if (isset($_GET['id'])) {
    $q = $_GET['id'];
}
require "includes/config.php";
include "includes/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php require "includes/head-tag-elements.php"; ?>
</head>

<body>
    <div id="wrapper">
        <?php require "includes/header.php";
        require "includes/nav.php"; ?>

        <div id="main-content">
            <div id="sidebar">
                <div id="categories" class="boxed">
                    <h2 id="top">Our Services</h2>
                    <?php require 'includes/sidenav.php'; ?>
                    <!-- <div style="border:2px solid silver; height: auto; width:100%; border-radius: 10px; margin-top: 10px; margin-bottom: 10px;">
                        <div><img width="100%" src="images/news_table.gif" /></div>
                        <marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 6, 0);this.start();" height='250px'>
                            <p align=center>

                                <?php require "includes/news.php"; ?>
                            </p>
                        </marquee>
                    </div> -->

                    <div class="vertical-menu">
                        <a href="#ProteinName">Protein Name</a>
                        <a href="#Sequence">Sequence</a>
                        <a href="#PhosphorylationSites">Phosphorylation Sites</a>
                        <a href="#keywords">keywords</a>
                        <a href="#top">Go to Top <i class='fas fa-arrow-alt-circle-up' style='padding-left: 5px; font-size:24px'></i></a>
                    </div>


                </div>
            </div>
            <div id="posts">
                <div class="post">
                    <h2 class="title">List of Public Databases</h2>
                    <div class="meta">
                        <p class="date">Posted on January 20, 2020 by Dr. Shahid Ullah</p>

                    </div>
                    <div class="story">
                        </p>
                    </div>
                </div>
            </div>
            <div id=posts>
            
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if (isset($_GET['id'])) {
                                // $q = $_GET['id'];

                                // $url = "https://www.uniprot.org/uniprot/" . $q . ".xml";
                                $response = curl_start($url);
                                // curl_end(curl_start($url));
                                // get_curl_data($response);

                                $file_handler = simplexml_load_file("p12345.xml");
                            }

                            ?>

                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Content</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td id="dbPAF">dbPAF ID</td>
                                        <td><?php if (isset($_GET['id'])) {
                                                $q = $_GET['id'];
                                                echo "$q";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="Uniprot">Uniprot Accession</td>
                                        <td><?php if (isset($_GET['id'])) {
                                                $q = $_GET['id'];

                                                $url = "https://www.uniprot.org/uniprot/" . $q . ".xml";
                                                $response = curl_start($url);

                                                $fh = get_curl_data($response);
                                                curl_end(curl_start($url));

                                                //  $file_handler = simplexml_load_file("p12345.xml");
                                                // parsexmlfile($file_handler,"protein");

                                                //  $fh = simplexml_load_file($xml);
                                                //  $fh = simplexml_load_file($xml);
                                                //  $fh = simplexml_load_string($xml);

                                                $accession = $fh->entry->accession;
                                                foreach ($accession as $id) {
                                                    echo ("<a href='https://www.uniprot.org/uniprot/" . $id . " ' target=_blank>$id<a/>; ");
                                                }
                                            } ?></td>
                                    </tr>
                                    <tr>
                                        <td id="ProteinName">Protein Name</td>
                                        <td>
                                            <?php
                                            $protein = $fh->entry->protein->recommendedName->children();
                                            echo ($protein->fullName); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="ProteinSynonyms/Alias">Protein Synonyms/Alias</td>
                                        <td><?php
                                            $protein = $fh->entry->protein->children();
                                            foreach ($protein as $altName) {

                                                echo ($altName->fullName . "<br>");
                                            }

                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td id="GeneName">Gene Name</td>
                                        <td><?php
                                            $gene = $fh->entry->gene;
                                            echo ($gene->name); ?></td>
                                    </tr>
                                    <tr>
                                        <td id="Organism">Organism</td>
                                        <td><?php

                                            $organism = $fh->entry->organism->children();
                                            echo ("Scientific: " . $organism->name[0] . " ( ");
                                            echo ("{$organism->name[1]} )");
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td id="NCBITaxaID">NCBI Taxanomy ID</td>
                                        <td><?php

                                            $taxid = $fh->entry->organism->children();
                                            echo "<a href=https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?lvl=0&id=" .
                                                $taxid->dbReference['id'] . " target= '_blank'>"
                                                . $taxid->dbReference['id'] . "</a>";

                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td id="FunctionalDescription">Functional Description</td>
                                        <td>
                                            <?php
                                            $ftn = $fh->entry->comment[0];

                                            echo  $ftn->text[0];

                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="Sequence">Sequence</td>
                                        <td style="overflow: hidden;">
                                            <?php
                                            echo "<pre>";
                                            $sequence = $fh->entry->sequence;
                                            $string =  (string) $sequence;
                                            $string1 = wordwrap($string, 10, "  ", true);
                                            $string2 = wordwrap($string1, 90, "\n", true);
                                            echo $string2;


                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="PhosphorylationSites">Phosphorylation Sites</td>
                                        <td>
                                            <?php

                                            $sql = "SELECT * from dbpsa where uniprot_id = '$q' order by uniprot_id asc limit 20";
                                            $sql2 = "SELECT * from dbpsa where uniprot_id = '$q' order by uniprot_id asc";
                                            $result = mysqli_query($conn, $sql);
                                            $result2 = mysqli_query($conn, $sql2);
                                            echo '<div class="text-center">';
                                            echo 'dbPAF PTMs: ' . mysqli_num_rows($result2) . '<a href="#" data-toggle="modal" data-target="#exampleModalCenter"> (View All)</a>';
                                            echo "</div>";
                                            // Model Starts here
                                            echo '
                                            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Phosphorylation Sites</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">';
                                            echo "<table width=700px>";
                                            echo <<< TABLE
                                              <tr class="bg-warning"  >
                                                  <td>Position</td>
                                                  <td>Peptides</td>
                                                  <td>Source</td>
                                                  <td>References ( PMIDs )</td>
                                              </tr>
                                          TABLE;

                                            while ($row = mysqli_fetch_array($result2)) {
                                                echo "<tr>";
                                                echo "<td>{$row['position']}</td>";
                                                $string = $row['peptide_sequnce'];

                                                $color_string = str_replace("p", "<b><font color=red>p</font></b>", $string);

                                                echo "<td>{$color_string}</td>";
                                                echo "<td></td>";

                                                echo "<td><a href='https://www.ncbi.nlm.nih.gov/pubmed/{$row['pmid']}' target='_blank'>{$row['pmid']}</a></td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";

                                            echo '</div>
                                                  </div>
                                              </div>
                                            </div>
                                            ';
                                            // Modal Ends here
                                            echo "<table>";
                                            echo <<< TABLE
                                        <tr class="bg-warning"  >
                                            <td>Position</td>
                                            <td>Peptides</td>
                                            <td>Source</td>
                                            <td>References ( PMIDs )</td>
                                        </tr>
                                    TABLE;

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>{$row['position']}</td>";
                                                $string = $row['peptide_sequnce'];

                                                $color_string = str_replace("p", "<b><font color=red>p</font></b>", $string);

                                                echo "<td>{$color_string}</td>";
                                                echo "<td></td>";

                                                echo "<td><a href='https://www.ncbi.nlm.nih.gov/pubmed/{$row['pmid']}' target='_blank'>{$row['pmid']}</a></td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";


                                            ?>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td id="keywords">Keywords</td>
                                        <td>
                                            <?php
                                            $keyword = $fh->entry->keyword;
                                            foreach ($keyword as $child) {
                                                echo "<a href='https://www.uniprot.org/keywords/" . $child['id'] . "' target='_blank'>" . $child['id'] . "</a> -- " . $child . "<br>";
                                            };
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="interPro">InterPro</td>
                                        <td>
                                            <?php
                                            $dbReference = $fh->entry->dbReference;


                                            ?>
                                        </td>
                                    </tr>


                            </table>
                        </div>
                    </div>
                </div>

                
            </div>

            <?php require 'includes/footer.php'; ?>
        </div>
        <script type="text/javascript" src="js/nav.js"></script>
    </div>
</body>

</html>