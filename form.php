<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>  	
 <?php
    $conn=mysqli_connect("localhost","root","","db");
    if($conn==false)
    {
        die("error".mysqli_connect_error());
    }
    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$age=$_REQUEST['age'];
    $role=$_REQUEST['role'];  
    $recommend=$_REQUEST['user-recommend']; 
	$favproduct=$_REQUEST['mostLike']; 
	$improvement=$_REQUEST['prefer1'].$_REQUEST['prefer2'].$_REQUEST['prefer3'] .$_REQUEST['prefer4'].$_REQUEST['prefer5']; 
	$comments=$_REQUEST['comment']; 
    $sql="INSERT INTO survey VALUES('$name','$email','$age','$role','$recommend','$favproduct','$improvement','$comments')";  
    $result=mysqli_query($conn,$sql);  
     if($result){  
      $message="Form Submitted Successfully "; 
	  $flag=1;
    }
	else {  
        $message="Failure!"; 
		$flag=2;
    }  	
	mysqli_close($conn);
?> 
<h3 style="display: none;"> <span id="flag"><?php echo $flag?> 
</span> <span id="msg" > <?php echo $message?>  </span></h3>
<script>
	  var message=document.getElementById("msg").innerHTML;
	  var flag=document.getElementById("flag").innerHTML;
	  if(flag == 1){
		  alert(message);
		  window.location.replace("index.html");
  }
  else if(flag ==  2){
  alert(message);
  window.location.replace("survey.php");}
</script>
</body>
</html>