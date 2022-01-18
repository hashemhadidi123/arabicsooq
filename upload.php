<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

if(isset($_POST["submit"])){
	$file=$_FILES["file"];

	$filename=$_FILES["file"]["name"];
		$filetmpname=$_FILES["file"]["tmp_name"];
			$filesize=$_FILES["file"]["size"];
				$fileerror=$_FILES["file"]["error"];
					$filetype=$_FILES["file"]["type"];
					
					$fileext=explode(".",$filename);
					$fileactext=strtolower(end($fileext));
					
					$allowed=array('jpg','jpeg','png','pdf');
					
					
					if(in_array($fileactext,$allowed)){
						
						if($fileerror===0){
							
							$filenamenew=uniqid('',true).".".$fileactext;
							$filedestination='upload/'.$filenamenew;
							move_uploaded_file($filetmpname,$filedestination);
							
							
							
							
							
							
							
							}
						}
					
}


?>
</body>
</html>