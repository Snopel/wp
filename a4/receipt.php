<?php

// Mandatory code to begin the Session
session_start();

//Allowing script to receive data from tools.php
require_once 'tools.php';

		$prd=$_GET['prd'];
		$qty=$_GET['qty'];
		$rate=0;
		$img="";

		/*if($prd=="cust[name]")
		{
			$custName=cust[name];
		}
		else if($prd=="cust[email]")
		{
			$cemail=cust[email];
		}
		else if($prd=="cust[mobile]")
		{
			$cmobile=cust[mobile];
		}
		else if($prd=="cust[card]")
		{
			$ccard=cust[card];
		}
        else if($prd=="cust[expiry]")
		{
			$cexpiry=expiry;
		}*/
	?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receipt</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <!-- Instantiating the Script for use in this HTML file -->
    <script src='script.js'></script>
    <!-- Using Include Once so variables aren't redeclared, avoiding a fatal error -->
    <?php include_once ('tools.php');?>

</head>

<style>
    @media print {
        body {
            width: 21cm;
            height: 29.7cm;
            margin: 30mm 45mm 30mm 45mm;
        }
    }

</style>

<center>
    <table border=1 width=70%>
        <caption>
            <h1>Lunardo Cinemas Pty Ltd</h1>
            <h2>ABN: 00 123 456 789</h2>
        </caption>
        <br><br>

        <tr>
            <th>Customer Name</th>
            <th>Film</th>
            <th>Session Time</th>
            <th>Seat Details</th>
            <th>Ticket Quantity</th>
            <th>Total Cost (Including 9.09% GST)</th>
        </tr>

        <tr>
            <td>
                <?php echo "$custName";?>
            </td>
            <td>
                <?php echo "$filmName";?>
            </td>
            <td>
                <?php echo "$sessionTime";?>
            </td>
            <td>
                <?php echo "$seatDetails";?>
            </td>
            <td>
                <?php echo "$ticketQuantity";?>
            </td>
            <td>
                <?php echo "$totalCost";?>
            </td>
        </tr>
    </table>
</center>

</html>
