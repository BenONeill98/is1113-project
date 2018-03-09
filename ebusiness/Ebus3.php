<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="ebus.css" type ="text/css">
        <title>RECEIPT</title>
    </head>
    <body>
        <h4 id="head">RECEIPT</h4>
                
        
        <?php
      // Echo session variables that were set on previous page
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        
        echo "<div align='center' class='receiptbox'>";
        
            echo "<h4 id='receipt'>Name: " . $_SESSION['user_name'] . "</h4>";
            
            echo "<h4 id='receipt'>Email: " . $_SESSION['user_email'] . "</h4>";
        
                echo "<h4 id='receipt'>Discount: " . $_SESSION['discount'] . "</h4>";
                
                echo "<h4 id='receipt'>Total: " . $_SESSION['total'] . "</h4>";
        
            echo "<h2 id='receiptthanks'>Your Order Has Been Completed, Thank You!</h2>";
            
         echo  "<a href='../Homepage.html' id='returnhome'>HOME </a>";
         
        echo "</div>";
     
     
        ?>
        
       
    </body>
</html>