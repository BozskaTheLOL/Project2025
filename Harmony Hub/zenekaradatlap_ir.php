<?php
    session_start() ;
	include("kapcsolat.php");
    print "<hr>" ;

    if( $_POST['enev']=="" )  
		die( "<script> alert('Nem adtál meg zenekarnevet!') </script>" ) ;

    $logo=$_FILES['elogo'];
	if ($_POST['estyle']=="")
	{
		die("<script> alert ('Nem adtál meg stílust!')</script>");
	}
	if($logo['name']!="")
	{
        $ujlogonev=$_SESSION['enev']."_".date('ymdHis')."_".randomstr();
		if( $logo['type'] == "image/jpeg" )   $ujlogonev .= ".jpg" ;  else
	    if( $logo['type'] == "image/png"  )   $ujlogonev .= ".png" ;  else 
		die( "<script> alert('A logo csak JPG, vagy PNG lehet!') </script>" ) ;

	    move_uploaded_file( $logo['tmp_name'] , "./Logo/" . $ujlogonev ) ;
	}

	mysqli_query( $adb , "

	INSERT INTO eloado (eid,     euid ,                 enev  ,  edatum,   estyle  ,         elogonev , elegoeredeti_nev, estatus, ekomment) 
	VALUES             (NULL, '$_SESSION[uid]',  '$_POST[enev]', NOW(),  '$_POST[estyle]',    '$ujlogonev', $logo[name] ,     'A'  ,  '')
	" );

	print  "
		<script> 
			alert('Az zenekarok adatait sikeresen mentettük!') 
			parent.location.href = './'
		</script>
	"  ;


    mysqli_close( $adb ) ;
?>


