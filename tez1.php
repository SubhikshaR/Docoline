<html>
<head>
<title>Inserted Data</title>
</head>
<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "","subhi");   
  if($conn === false){
  die("ERROR: Could not connect. " 
                . mysqli_connect_error());
  }
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];

  $sql    = "SELECT * FROM docregister WHERE phonenumber='$phonenumber'
                     AND password='$password'"; 
  if(mysqli_query($conn, $sql)==1){
    $_SESSION['password'] = $password;
    header("Location: doctor-dashboard.php");
  } 
  else {
      echo "Enter the correct details";
        }
  mysqli_close($conn);
  ?>
</body>
</html>