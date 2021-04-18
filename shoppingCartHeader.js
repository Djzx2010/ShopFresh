var cart = [];


//gets the info from the cart PHP session variable
function getFromCart() {

    fetch('ShoppingCartPHP/getFromCart.php', {
        method: 'post',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: ''
    }).then(response => response.json()).then(items => showItem(items))
}

// Show items
function showItem(cart) {

    if (cart !== null) {
    
        var cart = JSON.parse(JSON.stringify(cart));
        
        var items = Object.keys(cart);
        
        let itemRow = '<div> <span>Name</span> <span>Price/item</span> <span>Quantity</span> <span>Total</span> <span>Change Quantity</span> <span>Delete Item</span> </div>';
        
        var item;
        for (item in items) {
            var name = items[item];
            var price = cart[name][0];
            var qty = cart[name][1];
            
            itemRow += "<div><span>" + name + "</span><span>$" + price + "</span><span>" + qty + "</span><span> $" + (price * qty).toFixed(2) + '</span><span><button onclick="addQuantity(\'' + name + '\')">Add</button> <button onclick="removeQuantity(\'' + name + '\')">Remove</button></span> <span><button onclick="removeItem(\'' + name + '\')">Delete</button></span> </div>';
        }
        
        table.innerHTML = itemRow;


        // Get the total price
        function getTotalPrice() {

            let totalPrice = 0;

            var item;
            for (item in items) {
                var name = items[item];
                var price = cart[name][0];
                var qty = cart[name][1];

                totalPrice += price * qty;
            }

            return totalPrice.toFixed(2);
        }

        //displays checkout information
        
        let total = Number(getTotalPrice());
        let qst = Number((getTotalPrice() * 0.10).toFixed(2));
        let gst = Number((getTotalPrice() * 0.05).toFixed(2));

        const sousTotal = document.getElementById("sousTotal");
        const QST = document.getElementById("QST");
        const GST = document.getElementById("GST");
        const pricePlusTaxes = document.getElementById("pricePlusTaxes");

        sousTotal.innerHTML = '$' + total;
        QST.innerHTML = '$' + qst;
        GST.innerHTML = '$' + qst;
        pricePlusTaxes.innerHTML = '$' + (total + qst + gst).toFixed(2);

    }

}