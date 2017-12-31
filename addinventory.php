<?php

include "db_conn.php";

$quantity = $_POST['quantity'];

$sql = "INSERT INTO inventory (quantity)
VALUES ('$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location:inventory.php");
exit;

?>