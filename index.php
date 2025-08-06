<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A4S Gym Management</title>
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

<body style="background: #ebf0f1;overflow-x: HIDDEN;" >
    <?php include 'partials/dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container" style="margin-left: 76px;">
                    <h1 style="display: inline;position: absolute;margin-top: 240px;font-size: 73px;font-family: fangsong;color: aliceblue; z-index: 1;">
                        <span style="color: #1efb33;text-shadow: 3px 2px 4px black;font-size: 110px;">A4S</span>
                        <span style="margin-left: 30px;color: #f3ff35;text-shadow: 3px 2px  4px black;"> GYM<span>
                    </h1>

                    <h1 style="display: inline;position: absolute;margin-top: 350px;font-size: 73px;font-family: fangsong;color: white;z-index: 1;text-shadow: 3px 2px 4px black;"> 
                        MANAGEMENT
                    </h1>

                    <p style="display: inline;position: absolute;z-index: 1;margin-top: 430px;font-size: 30px;color: aliceblue;font-family: fangsong;margin-left: 0px;text-shadow: 3px 2px 4px black;">
                        Get Fit With Perfection
                    </p>
                
                    <button type=" button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="contact.php" style="display: block;position: absolute;z-index: 1;margin-top: 515px;width: 280px;height: 50px;background: #ff7800;font-size: 24px;border-radius: 32px;font-family: fangsong;margin-left: 18px;">
                       <a href="contact.php" style="text-decoration: none;color: white;">
                            Contact to Register
                        </a> 
                    </button>         
                </div>
                
                <img src="img/img0.jpg" class="d-block w-100 my-0" style="height:700px;filter: brightness(0.4);"
                    alt="..."> 
            </div>
        </div>
    </div>
    
    <div class="container" style="text-align:center">
        <h1 style="font-family: fangsong;font-weight: 200;text-shadow: 3px 2px 7px black;margin-top: 47px;
            ">Welcome to A4S Gym Management
        </h1>

        <div class="container" style="margin-top: 0px;">
            <img src="img/img8.jpg" style="width: 330px;height: 161px;margin-left: -430px;margin-top: 31px;border: 2px solid black;border-radius: 3px;" alt="">

            <p style="width: 500px;position: absolute;margin-top: -152px;text-align: justify;margin-left: 626px;
                font-family: fangsong;font-size: 19px;">
                Gym Management System is an online service that can be setup for your gym to help
                manage classes, memberships, receive payments (merchant and cash), keep track with
                detailed statistics, customer management, surveys and it even has an online store so you
                can sell products to your customers.
            </p>
        </div>
    </div>
   

    <div class="text-center mt-5">
        <div class="row">
            <div class="col-md-12" style="
    font-size: 50px;
    font-weight: 600;
">
            How A4S Gym works
            </div>
            <div class="col-md-12" style="
    font-size: 24px;
    width: 820px;
    font-family: auto;
    margin-left: 330px;
">
            A4S is a network of gyms, pools, spas and health and fitness apps. With one pass, you can access fitness in exactly the way you want.
            </div>
        </div>
    </div>

    <div class="container" style="
    margin-bottom: 115px;
    display: flex;
    justify-content: space-around;
    margin-top: 25px;
    font-size: 18px;
">
    <div class="card col-md-3" style="
    height: 280px;
    width: 360px;
">
       <img src="img/icon1.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 153px;
    margin-top: 13px;
">
       <div class="card-header" style="
    text-align: center;
    font-family: sans-serif;
    font-size: 25px;
    font-weight: 700;
    color: blue;
    background: aliceblue;
">Gyms wherever you are</div>
       <div class="card-body" style="
    text-align: center;
    font-family: math;
    background: aquamarine;
">Search to find gyms near you and book easily online.</div>
    </div>

    

    <div class="card col-md-3" style="
    height: 280px;
    width: 360px;
">
       <img src="img/icon1.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 153px;
    margin-top: 13px;
">
       <div class="card-header" style="
    text-align: center;
    font-family: sans-serif;
    font-size: 25px;
    font-weight: 700;
    color: blue;
    background: aliceblue;
">A pass to suit you</div>
       <div class="card-body" style="
    text-align: center;
    font-family: math;
    background: aquamarine;
">A one-off visit, multi-gym access with one pass, or a full gym membership.</div>
    </div>

    
    <div class="card col-md-3" style="
    height: 280px;
    width: 360px;
">
       <img src="img/icon1.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 153px;
    margin-top: 13px;
">
       <div class="card-header" style="
    text-align: center;
    font-family: sans-serif;
    font-size: 25px;
    font-weight: 700;
    color: blue;
    background: aliceblue;
">Easy and flexible</div>
       <div class="card-body" style="
    text-align: center;
    font-family: math;
    background: aquamarine;
">Book easily online or in the app. Cancel anytime - you’re in control.</div>
    </div>
    </div>

    <div class="container-fluid" style="margin-bottom: 50px;background:black;height:600px">
        <div class="card" style="background: black;">
            <h1 style="
    text-align: center;
    font-family: none;
    font-size: 40px;
    font-weight: revert;
    background: black;
    color: white;
    margin-top: 70px;
">Why A4S?</h1>
        </div>


        <div class="container" style="
    display: flex;
    justify-content: space-around;
    margin-top:20px;
">
            <div class="card col-md-2" style="
    width: 260px;
    height: 345px;
">
<img src="img/icon2.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 110px;
    margin-top: 13px;
">
             <h1 style="
    font-size: 28px;
    text-align: center;
    font-family: inherit;
    margin-top: 14px;
    font-weight: 700;
">Legacy</h1>
           <p style="
    text-align: justify;
    width: 230px;
    margin-left: 14px;
    font-family: inherit;
    margin-top: 17px;
"> Over the last 46 years, our iconic gym brand has set the standard for all others to follow. Legends have been made here since 1976. Now it’s your turn.</p>
            </div>

            <div class="card col-md-2" style="
    width: 260px;
    height: 345px;
">
<img src="img/icon3.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 110px;
    margin-top: 13px;
">
            <h1 style="
    font-size: 28px;
    text-align: center;
    font-family: inherit;
    margin-top: 14px;
    font-weight: 700;
">  Environment </h1>
<p style="
    text-align: justify;
    width: 230px;
    margin-left: 14px;
    font-family: inherit;
    margin-top: 17px;
">
We provide a safe, secure and comfortable environment to train in no matter what your experience or fitness level is. We boast a strong community of like-minded people supporting and encouraging one another to achieve legendary greatness.</p>
            </div>

            <div class="card col-md-2" style="
  width: 260px;
    height: 345px;
">
<img src="img/icon5.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 110px;
    margin-top: 13px;
">
            <h1 style="
    font-size: 28px;
    text-align: center;
    font-family: inherit;
    margin-top: 14px;
    font-weight: 700;
">  Results </h1>
<p style="
    text-align: justify;
    width: 230px;
    margin-left: 14px;
    font-family: inherit;
    margin-top: 17px;
">
If you’re serious about achieving a goal- no matter what that is- then we are your gym. From the best equipment, technology and programs to the best fitness professionals around, we are serious about getting you results.</p>
            </div>

            <div class="card col-md-2" style="
    width: 260px;
    height: 345px;
">
<img src="img/icon4.png" alt="" style="
    height: 56px;
    width: 56px;
    margin-left: 110px;
    margin-top: 13px;
">
         <h1 style="
    font-size: 28px;
    text-align: center;
    font-family: inherit;
    margin-top: 14px;
    font-weight: 700;
">   Experience </h1>
<p style="
    text-align: justify;
    width: 230px;
    margin-left: 14px;
    font-family: inherit;
    margin-top: 17px;
">
Remarkable customer service, a safe, clean, comfortable environment and the best training floor around await you at your local World Gym.</p>
            </div>
        </div>




    </div>

    <div class="container">

    
    
    <div class="card card col-md-12" style="margin-bottom: 115px;background:white;width: 1181px;margin-left: 60px;height: 580px;overflow-y: scroll;">
        <div class="card-header" style="
    text-align: center;
    font-size: 43px;
    font-weight: 400;
    font-family: inherit;
">
            FAQs
        </div>
        <div class="card-body">
            <h1 style="
    font-size: 25px;
    font-family: sans-serif;
    font-weight: inherit;
">What is A4S GymManagement?</h1>
            <p style="
    font-size: 18px;
    font-family: math;
">Hussle is the UKs most flexible way to get fit. Stop and start with a click of a button. Enjoy using premium gyms, whether near work, home or whilst travelling. With unlimited access to 1000’s of venues you can relax in a spa, swim in a pool or workout at your favourite gym. When life gets in the way Hussle is there to make life work out!</p>
            <br>
            <h1 style="
    font-size: 25px;
    font-family: sans-serif;
    font-weight: inherit;
">What is A4S GymManagement?</h1>
            <p style="
    font-size: 18px;
    font-family: math;
">Hussle is the UKs most flexible way to get fit. Stop and start with a click of a button. Enjoy using premium gyms, whether near work, home or whilst travelling. With unlimited access to 1000’s of venues you can relax in a spa, swim in a pool or workout at your favourite gym. When life gets in the way Hussle is there to make life work out!</p>
            <br>
            <h1 style="
    font-size: 25px;
    font-family: sans-serif;
    font-weight: inherit;
">What is A4S GymManagement?</h1>
            <p style="
    font-size: 18px;
    font-family: math;
">Hussle is the UKs most flexible way to get fit. Stop and start with a click of a button. Enjoy using premium gyms, whether near work, home or whilst travelling. With unlimited access to 1000’s of venues you can relax in a spa, swim in a pool or workout at your favourite gym. When life gets in the way Hussle is there to make life work out!</p>
            <br>
            <h1 style="
    font-size: 25px;
    font-family: sans-serif;
    font-weight: inherit;
">What is A4S GymManagement?</h1>
            <p style="
    font-size: 18px;
    font-family: math;
">Hussle is the UKs most flexible way to get fit. Stop and start with a click of a button. Enjoy using premium gyms, whether near work, home or whilst travelling. With unlimited access to 1000’s of venues you can relax in a spa, swim in a pool or workout at your favourite gym. When life gets in the way Hussle is there to make life work out!</p>
        </div>
    </div>


    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <?php include 'partials/_footer.php'; ?>
</body>
</html>