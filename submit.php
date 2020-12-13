<?php
require_once("./connect.php");
$donor_lastname = $_GET['donor_lastname'];
$donor_firstname = $_GET['donor_firstname'];
$donor_gender = $_GET['donor_gender'];
$donor_bloodgroup = $_GET['donor_bloodgroup'];
$random_id=rand(0,100);
// echo $donor_lastname;
// echo $donor_gender;
// echo $donor_firstname;
// echo $donor_bloodgroup;
try{
$sql = "INSERT INTO DONORS (donor_id,donor_firstname,donor_lastname,donor_bloodgroup,donor_gender) VALUES (\"$random_id\",\"$donor_firstname\",\"$donor_lastname\",\"$donor_bloodgroup\",\"$donor_gender\")";
$query=$conn->prepare( $sql );
$query->execute();
header('Location: display.php');

}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>