<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
</head>
<body>

<form action="Exercise2.php" method= "GET">
Name: <input type="text"  name="name" />
Surname: <input type= "text" name="Surname" />
<input  type="submit" name="submit" />
</form>
<?php
if (!$_GET['name']) {
    echo '<h3>Please insert Name</h3>';
  }
  if (!$_GET['Surname']) {
    echo '<h3>Please insert Surname</h3>';
  }
// if(isset($_GET[ 'submit']))
// {
// if( $_GET["name"] || $_GET["Surname" ] )
// {
// echo '<h3>Please insert Name</h3>';
// exit();
// }
// }
?>
</body>
</html>