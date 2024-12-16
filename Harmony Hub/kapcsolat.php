<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Hub</title>
    </head>
    <body>
</body>
</html>



<?php

    $adb = mysqli_connect( "localhost", "root", "", "projekt" ) ;
    $ip= $_SERVER['REMOTE_ADDR'];
    $sess8= substr(session_id(), 0, 8);
   
    function randomstr()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz' ;
        $randstring = '' ;
        for ($i = 0; $i < 10; $i++)
	{
            $randstring .= $characters[rand(0, strlen($characters))] ;
        }
        return $randstring;
    }

?>