<html>
<head>
<title>Student Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
body{
	background-image:url("login-bg.jpg");
	background-repeat:no-repeat;	
	}
</style>
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query("select * from mst_user where login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1> Login Id Already Exists </div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysqli_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to start exam</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

?>
</body>
</html>

