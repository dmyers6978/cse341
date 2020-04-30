<ul>
    <li <?php if(!$action){echo "class='active'";}?>><a href="/cs313/index.php">Home</a></li>
    <li <?php if($action === "assignments"){echo "class='active'";}?>><a href="/cs313/index.php?action=assignments">Assignments</a></li>
</ul>