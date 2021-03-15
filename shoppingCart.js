
function cal() {
var porkVolum = Number(document.getElementById("porkVolum").value);

var beefVolum = Number(document.getElementById("beefVolum").value);

var salmonVolum = Number(document.getElementById("salmonVolum").value);

var milkVolum = Number(document.getElementById("milkVolum").value);

var eggVolum = Number(document.getElementById("eggVolum").value);

var bananaVolum = Number(document.getElementById("bananaVolum").value);

var zucchiniVolum = Number(document.getElementById("zucchiniVolum").value);

var sumDollors = (porkVolum * 19.89 + beefVolum * 16.59 + salmonVolum * 6.99 + milkVolum * 5.49 + eggVolum * 2.99 + bananaVolum * 1.79 + zucchiniVolum * 5.99);

var qst = sumDollors * 0.0975;

var gst = sumDollors * 0.05;

var total = sumDollors + qst + gst;

document.getElementById("msg").value = sumDollors;

document.getElementById("QST").value = qst;

document.getElementById("GST").value =  gst;

document.getElementById("total").value = total;
}