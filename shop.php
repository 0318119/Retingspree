<!DOCTYPE html>
<html lang="en">

<!-- These are dynamic variables -->

<?php  $page_title="Enjoye Shopping";?>
<?php  $description = ""; ?> 

<!-- End -->


<?php include "./includes/headertwo.php" ?>


<section class="mt-5">
    <div class="container customCon">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 pl-0">
                <div class="">

                   <div class="categoriesBox">
                        <h4>Shop by Categories</h4>
                        <div class="innerFilter">
                            <i class="fa-solid fa-arrow-down-a-z"></i>
                            <i class="fa-solid fa-arrow-up-z-a"></i>

                            <select name="" id="" class="productAtoZ">
                                <option value="" selected>featured</option>
                                <option value="">featured</option>
                                <option value="">featured</option>
                            </select>
                        </div>
                        <h4>Showing 1-12 of 21 results</h4>
                   </div>
                    
                    <div class="verticalTab" role="tabpanel">
                        <ul class="nav verticaltabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Clothing" aria-controls="home" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>Clothing</a></li>
                            <li role="presentation"><a href="#Trending" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i> Trending</a></li>
                            <li role="presentation"><a href="#MenTshirt" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>   Men T-Shirt</a></li>
                            <li role="presentation"><a href="#womenTshirt" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>   Women T-Shirt</a></li>
                            
                            <div class="rangeSlider">
                                <input type="text" class="js-range-slider" name="my_range" value="" 
                                    data-skin="round" data-type="double" data-min="0" data-max="1000" data-grid="false"/>
                               
                                    <div class="priceDemo">
                                        <Label>Price:</Label>
                                        <input type="text" maxlength="4" value="$0" class="from"/>
                                        <input type="text" maxlength="4" value="$500" class="to"/>
                                    </div>
                            </div>

                            <div class="poductTag">
                                <h4 class="mt-5">Product Tags</h4>
                                <li class="tags"><a href="">Couple</a></li>
                                <li class="tags"><a href="">Trending</a></li>
                                <li class="tags"><a href="">T-shirt</a></li>
                                <li class="tags"><a href="">Top</a></li>
                                <li class="tags"><a href="">Price</a></li>
                                <li class="tags"><a href="">Jacket</a></li>
                            </div>
                        </ul>

                        <div class="tab-content tabs">
                             <!-- FIRST -->
                            <div role="tabpanel" class="tab-pane fade in active" id="Clothing">
                               <div class="flexTabs">
                                 <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/clothing/ZoomImage.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                 </a>

                                 <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/clothing/ZoomImagetwo.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                  </a>
                               </div>
                            </div>
                            <!-- SECOND -->
                            <div role="tabpanel" class="tab-pane fade" id="Trending">
                                <div class="flexTabs">
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                     
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/treding/trendingShirts02.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- THREE -->
                            <div role="tabpanel" class="tab-pane fade" id="MenTshirt">
                                <div class="flexTabs">
                                    
                                <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/mens/menshirts01.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                </a>

                                <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/mens/menshirts02.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <!-- FOUR -->
                            <div role="tabpanel" class="tab-pane fade" id="womenTshirt">
                                <div class="flexTabs">
                                <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/womens/womenshirt01.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                </a>

                                <a href="shopDetails.php">
                                    <div class="productBox">
                                        <img src="./assets/images/product/womens/womenshirt02.webp" alt="" class="img-fluid">
                                        <div class="ratingsBox">
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">★</i>
                                            <i class="star">☆</i>
                                        </div>

                                        <div class="productInfo">
                                            <div class="flexHeart">
                                                <h4>Sample Product</h4>
                                                <i>❤</i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                Nesciunt reprehenderit ea fuga quis!
                                            </p>
                                            <a href="" class="priceTag">$ 70.00</a>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="verticalTab" role="tabpanel">
                        <ul class="nav verticaltabs" role="tablist">
                            <h4 class="brndHead">Brand</h4>
                            <li role="presentation"><a href="#AllCloth" aria-controls="home" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>All</a></li>
                            <li role="presentation" class="active"><a href="#HnM" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>HnM</a></li>
                            <li role="presentation"><a href="#Pull" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>Pull & Bear</a></li>
                            <li role="presentation"><a href="#UniqueItems" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa-solid fa-arrow-right-long rightArrow"></i>Unique</a></li>
                        </ul>

                        <div class="tab-content tabs">

                            <!-- ==================================== -->
                            <!-- in the FIRST box All items-->
                            <div role="tabpanel" class="tab-pane fade" id="AllCloth">
                                <div class="flexTabs">

                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts03.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- =================================== -->
                            <!-- SECOND -->
                            <div role="tabpanel" class="tab-pane fade in active" id="HnM">
                                 <div class="flexTabs">
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts03.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- ====================================== -->
                            <!-- SEVEN -->
                            <div role="tabpanel" class="tab-pane fade" id="Pull">
                                 <div class="flexTabs">
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts03.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- ====================================== -->
                            <!-- EIGHT -->
                            <div role="tabpanel" class="tab-pane fade" id="UniqueItems">
                                 <div class="flexTabs">
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts03.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="shopDetails.php">
                                        <div class="productBox">
                                            <img src="./assets/images/product/mens/menshirts04.webp" alt="" class="img-fluid">
                                            <div class="ratingsBox">
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">★</i>
                                                <i class="star">☆</i>
                                            </div>

                                            <div class="productInfo">
                                                <div class="flexHeart">
                                                    <h4>Sample Product</h4>
                                                    <i>❤</i>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    Soluta deleniti suscipit nam aliquid reprehenderit optio. 
                                                    Nesciunt reprehenderit ea fuga quis!
                                                </p>
                                                <a href="" class="priceTag">$ 70.00</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
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