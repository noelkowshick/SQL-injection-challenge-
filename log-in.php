<?php
include 'connects.php';

if(!empty($_POST['lbtn']))
{
    $username=$_POST['un'];
    $password=$_POST['pw'];
    $result=mysqli_query($conn,"Select * from `login` Where username='$username' and password='$password'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        header('location:sql.html');
    }
    else
    {
        $display_message='check password or user Name';
    }

}else
{
    $display_message='can not be empty';
}
?>