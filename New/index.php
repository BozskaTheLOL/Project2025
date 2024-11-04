<?php
	session_start() ;
	include("kapcsolat.php") ;
?>
<head>
	<link rel="stylesheet" href="styles.css">
</head>

<div id='belepve' style='padding:12px; text-align:right;'>
<?php

    $m1 = @$_GET['m1'] ;




    if( !isset( $_SESSION['uid'] ) )
    {
	print "
	<input type='button' value='Belépés' onclick=' location.href=\"/Bozska/New/belepes/\" '>" ;
    }
    else
    {
		$user = mysqli_fetch_array(mysqli_query($adb, "
						SELECT *
						FROM user
						WHERE uid='$_SESSION[uid]'
		"));
		if($user['upfp_nev']!="")	$profilkep = $user['upfp_nev'];
									$profilkep = "def.jpg";
	print "
		<img src='/Bozska/New/profilkepek/$profilkep' style='height: 32px; width: 32px; border-radius: 50%;'>
		<a href='/Bozska/New/adatlapom/' id='kiaz' title='Személyes adatok szerkesztése'>$_SESSION[unick]</a>
		<input type='button' value='Kilépés' onclick=' kisablak.location.href=\"/Bozska/New/logout.php\" '>
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

<b>weissesvagyok.localhost</b> beállítása:
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


