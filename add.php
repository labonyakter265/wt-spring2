<?php include 'db.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Reg No: <input type="text" name="reg"><br><br>
    Department: <input type="text" name="dept"><br><br>
    
    <button type="submit" name="submit">Add Student</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reg = $_POST['reg'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO students (name, email, registration_no, department)
            VALUES ('$name', '$email', '$reg', '$dept')";

    if ($conn->query($sql)) {
        echo "Student added successfully!";
    } else {
        echo "Error!";
    }
}
?>