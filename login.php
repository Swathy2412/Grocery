<?php

session_start();

include("connector.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$uname = $_POST['user_name'];
	$pwd =$_POST['password'];
	if(!empty($uname) && !empty($pwd) && !is_numeric($uname))
	{		
		
		$query="select * from users where user_name = '$uname' and pass='$pwd' limit 1";
		$result = mysqli_query($con,$query);

		if($result)
		{	if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['pass']===$pwd)
				{   if($uname=="admin"){
					$_SESSION['user_id']= $user_data['user_id'];
					header("Location: admin.php");
					die();
				}
				else{
					$_SESSION['user_id']= $user_data['user_id'];
					header("Location: index.php");
					die();
				}
				}
				
			}
			
		}
		echo "<br><br><center><em><font color=white>Wrong username or password!</font></em></center>";
	}
	else
	{
		echo "Wrong username or password!";
	}

}
	


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="icon" href="hotel.ico">
    <link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="center">
    <h2>LOGIN!!!</h2>
    <form method="post"> 
       <div class="text"><input type="text"  name="user_name" required><span></span><label>Username</label></div>
       <!-- <div class="text"><input type="text"  required><label>Address</label></div> -->
       <div class="text"><input type="password"  name="password" required><label>Password</label></div>
       <div class="pwd">Forgot Password?</div>
       <input type="submit" value="login"><div class="signup">
         Not a member? <a href="signup.php">Signup</a>
       </div>
      
     </form>
</div>
</body>
</body>
</html>