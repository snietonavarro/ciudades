<?php
    $servername = "localhost";
    $username = "id3641621_snieto";
    $password = "bufy2017";
    $dbname = "id3641621_todoviajes";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT id,ciudad, descripcion,activo FROM tbciudades";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $ListaCiudades=$stmt->fetchAll();
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
