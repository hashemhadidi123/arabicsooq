
<body dir = "rtl">
<center>

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

$sql = "SELECT id,type,title,advertise,photo FROM main";

$result = mysqli_query($conn, $sql);

//echo $result;
echo "</br>";
echo "<table>";


//mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     echo "<tr>";		
        
		
		echo "<td>".$row["id"]."</td>"."<td>".$row["type"]."</td>".
		"<td>".$row["title"]."</td>".
		"<td>".$row["advertise"]."</td>".
		"<td>".
		"<img src='".$row["photo"]."' style='width:150px;height:160px;'>"
		."</td>".
		 " " . "<br>";
		
		
		
echo "</tr>";		
    }
} else {
    echo "0 results";
}

///////////////////////////////////


echo "</table>";
mysqli_close($conn);

echo "</br>";


?>
</center>
</body>