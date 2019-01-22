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

		$query = mysqli_prepare($conn, "SELECT * FROM mhs WHERE id=? ORDER BY id DESC") or die(mysqli_error($conn));
		mysqli_stmt_bind_param($query, "i", $_GET['id']);
		mysqli_stmt_execute($query);
		mysqli_stmt_bind_result($query,  $id,  $nama,  $alamat);
		mysqli_stmt_fetch($query);
		echo $id." - ".$nama." - ".$alamat;
	?>
</body>
</html>