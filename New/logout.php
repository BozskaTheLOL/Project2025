<?php

    session_start() ;

    include("kapcsolat.php") ;

/*
	unset( $_SESSION['uid'] ) ;
	unset( $_SESSION['unick'] ) ;
	unset( $_SESSION['umail'] ) ;
*/
	session_destroy() ;

	print  "<script> parent.location.href='./' </script>"  ;

    mysqli_close( $adb ) ;
?>