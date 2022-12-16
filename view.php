<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'user';
   $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

mysqli_select_db( $conn,$dbname );

// $sql = 'SELECT * FROM login ';
//   mysqli_select_db($conn,$dbname);
//   $result = mysqli_query($conn,$sql );
//   while($row = mysqli_fetch_assoc($result)) {
    // echo "<b><a href='readphp.php?id={$row['#']}'>{$row['name']}</a></b>";
    // echo "<br />";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM login WHERE id=$id";
    $result = mysqli_query($conn,$sql );
    $row = mysqli_fetch_assoc($result);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div>
        <h1>View Record</h1>
        <hr>
    </div>
    <br>
<form action="<?php $_PHP_SELF ?>" method="post">
<div><label>Name</label>
<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>">
</div><br>
<div><label>Email</label>
<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>">
</div><br>
<div><label>Gender</label>
<br>
<input type="radio" name="gender" value="F" <?php echo ($row['gender'] =="F" )?"checked":"";?>>Female
<br>
<input type="radio" name="gender" value="M" <?php echo ($row['gender'] =="M" )?"checked":""; ?>>Male

</div><br>
<div>
    <?php 
        if (!empty($row['status']=="Yes" )){
            echo "you will receive email from us";
        }
        else{
            echo"<p style='color:red'>you won't receive email from us</p>";
        }
    ?>

</div>
<br>
<div><button><a href="index.php" >Back</button></div>
</form>

</body>
</html>






