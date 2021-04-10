<?php
session_start();
?>
<html>
<head>
<title>Online Exam -List</title>
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
echo "<h1 class=head1><span style='color:Black;'>Select Subject to Give Exam </span></h1>";
$rs=mysqli_query($cn,"select * from mst_subject");
echo "<table align=center style='border:5px yellow;'>";
echo "<table align=center border='2'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>
