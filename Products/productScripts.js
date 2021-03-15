//variables to store information when the page is refreshed
//fruits&veggies
//strawberries
var storedQuantityStrawberries = sessionStorage.getItem("storedQuantityStrawberries");
var storedInfoStrawberries = sessionStorage.getItem("storedInfoStrawberries");
var priceStrawberries = 4.99;
//blueberries
var storedQuantityBlueberries = sessionStorage.getItem("storedQuantityBlueberries");
var storedInfoBlueberries = sessionStorage.getItem("storedInfoBlueberries");
var priceBlueberries = 3.99;
//bananas
var storedQuantityBananas = sessionStorage.getItem("storedQuantityBananas");
var storedInfoBananas = sessionStorage.getItem("storedInfoBananas");
var priceBananas = 1.79;
//zucchini
var storedQuantityZucchini = sessionStorage.getItem("storedQuantityZucchini");
var storedInfoZucchini = sessionStorage.getItem("storedInfoZucchini");
var priceZucchini = 5.99;
//carrots
var storedQuantityCarrot = sessionStorage.getItem("storedQuantityCarrot");
var storedInfoCarrot = sessionStorage.getItem("storedInfoCarrot");
var priceCarrot = 1.99;
//BellPepper
var storedQuantityBellPepper = sessionStorage.getItem("storedQuantityBellPepper");
var storedInfoBellPepper = sessionStorage.getItem("storedInfoBellPepper");
var priceBellPepper = 15.49;

//dairy&eggs
//eggs
var storedQuantityEggs = sessionStorage.getItem("storedQuantityEggs");
var storedInfoEggs = sessionStorage.getItem("storedInfoEggs");
var priceSalmon = 2.99;
//milk
var storedQuantityMilk = sessionStorage.getItem("storedQuantityMilk");
var storedInfoMilk = sessionStorage.getItem("storedInfoMilk");
var priceSalmon = 5.49;
//oka
var storedQuantityOka = sessionStorage.getItem("storedQuantityOka");
var storedInfoOka = sessionStorage.getItem("storedInfoOka");
var priceOka = 14.49;
//butter
var storedQuantityButter = sessionStorage.getItem("storedQuantityButter");
var storedInfoButter = sessionStorage.getItem("storedInfoButter");
var priceSalmon = 4.69;
//yogurt
var storedQuantityPlainYogurt = sessionStorage.getItem("storedQuantityPlainYogurt");
var storedInfoPlainYogurt = sessionStorage.getItem("storedInfoPlainYogurt");
var priceSalmon = 4.99;
//parmesan
var storedQuantityGratedParmesan = sessionStorage.getItem("storedQuantityGratedParmesan");
var storedInfoGratedParmesan = sessionStorage.getItem("storedInfoGratedParmesan");
var priceSalmon = 5.99;

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
var storedQuantityTrout = sessionStorage.getItem("storedQuantityTrout");
var storedInfoTrout = sessionStorage.getItem("storedInfoTrout");
var priceTrout = 6.39;
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

    case 'Trout':
        var price = priceTrout; 
        var storedQuantity = storedQuantityTrout;
        var storedInfo = storedInfoTrout;
        break;
            
    case 'Eggs': 
        var price = priceEggs; 
        var storedQuantity = storedQuantityEggs;
        var storedInfo = storedInfoEggs;
        break;

    case 'Milk': 
        var price = priceMilk; 
        var storedQuantity = storedQuantityMilk;
        var storedInfo = storedInfoMilk;
        break;

    case 'Oka': 
        var price = priceOka; 
        var storedQuantity = storedQuantityOka;
        var storedInfo = storedInfoOka;
        break;

    case 'Butter': 
        var price = priceButter; 
        var storedQuantity = storedQuantityButter;
        var storedInfo = storedInfoButter;
        break;
    
    case 'PlainYogurt': 
        var price = pricePlainYogurt; 
        var storedQuantity = storedQuantityPlainYogurt;
        var storedInfo = storedInfoPlainYogurt;
        break;

    case 'GratedParmesan': 
        var price = priceGratedParmesan; 
        var storedQuantity = storedQuantityGratedParmesan;
        var storedInfo = storedInfoGratedParmesan;
        break;
    
    case 'Blueberries':
        var price = priceBlueberries;
        var storedQuantity = storedQuantityBlueberries;
        var storedInfo = storedInfoBlueberries;
        break;

    case 'Bananas':
        var price = priceBananas;
        var storedQuantity = storedQuantityBananas;
        var storedInfo = storedInfoBananas;
        break;
    
    case 'Zucchini':
        var price = priceZucchini;
        var storedQuantity = storedQuantityZucchini;
        var storedInfo = storedInfoZucchini;
        break;
    
    case 'Carrot':
        var price = priceCarrot;
        var storedQuantity = storedQuantityCarrot;
        var storedInfo = storedInfoCarrot;
        break;

    case 'Strawberries':
        var price = priceStrawberries;
        var storedQuantity = storedQuantityStrawberries;
        var storedInfo = storedInfoStrawberries;
        break;
    
    case 'BellPepper':
        var price = priceBellPepper;
        var storedQuantity = storedQuantityBellPepper;
        var storedInfo = storedInfoBellPepper;
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

        case 'Trout':
            var price = priceTrout;
            sessionStorage.setItem("storedQuantityTrout", quantity);
            break;
            
       case 'Eggs': 
            var price = priceEggs;
            sessionStorage.setItem("storedQuantityEggs", quantity);
            break;

        case 'Milk': 
            var price = priceMilk;
            sessionStorage.setItem("storedQuantityMilk", quantity);
            break;

        case 'Oka': 
            var price = priceOka;
            sessionStorage.setItem("storedQuantityOka", quantity);
            break;

        case 'Butter': 
            var price = priceButter;
            sessionStorage.setItem("storedQuantityButter", quantity);
            break;

        case 'PlainYogurt': 
            var price = pricePlainYogurt;
            sessionStorage.setItem("storedQuantityPlainYogurt", quantity);
            break;

        case 'GratedParmesan': 
            var price = priceGratedParmesan;
            sessionStorage.setItem("storedQuantityGratedParmesan", quantity);
            break;            
        
        case 'Blueberries':
            var price = priceBlueberries;
            sessionStorage.setItem("storedQuantityBlueberries", quantity);
            break;

        case 'Bananas':
            var price = priceBananas;
            sessionStorage.setItem('storedQuantityBananas', quantity);
            break;
        
        case 'Zucchini':
            var price = priceZucchini;
            sessionStorage.setItem('storedQuantityZucchini', quantity);
            break;
        
        case 'Carrot':
            var price = priceCarrot;
            sessionStorage.setItem('storedQuantityCarrot', quantity);
            break;
        
        case 'Strawberries':
            var price = priceStrawberries;
            sessionStorage.setItem('storedQuantityStrawberries', quantity);
            break;

        case 'BellPepper':
            var price = priceBellPepper;
            sessionStorage.setItem('storedQuantityBellPepper', quantity);
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

            case 'Trout':
                sessionStorage.setItem("storedInfoTrout", "less");
                break;
            
            case 'Eggs': 
                sessionStorage.setItem("storedInfoEggs", "less");
                break;

            case 'Milk': 
                sessionStorage.setItem("storedInfoMilk", "less");
                break;

            case 'Oka': 
                sessionStorage.setItem("storedInfoOka", "less");
                break;

            case 'Butter': 
                sessionStorage.setItem("storedInfoButter", "less");
                break;

            case 'PlainYogurt': 
                sessionStorage.setItem("storedInfoPlain Yogurt", "less");
                break;

            case 'GratedParmesan': 
                sessionStorage.setItem("storedInfoGratedParmesan", "less");
                break;            
            case 'Blueberries':
                sessionStorage.setItem("storedInfoBlueberries", "less");
                break;

            case 'Bananas':
                sessionStorage.setItem('storedInfoBananas', "less");
                break;
            
            case 'Zucchini':
                sessionStorage.setItem('storedInfoZucchini', 'less');
                break;

            case 'Carrot':
                sessionStorage.setItem('storedInfoCarrot', 'less');
                break;  

            case 'Strawberries':
                sessionStorage.setItem('storedInfoStrawberries', 'less');
                break;

            case 'BellPepper':
                sessionStorage.setItem('storedInfoBellpepper', 'less');
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

            case 'Trout':
                sessionStorage.setItem("storedInfoTrout", "more");
                break;
                
            case 'Eggs': 
                sessionStorage.setItem("storedInfoEggs", "more");
                break;

            case 'Milk': 
                sessionStorage.setItem("storedInfoMilk", "more");
                break;

            case 'Oka': 
                sessionStorage.setItem("storedInfoOka", "more");
                break;

            case 'Butter': 
                sessionStorage.setItem("storedInfoButter", "more");
                break;

            case 'PlainYogurt': 
                sessionStorage.setItem("storedInfoPlain Yogurt", "more");
                break;

            case 'GratedParmesan': 
                sessionStorage.setItem("storedInfoGratedParmesan", "more");
                break;                
            
            case 'Blueberries':
                sessionStorage.setItem("storedInfoBlueberries", "more");
                break;
            
            case 'Bananas':
                sessionStorage.setItem('storedInfoBananas', 'more');
                break;
            case 'Zucchini':
                sessionStorage.setItem('storedInfoZucchini', 'more');

            case 'Carrot':
                sessionStorage.setItem('storedInfoCarrot', 'more');
                break;
            case "Strawberries":
                sessionStorage.setItem('storedInfoStrawberries', 'more');
                break;

            case 'BellPepper':
                sessionStorage.setItem('storedInfoBellPepper', 'more');
                break; 
        }
    }
}
