<!DOCTYPE html>
<html lang="en">

<!-- These are dynamic variables -->

<?php  $page_title="Our Product Details";?>
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
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container customCon">
        <div class="row">
            <div class="col-lg-6">
                <div class="productImages">
                    <div class="mainSlider">
                        <a data-fancybox="gallery" href="./assets/images/product/mens/menshirts01.webp"><img
                                src="./assets/images/product/mens/menshirts01.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/product/mens/menshirts02.webp"><img
                                src="./assets/images/product/mens/menshirts02.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/product/mens/menshirts03.webp"><img
                                src="./assets/images/product/mens/menshirts03.webp" class="img-fluid"></a>
                        <a data-fancybox="gallery" href="./assets/images/product/mens/menshirts04.webp"><img
                                src="./assets/images/product/mens/menshirts04.webp" class="img-fluid"></a>
                    </div>

                    <ul class="thumbNav">
                        <li>
                            <img src="./assets/images/product/mens/menshirts01.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/product/mens/menshirts02.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/product/mens/menshirts03.webp" class="img-fluid">
                        </li>
                        <li>
                            <img src="./assets/images/product/mens/menshirts04.webp" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="productBreif">
                    <h4>Sample Product</h4>
                    <span class="mt-3 Head">OVERVIEW</span>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odio incidunt voluptate iure, adipisci iusto soluta blanditiis.
                        Vero recusandae voluptatem voluptates!
                    </p>
                    <a href="" class="border-bottom pb-3">$50.00</a>

                    <div class="flexBox2">
                        <div class="sizeBox">
                            <span class="mt-3">size</span>
                            <div class="radio__button">
                                <input type="checkbox" id="small" name="small" value="small">
                                <label for="small">S</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="medium" name="medium" value="medium">
                                <label for="medium">M</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="large" name="large" value="large">
                                <label for="large">L</label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="extraLarge" name="extraLarge" value="extraLarge">
                                <label for="extraLarge">XL</label>
                            </div>
                        </div>

                        <div class="colorBox">
                            <span class="mt-3">color</span>
                            <div class="radio__button">
                                <input type="checkbox" id="maroon" name="maroon" value="maroon">
                                <label for="maroon"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="grey" name="grey" value="grey">
                                <label for="grey"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="blue" name="blue" value="blue">
                                <label for="blue"></label>
                            </div>
                            <div class="radio__button">
                                <input type="checkbox" id="black" name="black" value="black">
                                <label for="black"></label>
                            </div>
                        </div>
                    </div>

                    <div class="quantity">
                        <a href="#" class="quantity__minus"><span>-</span></a>
                        <input name="quantity" type="text" class="quantity__input" value="1">
                        <a href="#" class="quantity__plus"><span>+</span></a>
                    </div>

                    <div class="addToCartBtnBox">
                        <button class="cartBtn">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <div class="productDetails">
                    <h4 class="productHead border-bottom pb-5"> Product details</h4>
                    <p class="productDes">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas velit saepe repudiandae placeat
                        ducimus. Temporibus, quidem. Aperiam veritatis aspernatur fugit consequuntur, doloribus nostrum
                        eveniet at quae nihil in quisquam exercitationem reprehenderit minima! Recusandae est modi
                        rerum, veritatis, nihil, qui sint in neque iusto consequuntur eius. Dolore ipsum placeat ab rem.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas velit saepe repudiandae placeat
                        ducimus. Temporibus, quidem. Aperiam veritatis aspernatur fugit consequuntur, doloribus nostrum
                        eveniet at quae nihil in quisquam exercitationem reprehenderit minima! Recusandae est modi
                        rerum, veritatis, nihil, qui sint in neque iusto consequuntur eius. Dolore ipsum placeat ab rem.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container customCon">
        <div class="row relatedRow">
            <h4>Related Product</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="relatedProductSlider">
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                    <div class="innerRelated">
                        <a href="shopDetails.php" class="aLinks">
                            <img src="./assets/images/product/treding/trendingShirts01.webp" alt="" class="img-fluid">
                            <div class="productRatings">
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">★</i>
                                <i class="star">☆</i>
                            </div>

                            <div class="innerInfo">
                                <div class="innerflexHeart">
                                    <h4>Sample Product</h4>
                                    <i>❤</i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta deleniti suscipit nam aliquid reprehenderit optio.
                                    Nesciunt reprehenderit ea fuga quis!
                                </p>
                                <a href="" class="innerpriceTag">$ 70.00</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footertwo.php'?>
</body>

</html>