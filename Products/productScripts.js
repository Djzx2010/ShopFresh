var storedQuantity = sessionStorage.getItem("storedQuantity");

function loadCalculate(price) {
    if (storedQuantity != null) {
        document.getElementById("quantity").value = storedQuantity;
        document.getElementById("productPrice").innerHTML = "$" + (price * storedQuantity);
    }
    else {
        document.getElementById("quantity").value = 1;
        document.getElementById("productPrice").innerHTML = "$" + (price * 1);
    }
}

function calculate(price) {
    var dropdown = document.getElementById("quantity");
    var quantity = dropdown.options[dropdown.selectedIndex].value;
    sessionStorage.setItem("storedQuantity", quantity);
    var total = price * quantity;
    document.getElementById("productPrice").innerHTML = "$" + total;
}

function moreInfo() {
    var moreText = document.getElementById("info");
    var btnText = document.getElementById("btn");

    if(moreText.style.display === "inline") {
        btnText.innerHTML = "More Info";
        moreText.style.display = "none";
    }
    else {
        btnText.innerHTML = "Less Info";
        moreText.style.display = "inline";
    }
}