<!DOCTYPE html>
<html>
<head>
  <title>Add Customer</title>
</head>
<body>
  <h2>Add New Customer</h2>
  <form action="submit.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required></textarea><br><br>

    <label>Company Name:</label><br>
    <input type="text" name="company" required><br><br>

    <label>Position:</label><br>
    <input type="text" name="position"><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
