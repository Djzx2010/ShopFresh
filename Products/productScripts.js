//variables to store information when the page is refreshed
var storedQuantitySalmon = sessionStorage.getItem("storedQuantitySalmon");
var storedInfoSalmon = sessionStorage.getItem("storedInfoSalmon");
var priceSalmon = 6.99;

var storedQuantityShrimp = sessionStorage.getItem("storedQuantityShrimp");
var storedInfoShrimp = sessionStorage.getItem("storedInfoShrimp");
var priceShrimp = 11.99;

var storedQuantityBeef = sessionStorage.getItem("storedQuantityBeef");
var storedInfoBeef = sessionStorage.getItem("storedInfoBeef");
var priceBeef = 19.89;


//to execute when the page is refreshed
function refresh(productName) {

    var price = 0;
    var storedQuantity = 0;
    var storedInfo = "more";

    switch(productName){
    case 'Salmon': 
        var price = priceSalmon; 
        var storedQuantity = storedQuantitySalmon;
        var storedInfo = storedInfoSalmon;
        break;
        
    case 'Shrimp': 
        var price = priceShrimp; 
        var storedQuantity = storedQuantityShrimp;
        var storedInfo = storedInfoShrimp;
        break;
    
    case 'Beef': 
        var price = priceBeef; 
        var storedQuantity = storedQuantityBeef;
        var storedInfo = storedInfoBeef;
        break;
    }

    if (storedInfo == null || storedInfo == "less") {
        document.getElementById("btn").innerHTML = "More Info";
        document.getElementById("info").style.display = "none";
    }
    else {
        document.getElementById("btn").innerHTML = "Less Info";
        document.getElementById("info").style.display = "inline";
    }
    
    if (storedQuantity) {
        document.getElementById("quantity").value = storedQuantity;
        document.getElementById("productPrice").innerHTML = "$" + (price * storedQuantity);
    }
    else {
        document.getElementById("quantity").value = 1;
        document.getElementById("productPrice").innerHTML = "$" + (price);
    }
}

//to execute when a new dropdown option is selected
function calculate(productName) {
    var dropdown = document.getElementById("quantity");
    var quantity = dropdown.options[dropdown.selectedIndex].value;

    //save the quantity in case of refresh
    switch(productName){
        case 'Salmon': 
            var price = priceSalmon;
            sessionStorage.setItem("storedQuantitySalmon", quantity);
            break;
                
        case 'Shrimp': 
            var price = priceShrimp;
            sessionStorage.setItem("storedQuantityShrimp", quantity);
            break;

        case 'Beef': 
            var price = priceBeef;
            sessionStorage.setItem("storedQuantityBeef", quantity);
            break;
        }

    var total = price * quantity;
    document.getElementById("productPrice").innerHTML = "$" + total;
}

//to execute when the more information button is clicked
function moreInfo(productName) {
    var moreText = document.getElementById("info");
    var btnText = document.getElementById("btn");

    if(moreText.style.display === "inline") {
        btnText.innerHTML = "More Info";
        moreText.style.display = "none";

        //save the amount of info displayed in case of refresh
        switch(productName){
            case 'Salmon': 
                sessionStorage.setItem("storedInfoSalmon", "less");
                break;
                    
            case 'Shrimp': 
                sessionStorage.setItem("storedInfoShrimp", "less");
                break;

            case 'Beef': 
                sessionStorage.setItem("storedInfoBeef", "less");
                break;
        }
    }
    else {
        btnText.innerHTML = "Less Info";
        moreText.style.display = "inline";
                
        //save the amount of info displayed in case of refresh
        switch(productName){
            case 'Salmon': 
                sessionStorage.setItem("storedInfoSalmon", "more");
                break;
                            
            case 'Shrimp': 
                sessionStorage.setItem("storedInfoShrimp", "more");
                break;
        
            case 'Beef': 
                sessionStorage.setItem("storedInfoBeef", "more");
                break;
        }
    }
}