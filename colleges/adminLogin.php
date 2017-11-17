<?php

echo "helo";
if(isset($_POST['submit']))
{
    //echo "helo";
    $admin_id=$_POST['adminName'];
    $admin_password=$_POST['adminPassword'];
    
    if(!empty($admin_password) and !empty($admin_id))
    {
        require_once('../db/connection.php');
        $sql="SELECT * FROM admin WHERE admin_email='$admin_id' and admin_password='$admin_password';";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        $admin_email=$row['admin_email'];
        $admin_pass=$row['admin_password'];
        if(($admin_email===$admin_id) and ($admin_pass===$admin_password))
        {
            session_start();
            $_SESSION['admin_id']=$row['admin_id'];
            //echo "login";
              header('Location:../profile/adminProfile.php');
            
           
        }
        else
        {
            echo "<script>alert('wrong user name or password');
            window.loca
            tion.href='../index.php'</script>";
           // echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>