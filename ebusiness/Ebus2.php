<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="ebus.css" type ="text/css">
        
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
    </head>
    
    <body class="details">
        
        <h4 id="payment">Please enter your payment details</h4>
            
            <form action="Ebus3.php" method="POST">

                    <label for="user_name">Name</label>
                    
                    
                    <input type="name" id="user_name" name="user_name" placeholder="User Name" maxlength="30">
                    
                    <br/>
              
                </br>
                
                    <label for="user_email">Email</label>
                    
               
                    
                    <input type="email" id="user_email" name="user_email" placeholder="Email" maxlength="30">
                    
                    <br/>
              
                </br>
                    <label for="user_pin">Pin</label>
                    
               
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

               <br/>
              
                </br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button id="validate" onClick="validateDetails()">Validate</button>
            
            
            <?php
            
      // Set session variables
      $_SESSION["total"] = $_POST["total"];
       $_SESSION["discount"] = $_POST["discount"];
      
           ?>
        
    </body>
</html>