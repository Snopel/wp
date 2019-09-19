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
    <!-- Instantiating the Script for use in this HTML file -->
    <script src='script.js'></script>

</head>

<body>

    <header>
        <div>
            <h1>Lunardo Cinema</h1>
            <center><img src="../../media/lunardo_logo_s3541341" width="35%"></center>
            <h2><i>"Where Dreams Move"</i></h2>
        </div>
    </header>

    <nav>
        <center>
            <h3>
                <a href="#about_us" class="navbuttona">About Us</a>
                <a href="#prices" class="navbuttona">Prices<a>
                <a href="#now_showing" class="navbuttona">Now Showing</a>
                <a href="#booking" class="navbuttona">Booking</a>
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
                    Lunardo now boasts seating options sure to make you relax! Our time-tested standard seating aims to give the best comfort for value while you enjoy your movie.<br>
                    Additionally if you are looking for a more heightened film experience, we encourage you to try our brand new First Class! These sessions provide divine leather recliners which are sure to leave you sinking into a dreamy world of comfort! <br>
                    Pick your preferred seating at your leisure and enjoy the film to the extent of your being!<br><br>
                    As well as that, our sound and visual systems have been upgraded for all cinema experiences, with new Dolby Atmos sound & 3D Dolby Vision to encapsulate all customers; boasting incredible 360 life-like surround sound to completely immerse you into a harmony of our most authentic viewing experience possible!<br><br>
                    Come put our claims to the test; Gaze with us at endless dreams!<br>
                    Together we share our atmospheric brilliance and fulfill your viewing desires, here at <b>Lunardo Cinema</b>!<br>
                    <br><img src="../../media/dolby_atmos_logo.png" width="30%"><br><br></justify>
            </div>
        </pa>



        <div>
            <h2 id='prices'>Prices</h2>
        </div>
        <pa>
            <center>
              Our session times cater to all manner of viewers of all ages! <br><br>
              Any child 14 or younger may be eligible for our budget Child price. <br>
              If you are a holder of a valid concession or pension card, you may be eligible for our reduced Concession prices. <br>
              Our sessions are also priced differently based on the time of day! So come in on Monday and Wedndesday ANY time, <br> or at 12pm on any other weekday for a serious bargain price!
              <br><br>
                <table class="table1">
                    <tr>
                        <th>Seat Type</th>
                        <th>Seat Code</th>
                        <th>All Day Monday and Wednesday<br>AND 12pm on Weekdays</th>
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
            </center>
        </pa>
        <br>
        <div>
            <div>
                <h2 id='now_showing'>Now Showing</h2>
            </div>
            <div>
                <pa>
                    <center>Click the poster to visit official film website!</center>
                </pa>
            </div>
            <br>
        </div>

        <pa>
            <table class="table2">
                <tr>
                    <td>

                        <a href="https://a24films.com/films/midsommar" target="_blank">
                            <img src="../../media/midsommar_poster.jpg" alt="Midsommar" width="30%" style="padding: 25px; float: left;"></a>
                        <div class="container__text">
                            <center>
                              <br>
                              <a href="#synopsis" class="navbuttonb" onclick="toggleSyn('midsommar')">Midsommar (Rating: R18+)</a>
                              <br><br>
                                <!-- Times from 'Avengers Endgame -->
                                <pa>Session Times: <br> <br>
                                    Wednesday - 21:00 <br>
                                    Thursday - 21:00 <br>
                                    Friday - 21:00 <br>
                                    Saturday - 18:00 <br>
                                    Sunday - 18:00 <br>
                            </center>
                          </pa>

                        </td>
        <td>

            <a href="https://www.onceuponatimemag.com/table-of-content" target="_blank">
                <img src="../../media/ouatih_poster.jpg" alt="OUATIH" width="30%" style="padding: 25px; float: left;"> </a>
            <center>
                <br>
                <a href="#synopsis" class="navbuttonb" onclick="toggleSyn('ouatih')">OUATIH (Rating: MA15+)</a>
                <br><br>
                <!-- Times from 'Top End Wedding'-->
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
                    <img src="../../media/the_lion_king_poster.jpg" alt="The Lion King" width="30%" style="padding: 25px; float: left;"></a>
                <div class="container__text">
                    <center>
                      <br>
                      <a href="#synopsis" class="navbuttonb" onclick="toggleSyn('lionking')">The Lion King (Rating: PG)</a>
                      <br><br>
                        <!-- Times from 'Dumbo' -->
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
                    <img src="../../media/avengers_endgame_poster.jpg" alt="Avengers Endgame" width="30%" style="padding: 25px; float: left;"></a>
                <div class="container__text">
                    <center>
                      <br>
                      <a href="#synopsis" class="navbuttonb"  onclick="toggleSyn('endgame')">The Avengers: Endgame (Rating: M)</a>
                      <br><br>
                        <pa>Session Times: <br> <br>
                            <!-- Times from The Happy Prince -->
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
            <h2 id='synopsis'>Synopsis</h2>
        </div>
        <pa><center>Please select a movie title 'Now Showing' to display a synopsis and booking times!</center></pa>
        <br>
        <div id='midsommarSyn' class="container"  style="display: none;">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/l6XWuruEKVM" style="float: right; padding: 20px; border:solid 8px transparent;"></iframe>
            <br>
            <div class="container__text">
                <h2>Midsommar (Rating: R18+)</h2>
                <pa>Dani and Christian are a young American couple with a relationship on the brink of falling apart. But after a family tragedy keeps them together, a grieving Dani invites herself to join Christian and his friends on a trip to a once-in-a-lifetime midsummer festival in a remote Swedish village. What begins as a carefree summer holiday in a land of eternal sunlight takes a sinister turn when the insular villagers invite their guests to partake in festivities that render the pastoral paradise increasingly unnerving and viscerally disturbing. <br> <!-- From https://a24films.com/films/midsommar-->
                    </justify>
                    <br> Make a Booking:
                    <!-- Calling the textSwap function.
                         When a button is pressed, the text in the Booking form (ID: bookingTitle) changes. -->
                    <button value="<h2>Midsommar - Wednesday - 21:00</h2>" onclick="textSwap(this)">WED 21:00</button>
                    <button value="<h2>Midsommar - Thursday - 21:00</h2>" onclick="textSwap(this)">THU 21:00</button>
                    <button value="<h2>Midsommar - Friday - 21:00</h2>" onclick="textSwap(this)">FRI 21:00</button>
                    <button value="<h2>Midsommar - Saturday - 18:00</h2>" onclick="textSwap(this)">SAT 18:00</button>
                    <button value="<h2>Midsommar - Sunday - 18:00</h2>" onclick="textSwap(this)">SUN 18:00</button>
            </div>
        </div>

        <div id='ouatihSyn' class="container" style="display: none;">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/ELeMaP8EPAA" style="float: right; padding: 20px; border:solid 8px transparent;"></iframe>
            <div class='container__text'>
                <h2>Once Upon A Time In Hollywood (Rating: MA15+)</h2>
                <pa>
                    <justify>In 1969 Los Angeles, where everything is changing, as TV star Rick Dalton and his longtime stunt double Cliff Booth make their way around an industry they hardly recognize anymore. The ninth film from the writer-director features a large ensemble cast and multiple storylines in a tribute to the final moments of Hollywood’s golden age.
                        <!-- From: http://deckchaircinema.com/films/upon-time-hollywood/#targetText=Quentin%20Tarantino's%20Once%20Upon%20a,industry%20they%20hardly%20recognize%20anymore.-->
                    </justify><br>
                    <br> Make a Booking:
                    <button value="<h2>Once Upon A Time In Hollywood - Monday - 18:00</h2>" onclick="textSwap(this)">MON 18:00</button>
                    <button value="<h2>Once Upon A Time In Hollywood - Tuesday - 18:00</h2>" onclick="textSwap(this)">TUE 18:00</button>
                    <button value="<h2>Once Upon A Time In Hollywood - Saturday - 15:00</h2>" onclick="textSwap(this)">SAT 15:00</button>
                    <button value="<h2>Once Upon A Time In Hollywood - Sunday - 15:00</h2>" onclick="textSwap(this)">SUN 15:00</button>
                </pa>
            </div>
        </div>

        <div id='lionkingSyn' class="container" style="display: none;">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/7TavVZMewpY" style="float: right; padding: 20px; border:solid 8px transparent;"></iframe>
            <div class="container__text">
                <h2>The Lion King (Rating: PG)</h2>
                <pa>
                    <justify> After the death of Mufasa, King of the pride and father of young Simba, the underhanded and scheming Scar, brother of Mufasa, takes control of the pride with his gang of blood-thirsty hyenas.
                        <!-- From https://childrenandmedia.org.au/movie-reviews/movies/the-lion-king-->
                    </justify> <br>
                    <br> Make a Booking:
                    <button value="<h2>The Lion King - Monday - 12:00</h2>" onclick="textSwap(this)">MON 12:00</button>
                    <button value="<h2>The Lion King - Tuesday - 12:00</h2>" onclick="textSwap(this)">TUE 12:00</button>
                    <button value="<h2>The Lion King - Wednesday - 18:00</h2>" onclick="textSwap(this)">WED 18:00</button>
                    <button value="<h2>The Lion King - Thursday - 18:00</h2>" onclick="textSwap(this)">THU 18:00</button>
                    <button value="<h2>The Lion King - Friday - 18:00</h2>" onclick="textSwap(this)">FRI 18:00</button>
                    <button value="<h2>The Lion King - Saturday - 12:00</h2>" onclick="textSwap(this)">SAT 12:00</button>
                    <button value="<h2>The Lion King - Sunday - 12:00</h2>" onclick="textSwap(this)">SUN 12:00</button>
                </pa>
            </div>
        </div>

        <div id='endgameSyn' class="container" style="display: none;">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/TcMBFSGVi1c" style="float: right; padding: 20px; border:solid 8px transparent;"></iframe>
            <div class="container__text">
                <h2>The Avengers: Endgame (Rating: M)</h2>
                <pa>
                    <justify>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.
                        <!-- From https://geeks.media/avengers-endgame -->
                    </justify>
                    <br> <br> Make a Booking:
                    <button value="<h2>The Avengers: Endgame - Wednesday - 12:00</h2>" onclick="textSwap(this)">WED 12:00</button>
                    <button value="<h2>The Avengers: Endgame - Thursday - 12:00</h2>" onclick="textSwap(this)">THU 12:00</button>
                    <button value="<h2>The Avengers: Endgame - Friday - 12:00</h2>" onclick="textSwap(this)">FRI 12:00</button>
                    <button value="<h2>The Avengers: Endgame - Saturday - 21:00</h2>" onclick="textSwap(this)">SAT 21:00</button>
                    <button value="<h2>The Avengers: Endgame - Sunday - 21:00</h2>" onclick="textSwap(this)">SUN 21:00</button>
                </pa>
            </div>
        </div>

        <br>

        <div>
            <h2 id='booking'>Booking</h2>
        </div>
        <pa>
            <div class="container">
              <div class="container_text">
              <div id="bookingTitle"><h2>Please select a movie time from Synopsis above.</h2></div>
                  <div class="form-style-3">
                    <form>
                        <fieldset><legend>Standard</legend>
                            <label for="field1"><span>Adults</span>
                                <select name="field1" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <br>
                            <label for="field2"><span>Concession</span>
                                <select name="field2" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <br>
                            <label for="field3"><span>Children</span>
                                <select name="field3" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </label>
                        </fieldset>
                    </form>
                </div>
                  <div class="form-style-3">
                    <form>
                        <fieldset><legend>First Class</legend>
                            <label for="field1"><span>Adults</span>
                                <select name="field1" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <br>
                            <label for="field2"><span>Concession</span>
                                <select name="field2" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <br>
                            <label for="field3"><span>Children</span>
                                <select name="field3" class="select-field">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </label>
                        </fieldset>
                    </form>
                </div>
              </div>
            </div>
        </pa>

        <br>
        <br>

    </main>

    <footer>
        <center><img src="../../media/lunardo_logo_s3541341" width="10%"></center><br>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> Bylball Interactive - Nicholas Balliro (S3541341), Sarah Bylmakers (S3736964). Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <br>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

</body>

</html>
