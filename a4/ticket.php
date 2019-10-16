<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="style.css">
</head>

    
    
<?php
    
// Mandatory code to begin the Session
session_start();
    
//Allowing script to receive data from tools.php
require_once 'receipt.php';
?>

<body>
    <div class="box">
        <div class='inner'>
            <h1>Lunardo Cinemas</h1>
            <div class='info clearfix'>
                <div class='wp'>Film<h2>1</h2>
                </div>
                <div class='wp'>Session<h2>VIP</h2>
                </div>
                <div class='wp'>Tickets</h2>
                </div>
                <div class='wp'>Seats</h2>
                </div>
            </div>
            <div class='total clearfix'>
                <h2>Total : <p></p>
                </h2>
            </div>
        </div>
    </div>
</body>
