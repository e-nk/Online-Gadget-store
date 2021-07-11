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

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items1 JOIN items ON users_items1.item_id = items.id WHERE users_items1.user_id='$user_id' and status='added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    
                        if (mysqli_num_rows($result)>=1) {
                          ?>  
                        <div class="container">
                            <div class="row">
                                <table class="table table-bordered table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                                   while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><em><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Ksh " . $row["Price"] . "</td><td><a href='cartremove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Ksh " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                           
                            <?php
                        } else {?>
                            <div class="container">
          
            <div class="row center">
                <div class="col-xs-3 col-md-5 col-md-offset-2">
                    <div class="jumbotron">
                        <?php
    
                            echo "Add items to the cart first!" . "<br><br>" . "<a href='home.php'><span class='glyphicon glyphicon-hand-right'></span> Click Here!". "</a>";?>
                               </div>
            </div>
                <?php      }
                        
                       ?>
                       
                    </table>
                       </div>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            
                        <?php
                        include'footer.php';
                        ?>
    </body>
</html>

