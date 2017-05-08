<?php
$q = $_GET['q'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql = "SELECT * FROM code WHERE name like '%" . $q . "%' or id='" . $q . "'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<ol>";
    echo "<li>id->" . $row['id'] . "</li>";
    echo "<li>name->" . $row['name'] . "</li>";
    echo "<li>age->" . $row['age'] . "</li>";
    echo "<li>job->" . $row['job'] . "</li>";
    echo "</ol>";
}
mysqli_close($conn);
?>