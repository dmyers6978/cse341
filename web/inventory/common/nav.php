<ul>
    <li <? if(!$action){echo "class='active'";}?>><a href="/">Home</a></li>
    <li <? if($action == "invManager"){echo "class='active'";}?>><a href="/?action=invManager">Inventory Manager</a></li>
</ul>