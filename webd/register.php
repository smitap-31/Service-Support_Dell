<?php  
    session_start();//session starts here  

    include("db_connection.php");  
      
    if(isset($_POST['register']))  
    {  
        $user_email=$_POST['email'];         
        $user_username=$_POST['uid'];  
        $user_password=$_POST['pass']; 
      
        if($user_username=='')  
        {  
            //javascript use for input checking  
            echo"<script>alert('Please enter the name')</script>";  
    exit();//this use if first is not work then other will not show  
        }  
      
        if($user_password=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
    //here query check weather if user already registered so can't register again.  
        $check_email_query="select * from signup WHERE uid='$user_username'";  
        $run_query=mysqli_query($dbcon,$check_email_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
    echo "<script>alert('Email $user_username is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
    //insert the user into the database.  
        $insert_user="insert into signup (uid,pass,email) VALUE ('$user_username','$user_password','$user_email')";  
        if(mysqli_query($dbcon,$insert_user))  
        {  
            echo"<script>alert('Successfully Registered !!! Kindly Login...')</script>"; 
            echo"<script>window.open('login.php','_self')</script>";  
        }  
      
      
      
    }  

    ?>  