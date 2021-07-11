<?php
include'common.php';
?>
<html>
    <head>
        
        <title>ABOUT US</title>
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
             
                            <a href="#"  class="glyphicon glyphicon-log-out" data-toggle="modal" data-target="#mymodal"> Log-in</a>
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
                                <input type="text" placeholder="Password" name="Password" class="form-control">
                                
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

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>WHO WE ARE</h4>
                                
                                
                            </div>
                            <div class="panel-body">
                                <img src="img/logo2.gif" alt="web-developers">
                                <p>Baraton-store is an electronic commerce company with headquarters in 
                                Baraton, Kenya. It is the slowly becoming among largest internet based retailer in Kenya.
                                Baraton-store started as an online blog but soon diversified, selling mobile-phones and laptops.Baraton-store
                                also sell certain low-end products like USB cables and other accessories. </p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                
                <div class="col-xs-4">
                     <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>OUR HISTORY</h4>
                                
                                
                            </div>
                         <div class="panel-body">
                             <h6 style="color: blue">2021-</h6>
                             <P>The company was founded in 2021. spurred by what students around 
                             campus would go through when maybe they'd want to sell off their gadgets. 
                             to participate in the internet business boom during that year.
                             Baraton store was developed to cater for students majorly in Baraton University
                             and the whole baraton community.</P><br>
                             <h6 style="color: blue">2021-</h6>
                             <p>In June 2021, Baraton-store received a funding of Ksh.20,000 from its
                                 Venture Partners</p><br>
                             <h6 style="color: blue">2021-</h6>
                             <p>In July 2021, the company did it's first test run</p><br>
                             <h6 style="color: blue">2021-</h6>
                             <p>Baraton-Store registered its its first users </p>
                             
                             
                         </div>
                     </div>
                    
                </div>
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5>OPPORTUNITIES</h5>
                                
                            </div>
                            <div class="panel-body">
                                <b>Available Roles</b>
                                
                                <ul>
                                    <li>
                                        Jr/Sr. Web Developer [Full Time Role + also available as
                                        a 6 months Internship]
                                    </li>
                                    <li>
                                        Business Apprentice [6 Months Internship]
                                    </li>
                                    <li>
                                        Manager at backend operations [Full Time Role + also available
                                        as a 6 Months internship]
                                    </li>
                                </ul>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                
            </div>
            
        </div>
        </div>
       <footer>
        <div class="container modify">
            <div class="row">
                
                    
                    
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
                </footer>
            
            
        
                    
         
    </body>
</html>

