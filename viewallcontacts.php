<?php
require "./database/db-config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> :: Contact Book ::</title>
</head>
<body>
<table border="1">
<tr>
<th width="20">ID</th><th width="100" >Name</th><th width="150">Email</th><th width="150">Birth Date</th><th width="100">Gender</th><th width="150">Phone</th>
<th width="75">Image</th>
</tr>
<?php
//DATA ROWS...
//$sqlquery="select * from contactbookmaster where name like '%Raj%'";
$sqlquery="select * from contactbookmaster";

$result = mysql_query($sqlquery) or die(mysql_error());

$rowcount = mysql_num_rows($result);

if( $rowcount == 0) // Table is Empty....
	{
		echo "<tr> <td colspan=6  align=center>No RECORD FOUND</td></tr>";
	}
else	
	{
		$index=0;
		while($index<$rowcount)
			{
			
			//$record = mysql_fetch_row($result); // 1	
			//$record = mysql_fetch_array($result); // 2		
			$record = mysql_fetch_assoc($result); // 3									
			
			extract($record); //  7
			
			echo "<tr>";
				echo "<td> $rid </td>";
				echo "<td> $name </td>";
				echo "<td> $email </td>";
				echo "<td> $dateofbirth </td>";		
				$gender = ($gender == "f")?"Female" : "Male";
				echo "<td> $gender </td>";
				echo "<td> $phone </td>";	
				$imageurl = "./" . $imagepath;
				echo "<td><a target=new href='$imageurl'>Click Here</a></td>";							
			echo "</tr>";
			$index++;	
			}//loop
	}//else
?>
</table>
</body>
</html>