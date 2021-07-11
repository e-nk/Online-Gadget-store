
<html>
    <head>
        
        <title>CONTACT US</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .change{
                text-align: right;
                
            }
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
            
         </nav><br><br><br><br>
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
                <div class="col-xs-10">
                
                                <h3>LIVE SUPPORT</h3>
                                
                          
                                <h5><b>24 HOURS| 7 days a week | 365 days a year Live Technical Support</b></h5>
                                <b><p>it is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has more or less normal distribution of letters. There are many
                                passages of Lorem ipsum available, but the majority have suffered alteration in 
                                some form,by injected humuor, or randomised words which don't look slightly believable.
                                If you are going to use a passage of Lorum ipsum, you need to be sure there isn't anything
                                embarrassing hidden in the middle of the text.</p></b>
                </div>
                                <div class="col-xs-2">
                                    <img src="img/contactus.jpg" height="200px" width="200px">
                                </div>
                </div>
            </div>
        </div>
                <div class="container">
                    <div class="row">
                    <div class="col-xs-12">
                    <div class="col-xs-8">
                        <form method="post" action="contactus1.php">
                            <div class="form-group">
                                
                                <h3>CONTACT US</h3>
                                
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="Name" class="form-control" id="name" required\>
                                
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="text" name="Email:" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"class="form-control" id="Email"required\>
                                
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" class="form-control"name="Message" rows="5" cols="20" id="message" required\>
                                </textarea>
                                
                            </div>
                            <div class="form-group">
                                <a href='index.php'>  <button type='submit' class='btn btn-primary' name='submit'>submit</button></a>
                                
                            </div>
                                
                           
                            
                                
                            
                                
                        </form>
                   
                                
                                
                                   
                                
                                
                            </div>
                        <div class="col-xs-4">
                            <h3>
                                Company Information
                            </h3><br>
                            <b><p>Baraton Online Store,</p></b><br>
                            <b> <p>30300, Kapsabet</p></b><br>
                            <b> <p>Kenya</p></b><br>
                            <b><p>Phone:(00) 254 712 345</p></b><br>
                            <b> <p>Fax: (000)  00 00 0</p></b><br>
                            <b><P>Email:info&#64;Baraton-store.com</P></b><br>
                            <b> <p>Follow on: Facebook,Twitter</p></b>
                            
                            
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
        <div style="position: fixed;bottom: 0;right: 20px;background-color: #fff;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px;padding: 5px 10px;">By <a href="https://twitter.com/en_k_l">@en_k_l</a> &nbsp;&bull;&nbsp; twitter</a></div>';
                </footer>
            
            
        
                    
                
        
        
    </body>
</html>