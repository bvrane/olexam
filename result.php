<?php
session_start();
?>
<html>
<head>
<title>Online Exam - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
body{
	background-image:url("rainbow.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysqli_query($cn,"select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'") or die(mysql_error());

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=s><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";
?>
</body>
</html>

<html>
<head>
<style>
 .text{
	color:black;
	font-size:30;
	font-family: Arial;
 }
 </style>
 </head>
 <body>
     <div align="right" class="text"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 <p>Copyright &copy; <?=date('Y')?> Online Examination</p>
</div>
</body>
</html>