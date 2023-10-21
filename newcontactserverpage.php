<?php
require "./database/db-config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: New Contact ::</title>
</head>
<body>
<?php
extract($_POST);

$sqlquery= "insert into contactbookmaster(name,email,dateofbirth,gender,phone,imagepath) values('$uname','$email','$dateofbirth','$gender','$phone',NULL)";

mysql_query($sqlquery) or die( mysql_error());

$rid = mysql_insert_id();  /// or ONLY AI COLS TABLS...

$srcpath = $_FILES["imagepath"]["tmp_name"];
$trgpath = "./profileimages/$rid.png";

$imgdbpath = "profileimages/$rid.png";

move_uploaded_file($srcpath,$trgpath);

$sqlquery =  "update contactbookmaster SET imagepath='$imgdbpath'  where rid=$rid  ";
mysql_query($sqlquery);
echo "All DONE & Class OVER";

?>


</body>
</html>