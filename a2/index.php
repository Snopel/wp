<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div><img src='../../media/cinema-icon.png' alt='Cinema Logo'/>Lunardo Cinema</div>
    </header>

    <nav>
      <!-- Below must be fixed to link to the following elements in the Main area -->
      <span>About Us || </span>
      <span>Prices || </span>
      <span>Now Showing</span>
    </nav>

    <main>
      <div>About Us</div> <!-- Make text bigger, but not as big as the header-->
      <div>(DESCRIBE THE PLACE HERE)</div>
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
