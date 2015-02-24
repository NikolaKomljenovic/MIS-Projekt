<?php
//funkcija za spoj na mysql server
if (!$spoj=@mySQL_connect("localhost", "root", ""))
{
die ("<b>Došlo je do pogreške i nismo se mogli spojiti!</b>");
}
//funkcija za odabir baze na serveru
if (!mySQL_select_db("modeliranje", $spoj))
{
die ("<b>Odabrana je pogrešna baza podataka.</b>");
}
?>