<?php
mysql_connect("localhost", "Adatbázis szerver", "Jelszó");
mysql_query("SET NAMES utf8 COLLATE utf8_hungarian_ci");
mysql_select_db("Adatbázis neve");
print mysql_error();
?>