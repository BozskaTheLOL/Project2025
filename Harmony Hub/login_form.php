<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/styles.css">
    <title>Harmony Hub</title>
</head>

<h2> Bejelentkezés </h2>

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

  <form action='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/login_ir.php' method='post' target='kisablak'>

    <span>E-mail címed vagy felhasználóneved:  </span><input name='email'             >  <br>
    <span>Jelszavad:                           </span><input name='pw' type='password'>  <br><br>

                          <input type='submit' value='Bejelentkezés'>

  </form>

<br>

<input type='button' value='Regisztráció' onclick=' location.href= "/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/reg_form.php/" '>
