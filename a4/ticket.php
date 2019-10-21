<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="ticket.css">
</head>


<?php
    include('receipt.php');

?>

<body>
    <br>
    <br>
    <div style="notice">Right click page and select 'Print' to print tickets</div>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas<br>Standard</h1>
            <div class='info clearfix'>
                <div class='wp'>Name<h2><?php echo $_SESSION["cust"]["name"]; ?></h2>
                </div>
                <div class='wp'>Film<h2><?php phpMovieTitle($_SESSION["movie"]["id"]);?></h2>
                </div>
                <div class='wp'>Session<h2><?php
                          phpMovieDay($_SESSION["movie"]["day"]);
                          phpMovieHour($_SESSION["movie"]["hour"]);
                          ?></h2>
                </div>
                <div class='wp'>Admit<h2></h2>
                  <?php phpTicketsSTA($_SESSION["seats"]); ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas<br>First Class</h1>
            <div class='info clearfix'>
                <div class='wp'>Name<h2><?php echo $_SESSION["cust"]["name"]; ?></h2>
                </div>
                <div class='wp'>Film<h2><?php phpMovieTitle($_SESSION["movie"]["id"]);?></h2>
                </div>
                <div class='wp'>Session<h2><?php
                          phpMovieDay($_SESSION["movie"]["day"]);
                          phpMovieHour($_SESSION["movie"]["hour"]);
                          ?></h2>
                </div>
                <div class='wp'>Admit<h2></h2>
                  <?php phpTicketsFC($_SESSION["seats"]); ?>
                </div>
            </div>
        </div>
</body>
