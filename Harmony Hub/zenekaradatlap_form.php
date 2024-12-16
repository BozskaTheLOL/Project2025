<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Harmony Hub</title>
</head>
<style>
body
{
    font-family: Arial, sans-serif;
    background-image: url(Hatter/hatter2.jpg);
}

h2 
{
    color: white;
}

span 
{
  color: white;
}

<?php
	$eloado = mysqli_fetch_array( mysqli_query( $adb , "
				SELECT *
        FROM eloado
        WHERE euid='$_SESSION[uid]'
	" ) ) ;

?>
</style>

<h2>Zenekar adatlap</h2>
<form action='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/zenekaradatlap_ir.php' method=post target='kisablak' enctype='multipart/form-data'>
<span>Zenekar neve: </span><input name='enev'   value='<?=$eloado['enev'];?>' type='text'>  <br>
<span>Zenekar stílusa: </span><input name='estyle'  value='<?=$eloado['estyle'];?>' ><br>
<span>Zenekar logo: </span><input name='elogo'     type='file' >  <br><br>
<input type='submit' value='Mentés'>
</form>