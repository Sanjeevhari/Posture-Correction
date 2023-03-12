<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log-in</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <?php $flag=""; $message=""?>
    <!-- <img src="img.png" class="bagr"> -->
    <div class="container">
        <div class="login-content">
            <form method="post">
                <img class="avatar" src="avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" class="input" placeholder="Username">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" class="input" placeholder="Password">
                    </div>
                </div>
                <a href="signin.php" id="signup">Sign-up</a>
                <a href="">Forgot Password</a>
                <input type="submit" id="submit" name="submit" class="btn" value="Login" >
				<h3 id="m" style="color:red;"> </h3>
            </form>
        </div>
        <div class="img">
            <img src="phone.svg" alt="">
        </div>
    </div>
	 <?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'db') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
        $message="Succesfully Logged In";
		$flag=1;
		$_COOKIE['name']=$dbusername;
    }  
    } else {  
        $message="Invalid username or password!"; 
        $flag=2;
    }  
  
} else {  
    $message="All fields are required!";  
	$flag=2;
}  
}  
?> 
<p style="display: none;" ><span id="flag"><?php echo $flag?> </span>
<span id="msg" ><?php echo $message?> </span></p>
<script>
  document.getElementById("submit").onsubmit=msg();
  function msg(){
	  var message=document.getElementById("msg").innerHTML;
	  var flag=document.getElementById("flag").innerHTML;
	  if(flag == 1){
		  alert(message);
		  window.location.replace("index.php");
  }
  else if(flag ==  2){
  document.getElementById("m").innerHTML=message;}
  }
</script>
</body>

</html>
