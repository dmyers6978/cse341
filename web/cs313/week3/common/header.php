<header>
<a href="/cs313/week3/index.php?action=viewCart">  <div class="icon-cart" style="clear: left; float: left">
            <div class="cart-line-1" style="background-color: #2CC3B5"></div>
            <div class="cart-line-2" style="background-color: #2CC3B5"></div>
            <div class="items"><?php if(!$_SESSION['cart']){$_SESSION['cart'] = array();}echo count($_SESSION['cart']);?></div>
            <div class="cart-wheel" style="background-color: #2CC3B5"></div>
          </div></a>
</header>