


<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>login</title>
<h1>Login</h1>
</head>

<body>
	
</body>
<?php  
session_start();
if($_GET['Username']=="admin"&&$_GET['Password']=="123456")
{
    $_SESSION['name'] = $_GET['Username'];
    $_SESSION['pwd']= $_GET['Password'];
    header('location:Nlogin.php');
}
else
{

	header('location:login.html');
}
?>
</html>