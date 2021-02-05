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