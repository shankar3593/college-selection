<?php
session_start();

if(isset($_SESSION['admin_id']))
{
    //echo "helo";
    $admin_id=$_SESSION['admin_id'];
    require_once("../db/connection.php");

if(isset($_POST["submit"])){
    $collg_name=$_POST['collg_name'];
    $state=$_POST['state'];
  // echo $collg_name;
                    $sql="INSERT INTO collg (collg_name,state) VALUES('$collg_name','$state');";
                                    if($conn->query($sql)===TRUE)
                                    {
                                        //echo "inserted";
                                        echo "<script>alert('college added successfully'); window.location.href='../collg/addcollg.php';</script>";
                                  //   header('Location: );
                                        exit;
                                    }
                                    else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                        }
                       
    $conn->close();
}
                  
else
{
    echo "not allow";
    header('Location:../index.php');
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      
  </head>
  <body>
      
      <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color:ed;margin-top:4%">
                <h2>Add College</h2>
                <hr>
                <br>
                <form action="addCollg.php" method="post">
                    <div class="form-group">
                        <label for="collgLabel">College Name</label>
                        <input type="text" class="form-control" id="collg_name" name="collg_name" placeholder="college Name" required >
                    </div>
                    
                    <div class="form-group">
                        <label for="collgLabel">State</label>
                        <input type="text" class="form-control" id="state"  placeholder="State" required name="state">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </form>
            </div>
          </div>
    
      </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.m-in.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>