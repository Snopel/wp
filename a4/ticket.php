<?php
    // This file receives the form values gathered in tools.php and displays them in a practical ticket format.
    // Multiple tickets are printed if a customer purchases tickets for both standard and first class viewings.
  require_once 'tools.php';
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="ticket.css">
</head>

<body>
    <br>
    <br>
    <!–– This is to indicate a simple way of printing tickets for the customer, with a pre-built function in their browser. -->
    <div style="notice">Right click page and select 'Print' to print tickets</div>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas<br>Standard</h1>
            <div class='info clearfix'>
                <div class='wp'><h2>Name</h2> <?php echo $_SESSION["cust"]["name"]; ?>
                </div>
                <div class='wp'><h2>Film</h2><?php phpMovieTitle($_SESSION["movie"]["id"]);?>
                </div>
                <div class='wp'><h2>Session</h2><?php
                          phpMovieDay($_SESSION["movie"]["day"]);
                          phpMovieHour($_SESSION["movie"]["hour"]);
                          ?>
                </div>
                <div class='wp'><h2>Admit</h2>
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
                <div class='wp'><h2>Name</h2> <?php echo $_SESSION["cust"]["name"]; ?>
                </div>
                <div class='wp'><h2>Film</h2><?php phpMovieTitle($_SESSION["movie"]["id"]);?>
                </div>
                <div class='wp'><h2>Session</h2><?php
                          phpMovieDay($_SESSION["movie"]["day"]);
                          phpMovieHour($_SESSION["movie"]["hour"]);
                          ?>
                </div>
                <div class='wp'><h2>Admit</h2>
                  <?php phpTicketsFC($_SESSION["seats"]); ?>
                </div>
            </div>
        </div>
    </div>
</body>
