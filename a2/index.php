
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
            <div>Lunardo Cinema is THE place to be for the latest releases at the best prices. Located in the heart of Melbourne CBD,
                Lunardo is a must-go for anyone visiting the Melbourne area.</div>
        </pa>

        <div>
            <h2 id='prices'>Prices</h2>>
        </div>
        <list>
            <div>
                <ul>
                    <li>Child: $12</li>
                    <li>Adult: $18</li>
                    <li>Concession: $15</li>
                    <li>Extra +$3 for 3D films</li>
                </ul>
            </div>
        </list>
        <div>
            <div>
                <h2 id='now_showing'>Now Showing</h2>>
            </div>
            <span><pa>Click poster for more info</pa></span>
            <div>
                <div class="row">
                    <div class="column">
                        <a href="https://www.disney.com.au/movies/the-lion-king" target="_blank">
                            <img src="../../media/the_lion_king_poster.jpg" alt="The Lion King" style="width:80%">
                    </div>
                    <div class="column">
                        <a href="https://www.onceuponatimemag.com/table-of-content" target="_blank">
                            <img src="../../media/ouatih_poster.jpg" alt="OUATIH" style="width:80%">
                    </div>
                    <div class="column">
                        <a href="https://a24films.com/films/midsommar" target="_blank">
                            <img src="../../media/midsommar_poster.jpg" alt="Midsommar" style="width:80%">
                    </div>
                    <div class="column">
                        <a href="https://www.marvel.com/movies/avengers-endgame" target="_blank">
                            <img src="../../media/avengers_endgame_poster.jpg" alt="Avengers Endgame" style="width:80%">
                    </div>
                </div>
            </div>
        </div>
        <span></span>
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
