<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Site</title>
</head>

<body>
  <h1>My Site</h1>
  <p>My site is awesome!</p>
  <?php
  echo "Hello PHP World! <br>";
  $res = 1 + 1;
  echo "1 + 1 = " . $res;
  ?>
  <h2>DB check</h2>
  <?php
  $servername = "db";
  $username = "siteuser";
  $password = "secretpassword";
  $dbname = "sitedb";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "DB Connections works!";
  }
  ?>
  <h2>php info</h2>
  <?php phpinfo(); ?>
</body>

</html>