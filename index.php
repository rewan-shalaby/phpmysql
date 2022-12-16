<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        table tr,td,th{
            border:3px solid grey;
        }
        button{
            background-color:#00CC66;
            float:right;
            border:none;
            height:50px;
        }
        button a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
    <div>
    <br>
    <button name="add">
        <a href="login.php" target=_blanc>Add New User</a>
    </button>
    <h1>User details</h1>
    <br>
    </div>
    <table class="table">
    <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Mail status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'user';
         $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
  $sql = 'SELECT * FROM login';
  mysqli_select_db($conn,$dbname);
  $result = mysqli_query($conn,$sql );
  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['gender']?></td>
    <td><?php echo $row['status']?></td>
    <td>
    <a href="view.php?id=<?php echo $row['id']?>" target=_blanc><i class="fa fa-eye" aria-hidden="true"></i></a>
    <a href=""><i class="fas fa-edit"></i></a>
    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
<?php
  }
 ?>
</table>
</body>
</html>
