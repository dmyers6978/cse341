var total = 0;
function addCost(x){
    if(x.value == TRUE){
        total = total + x.name;
    } else{
        total = total - x.name;
    }
    document.getElementById('total').innerHTML = "Total: " + total;
}