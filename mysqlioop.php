<!DOCTYPE html>
<html>
<head>
	<title>MYSQLI OOP</title>
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

		$query  =  $conn->query("SELECT  *  FROM  mhs  WHERE  id=$_GET[id]")  or die($conn->error);
		$data = $query->fetch_assoc();
		echo $data['id']." - ".$data['nama']." - ".$data['alamat'];
	?>
</body>
</html>