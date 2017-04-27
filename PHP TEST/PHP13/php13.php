<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "code";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE City (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL UNIQUE,
            uname VARCHAR(50) NOT NULL,
            parent_id int(10) NOT NULL,
            status tinyint(1) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table City created successfully";
} else {
    echo "Error creating: " . mysqli_error($conn);
}

mysqli_close($conn);
?>