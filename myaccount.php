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
                                <a href="" class="signIn">My Account</a>
                                <a href="" class="signUp btn1">Logout</a>
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

    <!--=============================================== Start booking-dashboard ================================================-->
    <section class="booking_dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <div class="myaccount">
                      <h3>hey, username</h3>
                  </div>
                    <div class="booking_tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Order-tab" data-toggle="tab" href="#Order" role="tab" aria-controls="home" aria-selected="true">My Order </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Previous-tab" data-toggle="tab" href="#Previous" role="tab" aria-controls="profile" aria-selected="false"> Previous Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Chat-tab" data-toggle="tab" href="#Chat" role="tab" aria-controls="contact" aria-selected="false">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Wishlist-tab" data-toggle="tab" href="#Wishlist" role="tab" aria-controls="contact" aria-selected="false">Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Payment-tab" data-toggle="tab" href="#Payment" role="tab" aria-controls="contact" aria-selected="false">Payment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="MyProfile-tab" data-toggle="tab" href="#MyProfile" role="tab" aria-controls="contact" aria-selected="false">My Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Order" role="tabpanel" aria-labelledby="Order-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="bm_one">
                                            <th>Sl#</th>
                                            <th class="pl-0">Restaurant Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="mt-20">
                                        <tr>
                                            <td>01.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>02.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>03.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="Previous" role="tabpanel" aria-labelledby="Previous-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="bm_one">
                                            <th>Sl#</th>
                                            <th class="pl-0">Restaurant Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="mt-20">
                                        <tr>
                                            <td>01.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>02.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>03.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Restaurant Name</h5>
                                                        <ul>
                                                            <li>Time: 13:15</li>
                                                            <li>Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="Chat" role="tabpanel" aria-labelledby="Chat-tab">...</div>
                            <div class="tab-pane fade" id="Wishlist" role="tabpanel" aria-labelledby="Wishlist-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="bm_one">
                                            <th>Sl#</th>
                                            <th class="pl-0">Restaurant Name</th>
                                        </tr>
                                    </thead>
                                    <tbody class="mt-20">
                                        <tr>
                                            <td>01.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Res. Name</h5>
                                                        <ul>
                                                            <li>Booking Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>02.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Name</h5>
                                                        <ul>
                                                            <li>Booking Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>03.</td>
                                            <td>
                                                <div class="item_product_wrap">
                                                    <div class="restaurant_logo_fig">
                                                        <figure>
                                                            <img src="images/all/02.png" alt="" class="img-fluid">
                                                        </figure>
                                                    </div>
                                                    <div class="item_product_name">
                                                        <h5>Name</h5>
                                                        <ul>
                                                            <li>Booking Date: 01 Jan 20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn1"><i class="far fa-comments"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="Payment" role="tabpanel" aria-labelledby="Payment-tab">
                                <div class="payment_heading">
                                    <p>Payment Information</p>
                                </div>
                                <div class="payment_amount">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <div class="avilable_bl">
                                                        <h2>$50.12</h2>
                                                        <p>Available balance</p>
                                                    </div>
                                                </th>
                                                <th col-span="2">
                                                    <h2>$23.12</h2>
                                                    <p>Spent balance</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="payment_method_table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <p>payment</p>
                                                </th>
                                                <th class="text-right">
                                                    <button class="btn1">Add Money</button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="card_item_wrap">
                                                        <div class="card_fig">
                                                            <figure>
                                                                <img src="images/all/03.png" alt="" class="img-fluid">
                                                            </figure>
                                                        </div>
                                                        <div class="item_product_name">
                                                            <h5>Master card* 52342</h5>
                                                            <ul>
                                                                <li>Expires on 01/ 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right item-edit">
                                                    <a href="" class="btn1 text-black">Edit</a>
                                                    <a href="" class="btn1 btn2 mr-0">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="card_item_wrap">
                                                        <div class="card_fig">
                                                            <figure>
                                                                <img src="images/all/03.png" alt="" class="img-fluid">
                                                            </figure>
                                                        </div>
                                                        <div class="item_product_name">
                                                            <h5>Master card* 52342</h5>
                                                            <ul>
                                                                <li>Expires on 01/ 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right item-edit">
                                                    <a href="" class="btn1 text-black">Edit</a>
                                                    <a href="" class="btn1 btn2 mr-0">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="card_item_wrap">
                                                        <div class="card_fig">
                                                            <figure>
                                                                <img src="images/all/03.png" alt="" class="img-fluid">
                                                            </figure>
                                                        </div>
                                                        <div class="item_product_name">
                                                            <h5>Master card* 52342</h5>
                                                            <ul>
                                                                <li>Expires on 01/ 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right item-edit">
                                                    <a href="" class="btn1 text-black">Edit</a>
                                                    <a href="" class="btn1 btn2 mr-0">Remove</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfooter>
                                            <tr class="bm_1">
                                                <td colspan="2">
                                                    <p>Billing and Receipt history</p>
                                                </td>
                                                <td class="text-right">
                                                    <a href="" class="btn1 btn2">View Receipt</a>
                                                </td>
                                            </tr>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="MyProfile" role="tabpanel" aria-labelledby="MyProfile-tab">
                                <div class="myprofile_form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" id="field_icon" placeholder="Name" required>
                                                <span><i class="far fa-edit"></i></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" id="field_icon" placeholder="Last Name" required>
                                                <span><i class="far fa-edit"></i></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control" id="field_icon" placeholder="Phone Number" required>
                                                <span><i class="far fa-edit"></i></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Email Address</label>
                                                <input type="email" class="form-control" id="field_icon" placeholder="Email Address" required>
                                                <span><i class="far fa-edit"></i></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Enter New Password</label>
                                                <input type="Password" class="form-control" id="field_icon" placeholder="New Password" required>
                                                <span><i class="far fa-eye-slash"></i></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Confirm Password</label>
                                                <input type="Password" class="form-control" id="field_icon" placeholder="Confirm Password" required>
                                                <span><i class="far fa-eye-slash"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-right mt-40 saveButton">
                                            <button type="submit" class="btn1 bg-white text-black">Cencel</button>
                                            <button type="submit" class="btn1">Save Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!--All JavaScript Plugin-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
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