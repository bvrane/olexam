<style type="text/css">
<!--
body {
	margin:0px;
	margin-top: 0px;
}
-->
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="grey" >
  <tr>
    <td width="90%" align="center" bgcolor="grey" text=""><font size="20" color="yellow"><i>Online Exam</i></font>
        
        
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: yellow;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: yellowgreen;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li><a href="admin/index.php">Teacher Login</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>
</body>
</html>
 


</td>
    <td width="10%" >
     </td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="blue">
  <tr>
    <td width="100%" align="right"></td> 
  </tr>
  </Table>
  <Table width="100% height="300px">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
</tr>
  
</table>
