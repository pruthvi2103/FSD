<?php
require("./connect.php");
$sql = "SELECT * FROM DONORS";
$query=$conn->prepare( $sql );
$query->execute();
$results = $query->fetchAll( PDO::FETCH_ASSOC );        
echo($results[0]['donor_lastname']);
echo ("<table>");
echo("<th> First Name </th>");
echo("<th> Last Name </th>");
echo("<th> Blood Group </th>");
echo("<th> Gender </th>");
if (is_array($results) || is_object($results)){
foreach ($results as $entry){
echo "<tr>";
echo "<td>";
echo $entry['donor_firstname'];
echo "</td>";
echo "<td>";
echo $entry['donor_lastname'];
echo "</td>";
echo "<td>";
echo $entry['donor_bloodgroup'];
echo "</td>";
echo "<td>";
echo $entry['donor_gender'];
echo "</td>";
echo "</tr>";
}
}
echo "</table/>"
?>