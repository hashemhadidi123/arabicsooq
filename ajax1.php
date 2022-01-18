<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>









<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<?php
/////////////////////////////////////Arabic////////////////////
// Send a raw HTTP header 
  header ('Content-Type: text/html; charset=UTF-8'); 
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   
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


////////////////select_Arabic_Data/////////////////////
mysqli_query($conn,"SET CHARACTER SET utf8 ");
//mysqli



$sql = "SELECT id,name FROM hashem_table";

$result = mysqli_query($conn, $sql);

//echo $result;
echo "</br>";
?>





<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>


<?php
//mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . "<br>";
		echo "<option value=".$row["id"].">".$row["name"]."</option>";
    }
} else {
    echo "0 results";
}
echo "</select>";
//echo "<input type='submit' name='submit' value='Delete' />";

echo "</form>";

?>






<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>


<?php
mysqli_close($conn);

echo "</br>";



?>


</body>
</html>











