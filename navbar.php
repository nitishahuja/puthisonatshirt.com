   <nav class="navbar">
     <div class="topbar">
       <ul class="primary-nav">
         <li class="logo"> <a href="index.php"><img src="./include/images/logo.png"></a> </li>
         <li class="menu-item"><a href="account.php"><i class="fas fa-user-alt"></i></a></li> 
         <li class="menu-item"><a href="cart.php"><i class="fas fa-shopping-cart"></i><i><?php $num = count($product->getData('cart'));if($num>0){echo $num;}?></i></a></li>
       </ul>
     </div>
    </nav> 


