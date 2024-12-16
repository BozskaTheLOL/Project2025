<?php
ob_start()
session_start();
print('<meta http-equiv="content-type" content="text/html; charset=UTF-8" />');
include('config.php');
if (isset($_SESSION['rank']) && $_SESSION['rank']>=1)
{
    print ('Üdv '.$_SESSION['nickname'].'<br> ezt csak a belépett belépett felhasználók látják!<be><a href="?act=exit">kilépés</a>');

    if (isset($_GET['act'])&&$_GET['act']=='exit')
    {
        session_destroy();
        header('location: login_form.php');
        exit();
    }
}
else print("Hozzáférés megtagadva!")

ob_start();

session_start();
if (isset($_SESSION["rank"]) && $_SESSION["rank"]>=2){

}else print ('Hozzáférés megtagadva!')