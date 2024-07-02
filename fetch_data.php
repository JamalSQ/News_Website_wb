<?php
include "Admin/conn.php";

$sql = "SELECT * FROM posts"; // Modify with your table name
// $result = $conn->query($sql);
$result = mysqli_query($conn,$sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
