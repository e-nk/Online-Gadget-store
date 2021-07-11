<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include'common.php';
if(isset($_SESSION['user_name'])){
    header('location:home.php');
}
?>
<html>
    <head>
        
        <title>INDEX PAGE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
                .box{
                text-align: center;
            }
            .modify{
                background-color: #a9a9a9;
                width: 100%;
                padding: 5px 15px;
                
               
                
            
               
                
                
                
               
            }
            
        </style>
        
        
        
   <link rel="stylesheet" type="text/css" href="Mydesign.css">
         
    </head>
  
 
    <body background="black.png">
     
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                          
                </button>
                <div class="navbar-header">
                    <a href="index.php" style="color: white" class="navbar-brand">Baraton-Store </a>
                    
                </div>
        
                <div class="collapse navbar-collapse"id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="sell.php" style="color: white" class="glyphicon glyphicon-usd">Sell</a>
                        </li>
                        <li>
                            <a href="signup.php" style="color: white" class="glyphicon glyphicon-user"> Sign up</a>
                        </li>
                        <li>
             
                            <a href="#" style="color: white" class="glyphicon glyphicon-log-out" data-toggle="modal" data-target="#mymodal"> Log-in</a>
                        </li>
                        
                        <li>
                            <a href="aboutus.php" style="color: white" class="glyphicon glyphicon-tasks"> about us</a>
                            
                        </li>
                        <li>
                            <a href="contactus.php" style="color: white" class="glyphicon glyphicon-phone"> contact us</a>
                        </li>
                        
                    </ul>
                    </div>
                
            </div>
            
        </nav>
        <div class="container">
            <div class="row">
        <div class="modal" id="mymodal" >
            <div class="modal-dialog">
                <div class="modal-content">
                    
                        <div class="modal-header">
                        <h3 class="text-primary">
                            LOG IN
                        </h3>
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        
                    </div>
                    <div class="modal-body">
                        <form method="post" action="loginscript3.php">
                        
                            <div class="form-group">
                                <p>Don't have an account?<a href="signup.php" style="color: blue">register</a></p>
                                   
                                
                            </div>
                            <div class="form-group">
                                <input type="text" name="Email" class="form-control" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="Password" class="form-control">
                                
                            </div>
                            
                       
                        <div class="modal-footer">
                            <div class="form-group" style="text-align:left">
                                <button class="btn btn-primary "  name="Login">Login</button>
                                
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: left"><a href="forgot-pwd.php" style="color: blue">Forgot Password?</a></h5>
                                 
                            </div>
                            
                        </div>
                        </form>
                        <?php
                        if(isset($_GET['error'])==true){
                            echo'<p style="color:red">invalid email id</p>';
                        }
                        if(isset($_GET['error1'])==true){
                            echo'<p style="color:red">invalid password</p>';
                        }
                        ?>
                      
                        
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
                
            
            
        </div>
            </div>
        </div>
          
        <br><br><br>
        <div class="container-fluid" style="background-color: black">
            <div class="row">
                
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">MAC BOOK PRO</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                <div class="box">
                                
                                    <img src="img/macbook2.jpg" alt="one plus" height="160px"width="300px">
                                
                                </div>
                                <P style="color: white">The all-new MacBook Pro features a brilliant 16-inch Retina Display, the latest 8-core processors, up to 64GB of memory, next-generation graphics with up to 8GB of VRAM and a new advanced thermal design, making it the most powerful MacBook Pro ever.Ksh.94,999</P>
                                <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                                
                            
                            
                        </div>
                            </div>
                                
                                
                      </div>
                    
                    
                    
               
            
                     <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">SAMSUNG-S20</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/Samsung-S20.png" alt="samsung-s20 plus"height="200px"width="200px">
                                
                                </div>
                              <P style="color: white">Display:6.7 inch,processor:octa core,front camera:10mp,Ram:8gb,storage:128gb<br><center><b style="color: white"> Ksh.50,799</b></center></p>
                               <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                                </div>
                                
                            </div>
                            
                        </div>
                                 
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">IPHONE-11-PRO-MAX</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/IPhone-11-pro-max.jpg" alt="iphone" height="200px"  width="200px" >
                                </div>
                            
                                <P style="color: white">Display:6.5 inch,processor:A13 BIONIC ,front camera:12mp,Ram:4gb,storage:256gb,<br><center><b style="color: white"> Ksh.87,100</b></center></P>
                           <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                                
                            </div>
                            
                        </div>
                                 </div>
                
            </div>
                                
                      
                <div class="col-xs-12">
                    <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">NOKIA-7-PLUS</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/Nokia-7-Plus.jpg" alt="Nokia 7 plus" height="200px"  width="200px" >
                                </div>
                            
                               <P style="color: white">Display:6.0 inch,processor:Qualcomm Snapdragon 660,front camera:10mp,Ram:4gb,storage:64gb<br><center><b style="color: white"> Ksh.14,499</b></center></P>
                              <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">OPPO-F15</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/oppo-f15.jpg" alt="Oppo f15" height="200px"  width="200px" >
                                </div>
                            
                                <P style="color: white">Display:6.4 inch,processor:Helio P70,front camera:16mp,Ram:8gb,storage:128gb,<br><center><b style="color: white"> Ksh.18,299</b></center></P>
                             <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">XIAOMI-REDMI-NOTE-8-PRO</h5>
                                
                                
                            </div>
                     <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/xiaomi-redmi-note-8-pro.jpg" alt="Redmi Note 8 Pro" height="180px"  width="200px" >
                                </div>
                            
                                 <P style="color: white">Display:6.53 inch,processor:Helio G90T professional gaming Octa-Core,front camera:20mp,Ram:6gb,storage:64gb,<br><center><b style="color: white"> Ksh.16,199</b></center></P>
                              <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
              
                </div>
            </div>
        </div>
        
        <footer>
        <div class="container modify">
            <div class="row">
                
                    
                    
                        <div class="col-xs-4" style="color: blue">
                            <h4>Information</h4>
                            
                            <a href="aboutus.php" style="color: blue">About Us</a><br>
                            <a href="contactus.php" style="color: blue">Contact Us</a>
                            
                        </div>
                        <div class="col-xs-4" style="color: blue">
                            <h4>My Account</h4>
                            <a href="#"data-toggle="modal" data-target="#mymodal" style="color: blue">Login</a><br>
                            <a href="signup.php" style="color: blue">Signup</a>
                            
                        </div>
                        <div class="col-xs-4" style="color: blue">
                            <h4>Contact Us</h4>
                            Contact:+254-123-000000
                            
                        </div>
                        
                    
                    </div>
        </div>
         <div style="position: fixed;bottom: 0;right: 20px;background-color: #fff;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px;padding: 5px 10px;">By <a href="https://twitter.com/en_k_l">@en_k_l</a> &nbsp;&bull;&nbsp; twitter</a></div>';
                </footer>
            
            
        
                    
            
        
        
       
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
