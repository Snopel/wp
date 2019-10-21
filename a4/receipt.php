<?php
      session_start();

      $date = date("d.m.y");

      //Movie Title, Day and Hour display functions
      function phpMovieTitle($id){
        switch($id){
          case 'AHF':
            echo 'Midsommar';
            break;
          case 'RMC':
            echo 'Once Upon A Time In Hollywood';
            break;
          case 'ANM':
            echo 'The Lion King';
            break;
          case 'ACT':
            echo 'The Avengers: Endgame';
            break;
          default:
            break;
          }
        }
      function phpMovieDay($day){
        switch($day){
          case 'MON':
            echo 'Monday ';
            break;
          case 'TUE':
            echo 'Tuesday ';
            break;
          case 'WED':
            echo 'Wednesday ';
            break;
          case 'THU':
            echo 'Thursday ';
            break;
          case 'FRI':
            echo 'Friday ';
            break;
          case 'SAT':
            echo 'Saturday ';
            break;
          case 'SUN':
            echo 'Sunday ';
            break;
          default:
            break;
        }
      }
      function phpMovieHour($hour){
        //Remove the T from the time value to get the number
        $timeval = intval(substr($hour, 1));
        //Variable to decide if it's AM or PM
        $mirinium = 'AM';
        //Check if it's 12pm or later via 24 hour time
        if($timeval >= 12){
          $mirinium = "PM";
          //If it's after 12, subtract 12 to get its 12 Hour Time value
          if($timeval > 12){
            $timeval -= 12;
          }
        }

        echo $timeval;
        echo ":00 ";
        echo $mirinium;
      }

      //Validates the Expiry Date and displays it
      function phpExpiryDate($month, $year){
        $yearmonth = $year.'-'.$month; //YYYY-MM
        $expiry = date_create($yearmonth); //Creates a date based on YYYY-MM
        $now = new \DateTime(); //Today's Date

        $interval = date_diff($now, $expiry); //Difference in days between today and the expiry date

        $diffval = intval($interval -> format('%a')); //Changes the difference to an Integer

        //Checking if the difference in days is less than 28. If it is, it's wrong.
        if ($diffval < 28) {
           echo 'INCORRECT EXPIRY (Must be more than 28 days until expiry)';
        } else {
            echo $month.'/'.$year; // MM/YYYY
        }
      }

      function phpTicketDisplay($ticketArray){
        /*Take all ticket data and store them in the array
        *Search the array for all non-0 Tickets
        *Output tickets line by line if they aren't 0
        * - MAY NEED A FOR LOOP ?
        *Figure out a way to separate them by adult, child, concession and first-class.
        */
      }

      //TICKET PRICING
      //Takes the string $DD.CC and only uses the substring after $, leaving only the number
      $totalPrice = 0;
      $totalPrice = substr($_SESSION["totalprice"], 1);
      //Cast the price to a float value
      $fTotalPrice = floatval($totalPrice);
      //Calculate the total tickets' GST price (1/11 of the total)
      $gstPrice = ($fTotalPrice * 0.0909);
      //Add the GST to the total price for the final value
      $finalPrice = ($fTotalPrice + $gstPrice);


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
                                <button type="button" class="collapsible">View Movie Tickets</button>
                                Customer Invoice<br>
                                Created: <?php echo $date ?>
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
                    <?php echo $_SESSION['$cleanTicket']; ?>
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                    <!-- Using number format to display to 2 decimal places -->
                    Total: $<?php echo number_format($fTotalPrice, 2); ?> <br>
                    GST: $<?php echo number_format($gstPrice, 2); ?> <br>
                    Total (Including GST): $<?php echo number_format($finalPrice, 2); ?>
                </td>
            </tr>
        </table>
    </div>

    <p>A Collapsible:</p>
    <button type="button" class="collapsible">Open Collapsible</button>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

</body>

</html>
