<?php
$con= mysqli_connect('localhost','root','','store (2)');
if(!$con){
    echo'connection failed';
}

session_start();
$name= mysqli_real_escape_string($con,$_POST['Name']);
$email= mysqli_real_escape_string($con, $_POST['Email']);
$check_duplicate_email="SELECT Email from users where Email='$email'";
$result= mysqli_query($con,$check_duplicate_email);
while($row=mysqli_fetch_array($result)){
if($row>0){
  header('location:signup.php?error4=1');
}
else{
    die();
}
}

       
$password= mysqli_real_escape_string($con, md5($_POST['Password']));
$contact= mysqli_real_escape_string($con,$_POST['Contact']);
$city= mysqli_real_escape_string($con, $_POST['City']);
$address= mysqli_real_escape_string($con,$_POST['Address']);

        
$select_query="INSERT INTO USERS(Name,Email,Password,Contact,City,Address) VALUES ('$name','$email','$password','$contact','$city','$address')";
$select_query_result= mysqli_query($con,$select_query);
if ($select_query_result){
    $_SESSION['Email']=$email;
    $_SESSION['Password']=$password;
    header("location:index.php");
}
else{
    echo"error in signing up";
}
      

?>



