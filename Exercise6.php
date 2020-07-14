<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "my_test_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
/* sql to create table, here as a structure reference
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@doe.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>
</html>