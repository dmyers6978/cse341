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
    $table = "<table><thead><tr><th>Item</th><th>Quantity</th></tr></thead><tbody>";
    foreach($inventory as $item){
        $table .= "<tr><td>$item[itemname]</td><td>$item[quantity]</td></tr>";
    }
    $table .= "</tbody></table>";
    return $table;
}

function buildItemTable(){
    $items = getItems();
    $table = "<table><thead><tr><th>Name</th><th>Action</th></tr></thead><tbody>";
    foreach($items as $item){
        $table .= "<tr><td>$item[itemname]</td><td><form method='get' action='./'><input type='hidden' name='itemId' value='$item[itemid]'><input type='hidden' name='action' value='editItem'><input type='submit' value='🛠️'></form>&nbsp;&nbsp;|&nbsp;&nbsp;<form method='get' action='./'><input type='hidden' name='itemId' value='$item[itemid]'><input type='hidden' name='action' value='deleteItem'><input type='submit' value='❌'></form></td></tr>";
    }
    $table .= "</tbody></table>";
    return $table;
}