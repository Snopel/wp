<!DOCTYPE html>
<html lang='en'>

<head>
<!--    .<link rel="stylesheet" href="ticket.css">-->
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Arvo);

    body {
        background: white;
        font-family: Arvo;
    }

    .box {
        margin: 0px auto;
        margin-top: 80px;
        background: #FFF9EE url(https://subtlepatterns.com/patterns/lightpaperfibers.png);
        color: #333;
        text-transform: uppercase;
        padding: 8px;
        width: 300px;
        font-weight: bold;
        text-shadow: 0px 1px 0px #fff;
        font-family: "arvo";
        font-size: 11px;
        border-left: 1px dashed rgba(51, 51, 51, 0.5);
        -webkit-filter: drop-shadow(0 5px 18px #000);
    }

    .inner {
        border: 2px dashed rgba(51, 51, 51, 0.5);
        min-height: 100px;
        padding: 8px;

    }

    .inner h1 {
        padding: 5px 0px;
        margin: 0px;
        font-size: 18px;
        border-bottom: 1px solid rgba(51, 51, 51, 0.3);
        text-align: center;
    }

    .info {
        width: 100%;
        margin-top: 5px;
    }

    .info .wp {
        float: left;
        padding: 5px;
        width: 83px;
        text-align: center;
    }

    .info .wp h2 {
        margin: 8px;
    }

    .total {
        border-top: 1px solid rgba(51, 51, 51, 0.3);
    }

    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }

    .total h2 {
        padding-left: 115px;
        margin: 10px 0px;
        font-size: 15px;
    }

    .total p {
        float: right;
        margin: 0px;
        margin-right: 15px;
    }

    a.buy {
        color: #fff;
        text-align: center;
        font-size: 25px;
        text-decoration: none;
        display: block;
        width: 200px;
        margin: 0px auto;
        margin-top: 50px;
        padding: 5px;
        background: rgba(0, 0, 0, 0.5);
    }

    .notice {
        font-family: "arvo";
        font-size: 20px;
        color: white;
        position: 
    }

</style>

<?php
    
// Mandatory code to begin the Session
session_start();
    
?>

<body>
    <div style="notice">Right click page and select 'Print' to print tickets</div>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas</h1>
            <div class='info clearfix'>
                <div class='wp'>Film<h2><?php echo $_SESSION['$cleanFilm']; ?></h2>
                </div>
                <div class='wp'>Session<h2><?php echo $_SESSION['$cleanSession']; ?></h2>
                </div>
                <div class='wp'>Tickets</h2>
                </div>
                <div class='wp'><?php echo $_SESSION['$cleanTicket']; ?></h2>
                </div>
            </div>
            <div class='total clearfix'>
                <h2>Total (Including GST) : <p><?php echo $_SESSION['$cleanTotal']; ?></p>
                </h2>
            </div>
        </div>
    </div>
</body>
