<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form Design</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="login-page">
      <div class="form">
    <form class="register-form" method="POST" action="login1.php">
    <input type="text" name="uid" placeholder="username" required/>
    <input type="password" name="pass" placeholder="password" required/>
    <input type="submit" name="login" value="LOGIN">
    <p class="message">Not Registered? <a href="#">Register</a></p>      	
	</form>

    <form class="login-form" action="register.php" method="POST">        
        <input type="text" name="email" placeholder="email id" required/>
        <input type="text" name="uid" placeholder="username" required/>
        <input type="password" name="pass" placeholder="password" required/>
        <input type="submit" name="register" value="SIGNUP">
        <p class="message">Already Registered? &#8209; <a href="#">Sign In</a></p>
    </form>

</div>
</div>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'>
</script>
<script>
	$('.message a').click(function(){
	$('form').animate({height:"toggle",opacity:"toggle"},
	"slow");
     });
</script>

</body>
</html>

