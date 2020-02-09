<?php
include("includes/init.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php if (isset($title)) { echo $title . " - "; } ?>Open Cell AI</title>

    <link rel="stylesheet" type="text/css" href="styles/site.css" media="all" />
  </head>
  <body>


    <main>
      <img class="hero-bg" src="/images/your-model.png" alt="">
      <div class="button-invis"><a href="model.php">Click On this</a></div>

    </main>


  </body>

</html>
