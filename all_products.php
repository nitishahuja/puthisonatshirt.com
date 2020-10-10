     <?php
     $all_products = $product->getData();
     shuffle($all_products)
     ?>
     
     <section id="special-price">
            <div class="container1">
            <h4>
                 <a href="shop.php">Featured <i class="fas fa-angle-double-right"></i></a> 
            </h4>
              <!-- <div id="filters" class="text-right">
                <label for="">Sort By:<br></label>
                <select name="" id="">
                   <option value=""selected="true">Featured</option>
                   <option value="">Price: Low to High</option>
                   <option value="">Price: High to Low</option>
                </select>
              </div> -->
              <hr>
              <section class="products">
                <?php
                  foreach($all_products as $prod)
                  {
                ?>
               <div class="product-card border comedy celebrity">
                 <a href="<?php printf('%s?item_id=%s','product.php',$prod['item_id']) ?>">
                     <div class="product-image">
                         <img src="<?php echo $prod['item_image']?? ""; ?>" class="img-fluid">
                     </div>
                     <div class="text-center">
                      <h6><?php echo $prod['item_name']; ?></h6>
                      <div class="price">
                        <span>₹ <?php echo $prod['item_price']; ?></span>
                      </div>
                    </div>
                    </a>
                   </div>
                  <?php } ?>
                  </div>
                </section>
         </div>
     </section>