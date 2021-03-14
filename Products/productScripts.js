//variables to store information when the page is refreshed
//fruits&veggies
//strawberries

//blueberries

//bananas

//zucchini

//carrots

//peppers

//dairy&eggs
//eggs

//milk

//oka

//butter

//yogurt

//parmesan

//fish&meat
//salmon
var storedQuantitySalmon = sessionStorage.getItem("storedQuantitySalmon");
var storedInfoSalmon = sessionStorage.getItem("storedInfoSalmon");
var priceSalmon = 6.99;

//shrimp
var storedQuantityShrimp = sessionStorage.getItem("storedQuantityShrimp");
var storedInfoShrimp = sessionStorage.getItem("storedInfoShrimp");
var priceShrimp = 11.99;

//beef
var storedQuantityBeef = sessionStorage.getItem("storedQuantityBeef");
var storedInfoBeef = sessionStorage.getItem("storedInfoBeef");
var priceBeef = 19.89;

//trout

//pork

//chicken


//to execute when the page is refreshed
function refresh(productName) {

    var price = 0;
    var storedQuantity = 0;
    var storedInfo = "more";

    //ensure that the correct page's information is being accessed
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

    //default information setting
    if (storedInfo == null || storedInfo == "less") {
        document.getElementById("btn").innerHTML = "More Info";
        document.getElementById("info").style.display = "none";
    }
    //when the more information button has been clicked
    else {
        document.getElementById("btn").innerHTML = "Less Info";
        document.getElementById("info").style.display = "inline";
    }
    
    //set the quantity and price to display the information from before the refresh
    if (storedQuantity) {
        document.getElementById("quantity").value = storedQuantity;
        document.getElementById("productPrice").innerHTML = "$" + (price * storedQuantity);
    }
    //default quantity is 1, so the price is displayed for 1 item
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