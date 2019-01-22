<!DOCTYPE html>
<html>
<head>
	<title>MYSQLI OOP + BINDPARAM</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "kekom";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$stmt  =  $conn->prepare("SELECT  *  FROM  mhs  WHERE  id  =?")  or  die($conn->error);
		$stmt->bind_param("s", $_GET['id']);
		$stmt->execute();
		$stmt->bind_result($id,  $nama,  $alamat);
		$stmt->fetch();
		echo $id." - ".$nama." - ".$alamat;
	?>
</body>
</html>