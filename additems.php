<!DOCTYPE html>
<html>
<head>
	<title>ADDING ITEMS</title>
</head>
<body align="center">
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "grocery";

$item_name = $_POST['name'];
$item_quantity= $_POST['quantity'];
$item_category = $_POST['category'];
$item_price = $_POST['price'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO addingitems (item_id,item_name,item_quantity,item_category,item_price)
VALUES ('', '".$item_name."', '".$item_quantity."','".$item_category."', '".$item_price."')";

if ($conn->query($sql) === TRUE) {
    

echo "<script>alert('Item Added successfully');window.location='new.html'</script>";


  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>