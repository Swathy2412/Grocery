<?php
    session_start();

    include("connector.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <link rel="icon" href="https://o.remove.bg/downloads/7b69b257-d3c0-4afb-a5ca-7d68b3bb7ff8/559-5593203_grocery-bag-icon-hd-png-download-removebg-preview.png">
    <link rel="stylesheet" href="style1.css">

</head>
<body class="box">
    
    <!-- home section -->
  
        <h1>SUPER MARKET</h1>
        <div class="card">
        <div class="navbar">
            <ul>
                <li><a href="card.html" class="href"><b>SEARCH PRODUCT</b></a></li>
                <li><a href="logout.php" class="href"><b>LOGOUT</b></a></li>
                
                
            </ul>
        </div>
    
    </div>
    <marquee behavior="" direction="left" scrollamount="15"><em><b>HAPPY SHOPPING!!!</b></em></marquee>
    
    <div class="table">
        <table>
        <tr>
        <th><h3 id="hed">ADDRESS</h3></th>
        <th><h3 id="head">FOLLOW US</h3></th>
    </tr>
    <tr>
        <td>Thudiyalur Mainroad,<br>Coimbatore-17.</td>
        <td><img src="images.png">Instagram</td>
    </tr>
    <tr>
        <td>Contact:8767876567</td>
        <td><img src="what.png">Whatsapp</td>
    </tr>
    </table>
    </div>
</div>
</body>
</html>