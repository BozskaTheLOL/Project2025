<?php
    session_start() ;

    print "<hr>" ;

    if( !isset($_SESSION['uid'])   ) 
		die( "
			<script> 
				alert('Lejárt a munkamenet! Jelentkezz be ismét!') 
				parent.location.href = '/Bozska/New/belepes/'
			</script>
		" ) ;


    if( $_POST['umail']=="" )  
		die( "<script> alert('Nem adtad meg az e-mail címed!') </script>" ) ;

    print_r ( $_POST ) ;

    include("kapcsolat.php") ;

	$sorokszama = mysqli_num_rows( mysqli_query( $adb , " 

			SELECT * FROM user 
			WHERE umail='$_POST[umail]' 
			AND  (ustatus='E' OR ustatus='A' OR ustatus='F') 
			AND   uid != '$_SESSION[uid]'
	" ) ) ;

	if( $sorokszama>0 )  
		die( "<script> alert('Ezzel az e-mail címmel másik felhasználóként már regisztráltál!') </script>" ) ;


	if( mysqli_num_rows( mysqli_query( $adb , " 

			SELECT * FROM korabbinev 
			WHERE kunick='$_POST[unick]' 
			AND   kuid !='$_SESSION[uid]'

	" ) ) )
		die( "<script> alert('Ez a felhasználónév nem szabad!') </script>" ) ;


	$md5pw = md5( $_POST['upw'] ) ;

	$sorokszama = mysqli_num_rows( mysqli_query( $adb , " 

			SELECT * FROM user 
			WHERE uid='$_SESSION[uid]' 
			AND   upw='$md5pw'
	" ) ) ;
	if( $sorokszama==0 )
		die( "<script> alert('Hibás a megadott jelszavad!') </script>" ) ;

	$kep = $_FILES['upfp'];
	if($kep['name'] !="")
	{
		$newpname = $_SESSION['uid'] . "_" . date('ymdHis') . "_" . randomstr() ;
		if($kep['type'] == "image/jpeg") $newpname .= ".jpg" ; else
		if($kep['type'] == "image/png") $newpname .= ".png" ; else
		die("<script> alert('A kép csak JPG, vagy PNG lehet!')") ;

		move_uploaded_file($kep['tmp_name'] , "/Bozska/New/profilkepek/" . $newpname);
	}


	mysqli_query( $adb , "

			UPDATE user
			SET    unick  = '$_POST[unick]'  ,
			       umail = '$_POST[umail]' ,
				   upfp_nev = '$newpname' ,
				   upfp_og_nev = '$kep[name]'

			WHERE  uid = '$_SESSION[uid]'

	" );

	$_SESSION['unick'] = $_POST['unick'] ;
	print  "
		<script> 
			alert('Adataidat sikeresen módosítottuk.') 
			parent.location.href = './'
		</script>
	"  ;


    mysqli_close( $adb ) ;
?>