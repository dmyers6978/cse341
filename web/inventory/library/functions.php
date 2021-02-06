<?php
function buildItemSelect(){
    $items = getItems();
    $select = "<select name='itemId'><option value='0'>Select an item</option>";
    foreach($items as $item){
        $select .= "<option value='$item[itemid]'>$item[itemname] ($item[quantity])</option>";
    }
    $select .= "</select>";
    return $select;
}

function buildInvTable(){
    $inventory = getInv();
    var_dump($inventory);
    exit;
    $table = "<table><thead><tr><th>Item</th><th>Quantity</th></tr></thead><tbody>";
    foreach($inventory as $item){
        $table .= "<tr><td>$item[itemname]</td><td>$item[quantity]</td></tr>";
    }
    $table .= "</tbody></table>";
    return $table;
}