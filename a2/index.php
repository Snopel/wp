<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>

    <!-- REMOVE WHEN CSS WORKS -->
    <style>
        body {
            background-image: white;
        }

        /* For placing images side by side */
        .column {
            float: left;
            width: 25%;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        box {
          border: 2px solid black;
}

.container {
    border: 3px solid black;
    padding: 20px 40px 40px;
    max-width: 600px;
    &__image {
        width: 250px;
        margin: 30px 30px 30px 0;
        float: left;
    }
    &__text {
        display: inline;
        @media (max-width: 620px) {
            width: 100%;
    }
}

    </style>

</head>

<body>

    <header>
        <div>
            <h1><img src='../../media/cinema-icon.png' alt='Cinema Logo' /> Lunardo Cinema</h1>
        </div>
    </header>

    <nav>
        <center>
            <!-- Below must be fixed to link to the following elements in the Main area -->
            <h3>
                <a href="#about_us">About Us</a>
                <a href="#prices">Prices</a>
                <a href="#now_showing">Now Showing</a>
            </h3>
        </center>
    </nav>

    <main>

        <div>
            <h2 id='about_us'>About Us</h2>
        </div>
        <pa>
            <div>
                <justify>Lunardo Cinema is reopening! To the benefit of our loyal customers, and our new ones, we have reopened after extensive renovations and improvements, in order to provide the most decadent cinema experience possible. Lunardo now boasts 2 seating options - our time-tested standard seating, as well as new leather, reclining first-class seating for a heightened film experience. As well as that, our sound and visual systems have been upgraded for all cinema experiences, with new Dolby Atmos sound & 3D Dolby Vision to encapsulate all customers into the most authentic viewing experience possible. Come see a movie at Lunardo, and put our claims to the test</justify>
            </div>
        </pa>

        <div>
            <h2 id='prices'>Prices</h2>
        </div>
        <pa>
            <table style="width:100%">
                <tr>
                    <th>Seat Type</th>
                    <th>Seat Code</th>
                    <th>All Day Monday and Wednesday AND 12pm on Weekdays</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <td>Standard Adult</td>
                    <td>STA</td>
                    <td>$14.00</td>
                    <td>$19.80</td>
                </tr>
                <tr>
                    <td>Standard Concession</td>
                    <td>STP</td>
                    <td>$12.50</td>
                    <td>$17.50</td>
                </tr>
                <tr>
                    <td>Standard Child</td>
                    <td>STC</td>
                    <td>$11.00</td>
                    <td>$15.30</td>
                </tr>
                <tr>
                    <td>First Class Adult</td>
                    <td>FCA</td>
                    <td>$24.00</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td>First Class Concession</td>
                    <td>FCP</td>
                    <td>$22.50</td>
                    <td>$27.00</td>
                </tr>
                <tr>
                    <td>First Class Child</td>
                    <td>FCC</td>
                    <td>$21.00</td>
                    <td>$24.00</td>
                </tr>
            </table>
        </pa>

        <div>
            <div>
                <h2 id='now_showing'>Now Showing</h2>
            </div>
            <div>
                <pa>
                    <center>Click poster for more info</center>
                </pa>
            </div>
            <br>
        </div>


        <div class="container">
            <a href="https://a24films.com/films/midsommar" target="_blank">
                <img src="../../media/midsommar_poster.jpg" alt="Midsommar" width="30%" style="padding: 0 15px; float: left;"></a>
                <div class="container__text">
                <center>
                <h2>Midsommar (Rating: R18+)</h2>
                <pa>Session Times: <br> <br>
                  Wednesday 21:00 <br>
                  Thursday 21:00 <br>
                  Friday 21:00 <br>
                  Saturday 18:00 <br>
                  Sunday 18:00 <br>
                </center></pa>
              </div>
            <!--From https://a24films.com/films/midsommar -->
        </div>
        <br>
        <div class="container">
            <a href="https://www.onceuponatimemag.com/table-of-content" target="_blank">
                <img src="../../media/ouatih_poster.jpg" alt="OUATIH" width="30%" style="padding: 0 15px; float: left;"> </a>
                <center>
                <h2>Once Upon A Time In Hollywood (Rating: MA15+)</h2>
                <pa>Session Times: <br> <br>
                  Wednesday 21:00 <br>
                  Thursday 21:00 <br>
                  Friday 21:00 <br>
                  Saturday 18:00 <br>
                  Sunday 18:00 <br>
                </center></pa>
            </div>
        </div>
        <br>
        <div class="container">
            <a href="https://www.disney.com.au/movies/the-lion-king" target="_blank">
                <img src="../../media/the_lion_king_poster.jpg" alt="The Lion King" width="30%" style="padding: 0 15px; float: left;"></a>
            <div class="container__text">
              <center>
                <h2>The Lion King (Rating: PG)</h2>
                <pa>Session Times: <br> <br>
                  Wednesday 21:00 <br>
                  Thursday 21:00 <br>
                  Friday 21:00 <br>
                  Saturday 18:00 <br>
                  Sunday 18:00 <br>
                </center></pa>
            </div>
        </div>
        <br>
        <div class="container">
            <a href="https://www.marvel.com/movies/avengers-endgame" target="_blank">
                <img src="../../media/avengers_endgame_poster.jpg" alt="Avengers Endgame" width="30%" style="padding: 0 15px; float: left;"></a>
            <div class="container__text">
              <center>
                <h2>Avengers Endgame (Rating: M)</h2>
                <pa>Session Times: <br> <br>
                  Wednesday 21:00 <br>
                  Thursday 21:00 <br>
                  Friday 21:00 <br>
                  Saturday 18:00 <br>
                  Sunday 18:00 <br>
                </center></pa>
            </div>
        </div>
        <br>

        <br>
        <div>
            <h2>Synopsis</h2>
        </div>
        <pa>
            <div>Describe Movies</div>
        </pa>

        <div>
            <h2>Booking</h2>
        </div>
        <pa>
            <div>TBE</div>
        </pa>

    </main>

    <footer>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> Bylball Interactive - Nicholas Balliro (S3541341), Sarah Bylmakers (S3736964). Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
