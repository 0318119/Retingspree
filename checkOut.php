<!DOCTYPE html>
<html lang="en">

<!-- These are dynamic variables -->

<?php  $page_title="Check out Page";?>
<?php  $description = ""; ?> 

<!-- End -->


<?php include "./includes/headertwo.php" ?>

<section class="mt-5">
    <div class="container customCon">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container customCon">
        <div class="row">
            <div class="col">
                 <h4 class="CheckoutHead">Checkout</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="billingBox">
                    <h3>billing details</h3>
                    <form>
                        <div class="form-group flexselect">
                            <input type="text" class="form-control" placeholder="First Name">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Shipping address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group flexselect">
                            <select  class="form-control" id="">
                                <option selected>Conutry</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <select  class="form-control" id="">
                            <option selected>Province</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Post Code/ZIP1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="saveInfoBox mb-3">
                            <a href=""><i class="fa-solid fa-floppy-disk"></i> Save this information </a>
                        </div>

                        <button class="payBtn backTo mt-2">Payment</button>
                        <button class="payBtn mt-2">Back to shopping</button> 
                    </form>
                </div>
            </div>
            
            <div class="col-lg-5">
                <h4 class="orders">Your order</h4>
                <div class="border-left pl-3">
                    <div class="orderDetails border-bottom">
                        <div class="innerOrder">
                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                            <h5>
                                <span class="">Sample Product</span>
                                <span class="mt-2">color : red</span>
                                <span class="mt-2">size : L</span>
                                <span class="mt-5 price">$500.00</span>
                            </h5>
                        </div>
                        <div class="innerOrder">
                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                            <h5>
                                <span class="">Sample Product</span>
                                <span class="mt-2">color : red</span>
                                <span class="mt-2">size : L</span>
                                <span class="mt-5 price">$500.00</span>
                            </h5>
                        </div>
                        <div class="innerOrder">
                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                            <h5>
                                <span class="">Sample Product</span>
                                <span class="mt-2">color : red</span>
                                <span class="mt-2">size : L</span>
                                <span class="mt-5 price">$500.00</span>
                            </h5>
                        </div>
                        <div class="innerOrder">
                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                            <h5>
                                <span class="">Sample Product</span>
                                <span class="mt-2">color : red</span>
                                <span class="mt-2">size : L</span>
                                <span class="mt-5 price">$500.00</span>
                            </h5>
                        </div>
                    </div>

                    <div class="subTotalBox mt-5 payTotalBox">
                        <div class="innerTotal">
                            <span class="subHead">Subtotal</span>
                            <span class="subAmount">$50.00</span>
                        </div>
                        <div class="innerTotal">
                            <span class="shippHead">Shipping</span>
                            <span class="shippAmount">$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<?php include './includes/footertwo.php'?>
</body>

</html>