<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="canoe.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>Halifax Canoe and Kayak </title>
    <script>
        $(document).ready(function(){ 
            $("#hamburger").click(function(){ 
                $("#menupanel").slideToggle("slow");
         }); 
        });
        </script>  
</head>
<body>

    <?php
        $conn = mysqli_connect("localhost", "id20795886_cyndil", "Ydbxs5M4iVsc9URmNWX42#", "id20795886_cynskills");
        
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
    ?>

    <header>
        <h1>Halifax Canoe and Kayak</h1>
        
        <div id="logo">
            <img src="images/paddle-white.png" alt="paddle logo" width="55px">
        </div>
      <!-- menu slides down -->
        <div id="hamburger">
            <img src="images/hamburger.png" alt="menu icon" width="25px">
        </div>

        <div id="menupanel">
            <nav>
             <ul>
                <li><a href="index.php">Admin- Add trips</a></li>
                
                <li><a href="all_adventures.php">All Adventures</a></li>
             </ul>
            </nav>
        </div>
    </header>

