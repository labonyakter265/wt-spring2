<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">
 Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
Department: <input type="text" name="dept" value="<?php echo $row['department']; ?>"><br><br>
<button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
$name = $_POST['name'];
 $email = $_POST['email'];
$dept = $_POST['dept'];

$sql = "UPDATE students
SET name='$name', email='$email', department='$dept'
 WHERE id=$id";

if ($conn->query($sql)) {
 echo "Updated successfully!";
} else {
echo "Error: " . $conn->error;
 }
}
?>

</body>
</html>