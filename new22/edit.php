<?php
  if(isset($_GET['id'])){
    
  
  $link=mysqli_connect('localhost','root','','ai');
  if(!$link){
      die('Connection error'.mysqli_connect_error());
  }
  
  $id=$_GET['id'];

  $query="SELECT * FROM win WHERE id=$id";
  $result=mysqli_query($link,$query);
  $numrow=mysqli_num_rows($result);
  if($numrow){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $mobile=$row['mobile'];
          $address=$row['address'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win Institute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body bgcolor="black">
    <h1> Win Institute Feadback Form: </h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="update.php" method="POST">
        <div class="mb-3">
        <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
        </div>
        <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="enter the name" value="<?php echo $name ?>">
        </div>
        <div class="mb-3">
        <label>Mobile no</label>
        <input type="number" name="mobile" class="form-control" placeholder="enter the mobile no" value="<?php echo $mobile ?>">
        </div>
        <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="enter the address" value="<?php echo $address ?>">
        </div>
        <button type="submit" name="submit" value="update" class="btn btn-primary">Submit</button>
        </form>

</div>
</div>
</div>
</body>
</html>

<?php
}
  }
}
?>
