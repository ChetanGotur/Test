<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
</head>
<body>
<?php
/*$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','root','test') or die('Unable To connect');
    $sql = "insert into images (image) values(?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }
    mysqli_close($con);
}*/
$con = mysql_connect('localhost','root','root') or die('Unable To connect');
 mysql_select_db('test',$con);
if(isset($_POST['upload'])){
      



        foreach ($_FILES['images']['name'] as $f => $name) {
		 $filename = $_FILES['images']['name'];
		 //$fileext = pathinfo($fileName, PATHINFO_EXTENSION);
		// $fileext = strtolower($fileName);
		
		
    }
	foreach ($filename as $key => $value) {
			
			mysql_query("insert into images(image) values('".$value."')");
		}
	
	//$upload[] = ($_FILES['images']['name']);
    //  print_r($upload);
   }
?>
  <form method="POST" action="index.php" enctype="multipart/form-data">        
        <input type="file" name="images[]" multiple="multiple">
        <input type="submit" name="upload" value="upload">
    </form>

</body>
</html>