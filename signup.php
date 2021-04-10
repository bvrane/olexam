<html>
<head>
<title>Student Registration </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
body{
	background-image:url("17.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	color:black;
	font-family: Arial, Helvetica, sans-serif;
	
}

		/* Full-width input fields */
		input[type=text], input[type=password] ,input[type=number] {
			width: 80%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			//background:yellow;
		}

		input[type=text]:focus, input[type=password]:focus {
			background-color: #ddd;
			outline: none;
		}
		
		input[type=submit]{
			background-color: #4CAF50;
			color: white;
			padding: 16px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			opacity: 0.9;
		}
		
		textarea[name=address]{
			width: 80%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			//background:yellow;
		}

		/* Set a style for the submit button 
		.submitbtn {
			background-color: #4CAF50;
			color: white;
			padding: 16px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			opacity: 0.9;
		}*/

		.submitbtn:hover {
			opacity: 1;
		}

	
		/* Set a grey background color and center the text of the "log in" section */
		.login {
			background-color: #f1f1f1;
			text-align: center;
		}
		.text{
			color:yellow;
			font-size:20;
			font-family: Arial;
		}
	</style>
</head>

<body>
<?php
	include("header.php");
?>
 <center><table width="70%"  height="80%" font="30" color="yellow">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"></span></td>
     <td width="200" height="57"><h1 align="left" bgcolor="purpal">
             <font size="30" color="yellow"><i>&nbsp;&nbsp;Student Registration</i></font></h1></td>
   </tr>
   <tr>
    <td ><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
      <center> <table width="70%" border="0" align="left" background="login-bg.jpg">
         <tr>
           <td><div align="left" class="text">Login Id </div></td>
           <td><input type="text" name="lid" placeholder="Enter your Id"></td>
         </tr>
         <tr>
           <td color="yellow" class="text">Password</td>
           <td><input type="password" name="pass" placeholder="Enter Your Password"></td>
         </tr>
         <tr>
           <td class="text">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass" placeholder="Conform password"></td>
         </tr>
         <tr>
           <td class="text">Name</td>
           <td><input name="name" type="text" id="name" placeholder="Enter Your Name"></td>
         </tr>
         <tr>
           <td valign="top" class="text">Address</td>
           <td><textarea name="address" id="address" placeholder="Enter Your Address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="text">City</td>
           <td><input name="city" type="text" id="city" Placeholder="City Name"></td>
         </tr>
         <tr>
           <td valign="top" class="text">Phone</td>
           <td><input name="phone" type="text" id="phone" placeholder="Enter Phone Number"></td>
         </tr>
         <tr>
           <td valign="top" class="text">E-mail</td>
           <td><input name="email" type="text" id="email" placeholder="Enter E-mail" ></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup" class="submitbtn">
           </td>
         </tr>
       </table></center>
     </form></td>
   </tr>
 </table></center>
 <p>&nbsp; </p>

<div align="right" class="text">
	<p>Copyright &copy; <?=date('Y')?> Bhupendra</p>
</div>
</body>
</html>