

<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    
    require('../db/connection.php');
    $sql="SELECT * FROM collg WHERE details='$id'";
    $result=$conn->query($sql);
   
    //echo $row['details'];
}
?>