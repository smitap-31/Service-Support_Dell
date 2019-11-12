<?php  
    session_start();//session starts here  

    include("db_connection.php");  
      
    if(isset($_POST['login']))  
    {  
        $user_username=$_POST['uid'];  
        $user_password=$_POST['pass']; 
      
        $check_user="select * from signup WHERE uid='$user_username'AND pass='$user_password'";  
      
        $run=mysqli_query($dbcon,$check_user);  

        if(mysqli_num_rows($run))  
        {  
            
            echo "<script> window.open('index.php','_self') </script>";  
      
            $_SESSION['uid']=$user_username;//here session is used and value of $user_email store in $_SESSION. 
      
        }  
        else  
        {  
          echo "<script>alert('Username or password is incorrect!')</script>"; 
          echo "<script> window.open('login.php','_self') </script>";  
        }  
    } 

    ?>  