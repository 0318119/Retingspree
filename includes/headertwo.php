<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="	https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="./assets/fonts/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    
    <title>Retingspree | <?php echo $page_title;?></title>
    <meta name="description" content="<?php echo $description;  ?>" />
</head>

<body>
   <section class="HedaerBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="topMsgBox">
                        <p>Free Delivery: Take advantage of our time to save event</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="topFlexBox">
                        <div class="loginBtn">
                           <a href="login.php">Login</a>
                        </div>

                        <div class="langBox">
                            <form action="">
                                <select name="" id="" class="langSelection">
                                    <option value="" selected>English</option>
                                    <option value="">Arabic</option>
                                    <option value="">Chinese</option>
                                </select>
                            </form>
                        </div>

                        <div class="currencyBox">
                            <form action="">
                                <select name="" id="" class="currebcySlec">
                                    <option value="" selected>USD</option>
                                    <option value="">DZD</option>
                                    <option value="">Chinese</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>


   <section>
        <div class="container-fluid headerCon">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand scdLogo" href="index.php">
                    <img src="./assets/images/ratingspree.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto scdMenu">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                    <form class="form-inline topSearch">
                         <input class="form-control mr-sm-1 searchInput" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <h5 class="checkOutBtn">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <a href="">0 items(s)</a>
                    </h5>
                </div>
            </nav>
        </div>
   </section>