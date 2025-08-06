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
    <?php include 'partials/dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container" style="margin-left: 76px;">
                    <h1 style="display: inline;position: absolute;margin-top: 240px;font-size: 73px;
                        font-family: fangsong;color: aliceblue; z-index: 1;">
                        <span style="color: #1efb33;text-shadow: 3px 2px 4px black;font-size: 110px;">
                            A4S
                        </span>
                        
                        <span style="margin-left: 30px;color: #f3ff35;text-shadow: 3px 2px  4px black;"> 
                            GYM
                        </span>
                    </h1>
                    
                    <h1 style="display: inline;position: absolute;margin-top: 350px;font-size: 73px;font-family: fangsong;color: white;z-index: 1;text-shadow: 3px 2px 4px black;"> 
                        MANAGEMENT
                    </h1>
                    
                    <p style="display: inline;position: absolute;z-index: 1;margin-top: 430px;font-size: 30px;
                        color: aliceblue;font-family: fangsong;margin-left: 0px;text-shadow: 3px 2px 4px black;">
                        Contact Us
                    </p>
                
                 
                
                </div>
                <img src="img/img7.jpg" class="d-block w-100 my-0" style="height:700px;filter: brightness(0.4);"
                    alt="...">
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['submit'])){
            include 'partials/dbconnect.php';
            $name = $_POST['name'];
            $email =  $_POST['email'];
            $phone = $_POST['phone'];
            $desc = $_POST['desc'];

            $sql = "INSERT INTO `user_queries` (`user_name`, `user_email`, `user_phone`, `user_query`) VALUES ('$name', '$email', '$phone', '$desc')";
            $result = mysqli_query($conn,$sql);
           
            if($result){
              
                    echo '<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" style="margin-bottom: 0px;">
                          <strong>Success!</strong> We will view your concern and reply to your mail soon.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                    
            }
        }
    ?>
    
    <form action="" method="POST">
    <div class="container" style="
        width: 420px;
        margin-top: -675px;
        background: #ff7800;
        height: 610px;
        color: black;
        font-family: fangsong;
        position: absolute;
        line-height: 62px;
        margin-left: 930px;
        border: 2px solid black;
        border-radius: 13px;
        ">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name = "name" placeholder="Enter Your Name." required>
        </div>
    
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" maxlength="10"  pattern="[1-9]{1}[0-9]{9}" title="Please Enter the 10 digits phone number only" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Elaborate your concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Any feedbacks,comments or questions etc." required></textarea>
        </div>

        <button type="submit" class="btn btn-outline-primary" name="submit" style="
        width: 314px;
        margin-left: 39px;
        margin-top: -16px;
        ">Submit</button>

    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    
    <?php include 'partials/_footer.php'; ?>
</body>
</html>