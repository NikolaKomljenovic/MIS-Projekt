<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIS | Projekt</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <?php include("spoj.php"); ?>
<body>
<form method="POST">
<div>
<font size="5">
	<b>Naziv seminara:</b><input type="text" name="naziv_s" placeholder="Naziv seminara">
	<br><br>
	
	<b>Autori:</b><input type="text" name="autori" placeholder="Autori">
	<br><br>
	
	<b>Opis:</b><input type="text" name="opis" placeholder="Opis">
	<br><br>
	
	<b>Alat:</b><input type="text" name="alat" placeholder="Alat">
	<br><br>
	
	<b>Godina:</b><input type="password" name="godina" placeholder="Godina">
	<br><br>
	
	<b>Dokument:</b><input name="uploaded" type="file"><input type="submit" value="Učitaj" action="upload.php"> <?php //////////////// ?>
	<br><br>
	
	<b>Kategorija:</b><select size="1" name="kategorija" id="kategorija">
	<option selected="selected">Odaberite kategoriju</option>
	<?php $kategorijaSQL=mysql_query("SELECT * FROM kategorija"); 
		for($i=1;$Skategorija=mysql_fetch_array($SkategorijaSQL);$i++){
	echo "<option value='{$Skategorija["id_kategorije"]}'>{$Skategorija["naziv_kategorije"]}</option>";
	}
	?>
	</select>
	<br><br>
	
	<b></b><input type="submit" name="spremi" value="Spremi" method="POST" action="dodaj.php">
	
</div>
</font>
</body>
</html>