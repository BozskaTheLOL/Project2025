
<head>
	<link rel="stylesheet" href="/Bozska/New/styles.css">
</head>

<h2>Adatlapom</h2>
  <style>

    span
    {
	display : inline-block ;
	width   : 150px        ;
    }

  </style>

<?php

	$user = mysqli_fetch_array( mysqli_query( $adb , "
				SELECT *
        FROM user
        WHERE uid='$_SESSION[uid]' 
	" ) ) ;

?>

  <form action='/Bozska/New/adatlap_ir.php' method=post target='kisablak' enctype='multipart/form-data'>

    <span>E-mail címed:         </span><input name='umail'   value='<?=$user['umail'];?>' type='email'>  <br>
    <span>Felhasználónév:       </span><input name='unick'    value='<?=$user['unick'];?>'              >  <br>
    <span>Profilkép:            </span><input name='uprofkep'                                type='file' >  <br>


    <span>Jelszavad:            </span><input name='upw' type='password'  >  <br>

                          <input type='submit' value='Adatmódosítás'>

  </form>


