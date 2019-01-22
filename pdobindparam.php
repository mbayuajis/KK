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

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=kekom", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }

		
		try {
				$query = $conn->prepare("SELECT * FROM mhs WHERE id=:id");
				$query->bindparam(":id", $_GET['id']);
				$query->execute();
				$data = $query->fetch(PDO::FETCH_ASSOC);
			} 
		catch (PDOException $exc) {
				echo $exc->getMessage();
			}


			echo $data['id']." - ".$data['nama']." - ".$data['alamat'];
	?>
</body>
</html>