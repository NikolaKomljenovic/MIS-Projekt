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
            <li><a href="#">Seminari</a></li>
            <li class="divider"></li>
            <li><a href="../about.html">O nama</a></li>
    </ul>
    </section>
</nav>
<br>
<div class="row">
		<div class="large-12 columns centered-text">
			<h2>Odaberite kategoriju seminara</h2>
		</div>
	</div>
<div class="row">
		<div class="large-12 columns centered-text">
            <h5 class="subheader">Nakon što odaberete kategoriju seminarskih radova, otvorit će vam se detaljan prikaz svih radova</h5>
		</div>
	</div> 
<br>
<div class="row">
    <a href="mehanicki_sustavi.php" class="button expand">Mehanički sustavi</a>
    <a href="elektricni_sustavi.php" class="button expand">Električni sustavi</a>
    <a href="el_mehan_sustavi.php" class="button expand">Elektromehanički sustavi</a>
    <a href="termicki_sustavi.php" class="button expand">Termički sustavi</a>
    <a href="softverski_sustavi.php" class="button expand">Softverski sustavi</a>
<div class="row">
		<div class="large-12 columns centered-text">
			<h4>Ukoliko želite dodati novi seminar pritisnite na gumb ispod</h4>
		</div>
</div>
    <a href="#" data-reveal-id="myModal" class="button expand">Dodaj novi seminar</a>

<div id="myModal" class="reveal-modal medium" data-reveal>

<!-- forma za unos podataka o seminaru-->

  <form action='upload.php' method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="large-6 columns">
    <h3>Dodaj novi seminar</h3>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Naziv seminara
        <input type="text" name="naziv_s" placeholder="Unesite naziv seminara" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Autori
        <input type="text" name="autori" placeholder="Imena autora odvojena zarezom" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Opis
        <input type="text" name="opis" placeholder="Kratki opis Vašeg rada" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Tehnologija
        <input type="text" name="alat" placeholder="Unesite nazive korištenih tehnologija i alata" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-2 columns">
      <label>Godina
        <input type="text" name="godina" placeholder="Unesite godinu" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-8 columns">
    Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </div>
  </div>
  <div class="row">
    <div class="large-3 columns left">
      <label>Kategorija 1
        <select name="a">
          <?php
              mysql_query("SET NAMES 'utf8'");
              $kategorijaSQL=mysql_query("SELECT * FROM kategorija"); 
		      for($i=1;$Skategorija=mysql_fetch_array($kategorijaSQL);$i++){
	               echo "<option value='{$Skategorija["id_kategorije"]}'>{$Skategorija["naziv_kategorije"]}</option>";
	           }
	       ?>
        </select>
      </label>
    </div>
    <div class="large-3 columns left">
      <label>Kategorija 2
        <select name="a">
          <?php
              mysql_query("SET NAMES 'utf8'");
              $kategorijaSQL=mysql_query("SELECT * FROM kategorija"); 
		      for($i=1;$Skategorija=mysql_fetch_array($kategorijaSQL);$i++){
	               echo "<option value='{$Skategorija["id_kategorije"]}'>{$Skategorija["naziv_kategorije"]}</option>";
	           }
	       ?>
        </select>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
		<input class="button radius" type="submit" name="submit" value="Pošalji">
<?php
        if (isset($_POST['submit'])) {
        $temp=$_POST['a'];
        mysql_query ("INSERT INTO seminar (naziv_seminara, autori, opis, alat, godina, id_kategorije) VALUES ('$_POST[naziv_s]', '$_POST[autori]', '$_POST[opis]','$_POST[alat]', '$_POST[godina]','$temp')", $spoj);
        }
?>
      </div>
  </div>
</form>
<a class="close-reveal-modal">&#215;</a>
</div>  
</div>
<br>
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