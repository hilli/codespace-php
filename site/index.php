<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World!</title>
</head>

<body>
  <?php
  $servername = "mariadb";
  $username = "mariadb";
  $password = "mariadb";
  $dbname = "mariadb";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "DB Connections works!";
    $conn->close();
  }
  ?>

  <h2>php info</h2>
  <?php phpinfo(); ?>

</body>

</html>