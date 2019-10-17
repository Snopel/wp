<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="ticket.css">
</head>


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
