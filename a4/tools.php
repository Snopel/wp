<?php
// Mandatory code to begin the Session
  session_start();

//Allowing script to receive data from index.php
require_once 'index.php';

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


//Test Code for the above function:
/*$days = ['MON','TUE', 'WED', 'THU', 'FRI' , 'SAT', 'SUN'];
$hours = [ 'T12', 'T15', 'T18', 'T21', 'T00' ];

foreach ( $days as $day ) {
  foreach ( $hours as $hour ) {
    echo '<p>'.$day.' '.$hour.': '.isFullOrDiscount( $day, $hour ).'</p>';
  }
}*/


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


if($_POST){
  $_SESSION["cust"] = $_POST["cust"];
  $_SESSION["totalprice"] = $_POST["totalprice"];
  $_SESSION["movie"] = $_POST["movie"];
  $_SESSION["seats"] = $_POST["seats"];
}


/*if ($_POST){
  $errorsFound = 0;
  $cleanName = $_POST['cust']['name'];
  $cleanEmail = $_POST['cust']['email'];
  $cleanMobile = $_POST['cust']['mobile'];
  $cleanCredit = $_POST['cust']['card'];
  $cleanExpiry = $_POST['cust']['expiry'];
  $cleanDate = $_POST['movie']['date'];
  $cleanTime = $_POST['movie']['time'];

// if email does not pass validation, increment $errorsFound
// repeat for other cust POST data, incrementing $errorsFound when validation fails
// if no errors are found (ie all fields ok) add clean post data to session
// and forward to receipt.php
 if ($errorsFound == 0) {
      $_SESSION['cust']['name'] = $cleanName;
      $_SESSION['cust']['email'] = $cleanEmail;
      $_SESSION['cust']['mobile'] = $cleanMobile;
      $_SESSION['cust']['card'] = $cleanCard;
      $_SESSION['cust']['expiry'] = $cleanExpiry;
      $_SESSION['movie']['date'] = $cleanDate;
      $_SESSION['movie']['time'] = $cleanTime;
  }
};*/

//if (empty( $_SESSION['cust'] || $_SESSION['movie'] || $_SESSION['seats']))
//  header('Location: index.php');

if (isset($_POST['clear-session']) )
  unset ( $_SESSION['cust'], $_SESSION['movie'], $_SESSION['seats'] );
/*$now = date('d/m h:i');
$total = // calculate the total serverside and format it to 2 decimal places
$cells = array_merge(
  [ $now ],
  $_SESSION['cust'],
  $_SESSION['movie'],
  $_SESSION['seats'],
  (array) $total);*/



?>
