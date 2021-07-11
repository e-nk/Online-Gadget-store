<?php
include 'common.php';
if (!$con){
    echo'error connection';
}
if(isset($_POST['Login'])){
    $username= mysqli_real_escape_string($con,$_POST['Email']);
    $password= mysqli_real_escape_string($con, md5($_POST['Password']));
    $sql="select * from users WHERE Email='$username'";
    $result= mysqli_query($con, $sql);
    while ($row= mysqli_fetch_array($result)){
        $username_db= $row['Email'];
        $password_db= $row['Password'];
        $ids_db=$row['id'];
    }
    if($username_db==$username && $password_db==$password){
        $_SESSION['user_name']=$_POST['Email'];
        $_SESSION['user_id']=$ids_db;
        
        
       header ('location:home.php');
        
    }
            else{
        if($username_db!=$username){
            header('location:index.php?error=1');
        }
 else {
           header('location:index.php?error1=1');
 }
            }
            
}
