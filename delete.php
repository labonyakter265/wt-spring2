<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql)) {
 echo "Deleted successfully!";
} else {
echo "Error: " . $conn->error;
}

header("Location: index.php");
?>