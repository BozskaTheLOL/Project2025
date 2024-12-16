<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/styles.css">
    <title>Harmony Hub</title>
</head>


<h2> Regisztráció </h2>

  <style>

    span
    {
	display : inline-block ;
	width   : 150px        ;
    }

    body
    {
      background-color: goldenrod;
    }

  </style>


  <form action='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/reg_ir.php' method=post target='kisablak'>

    <span>E-mail címed:         </span><input name='umail' type='email'>                  <br>
    <span>Felhasználónév:       </span><input name='unick' >                  <br>
    <span>Választott jelszavad: </span><input name='upw1' type='password'>  <br>
    <span>Jelszavad újra:       </span><input name='upw2' type='password'>  <br><br>

                          <input type='submit' value='Regisztráció'>
                          <br><br>
                          <input type='submit' value='Admin' onclick=' location.href= "/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/nokedli.php/" '>
                          

  </form>

<hr>

<input type='button' value='Vissza a belépéshez' onclick=' location.href="/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/login_form.php" '>
<br>


