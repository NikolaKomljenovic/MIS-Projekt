<?php 
	include 'spoj.php';
	
$sql_kategorija = "CREATE TABLE kategorija (
		id_kategorije INT NOT NULL AUTO_INCREMENT,
		naziv_kategorije VARCHAR (50) NOT NULL, 
		PRIMARY KEY (id_kategorije)
		)ENGINE = MyISAM DEFAULT CHARACTER SET cp1250 COLLATE=cp1250_croatian_ci";
$retval_kategorija = mysql_query ($sql_kategorija);
if (!$retval_kategorija) {
die ("Tablica kategorija nije kreirana: ".mysql_error () ."\n");
}
echo "Tablica kategorija je kreirana!\n";

$sql_seminar = "CREATE TABLE seminar ( 
	id_seminara INT NOT NULL AUTO_INCREMENT, 
	naziv_seminara VARCHAR (100) NOT NULL, 
	autori TEXT,
	opis TEXT,
	alat VARCHAR (50), 
	godina INT (4),
	dokument BINARY, 
	id_kategorije INT (5), 
	PRIMARY KEY (id_seminara), 
	FOREIGN KEY (id_kategorije) REFERENCES kategorija (id_kategorije)
	) ENGINE = MyISAM DEFAULT CHARACTER SET cp1250 COLLATE=cp1250_croatian_ci";
$retval_seminar = mysql_query ($sql_seminar);
if (!$retval_seminar) {
die ("Tablica seminar nije kreirana: ".mysql_error () ."\n");
}
echo "Tablica seminar je kreirana!\n";

?>