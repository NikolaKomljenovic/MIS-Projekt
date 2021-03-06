<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIS | Projekt</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/style.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <?php include("../spoj.php");?>
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
            <li><a href="../seminari/seminari.php">Seminari</a></li>
            <li class="divider"></li>
            <li><a href="../about.html">O nama</a></li>
    </ul>
    </section>
</nav>
<div class="row">
		<div class="large-12 columns centered-text">
			<h2>Električni sustavi</h2>
		</div>
	</div>
    <br>
<?php
//spajanje na bazu i isčitavanje svega iz nje!
mysql_query("SET NAMES 'utf8'");
//ispis seminara iz kategorije mehanički sustavi
$sql_upit="SELECT naziv_seminara, autori, opis, alat, godina, dokument FROM seminar WHERE id_kategorije = 2 OR podkategorija=2 ORDER BY id_seminara ASC";
if (!$q=mysql_query(@$sql_upit))
{
echo mysql_error();
die();
}
//ako je broj redaka nula onda nema seminara u bazi
if (mysql_num_rows($q)==0)
{
echo '<div class="row clearfix">';
echo '<div class="large-12 columns centered-text">';
echo '<h3>Nema seminara iz ove kategorije.<h3>';
echo '</div>';    
echo '</div>';
}
else {
while ($redak=mysql_fetch_array($q)){
echo '<div class="row clearfix">';
    echo '<div class=large-12 columns">';
        echo '<b>Naziv seminara: </b>', $redak["naziv_seminara"];
        echo '<input class="button right" type="button" onClick="window.location.href=','&#39;'.$redak["dokument"].'&#39;','" value="Preuzmi .rar datoteku">';
        echo '<br><b>Autori: </b>', $redak["autori"];
        echo '<br><b>Opis: </b>', $redak["opis"];
        echo '<br><b>Tehnologija: </b>', $redak["alat"];
        echo '<br><b>Godina: </b>', $redak["godina"];
        echo '<hr>';
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