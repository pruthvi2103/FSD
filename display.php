<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
			rel="stylesheet"
        />
        <style>
			body {
				background-color: #e5f3ff;
			}
            .center-grid{
                height:80vh;
                display:grid;
                place-items:center;
                
                
            }
            </style>
</head>
<body>
    <?php
    require("./navbar.php");
    ?>
    <div class="container">
        <div class="center-grid">
<?php
require("./connect.php");
$sql = "SELECT * FROM DONORS";
$query=$conn->prepare( $sql );
$query->execute();
$results = $query->fetchAll( PDO::FETCH_ASSOC );        
// echo($results[0]['donor_lastname']);
echo ("<table class=\"table table-success table-striped table-hover\">");
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
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
