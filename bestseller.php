<?php

     $bestseller = $product->getData();
     shuffle($bestseller);

?>

<div class="bestseller">
                 <div class="container1">
                              <h4>
                              <a href="shop.php">Best Seller <i class="fas fa-angle-double-right"></i></a> 
                              </h4>
                              <hr>
                         <div class="owl-carousel owl-theme">
                              <?php
                                   foreach($bestseller as $item)
                                   {
                              ?>
                              <div class="item py-2">
                                   <div class="product">
                                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image']; ?>" class="img-fluid"></a>
                                        <div class="text-center m-2">
                                        <h6><?php echo $item['item_name']; ?></h6>
                                        <div class="price py-2">
                                             <span> ₹ <?php echo $item['item_price']; ?></span>
                                        </div>
                                        </div>
                                   </div>
                              </div>   
                              <?php
                                   }
                              ?>
                         </div>
                    </div>   
                    </div>   
                    