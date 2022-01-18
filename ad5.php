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
   
  // Declare encoding META tag, it causes browser to load the UTF-8 charset before displaying the page. 
  //echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />'; 
    //  header('  <link rel="icon" type="image/png" href="arabicsooq.png"/>');
  // Right to Left issue 
 //// echo '<body dir="rtl">';
////////////////////////////////////////////////////
//cho " oubaida";
//echo "</br>";
//echo "هاشم عوني الحديدي";
//echo "</br>";
////////////connect to database/////////////
include("conect.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
//echo "</br>";

/////////////////////////////////
//mysqli_set_charset('utf8'); 
//mysql_query("SET NAMES 'utf8'");
//mysql_query('SET CHARACTER SET utf8');

////////////////select_Arabic_Data/////////////////////
mysqli_query($conn,"SET CHARACTER SET utf8 ");
//mysqli
//$sql = "select * from test_table";

$sql = "SELECT id,type,title,advertise,photo,country FROM main where type='خدمات'";

$result = mysqli_query($conn, $sql);


echo '<div class="container">';

echo "<div class='row' style='background-color:#008080;height:150px;width:100%;float:right'>";
//echo "<div  class='span2' style='background-color:#008080;height:150px;width:100%;float:right'>";
echo "<div  class='span2' style='float:right'>";
echo "<img src='arabicsooq.png' width='150px' height='150px'/>";

echo "</div>";
echo "<div class='span8'  style='float:right'>";
echo "<h3>";
echo "موقع السوق العربي الالكتروني موقع متخصص بالاعلان مجانا على الانترنت";
echo "</h3>";
echo "</div>";
//echo "<div class='btn-group'";
echo "<button  onclick=window.location.href='/main_page.php'><h4>الصفحة الرئيسية</h4></button>";
//echo "</div>";
echo "</div>";

echo "</br>";

echo "<center>";
//echo $result;
echo "</br><h2>";
echo "اعلانات خدمات";
echo "</h2></br>";
echo "<table>";

echo "<tr>";
echo "<th>";
echo "رقم الاعلان ";
echo "</th>";
echo "<th>";
echo "نوع الاعلان ";
echo "</th>";
echo "<th>";
echo "اسم الاعلان ";
echo "</th>";
echo "<th>";
echo "نص الاعلان ";
echo "</th>";
echo "<th>";
echo "الدولة ";
echo "</th>";
echo "<th>";
echo "الصورة";
echo "</th>";
echo "</tr>";



//mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     echo "<tr>";		
        
		
 if (empty($row["photo"])){
		 $ph="upload/arabicsooq.png";
		 $row["photo"]=$ph;
		 }
	// echo "<tr>";		
        
		
		echo "<td>".$row["id"]."</td>"."<td>".$row["type"]."</td>".
		"<td>".$row["title"]."</td>".
		"<td>".$row["advertise"]."</td>".
				"<td>".$row["country"]."</td>".
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

echo "</div>";
?>
</center>
</body>
</html>