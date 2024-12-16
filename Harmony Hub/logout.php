<?php

    session_start() ;

    include("kapcsolat.php") ;

/*
	unset( $_SESSION['uid'] ) ;
	unset( $_SESSION['unick'] ) ;
	unset( $_SESSION['umail'] ) ;
*/
	session_destroy() ;

	print  "<script> parent.location.href='/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/index.php' </script>"  ;

    mysqli_close( $adb ) ;
?>