<?php
      require_once ('tools.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link id='stylecss' type="text/css" rel="stylesheet" href="receipt.css">
    <script src='script.js'></script>
    <title>Lunaro Cinemas Receipt</title>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../../media/lunardo_logo_s3541341" width="15%">
                            </td>

                            <td>
                                Customer Invoice<br>
                                Created: <?php echo $date ?><br>
                                <li><a href="ticket.php">Click to view ticket</a></li>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Lunardo Cinemas, Inc.<br>
                                ABN: 00 123 456 789<br>
                                Melbourne, VIC 3000
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Customer Details
                </td>

                <td>
                    Values
                </td>
            </tr>

            <tr class="item">
                <td>
                    Name
                </td>

                <td>
                    <?php echo $_SESSION["cust"]["name"]; ?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Email
                </td>

                <td>
                    <?php echo $_SESSION["cust"]["email"]; ?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Mobile
                </td>

                <td>
                    <?php echo $_SESSION["cust"]["mobile"]; ?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Card Number
                </td>

                <td>
                    <?php echo 'XXXX XXXX XXXX '.substr($_SESSION["cust"]["card"], 12); ?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Expiry
                </td>

                <td>
                    <?php phpExpiryDate($_SESSION['cust']['expiryMonth'], $_SESSION['cust']['expiryYear']); ?>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Order Details
                </td>

                <td>
                    Values
                </td>
            </tr>

            <tr class="item">
                <td>
                    Film
                </td>

                <td>
                    <?php phpMovieTitle($_SESSION["movie"]["id"]);?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Session Time
                </td>

                <td>
                    <?php
                      phpMovieDay($_SESSION["movie"]["day"]);
                      phpMovieHour($_SESSION["movie"]["hour"]);
                    ?>
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Tickets
                </td>

                <td>
                    <?php phpTicketsRec($_SESSION["seats"]); ?>
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                    <?php phpPriceCalc($_SESSION["totalprice"]); ?>
                </td>
            </tr>
        </table>
    </div>



</body>

</html>
