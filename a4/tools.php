<?php
// Mandatory code to begin the Session
  session_start();

//Dedicated information for the movies selected in the booking form
$moviesObject = [
    'ACT' => [
        'title' => 'Avengers: Endgame',
        'rating' => 'M',
        'description' => '<p>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe. ',
        'screenings' => [
        'WED' => 'T12',
        'THU' => 'T12',
        'FRI' => 'T12',
        'SAT' => 'T21',
        'SUN' => 'T21'
    ]
    ],
    'AHF' => [
        'title' => 'Midsommar',
        'rating' => 'R18+',
        'description' => '<p>Dani and Christian are a young American couple with a relationship on the brink of falling apart. But after a family tragedy keeps them together, a grieving Dani invites herself to join Christian and his friends on a trip to a once-in-a-lifetime midsummer festival in a remote Swedish village. What begins as a carefree summer holiday in a land of eternal sunlight takes a sinister turn when the insular villagers invite their guests to partake in festivities that render the pastoral paradise increasingly unnerving and viscerally disturbing. ',
        'screenings' => [
            'WED' => 'T21',
            'THU' => 'T21',
            'FRI' => 'T21',
            'SAT' => 'T18',
            'SUN' => 'T18'
    ]
    ],
    'ANM' => [
        'title' => 'The Lion King',
        'rating' => 'PG',
        'description' => '<p>After the death of Mufasa, King of the pride and father of young Simba, the underhanded and scheming Scar, brother of Mufasa, takes control of the pride with his gang of blood-thirsty hyenas. ',
        'screenings' => [
            'MON' => 'T12',
            'TUE' => 'T12',
            'WED' => 'T18',
            'THU' => 'T18',
            'FRI' => 'T18'
    ]
    ],
    'RMC' => [
        'title' => 'Once Upon a Time in Hollywood',
        'rating' => 'MA15+',
        'description' => '<p>In 1969 Los Angeles, where everything is changing, as TV star Rick Dalton and his longtime stunt double Cliff Booth make their way around an industry they hardly recognize anymore. The ninth film from the writer-director features a large ensemble cast and multiple storylines in a tribute to the final moments of Hollywood’s golden age.',
        'screenings' => [
            'MON' => 'T18',
            'TUE' => 'T18',
            'SAT' => 'T15',
            'SUN' => 'T15'
    ],
    ],
];

$pricesObject = [
  'full' => [
    'STA' => 19.8,
    'STP' => 17.5,
    'STC' => 15.3,
    'FCA' => 30.0,
    'FCP' => 27.0,
    'FCC' => 24.0,
  ],
  'disc' => [
    'STA' => 14.0,
    'STP' => 12.5,
    'STC' => 11.0,
    'FCA' => 24.0,
    'FCP' => 22.5,
    'FCC' => 21.0,
  ]
];

function isFullOrDiscount( $day, $hour ) {
  if ( $day == 'MON' || $day == 'WED'
      || (($day != 'SAT' && $day != 'SUN') && $hour == 'T12')) {
     return 'disc';
    } else {
    return 'full';
    }
}


function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

//Today's Date
$date = date("d.m.y");

$nameErr = "";
$seatsErr = "";
$name = "";
$seats = "";

//SARAH PLS! <3
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cust"]["name"]) || ($_POST["cust"]["email"]) || ($_POST["cust"]["mobile"]) || ($_POST["cust"]["card"]) || ($_POST["cust"]["expiryMonth"]) || ($_POST['cust']["expiryYear"])) {
    $custErr = "Customer information is required.";
  } else {
    $cust = test_input($_POST["cust"]);
  }
  if (empty($_POST["seats"])) {
    $seatsErr = "Seat selection is required.";
  } else {
    $seats = test_input($_POST["seats"]);
  }
}*/


if($_POST){
  $errorsFound = 0;
  $cleanName = $_POST["cust"]["name"];
  $cleanEmail = $_POST["cust"]["email"];
  $cleanMobile = $_POST["cust"]["mobile"];
  $cleanCard = $_POST["cust"]["card"];
  $cleanExpM = $_POST["cust"]["expiryMonth"];
  $cleanExpY = $_POST["cust"]["expiryYear"];

  $cleanId = $_POST["movie"]["id"];
  $cleanDay = $_POST["movie"]["day"];
  $cleanHour = $_POST["movie"]["hour"];

  $cleanSeats = $_POST["seats"];
  $cleanPrice = $_POST["totalprice"];

  if ($errorsFound == 0){
    $_SESSION["cust"]["name"] = $cleanName;
    $_SESSION["cust"]["email"] = $cleanEmail;
    $_SESSION["cust"]["mobile"] = $cleanMobile;
    $_SESSION["cust"]["card"] = $cleanCard;
    $_SESSION["cust"]["expiryMonth"] = $cleanExpM;
    $_SESSION["cust"]["expiryYear"] = $cleanExpY;

    $_SESSION["movie"]["id"] = $cleanId;
    $_SESSION["movie"]["day"] = $cleanDay;
    $_SESSION["movie"]["hour"] = $cleanHour;

    $_SESSION["seats"] = $cleanSeats;
    $_SESSION["totalprice"] = $cleanPrice;
  }

  // BROKEN CODE! TREVOR HELP NECESSARY
  //Adding the information to a spreadsheet
  $now = date('d/m h:i');
  $cells = array_merge(
    array($now),
    $_SESSION['cust'],
    $_SESSION['movie'],
    $_SESSION['seats'],
    array($_SESSION["totalprice"])
  );

  $fp = fopen('bookings.txt', 'a');

  foreach($cells as $key => $value){
    fputcsv($fp, $cells);
  }

  fclose($fp);
}


/*if(empty($_SESSION['cust']) || empty($_SESSION['movie']) || empty($_SESSION['seats'])){
  header('Location: index.php');
}*/

  //Clears the user's session if pressed
  if (isset($_POST['clear-session'])){
    unset ( $_SESSION['cust'], $_SESSION['movie'], $_SESSION['seats'] );
  }

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

  //Display tickets formatted for the Receipt
  function phpTicketsRec($seatsArr){
        foreach ($seatsArr as $key => $value) {
         if ($value > 0){
           switch ($key){
             case "STA":
              echo "$value x Standard Adult <br>";
              break;
            case "STP":
              echo "$value x Standard Concession <br>";
              break;
            case "STC":
              echo "$value x Standard Child <br>";
              break;
            case "FCA":
              echo "$value x First Class Adult <br>";
              break;
            case "FCP":
              echo "$value x First Class Concession <br>";
              break;
            case "FCC":
              echo "$value x First Class Child <br>";
              break;
            default:
              break;
           }
         }
       }
      }

  //Display tickets formatted for the Ticket
  function phpTicketsSTA($seatsArr){
        foreach ($seatsArr as $key => $value) {
         if ($value > 0){
           switch ($key){
             case "STA":
              echo "$value x  Adult <br>";
              break;
            case "STP":
              echo "$value x  Conc <br>";
              break;
            case "STC":
              echo "$value x Child <br>";
              break;
            default:
              break;
           }
         }
       }
      }
  function phpTicketsFC($seatsArr){
        foreach ($seatsArr as $key => $value) {
         if ($value > 0){
           switch ($key){
             case "FCA":
              echo "$value x  Adult <br>";
              break;
            case "FCP":
              echo "$value x  Conc <br>";
              break;
            case "FCC":
              echo "$value x Child <br>";
              break;
            default:
              break;
           }
         }
       }
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

  //Ticket Pricing
  //Takes the string $DD.CC and only uses the substring after $, leaving only the number
  function phpPriceCalc($total){
        $totalPrice = 0;
        $totalPrice = substr($total, 1);
        //Cast the price to a float value
        $fTotalPrice = floatval($totalPrice);
        //Calculate the total tickets' GST price (1/11 of the total)
        $gstPrice = ($fTotalPrice * 0.0909);
        //Add the GST to the total price for the final value
        $finalPrice = ($fTotalPrice + $gstPrice);

        //Formatting prices for displays
        $dispTotal = number_format($fTotalPrice, 2);
        $dispGst = number_format($gstPrice, 2);
        $dispFinal = number_format($finalPrice, 2);
        //Using number format to display to 2 decimal places
        echo "Total: $$dispTotal <br>";
        echo "GST: $$dispGst <br>";
        echo "Total (Including GST): $$dispFinal";
      }
?>
