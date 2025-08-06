
<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    include 'partials/dbconnect.php'; 

    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $gender =  $_POST['gender'];
    $trainers =  $_POST['trainers'];
    $pln =  $_POST['pln'];
    $desc =  $_POST['desc'];

    $sql = "select * from `users` where user_email='$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
       
     
    $sql = "INSERT INTO `registered_users` (`name`, `email`, `phone`, `gender`, `trainer`,`plan`, `feedback`, `date`) VALUES ('$name', '$email', '$phone', '$gender', '$trainers','$pln', '$desc', current_timestamp())";

    $result = mysqli_query($conn,$sql);
    if($result){
      header("Location: /Gymphp/Gym/payment.php?plan=".$pln."&userEmail=".$email."&registered=true");
    } 
  }

    ?>
   