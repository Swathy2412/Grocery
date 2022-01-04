<html>
    <head>
        <style type = "text/css">
        table{
            border-collapse: collapse;
            width: 100%
            color: #eb4034;
            font-family: monoscope;
            font-size:25px;
            text-align: left;
        }

        th{
            background:yellow;
            color:black;
            font-family: 'ubutnu',sans-serif;
            font-weight: bolder;
            padding:4px 8px;
            font-size: 20px;
        }
        body{
            background:url("snack.jpg")no-repeat center;
            width:100%;
            height:100vh;
            background-size: cover;
            overflow: hidden;
        }
        td{
            font-family: glacial indifference;
            font-weight: bolder;
            font-size: 20px;
            padding:4px 15px;
            background: wheat;
        }
        h1{
            color:#03045e;
            font-family: 'ubutnu',sans-serif;
            font-weight: bolder;
            margin-top:-40px;
        }
        #color{
            color:crimson;
        }
        /*.form label{
           margin-right: 14px;
        }*/
        .text1{
            margin-right:5px;

        }
        .btn{
            margin-right:30px;
            border-radius: 6px;
            background: none;
        }
        .route button{
           padding:3px 5px;
           border-radius:20px;
           background:black;
           border:2px solid black;
           font-family:'ubuntu';
           color:white;
           font-weight:bolder;
           text-align:right;
           margin-right:-850px;
           
        }
        a{
            text-decoration:none;
            color:black;
            font-family:glacial indifference;
            font-size:15px;
            font-weight:bolder;
        }
        

        tr:nth-child(even) (background-color: #ededed)
        </style>
    </head>
    <body>
        <center>
            <table border=1 align="center"><br>
            <a href="map.html"><h3 class="route"><button>VIEW ROUTE</button></h3></a>
              <BR><BR><h1>AVAILABLE PRODUCTS</h1>
                <br>
            <tr>
                <th>ITEM ID</th>
                <th>ITEM NAME</th>
                <th>QUANTITY</th>
                <th>CATEGORY</th>
                <th>PRICE</th>
                <!-- <th>Guest Address</th>  
                <th> Total Rent(Rs)</th>   -->
                </tr>


            <?php
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "grocery";

            $conn = new mysqli("localhost:3307","root","","grocery");
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT item_id,item_name,item_quantity,item_category,item_price FROM addingitems WHERE item_category='SNACKS'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["item_id"] . "</td><td>" . $row["item_name"] . "</td><td>". $row["item_quantity"]. "</td><td>" . $row["item_category"] . "</td><td>" . $row["item_price"];
  }
} else {
  echo "";
}
$conn->close();
?>

        </table>
        </center>
    </body>
</html>

 