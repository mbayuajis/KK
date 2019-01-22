<!DOCTYPE html>
<html>
<head>
	<title>Mysql Connect</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "kekom";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);

		// Check connection
		if (!$conn) {
	    	die("Connection failed: " . mysqli_connect_error());
		}
			$sql = "SELECT * from mhs WHERE id=$_GET[id]";
			$result = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($result);
			echo $data['id']." - ".$data['nama']." - ".$data['alamat'];
	?>	
</body>
</html>