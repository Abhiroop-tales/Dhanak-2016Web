<?php
include('../configdb.php');
?>
<?php
session_start();
if($_SESSION['username']=='abhi09' or $_SESSION['username'] == 'ONETAPS' or $_SESSION['username'] == 'Shandman' or $_SESSION['username'] == 'prachibisht' or $_SESSION['username'] == 'admin2' or $_SESSION['username'] == 'senpaiwoman')
{
   if(isset($_POST['web_unban']))
   {
    $username=$_POST['unban_username'];
    $sql = "DELETE FROM webbed_ban WHERE username='$username'";
    $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
    header('location:../webbed/web_ban.php');
   }
   else
   {
   header('location:../webbed');
   }
}
else
{
header('location:../webbed');
}