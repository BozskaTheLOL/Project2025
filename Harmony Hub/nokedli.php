<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/styles.css">
    <title>Harmony Hub</title>
</head>
<style>
    table, th, td
    {
        border: 1px solid black;
        text-align: center;
    }

   </style>
<?php

ob_start();
session_start();
if (isset($_SESSION['nokedli']) && $_SESSION['nokedli']==3)

?>
<input type="button" value="Vissza a főoldalra" onclick=' location.href="/SzaboBence/Vizsgaprojekt/Projekt2025/Harmony Hub/index.php" '>
<br><br>
<table id="tablazat" width="100%">
    <thead>
        <tr>
            <th>Becenév</th>
            <th>Rang</th>
            <th>E-Mail</th>
            <th>Regisztrált</th>
            <th>Műveletek</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Login</td>
       </tr>
       <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Login</td>
       </tr>
       <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Login</td>
       </tr>
       <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Login</td>
       </tr>

       <?php
        include ("kapcsolat.php");
        $sql="SELECT * FROM user";
        $qry=mysqli_query($adb, $sql);
        while($user=mysqli_fetch_array($qry))
        {
            switch($user['ustatus'])
            {
                case A:
                    $action='<a href=;act/bannid='.$user('uid').'">Bann</a>';
                    break;
                case B:
                    $action='<a href="?act=unbann&id='.$user['uid'].'">Feloldás</a>';
                    break;
            }
            switch ($user['rank'])
            {
                case A:
                    $user_rank='tag';
                    $rank_action='<a href="?act=admin_add&id='.$user['uid'].'">Admin adása</a>';
                    break;
                    case B:
                    $user_rank='<font color="red">admin</font>';
                    $rank_action='<a href="?act=admin_del&id='.$user['uid'].'">Admin vétele</a>';
                    break;
            }
        }
       ?>
       <tr>
<td><?= $user['nickname']; ?></td>
<td><?= $user['rank']; ?></td>
<td><?= $user['umail']; ?></td>
<td><?= $user['uip']; ?></td>
<td><?= $user['udate']; ?></td>
<th><a href="?act=del&id=<?= $u['id']; ?>">Törlés</a></th>
</tr>
</thead>
    
</table>

<?php

if(isset($_GET['act']) && $_GET['act'] =='bann') 
{
mysql_query('UPDATE user SET bans=1 WHERE id="'.$_GET['id'].'"');
print('A felhasználó kitíltva!<br><a href="nokedli.php">frissít</a>');
}
?>
<?php

if(isset($_GET['act']) && $_GET['act'] =='unbann')
{
mysql_query('UPDATE user SET bans=0 WHERE id="'.$_GET['id'].'"');
print('A felhasználó újra beléphet<br><a href="nokedli.php">frissít</a>');
}
?>
<?php

if(isset($_GET['act']) && $_GET['act'] =='admin_add')
{
mysql_query('UPDATE user SET rank=3 WHERE id="'.$_GET['id'].'"');
print('A felhasználó admin rangot kapott!<br><a href="nokedli.php">frissít</a>');
}
?>        
<?php

if(isset($_GET['act']) && $_GET['act'] =='admin_del')
{
mysql_query('UPDATE user SET rank=1 WHERE id="'.$_GET['id'].'"');
print('A felhasználó adminja megvonva!<br><a href="nokedli.php">frissít</a>');
}
?>
<?php

if(isset($_GET['act']) && $_GET['act'] =='del')
{
mysql_query('DELETE FROM user WHERE id="'.$_GET['uid'].'"');
print('A felhasználó törölve!<br><a href="nokedli.php">frissít</a>');
}  
 else print('Hozzáférés megtagadva!');






