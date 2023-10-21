<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Search By Name ::</title>
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<h2>Search By Name </h2>
<hr />
<form action="searchbyname.php" method="post">
Write Contact Name : <input type="text" name="uname" id="uname" placeholder="Write Here" maxlength="50" /> <label class=error id=e1></label>
<br />
<input type="submit" value="Search & View List" onclick="return validate();" />
</form>
<script type="text/javascript" src="jquery/jquery.js"></script>
<script>

function validate()
	{
		$("#e1").text(' ');
		var FLAG=true;
		var regexpname=/^[A-Za-z]{2,}([ ]?[A-Za-z]+)*$/
		if( uname.value.search(regexpname) == -1)
			{
			$("#e1").text("Invalid Search Text");
			FLAG=false;
			}
		return FLAG;
	}

</script>

</body>
</html>