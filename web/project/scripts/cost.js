var total = 0;
function addCost(x){
    console.log(x.innerHTML);
    if(x.checked){
        total = total + x.innerHTML;
    } else{
        total = total - x.innerHTML;
    }
    document.getElementById('total').innerHTML = "Total: " + total;
}