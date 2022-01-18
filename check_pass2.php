 <html>
 <head>
 
 
 <link rel="icon" type="image/png" href="arabicsooq.png"/>
	  <link rel="stylesheet" type="text/css" href="bootstrap.css">
	  	  <link rel="stylesheet" type="text/css" href="bootstrap-responsive.css">
  
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
</head>



<body dir = "rtl">












<?php
/////////////////////////////////////Arabic////////////////////
// Send a raw HTTP header 
//  header ('Content-Type: text/html; charset=UTF-8'); 
  // header('  <link rel="icon" type="image/png" href="arabicsooq.png"/>');
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  //echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
   
  // Right to Left issue 
 //// echo '<body dir="rtl">';
////////////////////////////////////////////////////
//echo " oubaida";
//echo "</br>";




echo '<div class="container">';

echo "<div class='row' style='background-color:#008080;height:150px;width:100%;float:right'>";
//echo "<div  class='span2' style='background-color:#008080;height:150px;width:100%;float:right'>";
echo "<div  class='span2' style='float:right'>";
echo "<img src='arabicsooq.png' width='150px' height='150px'/>";

echo "</div>";
echo "<div class='span6'  style='float:right'>";
echo "<h4>";
echo "موقع السوق العربي الالكتروني موقع متخصص بالاعلان مجانا على الانترنت";
echo "</h4>";
echo "</div>";
//echo "<div class='btn-group'";
echo "<button  onclick=window.location.href='/main_page.php'><h4>الصفحة الرئيسية</h4></button>";
//echo "</div>";
echo "</div>";

echo "</br>";


////////////connect to database/////////////
include("conect.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
echo "</br>";

/////////////////////////////////
//mysqli_set_charset('utf8'); 
//mysql_query("SET NAMES 'utf8'");
//mysql_query('SET CHARACTER SET utf8');

////////////////select_Arabic_Data/////////////////////
mysqli_query($conn,"SET CHARACTER SET utf8 ");
//mysqli
//$sql = "select * from test_table";

$sql = "SELECT user,pass FROM users";

$result = mysqli_query($conn, $sql);

//echo $result;
echo "</br>";

//mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["user"]. " - Name: " . $row["pass"]. " " . "<br>";
	  
	  if ($_POST["name"]==$row["user"] & $_POST["password"]==$row["pass"]){
		  
		  //echo "Correct";
		 // header('advertise.php');
		  header('location:advertise.php');
	
	}
	else{
		//echo "Error";
		}
	  
	  
	  
    }
} else {
    //echo "0 results";
}

///////////////////////////////////



echo "</br>";
//echo $_POST["name"];
echo "</br>";
//echo $_POST["password"];




mysqli_close($conn);
?>
</center>
</div>
</body>
</html>