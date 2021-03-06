<?php include "header.php" ?>
<?php            
    if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['addToCart'])){
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}

    $in_cart=$cart->getCartId($product->getData($table='cart'))??[];

?>


<!-- product -->
<?php
// request method post
     $item_id = $_GET['item_id'];
    foreach($product->getData() as $item):
   if($item['item_id'] == $item_id): 
    ?>
        <section class="product py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    <img id="featured" src="<?php echo $item['item_image']; ?>" class="img-fluid">

                    
                        <div id="slide-wrappper">
                        <i id="slideleft" class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                            <div id="slider">
                    <img src="<?php echo $item['item_image']; ?>"  class="active thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    <img src="./include/images/modi_criticise_black.jpg" class="thumbnail img-fluid" alt="">
                    </div>
                    <i id="slideright" class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="font-size-20 py-3"><center><?php echo $item['item_name']; ?></center></h2>
                           <!--product price  -->
                                <center><span class="money"><?php echo $item['item_price']; ?> ₹</span></center>
                           <!--!product price  -->
                           <hr class="m-0">

                            <div class="policy">
                            <div class="return">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="" class="font-size-12">7 Day<br>Return</a>
                                
                            </div>
                            <div class="return">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="" class="font-size-12">Fast<br>Delivery</a>
                                
                            </div>
                            <div class="return">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-tshirt border p-3 rounded-pill"></span>
                                </div>
                                <a href="" class="font-size-12">Premium<br>Quality</a>
                            </div>
                            </div>
                           <!-- form -->
                            <form method="post"> 
                                <div class="form-row">
                                    <div class="col">
                                        <input type="hidden" name="user_id" value=<?php echo 1; ?>>
                                        <input type="hidden" name="item_id" value=<?php echo $item['item_id'] ?>>
                            <label for=""  class="m-1">Style</label>
                            <select class="form-control">
                            <option selected="true">Tee<i class="fas fa-tshirt"></i></option>
                            <option disabled="disabled">Hoodie</option>
                            <option disabled="disabled">Crewneck Sweater</option>
                            </select>
                            </div>
                            <div class="col">
                            <label for=""  class="m-1">Size&nbsp;&nbsp;&nbsp;<abbr title="size chart"><a href=""><i class="fas fa-info-circle"></i></a></abbr></label>
                            <select class="form-control">
                            <option>S</option>
                            <option selected="true">M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                <label for="" class="m-1">Color</label>
                            <select class="form-control">
                            <option>Black</option>
                            <option>White</option>
                            </select>
                                </div>
                            </div>
                        <div class="form-row pt-4 font-size-16">
                            <?php 
                                if(in_array($item['item_id'],$in_cart)){
                                    ?>
                                    <button type="submit" disabled class="btn btn-primary form-control">CheckOut Cart</button>
                                <?php
                                }else{
                                    ?>
                                    <button type="submit" name="addToCart" class="btn btn-primary form-control">ADD TO CART</button>
                                <?php }  ?>
                            </div>
                            <hr>
                           <p><?php echo $item['item_description']; ?><br>- <?php echo $item['item_username']; ?></p>
                        </div>
                        </form>
                            <!-- !form -->
                    </div>
                  </div>
                  <?php
                    endif;
                  endforeach;
                  ?>
                  <div class="col-12 my-3">
                       <h6>Product Details</h6>
                        <hr>
                        <ul class>
                            <li>Tees: 100% premium cotton</li>
                            <li>Crewnecks and hoodies: 50% cotton, 50% polyester fleece finish</li>
                            <li>100% authentic</li>
                            <li>Machine washable</li>
                        </ul>
                    </div>

              </div>
          </div>
        </section>
        
<?php include "bestseller.php" ?>
<!-- <script type="text/javascript">
     let thumbnails = document.getElementsByClassName('thumbnail');
        let activeImage = document.getElementsByClassName('active');

        for(var i = 0;i<thumbnails.length;i++){
             thumbnails[i].addEventListener('mouseover',function(){
                 if(activeImage.length>0){
                     activeImage[0].classList.remove('active');
                 }
                 this.classList.add('active')
                 document.getElementById('featured').src = this.src;
             })
        }
        let buttonRight = document.getElementById('slideright');
        let buttonLeft = document.getElementById('slideleft')

        buttonLeft.addEventListener('click',function(){
            document.getElementById('slider').scrollLeft -= 180
        })

        buttonRight.addEventListener('click',function(){
            document.getElementById('slider').scrollLeft += 180
        })
</script> -->
<?php include "footnote.php"; ?>