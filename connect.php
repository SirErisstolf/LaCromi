<?php
// Create connection
//$con=mysqli_connect("localhost","cer7179_erick",'Perrogat1',"cer7179_maderas");


$lat = $_GET["lat"];
$lon = $_GET["lon"];
$browserInfo = $_GET["browserInfo"];




$con = mysql_connect("localhost", "cer7179_erick", "Perrogat1");

mysql_select_db("cer7179_maderas", $con);


mysql_query("INSERT INTO sopaipa_log (time,IP,lat,lon,browser_info) VALUES (null,'',$lat, $lon,'$browserInfo') ");

/*$nbrows = mysql_num_rows($resultado);
while($r = mysql_fetch_assoc($resultado)) {
    $rows[] = $r;
}
echo '({"total":"'.$nbrows.'","results":'.json_encode($rows).'})';
mysql_free_result($resultado);
*/


?> 

<?php
/*
$servername = "localhost";
$username = "cer7179_erick";
$password = "Perrogat1";
$dbname = "cer7179_maderas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sopaipa_log (time,IP) VALUES ('','') ";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
?> 