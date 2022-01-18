<?php
/////////////////////////////////////Arabic////////////////////
// Send a raw HTTP header 
  header ('Content-Type: text/html; charset=UTF-8'); 
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   
  // Right to Left issue 
 //// echo '<body dir="rtl">';
////////////////////////////////////////////////////
echo " oubaida";
echo "</br>";
echo "هاشم عوني الحديدي";
echo "</br>";
////////////connect to database/////////////
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test_hashem";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "</br>";

/////////////////////////////////
//mysqli_set_charset('utf8'); 
//mysql_query("SET NAMES 'utf8'");
//mysql_query('SET CHARACTER SET utf8');

////////////////select_Arabic_Data/////////////////////
mysqli_query($conn,"SET CHARACTER SET utf8 ");
//mysqli
//$sql = "select * from test_table";

//$sql = "SELECT id,name FROM hashem_table";

echo "</br>";

echo $_POST["name"];

echo "</br>";

$sql = "INSERT INTO hashem_table (name)
VALUES ('".$_POST["name"]."')";

$result = mysqli_query($conn, $sql);

//echo $result;
echo "</br>";

//mysqli_query($conn, $sql);
//if (mysqli_num_rows($result) > 0) {
    // output data of each row
  //  while($row = mysqli_fetch_assoc($result)) {
    //    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . "<br>";
    //}
//} else {
  //  echo "0 results";
//}



//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

///////////////////////////////////

mysqli_close($conn);

echo "</br>";


?>