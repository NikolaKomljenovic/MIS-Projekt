<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIS | Projekt</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <script src="../js/vendor/modernizr.js"></script>
</head>
<body>
 <nav class="top-bar" data-topbar>
       <ul class="title-area">
 
           <li class="name">
            <h1>
            <a href="../index.php">
            Modeliranje i simulacija
            </a>
            </h1>
           </li>
           <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
       </ul>
    <section class="top-bar-section">
 
    <ul class="right">
        <li class="divider"></li>
            <li class="divider"></li>
            <li><a href="../index.php">Početna</a></li>
            <li class="divider"></li>
            <li><a href="seminari.php">Seminari</a></li>
            <li class="divider"></li>
            <li><a href="../about.html">O nama</a></li>
    </ul>
    </section>
</nav>
<?php
include("../spoj.php");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$allowed_extensions = array('zip', 'rar');
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file)) {
    echo '<div class="row">';
    echo '<div class="large-12 columns centered-text">';
    echo '<h2>Seminar pod istim nazivom već postoji, molim vas da promjenite naziv te pokušate ponovno.</h2>';
    echo '</div>';
    echo '</div>';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
    echo "Vaš seminar je prevelik da bi se pohranio!";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "rar" && $imageFileType != "zip") {
    echo '<div class="row">';
    echo '<div class="large-12 columns centered-text">';
    echo '<h2>Datoteka mora biti .rar ili .zip formata!</h2>';
    echo '<img src="../img/2837-sad-smiley.jpg">';
    echo '</div>';
    echo '</div>';
    $uploadOk = 0;
}else{
    //SQL for add to database 
    if (isset($_POST['submit'])) {
        $temp=$_POST['a'];
        $temp2=$_POST['b'];
        mysql_query("SET NAMES 'utf8'");
        mysql_query ("INSERT INTO seminar (naziv_seminara, autori, opis, alat, godina, dokument, id_kategorije, podkategorija) VALUES ('$_POST[naziv_s]', '$_POST[autori]', '$_POST[opis]','$_POST[alat]', '$_POST[godina]','$target_file','$temp', '$temp2')", $spoj);
        }   
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<div class="row">';
    echo '<div class="large-12 columns centered-text">';
    echo '<h3>Nažalost nismo uspjeli pohraniti Vaš seminar.</h3><br>';
    echo '<a href="seminari.php" class="button expand">Povratak na izbor seminara</a>';
    echo '</div>';
    echo '</div>';
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<div class="row">';
        echo '<div class="large-12 columns centered-text">';
        echo '<h2>Seminar pod nazivom</h2>'. basename( $_FILES["fileToUpload"]["name"]). '<h2>je uspješno pohranjen</h2>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="row">';
        echo '<div class="large-12 columns centered-text">';
        echo "Nažalost, nismo uspjeli pohraniti vaš seminar, molim Vas pokušajte još jednom.";
        echo '</div>';
        echo '</div>';
    }
}      
?>
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-3 large-4 columns">
      <i class="fi-laptop"></i>
        <p>Elektrotehnički fakultet Osijek<br>Kneza Trpimira 2B<br>31000 Osijek</p>
        <p>&copy; Copyright ETFOS 2015</p>
    </div>
    <div class="small-12 medium-3 large-5 columns">
      <i class="fi-torso-business"></i>
      <p>Marko Brica</p>
      <p>Nikola Komljenović</p>
      <p>Marina Lušić</p>
      <p>Toni Nikolaš</p>
      <p>Ivan Šitina</p>
    </div>
    <div class="small-12 medium-3 large-3 columns">
      <h4>Pratite nas</h4>
      <ul class="footer-links">
        <li><a href="https://www.facebook.com/officialetfos">Facebook</a></li>
        <li><a href="https://twitter.com/etfos">Twitter</a></li>
        <li><a href="https://plus.google.com/117224227101549752728/about">Google +</a></li>
      <h4>Službena stranica</h4>
        <li><a href="http://www.etfos.hr">ETFOS</a></li>
      <ul>
    </div>
  </div>
</footer> 
<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="../js/templates/jquery.js"></script>
<script src="../js/templates/foundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script> 
    <script>
      $(document).foundation();
    </script>
  </body>
</html>