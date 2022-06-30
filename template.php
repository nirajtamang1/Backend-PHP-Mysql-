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
    <p class="form-text text-muted">
        you are login as <?php echo $_SESSION['Name']?>
    </p>

    <form action="add.php" method="POST">
        <p><input type="text" name="name" placeholder="Name" required></p>
        <p><input type="number" name="price"placeholder="Price" required></p>
        <input type="Submit" value="submit" name="submit">
    </form>
    
    <br>  
    <table border= "2px solid black;">
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Price</th> 
           <th>Status</th>
        </tr>

        <?php
        include 'database.php';
        

        $query="Select * from product";
        $result=mysqli_query($conn, $query);
        if($result){
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                $i++;
                $id=$row['id'];
                $name=$row['Name'];
                $product=$row['Price'];           
        ?>

        <tr>
        <td><?php echo $i?></td>
        <td><?php echo $name?></td>
        <td><?php echo "Rs." .$product?></td>
        <td>
            <a href="update.php?id=<?php echo $id?>">Update</a>
            <a href="delete.php?id=<?php echo $id?>">Delete</a>
        </td>
        </tr>
    <?php
    }
}
?>


    </table>

<button><a name="" id="" class="btn btn-primary" href="logout.php" role="button">Logout</a></button>
    
</body>
</html>