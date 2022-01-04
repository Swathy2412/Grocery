<!DOCTYPE html>
<html>
<head>
	<title>DELETING ITEMS</title>
</head>
<body align="center">
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "grocery";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$item_idno = $_POST['i_id'];
$sql = "DELETE FROM addingitems WHERE item_id = '$item_idno'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Item Deleted successfully');window.location='delitem.html'</script>";

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
</body>
</html>