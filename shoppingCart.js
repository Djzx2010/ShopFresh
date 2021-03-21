const table = document.getElementById("itemList");

const sousTotal = document.getElementById("sousTotal");
const QST = document.getElementById("QST");
const GST = document.getElementById("GST");
const pricePlusTaxes = document.getElementById("pricePlusTaxes");


const cart = [{
        name: "Strawberries",
        price: 4.99,
        quantity: 1
    }, {
        name: "Banana",
        price: 1.79,
        quantity: 1
    }, {
        name: 'Eggs',
        price: 2.99,
        quantity: 1
    },
    {
        name: 'Salmon',
        price: 6.99,
        quantity: 1
    }, {
        name: 'Chicken',
        price: 14.39,
        quantity: 1
    }
];
console.log(cart[0].name);


//-------------------------------------------------------------------------
//Add items
function addItem(name, price) {
    // Check if there is the same item in the shopping cart
    for (let i = 0; i < cart.length; i += 1) {
        if (cart[i].name === name) {
            cart[i].quantity += 1;
            return
        }
    }

    // Push new item to the array cart
    const item = {
        name,
        price,
        quantity: 1
    };
    cart.push(item);
}

//-------------------------------------------------------------------------------
// Show items
function showItem() {
    //Display total quantity
    console.log(`You have ${getQuantity()} items in your carts`);

    // Print all items informations

    let itemRow = '<tr> <td>Name</td> <td>Price/item</td> <td>Quantity</td> <td>Total</td> <td>Change Quantity</td> <td>Delete Item</td> </tr>';
    for (let i = 0; i < cart.length; i += 1) {
        const quantity = (sessionStorage.getItem(cart[i].name) || 1);

        console.log(`${cart[i].name} $${cart[i].price} x ${cart[i].quantity}`);
        itemRow += `<tr> 
                           <td>${cart[i].name}</td>
                           <td>$${cart[i].price}</td>
                           <td>${quantity}</td> 
                           <td> $ ${(cart[i].price * cart[i].quantity).toFixed(2)}</td>
                           <td><button onclick="addQuantity(${i})">Add</button> <button onclick="removeQuantity(${i})">Remove</button></td>
                           <td><button onclick="removeItem(${i})">Delete</button></td>
                           </tr>`;
    }
    table.innerHTML = itemRow;

    //Display total price
    console.log(`Total price is ${getTotalPrice()}`);

}

//--------------------------------------------------------------------------------------
//Get the total quantity
function getQuantity() {
    let totalQuantity = 0;
    for (let i = 0; i < cart.length; i += 1) {
        totalQuantity = totalQuantity + cart[i].quantity
    }
    return totalQuantity;
}

//---------------------------------------------------------------------------------------
// Get the total price
function getTotalPrice() {
    let totalPrice = 0;
    for (let i = 0; i < cart.length; i += 1) {
        totalPrice += cart[i].price * cart[i].quantity;
    }
    return totalPrice.toFixed(2);
}

//---------------------------------------------------------------------------------------------
//Remove Item
function removeItem(i) {
    cart.splice(i, 1);
    showItem();
}
//--------------------------------------------------------------------------------------------------
//Add one unit of an item by clicking on the button
function addQuantity(i) {
    cart[i].quantity++;
    sessionStorage.setItem(cart[i].name, cart[i].quantity);
    showItem();
}
//--------------------------------------------------------------------------------------------------
//Remove one unit of an item by clicking on the button
function removeQuantity(i) {
    if (cart[i].quantity == 0) {
        return
    } else {
        cart[i].quantity--;
        sessionStorage.setItem(cart[i].name, cart[i].quantity);
        showItem();
    }
}



//------------------------------------------------------------------------------------
//Executed when checkout button is selected
function checkout() {
    let total = Number(getTotalPrice());
    let qst = Number((getTotalPrice() * 0.10).toFixed(2));
    let gst = Number((getTotalPrice() * 0.05).toFixed(2))
    sousTotal.innerHTML = `$ ${total}`;
    QST.innerHTML = `$ ${qst}`;
    GST.innerHTML = `$ ${gst}`;
    pricePlusTaxes.innerHTML = `$ ${(total+qst+gst).toFixed(2)}`;
}



showItem();