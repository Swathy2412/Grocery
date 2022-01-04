<?php
include "connector.php"; 
$conn = new mysqli("localhost:3307","root","","grocery");
$id = $_GET['id']; 
$sql="DELETE from addingitems where item_id = '$id'";
$del = mysqli_query($conn,$sql); 
if($del)
{
    mysqli_close($dbname); // Close connection
    header("location:flours1.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>