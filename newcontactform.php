<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: New Contact Details ::</title>
<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
<h2> New Contact Form</h2>
<ul class="error" id=errorlist>
</ul>
<form enctype="multipart/form-data" action="newcontactserverpage.php" method="post" >
<div class="row-style">
<label class="title-style">Name<label class="error" id=e1></label></label><input type="text" name="uname" id="uname" placeholder="Write Here" maxlength="50" required="required" />
</div>
 
 <div class="row-style">
<label class="title-style">Email<label class="error" id=e2></label></label><input type="text" name="email" id="email" placeholder="Write Here" maxlength="50" required="required" />
</div>
 
 <div class="row-style">
<label class="title-style">Birth Date</label><input type="date" name="dateofbirth" id="dateofbirth" />
</div>

<div class="row-style">
<label class="title-style">Gender</label><select name=gender>
<option value="f">Female</option>
<option value="m">Male</option>
</select>
</div>


<div class="row-style">
<label class="title-style">Phone<label class="error" id=e3></label></label><input type="text" name="phone" id="phone" placeholder="write here" maxlength="30" />
</div>
 
 <div class="row-style">
<label class="title-style">Profile Image<label class="error" id=e4></label></label><input type="file" name="imagepath" id="imagepath" accept="image/*" />
</div>
 
 <div class="row-style">
<label class="title-style"></label>
<input type="submit" value="Submit Contact Details" onclick="return validation();" />
</div>
 
</form>
<script src="./jquery/jquery.js" type="text/javascript"></script>
<script>
function validation()
	{
		
		$("#e1 , #e2 , #e3 , #e4  , #errorlist").text(" ");
			
		var regexpname=/^[A-Z][a-z]{1,20}( [A-Z][a-z]{1,20})+$/;
		var regexpemail=/^[a-z0-9]+([._-]?[a-z0-9]+)*@[a-z0-9]+([.][a-z]+)+$/;
		var regexpphone=/^[0-9,]+$/;
		var regexpimg=/^.+(jpg|png|jpeg|bmp|gif)$/;

		var FLAG=true;

		if( uname.value.search(regexpname)  == -1)
			{
				$("#e1").text("*");
				FLAG=false;
				$("#errorlist").append("<li>Name Error</li>");
			}
				
		if( email.value.search(regexpemail)  == -1)
			{
				$("#e2").text("*");
				FLAG=false;
				$("#errorlist").append("<li>EMail Error</li>");
			}
		if( phone.value.search(regexpphone)  == -1)
			{
				$("#e3").text("*");
				FLAG=false;
				$("#errorlist").append("<li>Phone Error</li>");				
			}
		if( imagepath.value.search(regexpimg)  == -1)
			{
				$("#e4").text("*");
				FLAG=false;
				$("#errorlist").append("<li>Invalid Image Format</li>");				
			}						
			
	
	return 	FLAG;
	}


</script>
</body>
</html>