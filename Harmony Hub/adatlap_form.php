<h2>Adatlapom</h2>
<title>Harmony Hub</title>
<link rel="stylesheet" href="styles.css">
  <style>

    span
    {
	display : inline-block ;
	width   : 150px        ;
    }

  </style>

<?php
  $adb = mysqli_connect( "localhost", "root", "", "projekt" ) ;
	$user = mysqli_fetch_array( mysqli_query( $adb , "
				SELECT *
        FROM user
        WHERE uid
	" ) ) ;

?>

  <form action='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/adatlap_ir.php' method=post target='kisablak' enctype='multipart/form-data'>

    <span>E-mail címed:         </span><input name='umail'   value='<?=$user['umail'];?>' type='email'>  <br>
    <span>Felhasználónév:       </span><input name='unick'    value='<?=$user['unick'];?>'              >  <br>
    <span>Profilkép:            </span><input name='ujprofkep'                                type='file' >  <br>


    <span>Jelszavad:            </span><input name='upw' type='password'  >  <br><br>

                          <input type='submit' value='Adatmódosítás'>

  </form>


