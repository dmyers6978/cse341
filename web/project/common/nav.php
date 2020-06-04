
<div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<ul id="topNav" class="hide">
    <li <?php if(!$action){ echo ' class="active"';}?>><a href="./">Home</a></li>
    <li <?php if($action === "contact"){ echo ' class="active"';}?>><a href="./?action=contact">Contact Me</a></li>
    <li <?php if($action === "status"){ echo ' class="active"';}?>><a href="./?action=status">Bike Status</a></li>
    <li <?php if($action === "about"){ echo ' class="active"';}?>><a href="./?action=about">About Me</a></li>
</ul>