<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant ||</title>
    <link rel="shortcut icon" href="images/favicon-72x72.jpg" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome.min.css -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive.css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- cross-browser-compatibility -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.js"></script>


</head>

<body>
    <!--=============================================== Start Header-top ================================================-->
    <header>
        <header class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar_wrap">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo/logo.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="singup">
                                <a href="" class="signIn" data-toggle="modal" data-target="#signInModal">sign In</a>
                                <a href="" class="signUp btn1" data-toggle="modal" data-target="#signUpModal">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </header>
    <!--=============================================== Start Header-top ================================================-->
    <header>
        <header class="header">
            <div class="container">
                <div class="row row_direction">
                    <div class="col-12 col-lg-10">
                        <div class="primary_menu" id="mobile-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="offer-day.php" class="active">Offer Of the day</a></li>
                                    <li><a href="offer.php">Offer Of the month</a></li>
                                    <li><a href="javascript:void(0)">Restaurant <span><i class="fas fa-chevron-down"></i></span></a>
                                        <ul>
                                            <li><a href="single-restaurant.php">Italian Restaurant</a></li>
                                            <li><a href="">Italian Restaurant</a></li>
                                            <li><a href="">American Restaurant</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-6 col-lg-2">
                        <div id="myOverlay" class="overlay">
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">??</span>
                            <div class="overlay-content">
                                <form action="" method="post">
                                    <input class="control-form" type="text" placeholder="Search.." name="search">
                                    <button type="submit" class="btn1">Search</button>
                                </form>
                            </div>
                        </div>
                        <button class="openBtn float-xm-left float-sm-left float-right" onclick="openSearch()"><span><i class="fa fa-search"></i></span> Search</button>
                    </div>
                </div>
            </div>
        </header>
    </header>
    <main>

 <!--=============================================== Start resturant_product ================================================-->
        <section class="resturant_product">
            <div class="container">
                <div class="row m_row-3">
                    <div class="col-lg-12 text-center">
                        <div class="resturant_product_heading">
                            <h2>Offer Of The Restaurant</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                       <span class="filter_toggle"><i class="fas fa-bars"></i> Item Filter</span>
                        <div class="restaurants-filters-wrap">
                            <div class="restaurants-filters">
                                <div class="restaurants-filters-header-text">
                                    <h3> Establishment Type</h3>
                                </div>
                                <div class="restaurants-filters-checkbox">
                                    <div class="checkBox_design_wrap">
                                        <label class="container1">Restaurants
                                            <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Quick Bites
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Dessert
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Coffee & Tea
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="restaurants-filters">
                                <div class="restaurants-filters-header-text">
                                    <h3> Meals</h3>
                                </div>
                                <div class="restaurants-filters-checkbox">
                                    <div class="checkBox_design_wrap">
                                        <label class="container1">Breakfast
                                            <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Brunch
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Lunch
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Dinner
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="restaurants-filters">
                                <div class="restaurants-filters-header-text">
                                    <h3> Reservations</h3>
                                </div>
                                <div class="restaurants-filters-checkbox">
                                    <div class="checkBox_design_wrap">
                                        <label class="container1">Online Reservations
                                            <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="restaurants-filters">
                                <div class="restaurants-filters-header-text">
                                    <h3> Establishment Type</h3>
                                </div>
                                <div class="restaurants-filters-checkbox">
                                    <div class="checkBox_design_wrap">
                                        <label class="container1">Restaurants
                                            <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Quick Bites
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Dessert
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Coffee & Tea
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="restaurants-filters">
                                <div class="restaurants-filters-header-text">
                                    <h3> Price</h3>
                                </div>
                                <div class="restaurants-filters-checkbox">
                                    <div class="checkBox_design_wrap">
                                        <label class="container1">Cheap Eats
                                            <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Mid-range
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Indian
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container1">Mediterranean
                                            <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-20">
                        <div class="row product_p_0 offer_day_mb">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <a href="single-restaurant.php">
                                    <div class="product_wrap">
                                        <div class="product_thumb" data-background="images/product/01.jpg"></div>
                                        <div class="product_logo_item">
                                            <figure>
                                                <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                            </figure>
                                        </div>
                                        <div class="product_item_content">
                                            <h5>The Ruby Restaurant</h5>
                                            <div class="restaurant_location">
                                                <span>House 323, Road 5</span>
                                                <span>Baridhara DOHS, Dhaka 1206</span>
                                            </div>
                                            <div class="resturant_review">
                                                <div class="rating">
                                                    <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                                                </div>
                                                <span><i class="fas fa-ellipsis-h"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--=============================================== Start product_offer ================================================-->
        <section class="subscribe_section">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-12  subscribe_bg">
                        <div class="subscribe_wrap">
                            <div class="subscribe_heading">
                                <h2>Subscribe Now</h2>
                                <article>
                                    <p>Get Best Deals On Internet Deliverd Right In Your Inbox</p>
                                </article>
                            </div>
                            <div class="subscribe_form">
                                <form action="" method="">
                                    <input type="email" name="email" placeholder="Enter Your Email ID">
                                    <button type="button" class="btn1">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--=============================================== Start footer_area ================================================-->
    <footer>
        <section class="footer_area p-120" id="footer_section">
            <div class="container bt_top">
                <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                    <div class="col-12 col-sm-5 col-md-2 col-lg-2">
                        <aside>
                            <div class="footer_about">
                                <h5>About</h5>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Advertising</a></li>
                                    <li><a href="">Opportunities</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-3">
                        <div class="footer_about">
                            <h5>Festival Deals</h5>
                            <ul>
                                <li><a href=""> Father's Day Offers</a></li>
                                <li><a href="">Akshaya Tritiya Offers</a></li>
                                <li><a href="">Diwali Offers</a></li>
                                <li><a href="">Christmas Offers</a></li>
                                <li><a href="">New Year Offers <span class="badge badge-warning">New</span></a></li>
                                <li><a href="">Republic Day Offers</a></li>
                                <li><a href="">Holi Offers</a></li>
                                <li><a href="">Valentine's Day Offers</a></li>
                                <li><a href="">Rakhi Offers</a></li>
                                <li><a href="">Independence Day Offers <span class="badge badge-warning">New</span></a></li>
                                <li><a href="">Dussehra Offers</a></li>
                                <li><a href="">Amazon Great Indian Festive Sale</a></li>
                                <li><a href="">Flipkart Big Billion Day Sale</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="footer_about pl_5">
                            <h5>Top Stores</h5>
                            <ul>
                                <li><a href="">Jabong Coupons</a></li>
                                <li><a href="">TataCliq Coupons <span class="badge badge-warning">New</span></a></li>
                                <li><a href="">Shopclues Coupons</a></li>
                                <li><a href="">Koovs Coupons</a></li>
                                <li><a href="">Paytm Coupons</a></li>
                                <li><a href="">Biryani Blues Coupons</a></li>
                                <li><a href="">Zivame Coupons <span class="badge badge-warning">New</span></a></li>
                                <li><a href="">Abof Coupons</a></li>
                                <li><a href="">Goair Coupons</a></li>
                                <li><a href="">Justrelief Coupons</a></li>
                                <li><a href="">Zomato Coupons</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-2">
                        <aside>
                            <div class="footer_about">
                                <h5>Need Help?</h5>
                                <ul>
                                    <li><a href="faq.php">Faq</a></li>
                                    <li><a href="help.php">Need Help?</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-2">
                        <aside>
                            <div class="footer_about">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="">Facebook <span class="badge badge-primary"><i class="fab fa-facebook-f"></i></span></a></li>
                                    <li><a href="">Twitter <span class="badge badge-primary"><i class="fab fa-twitter"></i></span></a></li>
                                    <li><a href="">Instagram <span class="badge badge-primary"><i class="fab fa-instagram"></i></span></a></li>
                                    <li><a href="">Pinterest <span class="badge badge-primary"><i class="fab fa-pinterest"></i></span></a></li>
                                    <li><a href="">LinkedIn <span class="badge badge-primary"><i class="fab fa-linkedin"></i></span></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="copyright_content">
                                <p> All Rights Reserved @ 2019 <a href=""> Veechi Technologies</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!--=============================================== Start signInModal ================================================-->

    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="restaurant_logo">
                        <img src="images/logo/signin_logo.png" alt="" class="img-fluid">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="signUp_form">
                                <form action="" method="">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <a href="" class="forget_pass text-center d-block">I forget My Password</a>
                                    <button type="submit" name="" class="btn1">Sign In</button>
                                </form>
                                <div class="signIn-social">
                                    <p class="text-bold text-center text-underline">Or sign in with</p>
                                    <ul>
                                        <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" class="gl"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                                <p>Don???t have an Account? <a href="" data-toggle="modal" data-target="#signUpModal">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============================================== Start signUpModal ================================================-->

    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="restaurant_logo">
                        <img src="images/logo/signin_logo.png" alt="" class="img-fluid">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="ForUser-tab" data-toggle="tab" href="#ForUser" role="tab" aria-controls="home" aria-selected="true">For User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ForRestaurant-tab" data-toggle="tab" href="#ForRestaurant" role="tab" aria-controls="profile" aria-selected="false">For Restaurant</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="ForUser" role="tabpanel" aria-labelledby="ForUser-tab">
                                    <div class="signUp_form">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="name" class="form-control" placeholder="Full  Name*">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address*">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="password" name="password" class="form-control" placeholder="Password*">
                                                </div>
                                            </div>
                                            <button type="submit" name="" class="btn1">Register Now</button>
                                        </form>
                                        <div class="signIn-social">
                                            <p class="text-bold text-center text-underline">Or sign in with</p>
                                            <ul>
                                                <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="" class="gl"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Already have an Account? <a href="">Sign In</a></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ForRestaurant" role="tabpanel" aria-labelledby="ForRestaurant-tab">
                                    <div class="signUp_form">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="" class="form-control" placeholder="Restaurant Name*">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="" class="form-control" placeholder="Owner Full  Name*">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="email" name="" class="form-control" placeholder="Email Address*">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="password" name="password" class="form-control" placeholder="Password*">
                                                </div>
                                            </div>
                                            <button type="submit" name="" class="btn1">Register Now</button>
                                        </form>
                                        <p>Already have an Account? <a href="">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--All JavaScript Plugin-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- main.js -->
    <script src="js/main.js"></script>
    
     <script>
        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>
    
    
    
</body>
<!--<body oncontextmenu="return false;">-->

</html>