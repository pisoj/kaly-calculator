<!DOCTYPE <html>
<html class="site">
  <header>
  <link rel="stylesheet" href="resource/css/main.css">
  <?php
    include 'resource/theme/change.php';
    if ($_COOKIE["theme"] == "dark") {
      include 'resource/theme/dark.html';
    }
    else {
      include 'resource/theme/light.html';
    }
  ?>
    <title>KALY Calculator</title>
  </header>
<head>
   <center><p id="top">KALY Calculator</p></center>
</head>
<main>
   <?php
     include 'resource/theme/input.html';
     if (empty($_GET["a"]) or empty($_GET["b"]) or empty($_GET["z"]) or is_numeric($_GET["a"]) != 1 or is_numeric($_GET["b"]) != 1) {}
     else {
       include 'resource/result.php';
    }
     include 'resource/input.html';
   ?>
</main>
<footer>
  <p id="invisible">1</p>
  <center><p id="bottom">Power by <a id="byLink" target="_blank" href="https://github.com/pisoj/kaly-calculator/">KALY Calculator</a></p></center>
    <p id="invisible">1</p>
</footer>
</html>