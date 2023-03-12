<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>

<body>
    <?php $message=""; $flag="";?>
    <div class="img">
        <img src="img.png" alt="">
    </div>
    <div class="sign-in">
        <h2>Get Started!</h2>
        <br>
        <br>
        <form action="" method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <br><br>
            <input type="text" name="username" placeholder="Username">
            <br><br>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input type="text" name="cnpass" placeholder="Confirm Password">
            <br><br>
              <input type="submit" id="submit" class="btn" value="Sign-up" name="submit" >
              <br>
        </form>

    </div>
	 <?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['cnpass'])) {  
    $fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$user=$_POST['username'];
    $password=$_POST['password'];  
    $cnpass=$_POST['cnpass']; 
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,"db") or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
	if($password==$cnpass){
    $sql="INSERT INTO user(fname,lname,username,password) VALUES('$fname','$lname','$user','$password')";  }
	else{
		$message="Password not match";
		$flag=2;	
	}
    $result=mysqli_query($con,$sql);  
        if($result){  
      $message="Account Successfully Registered"; 
      $flag=1;	
    }
	else {  
        $message="Failure!"; 
		$flag=2;	
    }  
  
    } else {  
        $message="That username already exists! Please try again with another.";  
		$flag=2;	
    }  
  
} else {  
    $message="All fields are required!";  
	$flag=2;	
}  
}  
?> 
<h3 style="display: none;">
<span id="msg" ><?php echo $message?> 
</span> <span id="flag"><?php echo $flag?> 
</span> </h3>
<script>
  document.getElementById("submit").onclick=msg();
  function msg(){
	  var message=document.getElementById("msg").innerHTML;
	  var flag=document.getElementById("flag").innerHTML;
	  if(flag == 1){
		  alert(message);
		  window.location.replace("login.php");
  }
  else if(flag ==  2){
  alert(message);}
  }
</script>
</body>

</html>
