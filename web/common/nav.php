<ul>
    <li><a href="/" <? if(!$action){echo "class='active'"}?>>Home</a></li>
    <li><a href="/?action=assignments"<? if($action == "assignments"){echo "class='active'"}?>>Assignments</a></li>
</ul>