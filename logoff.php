<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
</head>

<body>
	
<?php 
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['pwd']);
    session_destroy();
    header('location:login.html');
 ?>
 
</form>
</body>
</html>