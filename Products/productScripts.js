function calculate(price) {
    var dropdown = document.getElementById("quantity");
    var quantity = dropdown.options[dropdown.selectedIndex].value;
    var total = price*quantity;
    document.getElementById("productPrice").innerHTML = "$"+total;
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