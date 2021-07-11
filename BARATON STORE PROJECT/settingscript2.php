<?php
include'common.php';

if(!$con){
    echo'connection failed';
}
$profile=$_SESSION['user_name'];
if($profile){
    
} else {
    header('location:index.php');
}

if(isset($_POST['change'])){
    $old_pass= mysqli_real_escape_string($con,md5($_POST['oldpass']));
    $new_pass= mysqli_real_escape_string($con,md5($_POST['newpass']));
    $new_pass1= mysqli_real_escape_string($con,md5($_POST['retypepass']));
    $sql="select Password from users WHERE Email='$profile'";
    $result= mysqli_query($con, $sql) or die(mysqli_error($con));
    while($row= mysqli_fetch_array($result)){
        $old_pass_db=$row['Password'];
        
    
    if($old_pass_db==$old_pass && $new_pass==$new_pass1){
        $sql1="update users SET Password='$new_pass1' WHERE Email='$profile'";
        $result1= mysqli_query($con, $sql1);
        $_SESSION['password']=$new_pass1;
        header('location:settings.php?error2=1');
    }
 else {
     if($old_pass_db!=$old_pass){
         header('location:settings.php?error=1');}
     else {
    header('location:settings.php?error1=1');
     }
 }
            
    
    }
    
}
else{
    echo'nothing found';
}



