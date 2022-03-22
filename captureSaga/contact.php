<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'conn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
        $sql="INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
        $result=mysqli_query($con,$sql);
        if($result){
            $success=1;
            header('location:./index.php#contact');
                }else{
          die(mysqli_error($con));
        }
      }
    
?>