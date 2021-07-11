
<?php

include 'common.php';
?>
<html>
    <head>
        
        <title>SIGN UP PAGE</title>
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
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                          
                </button>
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"> Baraton-Store </a>
                    
                </div>
                <div class="collapse navbar-collapse"id="#mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="signup.php" class="glyphicon glyphicon-user"> sign up</a>
                        </li>
                        <li>
             
                            <a href="#"  class="glyphicon glyphicon-log-out"data-toggle="modal" data-target="#mymodal" > Log-in</a>
                        </li>
                        <li>
                            <a href="aboutus.php" class="glyphicon glyphicon-tasks"> about us</a>
                            
                        </li>
                        <li>
                            <a href="contactus.php" class="glyphicon glyphicon-phone"> contact us</a>
                        </li>
                        
                    </ul>
                    
                </div>
                
            </div>
            
        </nav>
        <div class="container">
            <div class="row">
        <div class="modal" id="mymodal">
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
                                <input type="text" name="Email" class="form-control" placeholder="email">
                                
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Password" name="Password"class="form-control" >
                                
                            </div>
                            
                       
                        <div class="modal-footer">
                            <div class="form-group" style="text-align:left">
                                <button class="btn btn-primary "  name="Login" >Login</button>
                                
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: left"><a href="settings.php" style="color: blue">Forgot Password?</a></h5>
                                 
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
        </div><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-6">
                    	<br>
                    	<br>
                    	<br>
                    	<br>
                        <img src="img/signup2.png" alt="signup">
                        
                    </div>
                    
                
                <div class="col-xs-6">
                    <form method="post" action="signup-script.php">
                        
                        <div class="form-group">
                            <h2>SIGN UP</h2>
                            
                        </div>
                        
                           <div class="form-group">
                            <input type="text" name="Name" placeholder="Name" class="form-control" required/>
                            
                            
                        </div>
                        <div class="form-group">
                           
                            <input type="text" name="Email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="text" name="Password" placeholder="Password" class="form-control" required/>
                            
                            
                        </div>
                        <div class="form-group">
                           
                            <input type="text" name="Contact" placeholder="Contact" class="form-control" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1"required/>
                        </div>
                        <div class="form-group">
                            
                            <input type="text"name="Residence" placeholder="Residence"class="form-control"required/>
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="text" name="Address" placeholder="Address" class="form-control"required/>
                            
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            submit
                        </button>
                  
                    </form>
                        <?php
                        if(isset($_GET['error4'])==true){
                            echo'<h4><p style="color:red">username already taken</p></h4>';
                        }
                       
                        ?>
                    
                </div>
                
            </div>
            
        </div>
        </div><br><br><br><br><br><br><br><br><br><br>
       <footer>
        <div class="container modify">
            <div class="row">
                
                    
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <h4>Information</h4>
                            
                            <a href="aboutus.php">About Us</a><br>
                            <a href="contactus.php">Contact Us</a>
                            
                        </div>
                        <div class="col-xs-4">
                            <h4>My Account</h4>
                            <a href="#"data-toggle="modal" data-target="#mymodal">Login</a><br>
                            <a href="signup.php">Signup</a>
                            
                        </div>
                        <div class="col-xs-4">
                            <h4>Contact Us</h4>
                            Contact:+254-123-000000
                            
                        </div>
                        
                    </div>
                    </div>
        </div>
                </footer>
            
            
       
    </body>    
            
                
     
</html>