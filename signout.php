<?php
session_start();
session_destroy();
header("Location: index.php");
?>

<html>
<head>
<style>
 .text{
	color:yellow;
			font-size:30;
			font-family: Arial;
 }
 </style>
 </head>
 <body>
<div align="right" class="text">
	<p>Copyright &copy; <?=date('Y')?> Online Examination</p>
</div>
</body>
</html>