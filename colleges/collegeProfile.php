<?php

if(isset($_GET['name']))
{
    $state=$_GET['name'];
    
    require('../db/connection.php');
    $sql="SELECT * FROM collg WHERE state='$state'";
    $result=$conn->query($sql);
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
      <script>
         function collegeDetail(id){
            
                location.href="collegeDetails.php?id="+id;       
        }
      </script>
     <style>
         a:hover{
             background-color: yellow;
         }
      </style> 
  </head>
  <body style="background-image:url('../img/AP.jpg')";>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 "  style="margin-top:4%;"> 
                <div class="card text-center" >
              <div class="card-header"  style="background-color:white;">
                  <ul class="nav nav-tabs card-header-tabs" style="background-color;">
                   
                    <div class="col-md-6 text-left" style="margin-top:5%;background-color:white; margin-left:15%; ">
                
                        <h1>List Of College</h1>
                        <hr>
                        <br>
                        <table class="table" >
                                  
                          <thead>
                               <td>#</td> 
                             <td>College Name</td> 
                              <td>Action</td>
                        </thead>
                        <tbody>
                        <tr>
                            <?php 
                            $a=0;
                                 while($row=$result->fetch_assoc())
                                    {
                                         // echo $row['collg_name'];
                                      $a++;
                                  echo '
                                      <tr>
                                      <td>'.$a.'</td><td>'.$row["collg_name"].'</td>
                                      
                                      <td><a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="collegeDetail('.$row["collg_id"].')" >Details</a></td>
                                      </tr>
                                      
                                ';   
                                 }
                        
                              
                        $conn->close();
                    ?>
                  </tbody>
                </table>
                
            </div>
                   <div class="col-md-6" style="background-color:white;margin-top:5%"></div>
                </ul>
                  <h5 style="background-color:black;color:white;height:30px;margin-top:4%;">Copyright@ Shankar Suman All Rights Reserved</h5>
              </div>
            </div> 
            </div>
               
        </div>  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.m-in.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>