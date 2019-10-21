<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="ticket.css">
</head>


<?php 
    require_once('receipt.php');
    
?>

<body>
    <div style="notice">Right click page and select 'Print' to print tickets</div>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas</h1>
            <div class='info clearfix'>
                <div class='wp'>Name<h2><?php echo $_SESSION["cust"]["name"]; ?></h2>
                </div>
                <div class='wp'>Film<h2><?php phpMovieTitle($_SESSION["movie"]["id"]);?></h2>
                </div>
                <div class='wp'>Session <?php
                          phpMovieDay($_SESSION["movie"]["day"]);
                          phpMovieHour($_SESSION["movie"]["hour"]);
                          ?></h2>
                </div>
                <div class='wp'>Tickets<?php echo $_SESSION; ?></h2>
                </div>
            </div>
        </div>
    </div>
</body>
