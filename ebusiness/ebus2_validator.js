/* global $ */

function validateDetails(){
    
    var pin, user_email, user_name, pass;

 pin = document.getElementById("pin").value;
 user_email = document.getElementById("user_email").value;
 user_name = document.getElementById("user_name").value;
 
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}