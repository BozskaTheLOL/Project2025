<?php


    print "<hr>" ;

    if( $_POST['umail']=="" )
		die( "<script> alert('Nem adtad meg az e-mail címed!') </script>" ) ;

    if( strlen($_POST['upw1']) < 4 )  
		die( "<script> alert('A jelszónak min. 4 karakter hosszúságúnak kell lennie!') </script>" ) ;

    if( $_POST['upw1']!=$_POST['upw2'] )  
		die( "<script> alert('Nem egyeznek a jelszavaid!') </script>" ) ;

    print_r ( $_POST ) ;

    include("kapcsolat.php") ;

		mysqli_query( $adb , "

				UPDATE user
				SET    ustatus = 'L'
				WHERE  ustatus = 'E'
				AND    TIME_TO_SEC(TIMEDIFF(NOW(), udatum))>15*60

		" );

	$sorokszama = mysqli_num_rows( mysqli_query( $adb , " 

							SELECT *
							FROM user 
							WHERE umail='$_POST[umail]'
							AND (ustatus='A' OR ustatus='F') 
	" ) ) ;

	if( $sorokszama>0 )  
		die( "<script> alert('Ezzel az e-mail címmel már regisztráltál!') </script>" ) ;


	if( mysqli_num_rows( mysqli_query( $adb , " 

							SELECT *
							FROM korabbinev 
							WHERE kunick='$_POST[unick]' 
	" ) ) )
		die( "<script> alert('Ez a felhasználónév nem szabad!') </script>" ) ;


	$md5pw = md5( $_POST['upw1'] ) ;

	$strid = randomstr(10) ;

	mysqli_query( $adb , "

	INSERT INTO user (uid ,  ustrid  ,         unick  ,     upw , umail  ,        udate,  uip , ustatus, ukomment, uadmin) 
	VALUES           (NULL, '$strid' , '$_POST[unick]', '$md5pw', '$_POST[umail]', NOW() , '$ip', 'A'     , ''  ,  'admin')


	" ) ;


	print  "<script> alert('Regisztrációd sikeresen megtörtént.')
							parent.location.href = './'
			</script>"  ;


    mysqli_close( $adb ) ;
?>