<?php
// Establish  connection 
$connection = mysqli_connect("localhost", "db_user_name","db_password","db_name");

// Check connection
if (mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve student details 
$query = "SELECT * FROM Students";
$result = mysqli_query($connection, $query);

// Display details using a table
echo "<h2>Student Details</h2>";
echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
}

echo "</table>";

// Close database
mysqli_close($connection);
?>

