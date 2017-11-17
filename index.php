<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

      </style>
  </head>
  <body>
    <!--<h1>Hello, world!</h1>  -->
      <div  id="id03"  class="fluid-container">
          <div class="row">
            <div class="col-md-12">
                     <div class="card text-center" >
              <div class="card-header" >
                  <ul class="nav nav-tabs card-header-tabs">
                    
                  <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="document.getElementById('id03').style.display='block'" style="margin-top:4%;">Home</a>
                  </li>
                      <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="document.getElementById('id02').style.display='block'" style="margin-top:4%;">Admin Login</a>

                  </li>
                      
                  <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="document.getElementById('id03').style.display='block'" style="margin-top:4%;">About Us</a>
                  </li>
                      <img class="card-img-bottom" src="img/eng.jpg" alt="Card image cap" width="142" height="442" >
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Andhra Pradesh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=AP"><img src="img/AP.png" class="w3-circle" alt="" style="width:80%;margin-top:5%;"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Arunachal Pradesh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=arunachal pradesh"><img src="img/arunachal%20pradesh.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Assam</h2>
                 
                 <a href="colleges/collegeProfile.php?name=assam"><img src="img/IIT_Guwahati_Logo.svg.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Bihar</h2>
                 
                 <a href="colleges/collegeProfile.php?name=bihar"><img src="img/1200px-Indian_Institute_of_Technology,_Patna.svg.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Chhattisgarh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=chattisgarh"><img src="img/chattisgarh.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Goa</h2>
                 
                 <a href="colleges/collegeProfile.php?name=goa"><img src="img/goa.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Gujarat </h2>
                 
                 <a href="colleges/collegeProfile.php?name=gujarat"><img src="img/gujrat.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Haryana</h2>
                 
                 <a href="colleges/collegeProfile.php?name=haryana"><img src="img/haryana.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Himachal Pradesh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=HP"><img src="img/himachal%20pradesh.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Jammu and Kashmir</h2>
                 
                 <a href="colleges/collegeProfile.php?name=J & K"><img src="img/jammu.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Jharkhand</h2>
                 
                 <a href="colleges/collegeProfile.php?name=jharkhand"><img src="img/download%20(1).jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Karnataka</h2>
                 
                 <a href="colleges/collegeProfile.php?name=karnatka"><img src="img/banglore.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Kerala</h2>
                 
                 <a href="colleges/collegeProfile.php?name=kerala"><img src="img/kerala.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Madhya Pradesh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=MP"><img src="img/madhya%20pradesh.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Maharashtra</h2>
                 
                 <a href="colleges/collegeProfile.php?name=maharastra"><img src="img/download.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Manipur</h2>
                 
                 <a href="colleges/collegeProfile.php?name=manipur"><img src="img/Manipur.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Meghalaya</h2>
                 
                 <a href="colleges/collegeProfile.php?name=meghalaya"><img src="img/meghalaya.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Mizoram</h2>
                 
                 <a href="colleges/collegeProfile.php?name=mizoram"><img src="img/mizoram.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Nagaland</h2>
                 
                 <a href="colleges/collegeProfile.php?name=nagaland"><img src="img/NAGALAND.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Odisha</h2>
                 
                 <a href="colleges/collegeProfile.php?name=oddisa"><img src="img/oddisa.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Punjab</h2>
                 
                 <a href="colleges/collegeProfile.php?name=punjab"><img src="img/punjab.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Rajasthan</h2>
                 
                 <a href="colleges/collegeProfile.php?name=rajasthan"><img src="img/rajasthan.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Sikkim</h2>
                 
                 <a href="colleges/collegeProfile.php?name=sikkim"><img src="img/Sikkim.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Tamil Nadu</h2>
                 
                 <a href="colleges/collegeProfile.php?name=tamil nadu"><img src="img/BL02_PG6_IIT-M_3097664f.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Telangana</h2>
                 
                 <a href="colleges/collegeProfile.php?name=telangna"><img src="img/telanganaa.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container">
                  <h2>Tripura</h2>
                 
                 <a href="colleges/collegeProfile.php?name=tripura"><img src="img/tripura.jpg" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      <div class="col-md-4" style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container">
                  <h2>Uttar Pradesh</h2>
                 
                 <a href="colleges/collegeProfile.php?name=UP"><img src="img/1024px-IIT_Kanpur_Logo.svg.png" class="w3-circle" alt="" style="width:100%;margin-top:5%;" width="300" height="300"></a> 
                    </div>
              </div>
                      
                      
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:4%;height:380px;">
                <div class="w3-container" >
                  
                  <h2>Uttarakhand</h2> 
                 <a href="colleges/collegeProfile.php?name=uttarakhand"><img src="img/uttrakhand.jpg" class="w3-circle" alt="" style="width:100%;margin-top:6%;" width="300" height="300"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f2e6d9;margin-top:4%; height:380px;">
                <div class="w3-container" >
                    
                    <h2>West Bengal</h2>
                 <a href="colleges/collegeProfile.php?name=WB"><img src="img/IIT_Kharagpur_Logo.svg.png" class="w3-circle" alt="" style="width:100%;margin-top:4%;" width="300" height="300" ></a> 
                    </div>
              </div>
                </ul>
                  <h5 style="background-color:black;color:white;height:30px;margin-top:4%;">Copyright@ Shankar Suman All Rights Reserved</h5>
              </div>
        
                </div>
              </div>
          </div>
</div>
      
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="colleges/adminLogin.php" method="post">
    <div class="container">
      <label><b>Username/UserEmail</b></label>
      <input type="text" placeholder="Enter Username" name="adminName" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="adminPassword" required>
        
      <button type="submit" name="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>