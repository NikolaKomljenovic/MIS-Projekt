<?php include("../spoj.php");
//ako nismo stisnuli gumb za upis prikaži formu za unos podataka
if (isset($_POST['spremanje'])) {
mysql_query ("INSERT INTO seminar (naziv_seminara, autori, opis, alat, godina, dokument, kategorija) VALUES ('$_POST[naziv_s]', '$_POST[autori]', '$_POST[opis]','$_POST[alat]', '$_POST[godina]','$_POST[dokument]', '$_POST[kategorija]')", $spoj);
}
?>