<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

    <!-- header section -->
    <?php
    include ("header.php");
    ?>
    <!-- header section -->

    <body>

        <div class="hero_area">
            <div class="bg-box">
                <img src="images/hero-bg.jpg" alt="">
            </div>
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.php">
                            <span>
                                Food Catering System
                            </span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  mx-auto ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="menu.php">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                            </ul>
                            <div class="user_option">
                                <a href="account.php" class="user_link">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <a class="cart_link" href="cart.php">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                    <g>
                                    <g>
                                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    </svg>
                                </a>
                                <form class="form-inline">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                                <a href="" class="order_online">
                                    Order Online
                                </a>
                                <a href="logout.php">Logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section ">
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6 ">
                                        <div class="detail-box">
                                            <h1>
                                                Fast Food Restaurant
                                            </h1>
                                            <p>
                                                Welcome to our fast food restaurant, where we believe that food should be delicious, 
                                                convenient, and affordable. From juicy burgers and crispy fries to tasty pizza and 
                                                pasta, we've got something for everyone. Whether you're in a hurry and need to grab 
                                                a quick bite on the go, or you're looking for a place to sit down and enjoy a meal 
                                                with friends and family, we've got you covered. Our menu features a variety of 
                                                classic and innovative dishes, made with high-quality ingredients and prepared with
                                                care.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    Order Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6 ">
                                        <div class="detail-box">
                                            <h1>
                                                Fast Food Restaurant
                                            </h1>
                                            <p>
                                                Looking for a quick and delicious meal that won't break the bank? Look no further
                                                than our fast food restaurant! We pride ourselves on offering a mouth-watering 
                                                selection of classic and modern dishes that are sure to satisfy your cravings. 
                                                Whether you're in the mood for a juicy burger, crispy pizza, or tasty pasta, 
                                                our menu has something for everyone. 
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    Order Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6 ">
                                        <div class="detail-box">
                                            <h1>
                                                Fast Food Restaurant
                                            </h1>
                                            <p>
                                                We use only the freshest, highest-quality ingredients, and we offer our tasty 
                                                meals at prices that won't empty your wallet. So if you're looking for a fast 
                                                food experience that's truly satisfying, come visit us today and taste the 
                                                difference!
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn1">
                                                    Order Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <ol class="carousel-indicators">
                            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#customCarousel1" data-slide-to="1"></li>
                            <li data-target="#customCarousel1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>

            </section>
            <!-- end slider section -->
        </div>

        <!-- offer section -->

        <section class="offer_section layout_padding-bottom">
            <div class="offer_container">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6  ">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/o1.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Tasty Thursdays
                                    </h5>
                                    <h6>
                                        <span>20%</span> Off
                                    </h6>
                                    <a href="">
                                        Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                        <g>
                                        <g>
                                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                              c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                              C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                              c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                              C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                              c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  ">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/o2.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Pizza Days
                                    </h5>
                                    <h6>
                                        <span>15%</span> Off
                                    </h6>
                                    <a href="">
                                        Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                        <g>
                                        <g>
                                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                              c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                              C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                              c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                              C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                              c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end offer section -->

        <!-- food section -->

        <section class="food_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Menu
                    </h2>
                </div>

                <ul class="filters_menu">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".burger">Burger</li>
                    <li data-filter=".pizza">Pizza</li>
                    <li data-filter=".pasta">Pasta</li>
                    <li data-filter=".fries">Fries</li>
                </ul>

                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f1.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Seafood Pizza
                                        </h5>
                                        <p>
                                            Seafood pizza is a type of pizza that is topped with various types of seafood, such as shrimp, 
                                            calamari, clams, mussels, and sometimes even fish. It is typically made with a tomato-based sauce 
                                            and mozzarella cheese, but can also include other ingredients like garlic, onions, peppers, and 
                                            herbs. Seafood pizza is often associated with coastal regions and is a popular option for those 
                                            who enjoy the taste of seafood and pizza together.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM18
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 all burger">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f2.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Beef Burger
                                        </h5>
                                        <p>
                                            Beef burger consists of a beef patty that is typically cooked on a grill or griddle and placed 
                                            between two slices of bread, known as the bun. The patty is often seasoned with salt and pepper 
                                            and can be made from ground beef or other meats, such as bison or lamb. The burger can also be 
                                            topped with various ingredients, such as cheese, lettuce, tomato, onion, pickles, bacon, and 
                                            condiments like ketchup, mustard, or mayonnaise.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM12
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f3.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Margherita Pizza
                                        </h5>
                                        <p>
                                            Margherita pizza is a traditional Italian pizza that is made with simple ingredients.
                                            It typically consists of a thin, crispy crust that is topped with a tomato sauce, 
                                            fresh mozzarella cheese, and fresh basil leaves. The pizza is named after Queen Margherita of 
                                            Savoy, who visited Naples in the late 19th century and was served a pizza with the colors of 
                                            the Italian flag: red (tomato sauce), white (mozzarella cheese), and green (basil leaves).
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM16
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 all pasta">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f4.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Vegetarian Pasta
                                        </h5>
                                        <p>
                                            Vegetarian pizza made without meat or animal products. It typically consists of a crust that is topped with tomato sauce, cheese, and a variety of vegetables such as bell peppers, onions, mushrooms, olives, and tomatoes. Other popular toppings can include artichokes, spinach, broccoli, zucchini, and various herbs and spices. Vegetarian pizza is a popular option for those who follow a vegetarian diet, but it is also enjoyed by people who simply want to reduce their meat consumption or are looking for a healthier pizza option.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM12
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 all fries">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f5.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            French Fries
                                        </h5>
                                        <p>
                                            French fries, also known as chips or finger chips, are a popular snack or side dish made from thinly sliced potatoes that have been deep-fried until they are crispy and golden brown. They are origin from Belgium or France. They are typically served hot and salted, and can be eaten on their own or paired with ketchup, mayonnaise, or other dipping sauces. French fries are a popular fast food item and are commonly served in restaurants, food trucks, and at sporting events. They are enjoyed around the world and are a staple in many cultures.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM8
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="images/f6.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Mixed Pizza
                                        </h5>
                                        <p>
                                            Mixed pizza usually consisting of both meat and vegetables. The specific toppings can vary depending on the pizzeria or individual preference, but commonly used ingredients include sausage, pepperoni, ham, bell peppers, mushrooms, onions, and olives. Mixed pizza offers a range of flavors and textures, making it a popular option for those who want to try multiple toppings on their pizza. It can be served with a variety of sauces, such as tomato sauce or garlic butter, and is often topped with melted mozzarella cheese.
                                        </p>
                                        <div class="options">
                                            <h6>
                                                RM22
                                            </h6>
                                            <a href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                                      c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                                      C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                                      c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                                      C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                                      c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="menu.php">
                        View More
                    </a>
                </div>
            </div>
        </section>

        <!-- end food section -->

        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container  ">

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <img src="images/about-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Fast Food Restaurant
                                </h2>
                            </div>
                            <p>
                                With our convenient locations and lightning-fast service, you can enjoy your meal 
                                on-the-go or in the comfort of our welcoming dining area. But what really sets us 
                                apart is our commitment to quality and affordability. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

        <!-- client section -->

        <br><br><br>
        <section class="client_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container heading_center psudo_white_primary mb_45">
                    <h2>
                        Rating by our customers
                    </h2>
                </div>
                <div class="carousel-wrap row ">
                    <div class="owl-carousel client_owl-carousel">
                        <div class="item">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                       I had a fantastic experience at this fast food restaurant. 
                                       The food was delicious and fresh, and the service was incredibly
                                       fast and friendly. I especially appreciated the variety of menu
                                       options available. I would definitely recommend this restaurant 
                                       to anyone looking for a quick and tasty meal.
                                    </p>
                                    <h6>
                                        Cecelia Magana
                                    </h6>
                                </div>
                                <div class="img-box">
                                    <img src="images/client1.jpg" alt="" class="box-img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                        I've been a regular customer of this fast food restaurant for 
                                        years, and I continue to be impressed by the quality of the 
                                        food and the level of service. The staff is always polite and 
                                        efficient, and the restaurant is always clean and 
                                        well-maintained.  I highly recommend this restaurant 
                                        to anyone looking for a reliable and delicious fast food 
                                        experience.
                                    </p>
                                    <h6>
                                        Desmond White
                                    </h6>
                                </div>
                                <div class="img-box">
                                    <img src="images/client2.jpg" alt="" class="box-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end client section -->

        <!-- footer section -->
        <?php
        include "footer.php";
        ?>
        <!-- footer section -->

        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- owl slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- isotope js -->
        <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
        <!-- nice select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->

    </body>

</html>
