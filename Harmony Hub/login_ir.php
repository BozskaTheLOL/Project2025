<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Hub</title>
</head>
<body>

<?php

    session_start() ;

    print_r ( $_POST ) ;

    print "<hr>" ;

    include("kapcsolat.php") ;

	$md5pw = md5( $_POST['pw'] ) ;

	$sorokszama = mysqli_num_rows( mysqli_query( $adb , " 

							SELECT * 
							FROM user 
							WHERE ( umail='$_POST[email]'  OR unick='$_POST[email]' )
							AND     upw   ='$md5pw'
							AND     ustatus='E' 
	" ) ) ;
	if( $sorokszama==1 )  
		die( "<script> alert('Fejezd be a regisztrációdat az e-mailben kapott link alapján!') </script>" ) ;


	$user =  mysqli_fetch_array( mysqli_query( $adb , " 

							SELECT *
							FROM user 
							WHERE ( umail='$_POST[email]'  OR unick='$_POST[email]' )
							AND     upw   ='$md5pw'
							AND   ( ustatus='A' OR ustatus='F' ) 
	" ) ) ;
	if( $user['uid']=="" )  
		die( "<script> alert('Hibás belépési adatok!') </script>" ) ;


	$ip    =  $_SERVER['REMOTE_ADDR'] ;
	$sess8 =  substr( session_id() , 0 , 8 )  ;



	mysqli_query( $adb , "

		INSERT INTO login (lid ,       luid  , ldatum,  lip  ,  lsess8  ,  ladmin) 
		VALUES            (NULL, '$user[uid]', NOW() , '$ip' , '$sess8' ,  'admin')		

	" ) ;

	$_SESSION['uid']    =  $user['uid']    ;
	$_SESSION['unick']  =  $user['unick']  ;
	$_SESSION['umail']  =  $user['umail'] ;
    $_SESSION["id"]=$adatok["id"];
    $_SESSION['bann'] = 0;
    $_SESSION["nickname"]=$adatok["nickname"];
    $_SESSION["rank"]=$adatok["rank"];      



	print  "<script> parent.location.href='./' </script>"  ;


    mysqli_close( $adb ) ;
?>