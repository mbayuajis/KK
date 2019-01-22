<!DOCTYPE html>
<html>
<head>
	<title></title>
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

			$query = mysqli_query($conn, "SELECT * FROM mhs WHERE id=$_GET[id] ORDER BY id DESC") or die(mysqli_error($conn));
			$data = mysqli_fetch_assoc($query);
			echo $data['id']." - ".$data['nama']." - ".$data['alamat'];
	?>
</body>
</html>