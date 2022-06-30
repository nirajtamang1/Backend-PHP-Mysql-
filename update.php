<?php include 'database.php';
session_start();
include 'secureuser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Implementation</title>
</head>
<body>

    <h1>Product Name</h1>
  
 
       <?php
        $id=$_GET['id'];
        $query="Select * from product where id = $id";
        $result=mysqli_query($conn, $query);
        if($result){
            $row=mysqli_fetch_assoc($result);
            {
                $name=$row['Name'];
                $product=$row['Price'];
            
           
            
        ?>
        <tr>

        <form action="update1.php" method="POST">
  
        <p><input type="text" name="name" placeholder="Name"  value="<?php echo $name?>" required></p>
        <p><input type="number" name="price"placeholder="Price" value="<?php echo $product?>" required></p>
        <input type="hidden " name="id" value="<?php echo $id?>" required>
        <input type="Submit" value="submit" name="submit">

    </form>
       
        </tr>
    <?php
    }
}
?>



    
</body>
</html>