<header>
<a href="/cs313/week3/index.php?action=viewCart">
          <div class="icon-cart">
            <div class="cart-line-1"></div>
            <div class="cart-line-2"></div>
            <div class="items"><?php if(!$_SESSION['cart']){$_SESSION['cart'] = array();}echo count($_SESSION['cart']);?></div>
            <div class="cart-wheel"></div>
          </div></a>
</header>