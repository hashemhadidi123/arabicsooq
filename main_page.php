<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="scrolling-nav.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="arabicsooq.png"/>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

  </head>

  <body  dir ='rtl'>

    <!-- Navigation -->
    
    <div class="container">
        
        

    


          
          <div class='  bg-primary' style='background-color:#338DFF;height:150px;width:100%;float:right'>

          <div class=" card" style='background-color:#338DFF;'>
                    <div class="row " style='background-color:#338DFF;'>
<div  class='span2' style='float:right;width:150px;height:150px;'>
<img src='arabicsooq.png' width='150px' height='150px'/>

</div>

          
<div class='span7' style='float:right;padding-top: 30px;'>
<center>
<h4>
    
موقع السوق العربي الالكتروني موقع متخصص بالاعلان مجانا على الانترنت
</h4>
</center>
</div>
          
          
          




          
<div class='span3 ' style='float:left;padding-bottom:: 0px;'>

   
       
    <button   style='color:black;width:120px;background-color:silver;' onclick=window.location.href='/check_pass.php'><h4>اضافةاعلان</h4></button>

     
</div>
              
        </div>
</div>              

          
          </div>






  <center>

</br>








<?php 
include("conect.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


mysqli_query($conn,"SET CHARACTER SET utf8 ");


$sql = "UPDATE counter SET count=count+1 WHERE id=1";

$result = mysqli_query($conn, $sql);




mysqli_close($conn);





      ?>  
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
        
              

<div class="row-fluid">

<div class="span4"></div>
<div class="span4">
<button style="width:200px" class="btn btn-primary" onclick="window.location.href='/show_advertise.php'"><h2>جميع الاعلانات</h2></button>
</div>
<div class="span4"></div>
</div>

</br>

<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button  style="width:200px" class="btn btn-primary"  onclick="window.location.href='/ad2.php'"><h2>اعلانات عقارات</h2></button>
</div>
<div class="span4"></div>
</div>

</br>



<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button style="width:200px"  class="btn btn-primary" onclick="window.location.href='/ad3.php'"><h2>اعلانات مركبات</h2></button>
</div>
<div class="span4"></div>
</div>


</br>

<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button style="width:200px" class="btn btn-primary"  onclick="window.location.href='/ad4.php'"><h2>اعلانات وظائف</h2></button>
</div>
<div class="span4"></div>
</div>



</br>

<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button  style="width:200px" class="btn btn-primary"  onclick="window.location.href='/ad5.php'"><h2>اعلانات خدمات</h2></button>
</div>
<div class="span4"></div>
</div>


</br>

<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button style="width:200px" class="btn btn-primary"  onclick="window.location.href='/ad6.php'"><h2>اعلانات أخرى</h2></button>
</div>
<div class="span4"></div>
</div>

</br>


<div class="row-fluid">
<div class="span4"></div>
<div class="span4">
<button style="width:200px" class="btn btn-primary" onclick="window.location.href='/info.php'"><h2>معلومات</h2></button>
</div>
<div class="span4"></div>
</div>

</div>
<?php
	//echo $_SESSION['data'];
	?>
</br>


              
              
              
              
              
              
          </div>
        </div>

    </section>

    
</center>


    <!-- Footer -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="jquery.js"></script>
    <script src="bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery.easing.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="scrolling-nav.js"></script>
    </div>
  </body>

</html>
