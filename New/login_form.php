<head>
	<link rel="stylesheet" href="/Bozska/New/styles.css">
</head>
<h2> Belépés </h2>

  <style>

    span
    {
	display : inline-block ;
	width   : 150px        ;
    }

  </style>

  <form action='/Bozska/New/login_ir.php' method=post target='kisablak'>

    <span>E-mail címed vagy felhasználóneved:  </span><input name='email'             >  <br>
    <span>Jelszavad:                           </span><input name='pw' type='password'>  <br>

                          <input type='submit' value='Belépés'>

  </form>



<input type='button' value='Regisztráció' onclick=' location.href= "/Bozska/New/regisztracio/" '>
