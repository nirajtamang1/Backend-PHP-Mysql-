<?php
//Include models here
include('model.php');
$obj=new Model();
//Insert record
if(isset($_POST['submit'])){
    $obj->insertrecord($_POST);
}//if isset close

//Update record record
if(isset($_POST['update'])){
    $obj->update($_POST);
}//if isset close

// Delete record
if(isset($_GET['delid'])){
     $id=$_GET['delid'];
     $obj->delete($id);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center text-info">Crud Operation</h3>
    <div class="container">
    <?php
    if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
        echo "<div class='alert alert-info' role='alert'>
   Data added successfully
</div>";
    }
    if(isset($_GET['msg']) AND $_GET['msg']=='upd'){
        echo "<div class='alert alert-info' role='alert'>
   Data update successfully
</div>";
    }
    if(isset($_GET['msg']) AND $_GET['msg']=='del'){
        echo "<div class='alert alert-danger' role='alert'>
   Data Delete successfully
</div>";
    }
    ?>
    <?php
 //fetch the record
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $record=$obj->displayRecodeById($id);
    ?>
    <!-- Update form -->
    <form action="index.php" method="POST">
                <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $record['name'];?>">
                    </td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td>
                        <input type="text" name="address" value="<?php echo $record['address'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Number:</td>
                    <td>
                        <input type="text" name="number" value="<?php echo $record['number'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email" value="<?php echo $record['email']?>">
                    </td>
                </tr>
            
                </table>
                <input type="hidden" name="hid" value="<?php echo $record['id']?>"> 
                <button type="submit" class="btn btn-primary" name="update" value="update">Submit</button>
            </form>
<?php
} else{
?>

    <form action="index.php" method="POST">
                <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td>
                        <input type="text" name="address">
                    </td>
                </tr>
                <tr>
                    <td>Number:</td>
                    <td>
                        <input type="text" name="number">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                </table>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php } ?>
<br>
<h3 class="text-center text-danger">Office detail</h3>
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary text-center">
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $data=$obj->dispalyrecord();
                    $i=1;
                    foreach($data as $value){
?>
                      <tr class="text-center">
                          <td><?php echo $i++;?></td>
                          <td><?php echo $value['name'] ;?></td>
                          <td><?php echo $value['address'] ;?></td>
                          <td><?php echo $value['number'] ;?></td>
                          <td><?php echo $value['email'] ;?></td>
                          <td>
                             <a href="index.php?id=<?php echo $value['id'];?>" class="btn btn-info">Edit</a>
                             <a href="index.php?delid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
                             
                            

                          </td>
                      </tr>
                    <?php
                    }//foreach close
                    ?>
                    
             
            </table>
        
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>