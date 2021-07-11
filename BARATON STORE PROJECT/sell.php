<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  </head>
  <body background="white.jpg">
    <img src="img/logo3.gif" height="70px" width="300px" align="right">

    <div class="container">
      <div class="row">
        <div class="form-group">
          <br>
          <br>
          <br>
                            <input type="text" name="Name" placeholder="Enter your Full Name" class="form-control" required/>
                            
                            
                        </div>
                        <div class="form-group">
                           
                            <input type="text" name="Email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="text" name="Product name" placeholder="Product name, Description and Price" class="form-control" required/>
                            
                            
                        </div>
                        <div class="form-group">
                           
                            <input type="text" name="Phone" placeholder="Phone" class="form-control" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1"required/>
                        </div>
                        <div class="form-group">
                            
                            <input type="text"name="Residence" placeholder="Residence"class="form-control"required/>
                            
                        </div>
                        <div class="form-group">
                            
                            <input type="text" name="Address" placeholder="Address" class="form-control"required/>
       
         
        <form action="sell.php" method="post" enctype="multipart/form-data" >
          <h>Upload Photos of the product</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>