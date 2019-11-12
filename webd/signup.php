<?php  
      
    include("database/db_conection.php");//make connection here  
    if(isset($_POST['submit']))  
    {  
        $username=$_POST['u3'];//here getting result from the post array after submitting the form. 
        $email=$_POST['u1'];//same 
        $password=$_POST['u2'];//same 
        $retype_password=$_POST['u4'];

        $insert_user = "insert into signup (username, email, password, retype_password) VALUE ('$username','$email', '$password', '$retype_password')";  
        if(mysqli_query($dbcon,$insert_user))  
        { 
            echo"<script>alert('Successfully Registered !!!')</script>";
            echo"<script>window.open('login.php','_self')</script>";  
        }   
    }  
      
    ?>  