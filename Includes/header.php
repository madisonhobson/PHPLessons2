<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href="style.css">
  </head>
  <style>body {
    background-color: rgb(214, 129, 248);
  }</style>

  <body>
  <headeer>
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
          <a class="nav-link" href="datatype.php">data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="arrays.php">array</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="header.php">headers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="superglobals.php">superglobals</a>
        </li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
</header>
<?php
$_session['username'] = "Madison"; // Set a session variable with a name and value
echo $_session['username']; // Output the value of the session variable

if (!isset($_session['username'])) {
    echo " you are not logged in.";
} else {
    echo " you are logged in.";

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>