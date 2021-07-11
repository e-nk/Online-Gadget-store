<?php

include 'common.php';
?>
<html>
    <head>
        
        <title>INDEX PAGE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

        
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
                            <a href="cart1.php" class="glyphicon glyphicon-shopping-cart"> Cart</a>
                        </li>
                        <li>
                            <a href="settings.php" class="glyphicon glyphicon-cog"> Settings</a>
                            
                        </li>
                        <li>
             
                            <a href="logout.php"  class="glyphicon glyphicon-log-out"> Log-out</a>
                        </li>
                        
                        
                        
                    </ul>
                    
                </div>
                
            </div>
            
         </nav><br><br><br><br><br>
         
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-offset-4 col-xs-4">
                        <form method="post" action="settingscript2.php">
                            <div class="form-group">
                                <h4>Change Password</h4>
                               
                                
                            </div>
                            <div class="form-group">
                                <input type="text" name="oldpass" placeholder="Old Password" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <input type="text" name="newpass" placeholder="New Password" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <input type="text" name="retypepass" placeholder="Re-Type New Password" class="form-control"> 
                                
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" name="change">Change</button>
                                
                            </div>
                            
                                
                                
                        </form>
                         <?php
                        if(isset($_GET['error'])==true){
                            echo'<p style="color:red">old password do not match</p>';
                        }
                       
                         if(isset($_GET['error1'])==true){
                            echo'<p style="color:red">new password do not match</p>';
                        }
                         if(isset($_GET['error2'])==true){
                            echo'<p style="color:red">password changed</p>';
                        }
                        ?>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div><br><br><br><br><br><br><br><br><br><br><br>
         <?php
                        include 'footer.php';
         ?>
    </body>
</html>

