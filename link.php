<?php

session_start();

include("connector.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST" )
{
	$category = $_POST['i_name'];

	if(!empty($category) && !is_numeric($category))
	{		
		
		$query="SELECT item_id,item_name,item_quantity,item_category,item_price FROM addingitems WHERE item_category='$category'";
		$result = mysqli_query($con,$query);

		if($result)
		{	if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				//  if($user_data['category']===$category)
				{   if($category=="fruits"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location: dispempp1.php");
					die();
				}
                elseif($category=="vegetables"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location: vepdisp1.php");
					die();
				}
                elseif($category=="fast foods"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location: fast1.php");
					die();
				}
                elseif($category=="snacks"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:snacks1.php");
					die();
				}
                elseif($category=="masala"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:masala1.php");
					die();
				}
                elseif($category=="oils"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:oil1.php");
					die();
				}
                elseif($category=="beverages"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:beverages1.php");
					die();
				}
                elseif($category=="baby items"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:baby1.php");
					die();
				}
                elseif($category=="choco"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:chocolate1.php");
					die();
				}
                elseif($category=="beauty"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:beauty1.php");
					die();
				}
                elseif($category=="container"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:container1.php");
					die();
				}
                elseif($category=="bath & cleaning"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:bathclean1.php");
					die();
				}
                elseif($category=="flours"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:flours1.php");
					die();
				}
                elseif($category=="dry"){
				    $_SESSION['user_id']= $user_data['user_id'];
					header("Location:dry1.php");
					die();
				}
				else{
					$_SESSION['user_id']= $user_data['user_id'];
					header("Location: icecream1.php");
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