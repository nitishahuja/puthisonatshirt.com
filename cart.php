<?php include "header.php"; ?>
<!--Main-->
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['remove-item'])){
            $deleted_item = $cart->deleteItem($_POST['item_id']);
        }
    }

?>
    <section id="cart" class="py-3">
       <div class="container-fluid">
        <h3 class="font-size-20">Shopping Cart &nbsp; <i class="fas fa-shopping-basket"></i></h3>
        <div class="row">
            <?php  
                foreach($product->getData('cart') as $item):
                    $Cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
            ?>
            <div class="col-sm-12">
                <div class="row border-top py-3 my-3">
                    <div class="col-sm-4">
                        <img src="<?php echo $item['item_image']; ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-3">
                        <h6 class="my-3"><center><?php echo $item['item_name']; ?></center></h6>
                        <small class="my-3"><center>'Style'/'Size'/'Color'</center><br></small>
                    <div class="input-group">
                         <button type="button" data-id="<?php echo $item['item_id']; ?>" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                             <i class="fas fa-minus"></i>
                         </button>
                        <input type="text" id="quantity" data-id="<?php echo $item['item_id']; ?>" name="quantity" class="qty form-control input-number text-center w-80" value="1" disabled>
                    
                        <button type="button" data-id="<?php echo $item['item_id']; ?>" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                          <i class="fas fa-plus"></i>
                        </button>
                </div>
                </div>
                <div class="col-sm-2 m-4">
                <center> ₹<span class="product_price" data-id="<?php echo $item['item_id']; ?>"><?php echo $item['item_price']; ?></span></center> 
                </div>
                <div class="col-sm 2">
                <center>
                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id']; ?>" name="item_id">
               <button type="submit" name="remove-item" class="btn m-3 text-primary">Remove</button> 
               </form>
               </center>
                </div>
            </div>
        </div>
        <?php
                            return $item['item_price'];
                        }, $Cart);
                    endforeach;
                ?>
                <?php 
                $items=count($product->getData('cart'));
                if($items<1){
                    ?>
                    <div class="col-lg-12">
            <div class="sub-total text-center mt-3 border-top">
            <h7 class="text-dark text-center"><i class="fas fa-times"></i> Your Cart Is Empty <br> Add something from the collection <br></h7>
            <a href="index.php" class="text-light"><button class="btn btn-primary">BROWSE COLLECTION</button></a>
            </div>
                    <?php
                }
                else{
                ?>
        <div class="col-lg-12">
            <div class="sub-total text-center mt-3 border-top">
            <h7 class="text-info text-center"><i class="fas fa-check"></i> Your order is eligible for free delivery</h7>
                <div class="py-4 text-right">
                    <h6 class="font-size-20">Subtotal (<?php echo count($product->getData('cart')) ?> items): &nbsp;<span class="text-primary">₹<span class="text-primary subtotal"><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?></span></span></h6>
                    <button type="submit" class="btn btn-primary mt-3">Checkout</button>
                </div>
            </div>
        </div>
                <?php  }?>
       </div>
   </section>

<!--!Main-->
<?php include "footnote.php" ?>