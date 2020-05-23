var total = 0;
function addCost(x){
    var y = parseInt(getLabel(x));
    console.log(y);
    if(x.checked){
        total = total + y;
    } else{
        total = total - y;
    }
    document.getElementById('total').innerHTML = "Total: $" + total;
}

function getLabel(x){
    var y = document.getElementsByTagName('label');
    for( var i = 0; i < y.length; i++ ) {
        if (y[i].htmlFor == x.id)
             return y[i].innerHTML;
     }
}