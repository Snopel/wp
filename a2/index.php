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
            background-image: url('../../media/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        table.table1,
        table.table1 tr,
        table.table1 td {
          border: 1px solid black;
          align-content: center;
          margin: auto;
        }

        table.table2,
        table.table2 tr,
        table.table2 td {
            border: 1px solid black;
            align-content: center;
            margin: auto;
            table-layout: fixed;
            width: 600px;
        }

        box {
            border: 2px solid black;
        }

        .container {
            border: 3px solid black;
            padding: 20px 40px 40px;
            max-width: 600px;
            margin:auto;

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
                <justify>Lunardo Cinema is reopening! To the benefit of our loyal customers, and our new ones, we have reopened after extensive renovations and improvements, in order to provide the most decadent cinema experience possible.
                  <br><br>
                  <img src='../../media/standard_seat.png' width="12%" style="float: left;"> <img src='../../media/first_class_seat.png' width="11%" style="float: right;"><br>
                  Lunardo now boasts 2 seating options - our time-tested standard seating, as well as new leather, reclining first-class seating for a heightened film experience.
                  Pick your preferred seating at your leisure and enjoy the film to the extent of your being!<br><br>
                  As well as that, our sound and visual systems have been upgraded for all cinema experiences, with new Dolby Atmos sound & 3D Dolby Vision to encapsulate all customers into the most authentic viewing experience possible. Come see a movie at Lunardo, and put our claims to the test<br>
                <br><img src="../../media/dolby_atmos_logo.png" width="30%"><br><br></justify>
            </div>
        </pa>

        <div>
            <h2 id='prices'>Prices</h2>
        </div>
        <pa> <center>
            <table class="table1">
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
        </center></pa>

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

        <pa>
            <table class="table2">
                <tr>
                    <td>

                        <a href="https://a24films.com/films/midsommar" target="_blank">
                            <img src="../../media/midsommar_poster.jpg" alt="Midsommar" width="30%" style="padding: 0 15px; float: left;"></a>
                        <div class="container__text">
                            <center>
                                <h2>Midsommar (Rating: R18+)</h2>
                                <pa>Session Times: <br> <br>
                                    Wednesday - 21:00 <br>
                                    Thursday - 21:00 <br>
                                    Friday - 21:00 <br>
                                    Saturday - 18:00 <br>
                                    Sunday - 18:00 <br>
                            </center>
        </pa>
        </div>
        <!--From https://a24films.com/films/midsommar -->
        </div>
        </td>
        <td>

            <a href="https://www.onceuponatimemag.com/table-of-content" target="_blank">
                <img src="../../media/ouatih_poster.jpg" alt="OUATIH" width="30%" style="padding: 0 15px; float: left;"> </a>
            <center>
                <h2>Once Upon A Time In Hollywood (Rating: MA15+)</h2>
                <pa>Session Times: <br> <br>
                    Monday - 18:00 <br>
                    Tuesday - 18:00 <br>
                    Saturday - 15:00 <br>
                    Sunday - 15:00 <br>
            </center>
            </pa>
        </td>
        </tr>
        <tr>
            <td>

                <a href="https://www.disney.com.au/movies/the-lion-king" target="_blank">
                    <img src="../../media/the_lion_king_poster.jpg" alt="The Lion King" width="30%" style="padding: 0 15px; float: left;"></a>
                <div class="container__text">
                    <center>
                        <h2>The Lion King (Rating: PG)</h2>
                        <pa>Session Times: <br> <br>
                            Monday - 12:00 <br>
                            Tuesday - 12:00 <br>
                            Wednesday - 18:00 <br>
                            Thursday - 18:00 <br>
                            Friday - 18:00 <br>
                            Saturday - 12:00 <br>
                            Sunday - 12:00 <br>
                    </center>
                    </pa>

                </div>
            </td>
            <td>

                <a href="https://www.marvel.com/movies/avengers-endgame" target="_blank">
                    <img src="../../media/avengers_endgame_poster.jpg" alt="Avengers Endgame" width="30%" style="padding: 0 15px; float: left;"></a>
                <div class="container__text">
                    <center>
                        <h2>Avengers Endgame (Rating: M)</h2>
                        <pa>Session Times: <br> <br>
                            Wednesday - 12:00 <br>
                            Thursday - 12:00 <br>
                            Friday - 12:00 <br>
                            Saturday - 21:00 <br>
                            Sunday - 21:00 <br>
                    </center>
                    </pa>

                </div>
            </td>
        </tr>
        </table>
        </pa>
        <br>

        <br>
        <div>
            <h2>Synopsis</h2>
        </div>

        <div class="container" align="center">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/Vnghdsjmd0" style="float: right;"></iframe>
          <div class="container__text">
            <h2>Midsommar (Rating: R18+)</h2>
            <pa>Dani and Christian are a young American couple with a relationship on the brink of falling apart. But after a family tragedy keeps them together, a grieving Dani invites herself to join Christian and his friends on a trip to a once-in-a-lifetime midsummer festival in a remote Swedish village. What begins as a carefree summer holiday in a land of eternal sunlight takes a sinister turn when the insular villagers invite their guests to partake in festivities that render the pastoral paradise increasingly unnerving and viscerally disturbing. <br> <!-- From https://a24films.com/films/midsommar--> </justify>
            <br> Make a Booking:
            <button>WED 21:00</button><button>THU 21:00</button><button>FRI 21:00</button><button>SAT 18:00</button><button>SUN 18:00</button>
          </div></div>
        <br>
        <div class="container">
          <iframe width="350" height="200" src="https://www.youtube.com/embed/ELeMaP8EPAA" style="float: right;"></iframe>
            <div class='container__text'>
              <h2>Once Upon A Time In Hollywood (Rating: MA15+)</h2>
              <pa> <justify>In 1969 Los Angeles, where everything is changing, as TV star Rick Dalton and his longtime stunt double Cliff Booth make their way around an industry they hardly recognize anymore. The ninth film from the writer-director features a large ensemble cast and multiple storylines in a tribute to the final moments of Hollywood’s golden age. <!-- From: http://deckchaircinema.com/films/upon-time-hollywood/#targetText=Quentin%20Tarantino's%20Once%20Upon%20a,industry%20they%20hardly%20recognize%20anymore.--> </justify><br>
              <br> Make a Booking:
              <button>MON 18:00</button><button>TUE 18:00</button><button>SAT 15:00</button><button>SUN 15:00</button>
            </pa></div></div>
            <br>
            <div class="container">
              <iframe width="350" height="200" src="https://www.youtube.com/embed/7TavVZMewpY" style="float: right;"></iframe>
              <div class="container__text">
                <h2>The Lion King (Rating: PG)</h2>
                <pa><justify> After the death of Mufasa, King of the pride and father of young Simba, the underhanded and scheming Scar, brother of Mufasa, takes control of the pride with his gang of blood-thirsty hyenas.  <!-- From https://childrenandmedia.org.au/movie-reviews/movies/the-lion-king--> </justify> <br>
                  <br> Make a Booking:
                  <button>MON 12:00</button><button>TUE 12:00</button><button>WED 18:00</button><button>THU 18:00</button><button>FRI 18:00</button><button>SAT 12:00</button><button>SUN 12:00</button></pa>
              </div></div>
              <br>
              <div class="container">
              <iframe width="350" height="200" src="https://www.youtube.com/embed/TcMBFSGVi1c" style="float: right;"></iframe>
              <div class="container__text">
                <h2>Avengers Endgame (Rating: M)</h2>
                <pa><justify>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe. <!-- From https://geeks.media/avengers-endgame --> </justify>
                <br>  <br> Make a Booking:
                <button>WED 12:00</button><button>THU 12:00</button><button>FRI 12:00</button><button>SAT 21:00</button><button>SUN 21:00</button></pa>
              </div></div>
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
