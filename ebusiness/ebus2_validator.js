/* global $ */

function validateDetails(){
    
    var pin, user_email, user_name;

 pin = document.getElementById("pin").value;
 user_email = document.getElementById("user_email").value;
 user_name = document.getElementById("user_name").value;
 
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }    
    else if (user_name == ""){
        alert("Please enter your name");
    }
    else if (user_email == ""){
        alert("Please enter your email");
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