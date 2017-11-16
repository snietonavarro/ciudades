<html>
<head>
</head>
<body>
<form method="post" action="adminCiudades.php">
<label>Nombre de Ciudad: </label><input type="text" name="ciudad"><br>
<label>Descripcion: </label><input type="text" name="descripcion"><br>
<input type="submit" name="btAlta" value="alta">
</form>
<?php
if (isset($_POST["btAlta"])){
	var_dump($_POST);
	$servername = "localhost";
	$username = "id3641621_snieto";
	$password = "bufy2017";
	$dbname = "id3641621_todoviajes";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $conn->prepare("Insert INTO tbciudades
		 (ciudad,descripcion) values (?, ?)");
		$stmt->execute(
			array($_POST["ciudad"],
				$_POST["descripcion"]
				)
			);
		$autonumerico = $conn->lastInsertId();
		return $autonumerico;
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
}
?>
</body>
</html>
