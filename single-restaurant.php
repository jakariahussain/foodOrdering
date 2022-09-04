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
    <link rel="stylesheet" href="css/daterangepicker.css">
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
                                    <li><a href="offer-day.php">Offer Of the day</a></li>
                                    <li><a href="offer.php">Offer Of the month</a></li>
                                    <li><a href="javascript:void(0)" class="active">Restaurant <span><i class="fas fa-chevron-down"></i></span></a>
                                        <ul>
                                            <li><a href="single-restaurant.php" class="active">Italian Restaurant</a></li>
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
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
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
        <!--=============================================== Start product_curb ================================================-->
        <section class="product_curb" data-background="images/banner/03.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="product_curb_content">
                            <a class="btn btn-dark" href=""><i class="far fa-bookmark"></i> Add To Favourite</a>
                            <!--                           <a class="btn btn-primary" href=""><i class="fas fa-bookmark"></i> Remove From Favourite</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================================== Start restaurat_details ================================================-->
        <section class="resturant_details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="resturant_details_content">
                            <div class="restaurant_details_header">
                                <div class="product_logo_item mt-0">
                                    <figure>
                                        <img src="images/product_logo/01.png" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="restaurant_review_content">
                                    <h2>The Ruby Resturant</h2>
                                    <div class="restaurant_review_star">
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                            <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                            <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                            <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star </label>
                                        </div>
                                        <span class="rt1"><strong>5.00</strong></span>
                                        <span class="rb1"><i class="far fa-comment-alt"></i> 312 Review</span>
                                    </div>
                                </div>
                            </div>
                            <!-- start restaurant_table -->
                            <div class="restaurant_table">
                                <div class="table_overview">
                                    <article>
                                        <p>Our service is focused on a warm welcome for all guests. Our experienced floor team will be on hand to make sure that everyone in Isabelle's feels at home. </p>
                                    </article>
                                </div>
                                <div class="table_wrap" >
                                    <div class="single_table_data">
                                        <h5>Address:</h5>
                                        <ul>
                                            <li>1 Avenida Norte esq Calle 16 Norte Gonzalo Guerrero 77720 Playa del Carmen </li>
                                        </ul>
                                    </div>
                                    <div class="single_table_data">
                                        <h5>Hours of operation</h5>
                                        <ul>
                                            <li>Breakfast</li>
                                            <li>Daily 7:00 am–2:00 pm</li>
                                            <li>Dinner</li>
                                            <li>Daily 6:00 pm–11:00 pm</li>
                                        </ul>
                                    </div>
                                    <div class="single_table_data">
                                        <h5>Cuisine</h5>
                                        <ul>
                                            <li>American, International, Fine cuts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table_navs">
                                <ul>
                                    <li><a href="#d-offer">Offers</a></li>
                                    <li><a href="#tab_two">Photos</a></li>
                                    <li><a href="#menu_item">Menus</a></li>
                                    <li><a href="#d-Reviews">Reviews</a></li>
                                </ul>
                            </div>
                            <!-- start details_coupon -->
                            <div class="details_coupon mt-30" id="d-offer">
                                <div class="details_tmb_banner">
                                    <figure>
                                        <img src="images/banner/05.jpg" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="details_coupon_content">
                                    <h3>Upto 10% Cashback offer on Using your #12312334 Coupon</h3>
                                    <ul class="offerin_date">
                                        <li><span>Offer Published Date:</span> 20 January 2020</li>
                                        <li><span>Offer Ending Date:</span> 30 January 2020</li>
                                    </ul>
                                    <article>
                                        <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. Enjoy 2 Coupon Free on Wide range </p>
                                    </article>
                                    <a href="" class="m1">Read More</a>
                                    <div class="more_content">
                                        <ul class="item_list">
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                        </ul>
                                        <div class="offer_chose">
                                            <a href="" class="btn1 text-right">Chose This Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- start details_coupon -->
                            <div class="details_coupon mt-30 dt1">
                                <div class="details_tmb_banner">
                                    <figure>
                                        <img src="images/banner/05.jpg" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="details_coupon_content">
                                    <h3>Upto 10% Cashback offer on Using your #12312334 Coupon</h3>
                                    <ul class="offerin_date">
                                        <li><span>Offer Published Date:</span> 20 January 2020</li>
                                        <li><span>Offer Ending Date:</span> 30 January 2020</li>
                                    </ul>
                                    <article>
                                        <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. Enjoy 2 Coupon Free on Wide range </p>
                                    </article>
                                    <a href="" class="m1">Read More</a>
                                    <div class="more_content">
                                        <ul class="item_list">
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                        </ul>
                                        <div class="offer_chose">
                                            <a href="" class="btn1 text-right">Chose This Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- start details_coupon -->
                            <div class="details_coupon mt-30">
                                <div class="details_tmb_banner">
                                    <figure>
                                        <img src="images/banner/05.jpg" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="details_coupon_content">
                                    <h3>Upto 10% Cashback offer on Using your #12312334 Coupon</h3>
                                    <ul class="offerin_date">
                                        <li><span>Offer Published Date:</span> 20 January 2020</li>
                                        <li><span>Offer Ending Date:</span> 30 January 2020</li>
                                    </ul>
                                    <article>
                                        <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. Enjoy 2 Coupon Free on Wide range </p>
                                    </article>
                                    <a href="" class="m1">Read More</a>
                                    <div class="more_content">
                                        <ul class="item_list">
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                            <li>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant Many desktop publishing packages.</li>
                                        </ul>
                                        <div class="offer_chose">
                                            <a href="" class="btn1 text-right">Chose This Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End details_coupon -->

                            <!-- start tab_photo_gallery -->
                            <div class="tab_photo_gallery" id="tab_two">
                                <h4>15+ Photos</h4>
                                <div class="tab_gallery_wrap">
                                    <div class="gallery_item height_item">
                                        <div class="item_gp_wrp">
                                            <div class="item_gp" data-background="images/gallery/01.jpg">
                                                <a href="images/gallery/01.jpg" class="gallery-item"></a>
                                            </div>
                                            <div class="item_gp" data-background="images/gallery/01.jpg">
                                                <a href="images/gallery/01.jpg" class="gallery-item"></a>
                                            </div>
                                        </div>
                                        <div class="inner_galler_thumb mt-10">
                                            <div class="item_inner_gp_wrap">
                                                <div class="single_item_gp" data-background="images/gallery/02.jpg">
                                                    <a href="images/gallery/02.jpg" class="gallery-item"></a>
                                                </div>
                                                <div class="single_item_gp" data-background="images/gallery/02.jpg">
                                                    <a href="images/gallery/02.jpg" class="gallery-item"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside_galler_thumb">
                                        <div class="aside_gallery_item" data-background="images/gallery/03.jpg">
                                            <a href="images/gallery/03.jpg" class="gallery-item"></a>
                                        </div>
                                        <div class="aside_gallery_item mt-10" data-background="images/gallery/03.jpg">
                                            <a href="images/gallery/03.jpg" class="gallery-item" id="opcitiy_active">10+</a>
                                        </div>
                                        <a href="images/gallery/03.jpg" class="gallery-item"></a>
                                        <a href="images/gallery/03.jpg" class="gallery-item"></a>
                                        <a href="images/gallery/03.jpg" class="gallery-item"></a>
                                        <a href="images/gallery/03.jpg" class="gallery-item"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- start our_menu -->
                            <div class="our_menu" id="menu_item">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="menu_heading">
                                            <h4>Our Menus</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="filters portfolio_menu">
                                            <ul>
                                                <li class="is-checked" data-filter="*">All</li>
                                                <li data-filter=".idea">Non-veg</li>
                                                <li data-filter=".Veg">Veg</li>
                                                <li data-filter=".Lunch">Lunch</li>
                                                <li data-filter=".Dinner">Dinner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-----end filters----->
                                    <div class="col-md-12">
                                        <div class="rows grid">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item idea" data-category="ads">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item Dinner" data-category="books">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item Veg" data-category="logos">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item Lunch" data-category="websites">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item idea" data-category="ads">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item Dinner" data-category="books">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item creativity" data-category="books">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item creativity" data-category="books">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-30 grid-item Lunch" data-category="books">
                                                <div class="single_vegtable_items">
                                                    <h5>Fish Finger <span>$350</span></h5>
                                                    <article>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="download_more">
                                            <a href="" class="btn1" download>Download Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overview_wrap" id="d-Reviews">
                                <div class="overview_headign">
                                    <h3>Overall ratings and reviews</h3>
                                </div>
                                <div class="overview_rating">
                                    <div class="rating">
                                        <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                        <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                        <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                        <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                        <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star </label>
                                    </div>
                                </div>
                                <div class="rating_point">
                                    <h3> 4.8 <span>from 20 review</span></h3>
                                </div>
                                <!-- Start progress_bar_wrap -->
                                <div class="progress_bar_wrap">
                                    <h3>88% of people would recommend it to a friend</h3>
                                    <div class="single_progress_wrap">
                                        <h4>Food</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress_wrap_content">
                                            <p><span>4.2</span></p>
                                        </div>
                                    </div>
                                    <div class="single_progress_wrap">
                                        <h4>Service</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress_wrap_content">
                                            <p><span>3.9</span></p>
                                        </div>
                                    </div>
                                    <div class="single_progress_wrap">
                                        <h4>Ambience</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress_wrap_content">
                                            <p><span>2.5</span></p>
                                        </div>
                                    </div>
                                    <div class="single_progress_wrap">
                                        <h4>Value</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress_wrap_content">
                                            <p><span>3.2</span></p>
                                        </div>
                                    </div>
                                    <div class="post_review_count">
                                        <div class="post_review_count_wrap">
                                            <h3>Post A Review</h3>
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <select id="inputState" class="form-control">
                                                            <option value="" selected>Food</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Service</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <select id="inputState" class="form-control">
                                                            <option value="" selected>Ambience</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <select id="inputState" class="form-control">
                                                            <option value="" selected>Value</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <textarea name="" cols="10" rows="5" class="form-control w-100" placeholder="Write your comment"></textarea>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn1">Submit Your Review</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="item_short_form">
                                        <form action="" method="">
                                            <select name="" id="">
                                                <option value="">Short By</option>
                                                <option value="">Short By</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <!-- End progress_bar_wrap -->
                            </div>
                            <!-- start All Review_comment -->
                            <div id="comment_rv">
                                <div class="all-comment-wrap">
                                    <div class="comment-thumb">
                                        <figure>
                                            <img src="images/all/01.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comments_profile_name">
                                            <h5>Mr. McDolland</h5>
                                            <p>Dined 2 days ago</p>
                                        </div>
                                        <p>Master chef at Green Restaurant</p>
                                        <div class="comment_overview_rating">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star </label>
                                            </div>
                                            <ul>
                                                <li><span>4.0</span> Overall </li>
                                                <li><span>4</span> Food </li>
                                                <li><span>3</span> Service </li>
                                                <li><span>4</span> Ambience </li>
                                                <li><span>4</span> Value</li>
                                            </ul>
                                        </div>
                                        <article>
                                            <p class="text-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                        </article>
                                        <div class="review_count">
                                            <ul>
                                                <li><span>1</span> Review</li>
                                                <li><span><i class="far fa-flag"></i></span> Report</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- start All Review_comment -->
                                <div class="all-comment-wrap">
                                    <div class="comment-thumb">
                                        <figure>
                                            <img src="images/all/01.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comments_profile_name">
                                            <h5>Mr. McDolland</h5>
                                            <p>Dined 2 days ago</p>
                                        </div>
                                        <p>Master chef at Green Restaurant</p>
                                        <div class="comment_overview_rating">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star </label>
                                            </div>
                                            <ul>
                                                <li><span>4.0</span> Overall </li>
                                                <li><span>4</span> Food </li>
                                                <li><span>3</span> Service </li>
                                                <li><span>4</span> Ambience </li>
                                                <li><span>4</span> Value</li>
                                            </ul>
                                        </div>
                                        <article>
                                            <p class="text-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                        </article>
                                        <div class="review_count">
                                            <ul>
                                                <li><span>1</span> Review</li>
                                                <li><span><i class="far fa-flag"></i></span> Report</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="reservation_area">
                            <div class="reservation_form">
                                <h3>Make a reservation</h3>
                                <form action="" method="" class="row">
                                    <div class="col-lg-12">
                                        <select name="" id="">
                                            <option value="">Party Size</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                        </select>
                                    </div>
                                    <div class='col-lg-12'>
                                        <div class="date">
                                            <input type="text" id="restaurant-dates" name="restaurant-dates" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkBox_design_wrap">
                                            <h5>Select offer</h5>
                                            <label class="container1">Upto 10% Cashback offer on Using your #12312334 Coupon
                                                <input value="offer" type="checkbox" value="1" name="fooby[1][]" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container1">Upto 10% Cashback offer on Using your #12312334 Coupon
                                                <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container1">Upto 10% Cashback offer on Using your #12312334 Coupon
                                                <input value="offer" value="1" name="fooby[1][]" type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="booking_done.php" class="btn1 btn-block text-center mt-30">Find A table</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================================== Start product_banner_area ================================================-->
        <section class="product_banner p-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_banner_thumb" data-background="images/banner/02.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================================== Start product_offer ================================================-->
        <section class="product_offer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="resturant_product_heading">
                            <h2>Recent Restaurant Offers</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row mt-20">
                            <div class="col-sm-6 col-lg-3">
                                <a href="">
                                    <div class="offer_product">
                                        <div class="offer_product_thumb" data-background="images/slider/05.jpg">
                                        </div>
                                        <div class="product_offer_content text-center">
                                            <h5>The Ruby Restaurant</h5>
                                            <article>
                                                <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                            </article>
                                            <div class="rating_wrap_system">
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                </div>
                                            </div>
                                            <span class="timing_alert"><img src="images/add/01.png" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="">
                                    <div class="offer_product">
                                        <div class="offer_product_thumb" data-background="images/slider/03.jpg">
                                        </div>
                                        <div class="product_offer_content text-center">
                                            <h5>The Ruby Restaurant</h5>
                                            <article>
                                                <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                            </article>
                                            <div class="rating_wrap_system">
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                </div>
                                            </div>
                                            <span class="timing_alert"><img src="images/add/01.png" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="">
                                    <div class="offer_product">
                                        <div class="offer_product_thumb" data-background="images/slider/02.jpg">
                                        </div>
                                        <div class="product_offer_content text-center">
                                            <h5>The Ruby Restaurant</h5>
                                            <article>
                                                <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                            </article>
                                            <div class="rating_wrap_system">
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                </div>
                                            </div>
                                            <span class="timing_alert"><img src="images/add/01.png" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="">
                                    <div class="offer_product">
                                        <div class="offer_product_thumb" data-background="images/slider/06.jpg">
                                        </div>
                                        <div class="product_offer_content text-center">
                                            <h5>The Ruby Restaurant</h5>
                                            <article>
                                                <p>Enjoy 2 Coupon Free on Wide range The Ruby Restaurant</p>
                                            </article>
                                            <div class="rating_wrap_system">
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating[]" value="5"><label for="star5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="star4" name="rating[]" value="4"><label for="star4" title="Rocks!">4 stars</label>
                                                    <input type="radio" id="star3" name="rating[]" value="3"><label for="star3" title="Pretty good">3 stars</label>
                                                    <input type="radio" id="star2" name="rating[]" value="2"><label for="star2" title="Pretty good">2 stars</label>
                                                    <input type="radio" id="star1" name="rating[]" value="1"><label for="star1" title="Meh">1 star</label>
                                                </div>
                                            </div>
                                            <span class="timing_alert"><img src="images/add/01.png" alt="" class="img-fluid"> Till 12 Jan, 2020</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============================================== Start subscribe_section ================================================-->
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
                                    <li><a href="faq.php"> Faq</a></li>
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
                                <p>Don’t have an Account? <a href="">Sign Up</a></p>
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
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
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