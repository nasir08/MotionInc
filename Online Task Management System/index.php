<?php
session_start();
session_destroy();
?>

<html>
<head>
<title>Home
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body link="#B0171F" vlink="#B0171F" bgcolor="#ADADAD" background="C:\wamp\www\Online Task Management System\images\auto_scroll4.jpg" style='margin:0'>

<div style="top:17px; left:417px; position:absolute; z-index:1;">
<center /> <h1>Online Crime Filing System</h1> </div> 
</div>

<div style="top:150; left:37px; position:absolute; z-index:1; width: 185px;">

<table>
<tr><td>
<a href = "index.php"><img border = "none" src = "images/home.gif"></img></a>
</td></tr>

<tr><td>
<a href = "about.php"><img border = "none" src = "images/about.gif"></img></a>
</td></tr>
</table>
<div style="top:-1px; left:188px; position:absolute; z-index:1;">
<img src = "images/image002.gif"></img>
</div>

</div>


<div style="top:220; left:370; position:absolute; z-index:1;">
<form name='login_form' method='post' action='login.php'>
	<b>
	<font face = "times new roman" size = "3">
	<div style="top:-6px; left:117px; width:250px; position:absolute; z-index:1;">
	Username: <input name = 'uname' type = 'text' value = ''>
	</div>
	<div style="top:27px; left:119px; width:250px; position:absolute; z-index:1;">
	Password   : <input name = 'pword' type = 'password' value = ''>
	</div>
	<div style="top:69px; left:251px; position:absolute; z-index:1;">
	<input name = 'login' type = 'submit' value = 'Login'>
	</div>
	</font>
	</b>
</form>
</div>

<div style="top:150px; left:1000px; position:absolute; z-index:1;">
<img src = "images/image002.gif"></img>

<div style="top:50; left:10; position:absolute; z-index:1;">
<a href = "verify.php"><img src = "images/verify.gif" border = "0"></img></a>
</div>

<div style="top:100; left:10; position:absolute; z-index:1;">
<a href = "signup.php"><img src = "images/signup.gif" border = "0"></img></a>
</div>

</div>

<div style="top:551px; left:448px; position:absolute; z-index:1;">
<img border = "none" src = "images/maulawka.gif"></img>
</div>

</body>
</html>