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
                <div class='wp'>Name<h2><?php echo $_SESSION["cust"]["name"]; ?></h2>
                </div>
                <div class='wp'>Film<h2><?php echo $_SESSION; ?></h2>
                </div>
                <div class='wp'>Session<?php echo $_SESSION; ?></h2>
                </div>
                <div class='wp'>Ticket<?php echo $_SESSION; ?></h2>
                </div>
            </div>
            <div class='total clearfix'>
                <h2>Total (Including GST) : <p><?php echo $_SESSION['$cleanTotal']; ?></p>
                </h2>
            </div>
        </div>
    </div>
</body>
