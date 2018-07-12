<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garanti";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from cihazlar";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cihaz_id"]. " - Name: " . $row["marka"]. " " . $row["model"]. "<br>";
    }
}

 ?>