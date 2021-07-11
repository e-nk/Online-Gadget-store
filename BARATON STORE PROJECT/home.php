<?php
include'common.php';
if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}
function check_if_added_to_cart($item_id){
    $user_id=$_SESSION['user_id'];
    $con= mysqli_connect('localhost','root','','store (2)') or die(mysqli_error($con));
    $query="select * from users_items1 WHERE item_id='$item_id' AND user_id='$user_id'and status='added to cart'";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
            if (mysqli_num_rows($result)>=1){
                return 1;
                
            }else{
                return 0;
            }
    
}
?>
<html>
    <head>
        
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .box{
                text-align: center;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="Mydesign.css">

       
    <body>
         <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                          
                </button>
               
                    
                </div>
                <a href="index.php"></a>
                <img src="img/logo4.gif" height="32px" width="350px" align="center">

                <div class="collapse navbar-collapse"id="#mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="cart1.php" style="color: white" class="glyphicon glyphicon-shopping-cart"> Cart</a>
                        </li>
                        <li>
                            <a href="settings.php" style="color: white" class="glyphicon glyphicon-cog"> Settings</a>
                            
                        </li>
                        <li>
             
                            <a href="logout.php" style="color: white"  class="glyphicon glyphicon-log-out"> Log-out</a>
                        </li>
                        
                        
                        
                    </ul>
                    
                </div>
                
            </div>
            
         </nav><br><br><br>
        <div class="container-fluid" style="background-color: black">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <form method="post" action="cart1.php">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">MAC BOOK PRO</h5>
                                
                                
                            </div>
                            
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                    <img src="img/macbook2.jpg" alt="one plus" height="160px" width="300px">
                           
                                    <P style="color: white">The all-new MacBook Pro features a brilliant 16-inch Retina Display, the latest 8-core processors, up to 64GB of memory, next-generation graphics with up to 8GB of VRAM and a new advanced thermal design, making it the most powerful MacBook Pro ever.<br><br><b>Ksh.94,999</b></P>
                                <?php
                            if (check_if_added_to_cart(1)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                     
                                
                            </div>
                            
                        </div>
                                
                                
                      </div>
                    </div>
</form>
               
            
                     <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: black">
                                
                                <h5 style="color: white">SAMSUNG-S20</h5>
                                
                                
                            </div>
                            <div class="panel-body" style="background-color: black">
                                
                                <div class="box">
                                     <img src="img/Samsung-S20.png" alt="samsung-s20 plus" height="200px"  width="200px" >
                                </div>
                            
                                <P style="color: white">Display:6.7 inch,processor:octa core,front camera:10mp,Ram:8gb,storage:128gb.<br><center><b style="color: white"> Ksh.50,799</b></center></p>
                            <?php
                            if (check_if_added_to_cart(2)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
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
                                   <?php
                            if (check_if_added_to_cart(3)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
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
                                        <?php
                            if (check_if_added_to_cart(4)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
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
                                             <?php
                            if (check_if_added_to_cart(5)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
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
                                                      <?php
                            if (check_if_added_to_cart(6)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
                    </div>
         <?php
         include'footer.php';
        ?>
        <div style="position: fixed;bottom: 0;right: 20px;background-color: #fff;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px;padding: 5px 10px;">By <a href="https://twitter.com/en_k_l">@en_k_l</a> &nbsp;&bull;&nbsp; twitter</a></div>';
    </body>
</html>


