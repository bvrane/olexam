<?php
session_start();
?>

<html>
<head>
<title>Welcome to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
body{
	background-image:url("hh.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	}

</style>
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysqli_query($cn,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><a href="sublist.php" class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="image/subject.JPEG" width="80" height="80" align="middle"></a></td>
    
  </tr><br>
  <tr><br>
    <td height="58" valign="bottom"><a href="result.php" class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="image/result.JPG" width="80" height="80" align="absmiddle"></a></td>
   <!-- <td valign="bottom"> <a href="result.php" class="style9">Result </a></td>-->
  </tr>
</table>';
   
	exit;
		
}
?>

<center><table width="70%" height="70%" border="0">
<tr><th><font color="Green" size="7">Student Login</font></th></tr>
<tr>
  <td valign="middle"><center><form name="form1" method="post" action="">
      <table width="250" border="1">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">	</td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4"><font color="black">New Student ? <a href="signup.php">Signup Here</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/download.png" width="134" height="128"></p>
        </div>
    </form></center></td>
  </tr>
 
          
 </table></center>
</body>
</html>

<html>
<head>
<style>
 .text{
	color:black;
	font-size:20;
	font-family: Arial; 
 }
 </style>
 </head>
 <body>
     <div align="right" class="text"><br>
	    <p>Copyright &copy; <?=date('Y')?> Bhupendra</p>
     </div>
 </body>
</html>