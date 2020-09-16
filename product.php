<?php include "header.php" ?>
    <!-- product -->
        <section class="product py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="./include/images/EKrVUGwXYAAioxe.jpg" alt="" class="img-fluid" id="myModal">
                        <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="font-size-20 py-3"><center>Modi-"Criticise me"</center></h2>
                           <!--product price  -->
                                <center><span class="money">499 ₹</span></center>
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
                            <form action="cart.php"> 
                                <div class="form-row">
                                    <div class="col">
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
                                <div class="col-6">
                                <label for="" class="m-1">Color</label>
                            <select class="form-control">
                            <option>Black</option>
                            <option>White</option>
                            </select>
                                </div>
                                <div class="col-6">
                                <label for="" class="m-1">Quantity</label>
                                <div class="input-group">
                         <button type="button" data-id="pro1" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                             <i class="fas fa-minus"></i>
                         </button>
                        <input type="text" id="quantity" data-id="pro1" name="quantity" class="qty form-control input-number text-center w-80" value="1" disabled>
                    
                        <button type="button" data-id="pro1" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                          <i class="fas fa-plus"></i>
                        </button>
                </div>
                         </div>
                            </div>
                        <div class="form-row pt-4 font-size-16">
                            <div class="col">
                                <button type="submit" class="btn btn-primary form-control">BUY NOW</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary form-control">ADD TO CART</button>
                            </div>
                        </div>
                        </form>
                            <!-- !form -->
                    </div>
                  </div>

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
<?php include "footnote.php"; ?>