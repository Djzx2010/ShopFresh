const table = document.getElementById("itemList");


//Remove Item
function removeItem(i) {

    const body = { 'item': i };
    
    //to make the POST body out of the JSON object above
    const bodyObj = new URLSearchParams(body);
    
    fetch('ShoppingCartPHP/delete.php', {
        method: 'post',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: bodyObj.toString()
    }).then(response => response.json()).then(items => showItem(items))
    
}

//Add one unit of an item by clicking on the button
function addQuantity(i) {

    const body = { 'item': i, 'task': 'add' };

    //to make the POST body out of the JSON object above
    const bodyObj = new URLSearchParams(body);
    
    fetch('ShoppingCartPHP/changeQuantity.php', {
        method: 'post',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: bodyObj.toString()
    }).then(response => response.json()).then(items => showItem(items))
    
}

//Remove one unit of an item by clicking on the button
function removeQuantity(i) {

    const body = { 'item': i, 'task': 'remove' };

    //to make the POST body out of the JSON object above
    const bodyObj = new URLSearchParams(body);

    fetch('ShoppingCartPHP/changeQuantity.php', {
        method: 'post',
        headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: bodyObj.toString()
    }).then(response => response.json()).then(items => showItem(items))

}
