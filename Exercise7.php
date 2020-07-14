<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record to User Table Form</title>
</head>
<body >
<form action="Exercise7.php" method ="post">
   <p>
       <label  for="firstName">First Name:</label>
       <input type="text" name= "firstname" id="firstName">
   </p >
   <p>
       <label for ="lastName">Last Name:</label>
       <input  type="text" name="lastname"  id="lastName">
   </p>
   <p>
       <label for= "emailAddress">Email Address:</label>
       <input  type="text" name= "email" id="emailAddress">
   </p>
   <input type= "submit" value="Submit" name="submit"> <!-- Hier kam das Name hinzu, damit es in PHP verwenden kannst, ob es gesetzt ist -->
</form>
<?php
if (isset($_POST['submit'])) { //hier dann ein if um alles, hier wird geguckt, ob der submit button gedrückt wurde
    $servername = "localhost" ;
    $username = "root";
    $password = "";
    $dbname = "my_test_database";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if  (!$conn) {
       die("Connection failed: " . mysqli_connect_error() . "\n" );
    }
    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // attempt insert query execution
    $sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "<h1>New record created.<h1>";
    } else {
        echo "<h1>Record creation error for: </h1>" .
             "<p>"  . $sql . "</p>" .
             mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
</html>