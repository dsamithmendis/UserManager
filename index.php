<!DOCTYPE html>
<html>
<head>
    <title>User Manager</title>
</head>
<body>

    <h2>User Manager</h2>

    <!-- index.php -->
<h2>Insert User</h2>
<form action="insert.php" method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Add User">
</form>

<!-- update-form.php -->
<h2>Update User</h2>
<form action="update.php" method="post">
    User ID: <input type="number" name="id" required><br>
    New Name: <input type="text" name="name" required><br>
    New Email: <input type="email" name="email" required><br>
    <input type="submit" value="Update User">
</form>

<!-- delete-form.php -->
<h2>Delete User</h2>
<form action="delete.php" method="post">
    User ID to Delete: <input type="number" name="id" required><br>
    <input type="submit" value="Delete User">
</form>
<br>
<a href="read.php">View all users</a>

</body>
</html>