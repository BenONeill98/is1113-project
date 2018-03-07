<!DOCTYPE html>
<html>
    <head>
      
       <link rel="stylesheet" href="ebus.css" type ="text/css">
        
        <title>Select Product</title>
        
        <!--jQuery-->
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      
        <div id="ebus1">
          
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="AWS">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
            
              <br/>
              
              <label for="Cloud9">
                <input type="radio" id="Cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br/>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              </br>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              </br>
              
              <label for="discount">
                Discount
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
               </br>
              
              <label for="vat">
                Vat
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" id="cart" disabled>Add to Shopping Cart</button>
             
            </form>
            
            <br/>
            <button id="Calculate" onClick="calcSub()">Calculate Cost</button>
            <a id ="clear" role="button" href="EBus1.php">Clear Choice</a>
   
      </div>
   
    </body>
    
</html>
