var body = document.getElementsByTagName("TBODY")[0];
var rows = body.getElementsByTagName("TR");
function filterItems(){
var search = document.getElementById('itemSearch').value;
console.log(rows[0].children[0].innerHTML.indexOf(search));
for(var i = 0; i < rows.length; i++){
if(!search){
rows[i].style.display = 'table-row';
} else if(rows[i].children[0].innerHTML.indexOf(search) == -1 && rows[i].children[1].innerHTML.indexOf(search) == -1){
rows[i].style.display = 'none';
} else{
rows[i].style.display = 'table-row';
}
}
}