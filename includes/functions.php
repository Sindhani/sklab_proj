<?php
require "includes/config.php";
function table_start()
{
  echo '<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">dbPSAID</th>
            <th scope="col">UniProt ID</th>
            <th scope="col">Specie</th>
            <th scope="col">PMID</th>
            <th scope="col">Protien</th>
            <th scope="col">Enzyme</th>
          </tr>
        </thead>
          <tbody>
        ';
}
function table_end()
{
  echo "</tbody></table>";
}

function table_data($row, $conn)
{
  $dbpsaid = $row['dbpsa_id'];
  $uniprot_id = $row['uniprot_id'];
  $species = $row['species'];
  $pmid = $row['pmid'];

  $sql = "SELECT * FROM dbpsa where uniprot_id = '$uniprot_id'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    // echo $row['uniprot_id']."<br>";
  }

  echo "<tr>";
  printf("<td><a href=view.php?id=" . $uniprot_id . ">%s</a></td>", $dbpsaid);
  printf("<td>%s</td>", $uniprot_id);
  printf("<td>%s</td>", $species);
  printf("<td>%s</td>", $pmid);
  printf("<td>%s</td>", "Null");
  printf("<td>%s</td>", "Null");
  echo "</tr>";
}
function curl_start($url)
{
  $header[] = "Accept: application/xml";
  $header[] = "Content-Type: application/xml";
  $header[] = "Cache-Control: max-age=0";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",

  ));
  return $curl;
}


function get_curl_data($curl){
  $response = curl_exec($curl);
  $err = curl_error($curl);
  // echo '<table class="table table-bordered" width="80%">
  //       <thead>
  //         <tr>
  //           <th scope="col">Tag</th>
  //           <th scope="col">Content</th>
  //           </tr>
  //       </thead>
  //         <tbody>
  //       ';
  if (!$err) {
    $xml = simplexml_load_string($response);
    // echo "<pre>";
    // print_r($xml);
    return $xml;
    // parse_xml($xml);
    
  } else {
    echo "Error Loading Data";
  }
  // echo "</table>";
}


function curl_end($curl){
  return curl_close($curl);
}

function parse_xml($object){
  $accession = $object->entry->accession;
  echo "<tr><td>Uniprot Accession</td><td>";
  foreach ($accession as $value){
    echo $value.",";
  }
  $gene = $object->entry->gene->name;
  echo "</td></tr>";
  echo "<tr><td>Gene Name</td><td>";
  echo "$gene";
  echo "</td></tr>";
  $Organism = $object->entry->organism;
  foreach ($Organism->children() as $value){
    
  }
echo "<tr><td>Nodes Name</td><td>";
echo "</td></tr>";

// echo "<tr><td>Sequence</td><td class='text-wrap'>";
// $sequence = $object->entry->sequence;
// printf($sequence);
// echo "</td></tr>";

}

function parsexmlfile($fh, $tags= null){
  // echo '<table class="table table-hover" width="80%">
  // <thead>
  //   <tr>
  //     <th scope="col">Tag</th>
  //     <th scope="col">Content</th>
  //     </tr>
  // </thead>
  //   <tbody>
  // ';
  $xml = $fh;
  $tag = $tags;
  
  // echo "<tr>";  
  echo "<pre>";
  $nodes = $fh->entry->children();
  //var_dump($nodes);
  $protein = $fh->entry->$tag->recommendedName->children();
  echo ($protein->fullName);
  


}