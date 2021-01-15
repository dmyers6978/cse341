<ul>
    <li <? if(!$action){echo "class='active'";}?>><a href="/">Home</a></li>
    <li <? if($action == "assignments"){echo "class='active'";}?>><a href="/?action=assignments">Assignments</a></li>
</ul>