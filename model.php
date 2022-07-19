
<?php
class Model
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "staff";
    public  $conn;


    // Database Connection 
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);
        if(mysqli_connect_error()) {
         trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        }
    }
    public function insertrecord($post){
        $name=$post['name'];
        $address=$post['address'];
        $number=$post['number'];
        $email=$post['email'];
        $sql="INSERT INTO staffdetail(name, address, number, email) VALUES ('$name','$address','$number','$email');"; 
        $result= mysqli_query($this->conn,$sql);
        if($result){
            header('location: index.php?msg=ins');
        }else{
            echo "Error";
        }

    }//insertrecord function close
    public function dispalyrecord(){
        $sql="SELECT * FROM staffdetail";
        $result= mysqli_query($this->conn,$sql);
        if($result){
            while($row=$result->fetch_assoc()){
                $data[]=$row;
            }
        return $data;
        }//if closed
    }//display record close

    public function displayRecodeById($id){
        $sql="SELECT * FROM staffdetail WHERE id='$id'";
        $result= mysqli_query($this->conn,$sql);
        if($result){
            $row=$result->fetch_assoc();
            return $row;
        }//if closed
    }// display record closed

    public function update($post){
        $id=$post['hid'];
        $name=$post['name'];
        $address=$post['address'];
        $number=$post['number'];
        $email=$post['email'];
    
        $sql="UPDATE staffdetail SET name='$name', address='$address', number='$number', email='$email'WHERE id='$id';"; 
        $result= mysqli_query($this->conn,$sql);
        if($result){
            header('location: index.php?msg=upd');
        }else{
            echo "Error" .$sql. "<br>" . $this->conn->error;
        }

    }//insertrecord function close
  
    public function delete($id){
        $sql="DELETE FROM `staffdetail` WHERE id='$id'"; 
        $result= mysqli_query($this->conn,$sql);
        if($result){
            header('location: index.php?msg=del');
        }else{
            echo "Error" .$sql. "<br>" . $this->conn->error;
        }

    }
}


?>