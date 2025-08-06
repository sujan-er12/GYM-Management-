<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About A4S Gym management</title>
    <style>
    body {

        background-color: #fffff4;
    }
    
    * {
        margin: 0px;
        padding: 0px;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<?php 

    ob_start();

    include 'partials/dbconnect.php';
    include 'partials/_header.php'; 

    $pln =  $_GET['plan'];
    $email = $_GET['userEmail'];
    if(isset($_GET['registered'])){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 0px;">
            <strong>Success!</strong> You have successfully registered to our website.Please fill the payment details so that we can register your information and for further details.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
      }
   
  
if(isset($_POST['submit'])){
    $cust_email =  $_GET['userEmail'];
    $name = $_POST['name'];
    $amt = $_POST['amt'];
    $payment = $_POST['payment'];
  
    $sql = "INSERT INTO `payment` (`customer_email`, `amount_paid`,`payment_mode`, `date`) VALUES ('$cust_email', '$amt','$payment', current_timestamp());";

    $result = mysqli_query($conn,$sql);
    if($result){
      $_SESSION['paid'] = true;
      header("Location: /Gymphp/Gym/about.php?paid=true");
    }
  }
?>

<div class="card col-md-4" style="margin-left:500px;background: antiquewhite;margin-top: 50px;">
  <div class="card-header" style="
    text-align: center;
    font-size: 20px;
    font-family: sans-serif;
    font-weight: 700;
">Payment Form</div>
  <div class="card-body" style="
    text-align: center;
    background: aliceblue;
    font-family: sans-serif;
">
<form action="" method="POST">
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Amount:</label>
    <select name="amt" id="amt" style="
    width: 100px;
    height: 30px;
    border: 2px solid black;
    border-radius: 7px;
    background: beige;
">
    <?php
  $sql = "select * from `plans` where plan_name='$pln'";
  $result = mysqli_query($conn,$sql);
  $numRows = mysqli_num_rows($result);
  if($numRows == 0){
    echo '<option value=""></option>';  
  }
  else{
   while($row = mysqli_fetch_assoc($result)){
       $amt = $row['plan_amount'];
       $name = $row['plan_name'];
       $duration = $row['plan_duration'];
       echo '<option value="'.$amt.'" name='.$amt.'>'.$amt.'</option>';
   }
  }
    ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Mode:</label>
    <select name="payment" id="payment" style="
    width: 130px;
    height: 30px;
    border: 2px solid black;
    border-radius: 7px;
    background: beige;
">
    <?php
    $sql = "select * from `payment_mode`"; 
    $result = mysqli_query($conn,$sql);
  $numRows = mysqli_num_rows($result);
  if($numRows == 0){
    echo '<option value=""></option>';  
  } 

  else{
    while($row = mysqli_fetch_assoc($result)){
        $mode = $row['payment_mode'];
        echo '<option value="'.$mode.'" name='.$mode.'>'.$mode.'</option>';
    }
   }
      ?>
    </select>
  </div>

  <button type="submit" name="submit" class="btn btn-outline-primary" style="
    width: 185px;
    height: 34px;
    margin-top: 15px;
    background: blue;
    color: aliceblue;
">Pay</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
    
    <?php include 'partials/_footer.php'; ?>
</body>
</html>