<h2> Regisztráció </h2>

<head>
	<link rel="stylesheet" href="/Bozska/New/styles.css">
</head>

  <style>

    span
    {
	display : inline-block ;
	width   : 150px        ;
    }

  </style>


  <form action='/Bozska/New/reg_ir.php' method=post target='kisablak'>

    <span>E-mail címed:         </span><input name='umail' type='email'>                  <br>
    <span>Felhasználónév:       </span><input name='unick' >                  <br>
    <span>Választott jelszavad: </span><input name='upw1' type='password'>  <br>
    <span>Jelszavad újra:       </span><input name='upw2' type='password'>  <br><br>

                          <input type='submit' value='Regisztráció'>

  </form>

<hr>

<input type='button' value='Vissza a belépéshez' onclick=' location.href="/Bozska/New/belepes/" '>
<br>


