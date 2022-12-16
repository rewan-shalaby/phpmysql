<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'user';
   $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

//    if (!$conn) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
// echo "Success: A proper connection to MySQL was made! The <span style='color:red'> $dbname </span>database is great.<br>" . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
// mysqli_close($conn);

if (isset ($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    if (isset ($_POST['status'])) {
    $status = "Yes";
     } else
    {
        $status = "No";
    }

mysqli_select_db( $conn,$dbname );

$sql="INSERT INTO `login`(`name`, `email`, `gender`, `status`) 
VALUES ('$name','$email','$gender','$status')";

   $result = mysqli_query( $conn,$sql );
   
//    if(! $result ) {
//       die('Could not insert to table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Data inserted to table successfully\n";
// //    mysqli_close($conn);

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        font-weight:bold;
    }
    p{
        font-weight:normal;
    }
    </style>
</head>
<body>
    <div>
    <h1>User Registration Form</h1>
    <hr>
    </div>
<form action="<?php $_PHP_SELF ?>" method="post">
<p>Please fill this form and submit to add user record to the database</p>
<div><label>Name</label>
<br>
<input type="text" name="name">
</div><br>
<div><label>Email</label>
<br>
<input type="email" name="email">
</div><br>
<div><label>Gender</label>
<br>
<input type="radio" name="gender" value="F">Female
<br>
<input type="radio" name="gender" value="M">Male
</div><br>
<div><input type="checkbox" name="status">Receive E-mails from us.
</div><br>
<div><input type="submit" name="submit">
<input type="reset" name="cancel"></div>
</form>
</body>
</html>





