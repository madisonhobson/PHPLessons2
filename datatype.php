<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Fixed the href issue -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active"  href="index.php">index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="conditonals.php">conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calender.php">calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">operators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatype.pho">data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?php
      //string
   $name = "Coding is so fun";

   //Integer
    $name = 36;

    //float
    $name = 23.345;


    //array
    $names = array("Alexa", "Vanessa", "Juliett");
     echo $names['2'];
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>