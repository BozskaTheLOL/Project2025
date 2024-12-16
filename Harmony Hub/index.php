<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Harmony Hub</title>
</head>


<h1>Harmony Hub</h1>

<form class="example" action="action_page.php">
  <input type="text" placeholder="Keresés" name="kereso">
  <button type="submit"><i class="kerses"></i></button>
</form>
<style>
    * {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 5px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 18%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 2%;
  padding: 15px;
  background: #2196F3;
  color: white;
  font-size: 10px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}


form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>

<br><br>
<li><a href="studio.php">Stúdió</a></li>
<li><a href="alkalmazas.php">Alkalmazások</a></li>
<li><a href="rolunk.php">Rólunk</a></li>
<li><a href="feltoltes.php">Feltöltés</a></li>
<li><a href="zenekar.php">Zenekarok</a></li>


    
</body>
</html>
<?php
	session_start() ;
	include("kapcsolat.php") ;
?>

<style>

    #kiaz
    {
	padding          : 4px 12px  ;
	border-radius    : 4px       ;
	background-color : #228      ;
	font-size        : .8em      ;
	color            : #FFF      ;
	text-decoration  : none      ;
    }

    #tartalom
    {
	margin           : 32px 80px ;
    }
    body
    {
      background-color: goldenrod;
    }
  


</style>

<div id='belepve' style='padding:12px; text-align:right;'>


<?php

    $m1 = @$_GET['m1'] ;

    if( !isset( $_SESSION['uid'] ) )
    {
	print "<input type='button' value='Belépés' onclick=' location.href=\"/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/login_form.php\" '>" ;
    }
    else
    {
	$user = mysqli_fetch_array(mysqli_query( $adb , " 
					SELECT * FROM user WHERE uid='$_SESSION[uid]' 
	" )) ;
	if( $user['ujprofkep_nev']!="" )  $profilkep = $user['ujprofkep_nev'];
	else                               $profilkep = "profilkep.png" ;
	print "
		<img src='./Profilkep/$profilkep' style='height:40px; width:40px; border-radius:50%;'>
        <a href='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/adatlap_form.php' id='kiaz' title='Személyes adatok szerkesztése'>$_SESSION[unick]</a>
        <input type='button' value='Kilépés' onclick=' kisablak.location.href=\"/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/logout.php\" '>
	" ;
    }

?>
</div>

<hr>

<div id='tartalom'>
<?php

    if( !isset( $_SESSION['uid'] ) )
    {
	if( $m1 == ""             )   include( "kezdolap.php"     ) ;  else
	if( $m1 == "belepes"      )   include( "login_form.php"   ) ;  else
	if( $m1 == "regisztracio" )   include( "reg_form.php"     ) ;  else
	if( $m1 == "megerosites"  )   include( "reg_confirm.php"  ) ;  else
	if( $m1 == "adatlapom"    )   include( "bekelllepni.php"  ) ;  else
	                              include( "404.php"          ) ;
    }
    else
    {
	if( $m1 == ""             )   include( "belsolap.php"     ) ;  else        
	if( $m1 == "adatlapom"    )   include( "adatlap_form.php" ) ;  else
	                              include( "404.php"          ) ;
    }

?>
</div>



<!--
<br><br><br>
<hr>
<br><br><br>

<b>harmonyhub.localhost</b> beállítása:
<pre>
    C:/xampp/apache/conf/extra/httpd-vhosts.conf
    C:/windows/System32/drivers/etc/hosts
</pre>


<?php print session_id() ; ?><br><br>
-->



<iframe name='kisablak' frameborder=0></iframe>



<?php
	mysqli_close( $adb ) ;
?>


