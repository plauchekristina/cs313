document.body.onload = orderQuantities;
function orderQuantities() {
    //get the user inputs from order form
    var fullCount = parseFloat(document.getElementById('full-count').value);
    var halfCount = parseFloat(document.getElementById('half-count').value);
    var perFull = parseFloat(document.getElementById('per-full').value);
    var perHalf = parseFloat(document.getElementById('per-half').value);
    var itemCount = parseFloat(document.getElementById('item-count').value);
    var itemPrice = parseFloat(document.getElementById('item-price').value);

    // Calculate the quantity of that item to order
    var itemQuantity = Math.round(((fullCount * perFull) + (halfCount * perHalf)) / itemCount);
    var itemTotal = itemQuantity * itemPrice;

    //Display the quantity to order to the user
    document.getElementById('item-quantity').innerHTML = itemQuantity;
    document.getElementById('item-total').innerHTML = itemTotal.toFixed(2);
    document.getElementById('item-1-totals').innerHTML = "Quantity:" + itemQuantity + " Total: $" + itemTotal.toFixed(2);


}