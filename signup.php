<?php
    session_start();

    include("connector.php");
    include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$uname = $_POST['user_name'];
		$address = $_POST['add'];
		$pwd =$_POST['password'];
		
		if(!empty($uname) && !empty($pwd) && !is_numeric($uname))
		{		
			$user_id = random_num(20);
			$query="insert into users (user_id,user_name,address,pass) values ('$user_id','$uname','$address','$pwd')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die();

		}
		else
		{
			echo "Please enter some valid information!";
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" href="hotel.ico">
	<link rel="stylesheet" href="style3.css">

</head>
<body>
<div class="center">
    <h2>SIGN UP!!!</h2>
    <form method="post"> 
       <div class="text"><input type="text" name="user_name" required><span></span><label>Username</label></div>
       <div class="text"><input type="text" name="add"  required><label>E-mail</label></div>
       <div class="text"><input type="password"  name="password" required><label>New Password</label></div>
       <!-- <div class="text"><input type="password"  required><label>Confirm Password</label></div> -->
	   <input type="hidden" name="usertype" value="admin">
       <input type="submit" value="signup"><div class="signup">
         
       </div>
      
     </form>
</div>
</body>
</html>