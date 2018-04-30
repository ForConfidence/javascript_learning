<!DOCTYPE html>

<html>
<head>
	<style>
    body{background-image: URL(timg.jpg);background-repeat:no-repeat; background-size:cover;}
    </style>
</head>
<?php 
session_start();
if(array_key_exists("name", $_SESSION))
{
    $UName=$_SESSION['name'];
    $Pwd=$_SESSION['pwd'];
}
else
{

	header('location:login.html');
}
?>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
</head>

<body>
	<form action="logoff.php" method="get">
<?php 
define("str","<marquee>Welcome!</marquee>",false);
if($UName=="admin"&&$Pwd=="123456")
{
	echo $UName;
	echo "<br>";
	echo str;
}
else
{
	echo "False!";
}

 ?>
 <input type="submit" value="log off">
</form>
</body>
</html>