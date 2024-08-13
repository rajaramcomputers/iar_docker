<?php
$servername = "my-mysql"; // Replace with the MySQL container name
$username = "root";
$password = "mysql@123";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
