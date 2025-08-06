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
<img src="img/img5.jpg" class="d-block w-100 my-0" style="height: 700px;filter: brightness(0.4);position: fixed;"
                    alt="..."> 
    <?php include 'partials/dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

   
<div class="row">
    <div class="card col-md-4" style="
    margin-top: 20px;
    margin-left: 20px;
    background: yellow;
    font-family: sans-serif;
">
    <div class="card-header" style="
    text-align: center;
    font-size: 21px;
">
      List of Trainers
    </div>
    <div class="card-body" style="height:507px;overflow-y:scroll">
    <table class="table table-bordered table-hover" style="
    background: white;
">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Information</th>
								</tr>
							</thead>
              <tbody>
                <?php
                 $sql = "select * from `trainer`";
                 $result = mysqli_query($conn,$sql);
                 $numRows = mysqli_num_rows($result);
                 $count = 1;
                 if($numRows == 0){
                   echo "<h3>No Trainer is Added</h3>";
                 }
                 else{
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['trainer_id'];
                    $name = $row['trainer_name'];
                    $email = $row['trainer_email'];
                    $mobile = $row['trainer_mobile'];
                    $rating = $row['trainer_rating'];
                  

                  echo '<tr>
                  <td class="text-center">' .$count++. '</td>

                  <td class="text-center">
                    <p><i class="fa fa-user"></i><b>Trainer Name:</b> '.$name.'</p>
                    <p><i class="fa fa-user"></i><b>Trainer Email:</b> '.$email.'</p>
                    <p><i class="fa fa-user"></i><b>Trainer Mobile:</b> '.$mobile.'</p>
                    <p><i class="fa fa-user"></i><b>Trainer Rating:</b>'.$rating.'</p>   
                  </td>
                  </tr>';
                 }
                }
              ?>
              </tbody>
              </table>
              </div>
              </div>



              <div class="card col-md-3" style="
    margin-top: 20px;
    margin-left: 20px;
    background: red;
    font-family: sans-serif;
">
    <div class="card-header" style="
    text-align: center;
    font-size: 21px;
">
      List of Plans
    </div>
    <div class="card-body" style="height:507px;overflow-y:scroll">
    <table class="table table-bordered table-hover" style="
    background: white;
">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Information</th>
								</tr>
							</thead>
              <tbody>
                <?php
                 $sql = "select * from `plans`";
                 $result = mysqli_query($conn,$sql);
                 $numRows = mysqli_num_rows($result);
                 $count = 1;
                 if($numRows == 0){
                   echo "<h3>No Plan is Added</h3>";
                 }
                 else{
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['plan_id'];
                    $name = $row['plan_name'];
                    $amt = $row['plan_amount'];
                    $duration = $row['plan_duration'];
                  

                  echo '<tr>
                  <td class="text-center">' .$count++. '</td>

                  <td class="text-center">
                    <p><i class="fa fa-user"></i><b>Plan Name:</b> '.$name.'</p>
                    <p><i class="fa fa-user"></i><b>Plan Amount:</b> '.$amt.'</p>
                    <p><i class="fa fa-user"></i><b>Plan Duration:</b> '.$duration.'</p>   
                  </td>
                  </tr>';
                 }
                }
              ?>
              </tbody>
              </table>
              </div>
              </div>




              <div class="card col-md-4" style="
    margin-top: 20px;
    margin-left: 20px;
    background: greenyellow;
    font-family: sans-serif;
">
    <div class="card-header" style="
    text-align: center;
    font-size: 21px;
">
      List of Products
    </div>
    <div class="card-body" style="height:507px;overflow-y:scroll">
    <table class="table table-bordered table-hover" style="
    background: azure;
">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Information</th>
								</tr>
							</thead>
              <tbody>
                <?php
                 $sql = "select * from `products`";
                 $result = mysqli_query($conn,$sql);
                 $numRows = mysqli_num_rows($result);
                 $count = 1;
                 if($numRows == 0){
                   echo "<h3>No Product is Added</h3>";
                 }
                 else{
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['product_id'];
                    $name = $row['product_name'];
                    $amt = $row['product_price'];
                    $desc = $row['product_desc'];
                    $date = $row['purchased_date'];
                  

                  echo '<tr>
                  <td class="text-center">' .$count++. '</td>

                  <td class="text-center">
                    <p><i class="fa fa-user"></i><b>Product Name:</b> '.$name.'</p>
                    <p><i class="fa fa-user"></i><b>Product Amount:</b> '.$amt.'</p>
                    <p><i class="fa fa-user"></i><b>Product Description:</b> '.$desc.'</p>
                    <p><i class="fa fa-user"></i><b>Product Purchased Date:</b>'.$date.'</p> 
                  </td>
                  </tr>';
                 }
                }
              ?>
              </tbody>
              </table>
              </div>
              </div>
              </div>



              <div class="row" style="margin-bottom: 30px;margin-left: 430px;">
    <div class="card col-md-7" style="
    margin-top: 20px;
    margin-left: 20px;
    background: sandybrown;
    font-family: sans-serif;
">
    <div class="card-header" style="
    text-align: center;
    font-size: 21px;
">
      List of Equipments
    </div>
    <div class="card-body" style="height:507px;overflow-y:scroll">
    <table class="table table-bordered table-hover" style="
    background: azure;
">
							<thead>
								<tr>
									<th class="text-center">Sno</th>
									<th class="text-center">Information</th>
								</tr>
							</thead>
              <tbody>
                <?php

$sql = "select * from `equipments`";
$result = mysqli_query($conn,$sql);
$numRows = mysqli_num_rows($result);
$count = 1;
if($numRows == 0){
  echo "<h3>No Equipment is Added</h3>";
}
else{
  while($row = mysqli_fetch_assoc($result)){
    $id = $row['equipment_id'];
    $name = $row['equipment_name'];
    $units = $row['equipment_units'];
    $desc = $row['equipment_desc'];

    echo '<tr>
    <td class="text-center">' .$count++. '</td>

    <td class="text-center">
      <p><i class="fa fa-user"></i><b>Equipment Name:</b> '.$name.'</p>
      <p><i class="fa fa-user"></i><b>Equipment Units:</b> '.$units.'</p>
      <p><i class="fa fa-user"></i><b>Equipment Description:</b> '.$desc.'</p>
    </td>
    </tr>';
  }
}
?>
 </tbody>
              </table>
              </div>
              </div>
              </div>


              <!-- Button trigger modal -->

              <div class="card row col-md-4" style="margin-bottom: 100px;margin-left: 509px;">
              <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Register</button>
              </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="
    background: yellow;
    font-family: sans-serif;
    font-weight: lighter;
">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register Gym Membership</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="register.php" method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Your Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
  </div>
  
  <p style="padding-top: 20px; font-size: 15px"> <strong>Gender:</strong> <label>
    <input type="radio" name="gender" id="gender" value="female">
                                    Female
                                </label>
                                <label>
                                    <input type="radio" name="gender" id="gender" value="male">
                                    Male
                                </label>
                               </p>

<div class="mb-3">
    <label for="trainers">Select Your Trainer:</label>
    <select name="trainers" id="trainers" style="
    height: 35px;
    border: 2px solid black;
    width: 86px;
    border-radius: 9px;
">
<?php
   $sql = "select * from `trainer`";
   $result = mysqli_query($conn,$sql);
   $numRows = mysqli_num_rows($result);
   if($numRows == 0){
     echo '<option value=""></option>';  
   }
   else{
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['trainer_name'];
        echo '<option value="'.$name.'" name='.$name.'>'.$name.'</option>';
    }
   }
?>
</select>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select your Plan:</label>
    <select name="pln" id="pln" style="
    height: 36px;
    border: 2px solid black;
    border-radius: 12px;
">
    <?php
  $sql = "select * from `plans`";
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
       echo '<option value="'.$name.'" name='.$name.'>'.$amt.' for '.$duration.' </option>';
   }
  }
    ?>
    </select>
  </div>

<div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Any Extra input from our side?,or additional installments needed in our Gym"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success" style="width: 464px;">Register</button>
</form>
<div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      
      </div>
      </div>
     
    </div>
  </div>
</div>

          
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <?php include 'partials/_footer.php'; ?>

</body>

</html>