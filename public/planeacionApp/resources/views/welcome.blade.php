<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

</head>

<body>

<!-- WRAPPER
=====================================================================================================================-->
<div class="ts-page-wrapper ts-homepage" id="page-top">

    <!--*********************************************************************************************************-->
    <!--HEADER **************************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header id="ts-header" class="fixed-top">

        <!-- SECONDARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-secondary-navigation" class="navbar p-0">
            <div class="container justify-content-end justify-content-sm-between">

                <!--Left Side-->
                <div class="navbar-nav d-none d-sm-block">
                    <!--Phone-->
                    <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +1 123 456 789
                        </span>
                    <!--Email-->
                    <a href="#">
                        <i class="fa fa-envelope mr-1"></i>
                        hello@example.com
                    </a>
                </div>

                <!--Right Side-->
                <div class="navbar-nav flex-row">

                    <!--Search Input-->
                    <input type="text" class="form-control p-2 border-left bg-transparent w-auto" placeholder="Search">

                    <!--Currency Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left" id="currency" name="currency">
                        <option value="1">GBP</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                    </select>

                    <!--Language Select-->
                    <select class="custom-select bg-transparent ts-text-small border-left border-right" id="language" name="language">
                        <option value="1">EN</option>
                        <option value="2">FR</option>
                        <option value="3">DE</option>
                    </select>

                </div>
                <!--end navbar-nav-->
            </div>
            <!--end container-->
        </nav>

        <!--PRIMARY NAVIGATION
        =============================================================================================================-->
        <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
            <div class="container">

                <!--Brand Logo-->
                <a class="navbar-brand" href="index-map-leaflet-fullscreen.html">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <!--Responsive Collapse Button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Collapsing Navigation-->
                <div class="collapse navbar-collapse" id="navbarPrimary">

                    <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav">

                        <!--HOME (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link active" href="#">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- MAP (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Map</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <!-- OPENSTREETMAP (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">OpenStreetMap</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-leaflet-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end OpenStreetMap-->

                                        <!-- MAPBOX (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">MapBox</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-mapbox-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end MapBox-->

                                        <!-- GOOGLE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Google</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-google-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-google-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Google-->

                                        <!-- HERE (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Here</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-here-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-here-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Here-->

                                        <!-- BING (2nd level level)
                                        =============================================================================-->
                                        <li class="nav-item ts-has-child">

                                            <a href="#" class="nav-link">Bing</a>

                                            <!--List (3rd level) -->
                                            <ul class="ts-child">

                                                <li class="nav-item">
                                                    <a href="index-map-bing-fullscreen.html" class="nav-link">Full Screen</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-form-bottom.html" class="nav-link">Form Bottom</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-half-map.html" class="nav-link">Half Map</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="index-map-bing-left-results.html" class="nav-link">Left Results</a>
                                                </li>

                                            </ul>

                                        </li>
                                        <!--end Bing-->

                                    </ul>
                                    <!--end List (2nd level)-->

                                </li>
                                <!--end MAP (1st level)-->

                                <!-- SLIDER (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Slider</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-slider.html" class="nav-link">Slider Default</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-vertical.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-slider-form-horizontal.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                                <!-- IMAGE (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Image</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="index-image-form-horizontal-dark.html" class="nav-link">Horizontal Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-form-vertical-light.html" class="nav-link">Vertical Form</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-image-fullscreen.html" class="nav-link">Full Screen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-video-background.html" class="nav-link">Video Background</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end SLIDER (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end HOME nav-item-->

                        <!--LISTING (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Listing</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- CATEGORY ICONS (1st level)
                                =====================================================================================-->
                                <li class="nav-item">

                                    <a href="listing-category-icons.html" class="nav-link">Category Icons</a>

                                </li>
                                <!--end CATEGORY ICONS (1st level)-->

                                <!-- GRID (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Grid</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-grid-3-columns.html" class="nav-link">Grid 3 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-4-columns.html" class="nav-link">Grid 4 Columns</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-mixed.html" class="nav-link">Mixed</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-grid-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end GRID (1st level)-->

                                <!-- LIST (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">List</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-left.html" class="nav-link">Sidebar Left</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-sidebar-right.html" class="nav-link">Sidebar Right</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="listing-list-compact-sidebar.html" class="nav-link">Compact with Sidebar</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Property</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="detail-01.html" class="nav-link">Property Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-02.html" class="nav-link">Property Detail v2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="detail-03.html" class="nav-link">Property Detail v3</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end PROPERTY (1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end LISTING nav-item-->

                        <!--PAGES (Main level)
                        =============================================================================================-->
                        <li class="nav-item ts-has-child">

                            <!--Main level link-->
                            <a class="nav-link" href="#">Pages</a>

                            <!-- List (1st level) -->
                            <ul class="ts-child">

                                <!-- AGENCY (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agency</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agencies List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agency-detail.html" class="nav-link">Agency Detail</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end AGENCY (1st level)-->

                                <!-- AGENTS (1st level)
                                =====================================================================================-->
                                <li class="nav-item ts-has-child">

                                    <a href="#" class="nav-link">Agents</a>

                                    <!--List (2nd level) -->
                                    <ul class="ts-child">

                                        <li class="nav-item">
                                            <a href="agencies-list.html" class="nav-link">Agents List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-01.html" class="nav-link">Agent Detail v1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="agent-detail-02.html" class="nav-link">Agent Detail v2</a>
                                        </li>

                                    </ul>
                                    <!--end List (2nd level) -->

                                </li>
                                <!--end LIST (1st level)-->

                                <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="edit-property.html" class="nav-link">Edit Property</a>
                                </li>
                                <!--end EDIT PROPERTY (1st level)-->

                                <!-- FAQ (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <!--end FAQ (1st level)-->

                                <!-- LOGIN (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login</a>
                                </li>
                                <!--end LOGIN (1st level)-->

                                <!-- PRICING (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <!--end PRICING (1st level)-->

                                <!-- REGISTER (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">Register</a>
                                </li>
                                <!--end REGISTER (1st level)-->

                                <!-- SUBMIT (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submit.html" class="nav-link">Submit Property</a>
                                </li>
                                <!--end SUBMIT (1st level)-->

                                <!-- SUBMIT PREVIEW (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="preview.html" class="nav-link">Submit Preview</a>
                                </li>
                                <!--end SUBMIT PREVIEW (1st level)-->

                                <!-- SUBMITTED (1st level)
                                =====================================================================================-->
                                <li class="nav-item">
                                    <a href="submitted.html" class="nav-link">Submitted</a>
                                </li>
                                <!--end SUBMITTED(1st level)-->

                            </ul>
                            <!--end List (1st level) -->

                        </li>
                        <!--end PAGES nav-item-->

                        <!--ABOUT US (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.html">About Us</a>
                        </li>
                        <!--end ABOUT US nav-item-->

                        <!--CONTACT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="contact.html">Contact</a>
                        </li>
                        <!--end CONTACT nav-item-->

                    </ul>
                    <!--end Left navigation main level-->

                    <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                    <ul class="navbar-nav ml-auto">

                        <!--LOGIN (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>

                        <!--REGISTER (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="register.html">Register</a>
                        </li>

                        <!--SUBMIT (Main level)
                        =============================================================================================-->
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm m-1 px-3" href="submit.html">
                                <i class="fa fa-plus small mr-2"></i>
                                Add Property
                            </a>
                        </li>

                    </ul>
                    <!--end Right navigation-->

                </div>
                <!--end navbar-collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end #ts-primary-navigation.navbar-->

    </header>
    <!--end Header-->

    <!-- HERO MAP
    =================================================================================================================-->
    <section id="ts-hero" class=" mb-0">

        <!--Fullscreen mode-->
        <div class="ts-full-screen d-flex">

            <!-- MAP
            =========================================================================================================-->
            <div class="ts-map w-100">
                <div id="ts-map-hero" class="h-100"
                     data-ts-map-controls="1"
                     data-ts-map-zoom="13"
                     data-ts-map-center-latitude="7.908843"
                     data-ts-map-center-longitude="-72.5456202"
                     data-ts-map-zoom-position="google.maps.ControlPosition.LEFT_TOP"
                     data-ts-google-map-style='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e9e9e9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#deebd8"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#c4e5f3"},{"visibility":"on"}]}]'
                     data-ts-locale="en-US"
                     data-ts-currency="USD"
                     data-ts-unit="m<sup>2</sup>"
                     data-ts-display-additional-info="cupos_Cupos"
                >
                </div>
            </div>

            <!-- RESULTS
            =========================================================================================================-->
            <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white">

                <!-- FORM
                =====================================================================================================-->
                <section class="ts-form__grid" data-bg-color="#f6f6f6">

                    <!--Title-->
                    <h4 class="font-weight-normal ts-text-color-light">Search Filter</h4>

                    <!--Form-->
                    <form class="ts-form ts-box mb-0">
                        <div class="form-row">

                            <!--Keyword-->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Address, City or ZIP">
                                </div>
                            </div>

                            <!--Category-->
                            <div class="col-md-3">
                                <select class="custom-select mb-3" id="type" name="category">
                                    <option value="">Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Villa</option>
                                    <option value="3">Land</option>
                                    <option value="4">Garage</option>
                                </select>
                            </div>

                            <!--Status-->
                            <div class="col-md-3">
                                <select class="custom-select mb-3" id="status" name="status">
                                    <option value="">Status</option>
                                    <option value="1">Sale</option>
                                    <option value="2">Rent</option>
                                </select>
                            </div>

                            <!--Min Area-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="min-area" placeholder="Min Area">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>

                            <!--Max Area-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="max-area" placeholder="Max Area">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>

                            <!--Min Price-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="min-price" placeholder="Min Price">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">$</span>
                                    </div>
                                </div>
                            </div>

                            <!--Max Price-->
                            <div class="col-sm-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-right-0" id="max-price" placeholder="Max Price">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white border-left-0">$</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="ts-center__vertical justify-content-between">
                            <!--More Options Button-->
                            <a href="#more-options-collapse" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="more-options-collapse">
                                <i class="fa fa-plus-circle ts-text-color-primary mr-2 ts-visible-on-collapsed"></i>
                                <i class="fa fa-minus-circle ts-text-color-primary mr-2 ts-visible-on-uncollapsed"></i>
                                More Options
                            </a>

                            <!--Submit button-->
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary w-100" id="search-btn">Search</button>
                            </div>

                        </div>

                        <!--Hidden Form-->
                        <div class="collapse" id="more-options-collapse">

                            <!--Padding-->
                            <div class="pt-4">

                                <!--Row-->
                                <div class="form-row">

                                    <!--Bedrooms-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bedrooms">Bedrooms</label>
                                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="0">
                                        </div>
                                    </div>

                                    <!--Bathrooms-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bathrooms">Bathrooms</label>
                                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" min="0">
                                        </div>
                                    </div>

                                </div>
                                <!--end row-->

                                <!--Checkboxes-->
                                <div id="features-checkboxes" class="w-100">
                                    <h6 class="mb-3">Features</h6>

                                    <div class="ts-column-count-3">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_1" name="features[]" value="ch_1">
                                            <label class="custom-control-label" for="ch_1">Air conditioning</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_2" name="features[]" value="ch_2">
                                            <label class="custom-control-label" for="ch_2">Bedding</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_3" name="features[]" value="ch_3">
                                            <label class="custom-control-label" for="ch_3">Heating</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_4" name="features[]" value="ch_4">
                                            <label class="custom-control-label" for="ch_4">Internet</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_5" name="features[]" value="ch_5">
                                            <label class="custom-control-label" for="ch_5">Microwave</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_6" name="features[]" value="ch_6">
                                            <label class="custom-control-label" for="ch_6">Smoking
                                                allowed</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_7" name="features[]" value="ch_7">
                                            <label class="custom-control-label" for="ch_7">Terrace</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_8" name="features[]" value="ch_8">
                                            <label class="custom-control-label" for="ch_8">Balcony</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_9" name="features[]" value="ch_9">
                                            <label class="custom-control-label" for="ch_9">Iron</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_10" name="features[]" value="ch_10">
                                            <label class="custom-control-label" for="ch_10">Hi-Fi</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_11" name="features[]" value="ch_11">
                                            <label class="custom-control-label" for="ch_11">Beach</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_12" name="features[]" value="ch_12">
                                            <label class="custom-control-label" for="ch_12">Parking</label>
                                        </div>

                                    </div>
                                    <!--end ts-column-count-3-->

                                </div>
                                <!--end #features-checkboxes-->

                            </div>
                            <!--end Padding-->
                        </div>
                        <!--end more-options-collapse-->
                    </form>
                    <!--end ts-form-->
                </section>
                <!--end ts-form__grid-->

                <!-- TITLE and CONTROLS
                =====================================================================================================-->

                <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                    <h4 class="font-weight-normal ts-text-color-light mb-0">28 Properties Found</h4>

                    <div id="display-control" class="d-none d-md-block">

                        <a href="#" class="btn btn-outline-secondary active px-3 mr-2 mb-2 ts-btn-border-muted">
                            <i class="fa fa-th-large"></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary px-3 mb-2 ts-btn-border-muted">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>

                </section>

                <!-- RESULTS
                =====================================================================================================-->
                <section id="ts-results" class="h-100">
                    <div class="ts-results-wrapper"></div>
                </section>

            </div>
            <!--end ts-results-vertical-->

        </div>
        <!--end full-screen-->

    </section>
    <!--end ts-hero-->

    <!--*********************************************************************************************************-->
    <!-- MAIN ***************************************************************************************************-->
    <!--*********************************************************************************************************-->

    <main id="ts-main">

        <!-- FEATURED PROPERTIES
        =============================================================================================================-->
        <section id="featured-properties" class="ts-block pt-5">
            <div class="container">

                <!--Title-->
                <div class="ts-title text-center">
                    <h2>Featured Properties</h2>
                </div>

                <div class="row">

                    <!--Item-->
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-01.jpg">
                                <div class="ts-item__info-badge">
                                    $350,000
                                </div>
                                <figure class="ts-item__info">
                                    <h4>Big Luxury Apartment</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->
                            <div class="ts-ribbon-corner">
                                <span>Updated</span>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-02.jpg">
                                <figure class="ts-item__info">
                                    <h4>Cozy Design Studio</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4831 Worthington Drive
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$125,000</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-03.jpg">
                                <figure class="ts-item__info">
                                    <h4>Family Villa</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4127 Winding Way
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$45,900</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                </div>
                <!--end row-->

                <!--All properties button-->
                <div class="text-center mt-3">
                    <a href="listing-category-icons.html" class="btn btn-outline-dark ts-btn-border-muted">Show All Properties</a>
                </div>

            </div>
            <!--end container-->
        </section>

        <!-- FEATURES
        =============================================================================================================-->
        <section class="ts-block bg-white">
            <div class="container py-4">
                <div class="row">

                    <!--Feature-->
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-feature">

                            <figure class="ts-feature__icon p-2">
                                    <span class="ts-circle">
                                        <i class="fa fa-check"></i>
                                    </span>
                                <img src="assets/img/icon-house.png" alt="">
                            </figure>

                            <h4>Properties at Great Prices</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        </div>
                    </div>

                    <!--Feature-->
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-feature">

                            <figure class="ts-feature__icon p-2">
                                    <span class="ts-circle">
                                        <i class="fa fa-check"></i>
                                    </span>
                                <img src="assets/img/icon-pin.png" alt="">
                            </figure>

                            <h4>Everything on One Place</h4>

                            <p>In dictum ac augue et suscipit. Vivamus ac tellus ut massa</p>

                        </div>
                    </div>

                    <!--Feature-->
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-feature">

                            <figure class="ts-feature__icon p-2">
                                    <span class="ts-circle">
                                        <i class="fa fa-check"></i>
                                    </span>
                                <img src="assets/img/icon-agent.png" alt="">
                            </figure>

                            <h4>Local Agents</h4>

                            <p>Vivamus ac tellus ut massa bibendum aliquam vitae ac diam. </p>

                        </div>
                    </div>

                    <!--Feature-->
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-feature">

                            <figure class="ts-feature__icon p-2">
                                    <span class="ts-circle">
                                        <i class="fa fa-check"></i>
                                    </span>
                                <img src="assets/img/icon-calculator.png" alt="">
                            </figure>

                            <h4>Free Mortgage Calculation</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-block-->

        <!-- SUBSCRIBE
        =============================================================================================================-->
        <section id="subscribe" class="ts-block text-white ts-separate-bg-element" data-bg-image="assets/img/bg-offices.jpg" data-bg-color="#000" data-bg-image-opacity=".3">
            <div class="container">
                <div class="offset-lg-1 col-lg-10">

                    <h3 class="font-weight-light">Subscribe for great offers!</h3>

                    <form class="ts-form ts-form-email" data-php-path="assets/php/email.php">
                        <div class="row">

                            <!--Input-->
                            <div class="col-sm-8 col-md-10">
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe" name="email" placeholder="Email Address" required>
                                    <small class="form-text mt-2 ts-opacity__50">*You’ll get only relevant news once a week </small>
                                </div>
                            </div>

                            <!--Button-->
                            <div class="col-sm-4 col-md-2">
                                <button type="submit" class="btn btn-outline-light w-100">Submit</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </section>

        <!--LATEST LISTINGS
        =============================================================================================================-->
        <section id="latest-listings" class="ts-block">
            <div class="container">

                <!--Title-->
                <div class="ts-title">
                    <h2>Latest Listings</h2>
                </div>

                <!--Row-->
                <div class="row">

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-01.jpg">
                                <div class="ts-item__info-badge">
                                    $350,000
                                </div>
                                <figure class="ts-item__info">
                                    <h4>Big Luxury Apartment</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Ribbon-->
                            <div class="ts-ribbon-corner">
                                <span>Updated</span>
                            </div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-02.jpg">
                                <figure class="ts-item__info">
                                    <h4>Cozy Design Studio</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4831 Worthington Drive
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$125,000</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-03.jpg">
                                <figure class="ts-item__info">
                                    <h4>Family Villa</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4127 Winding Way
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$45,900</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-04.jpg">
                                <div class="ts-item__info-badge">
                                    $860,000
                                </div>
                                <figure class="ts-item__info">
                                    <h4>Traditional Restaurant</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-05.jpg">
                                <figure class="ts-item__info">
                                    <h4>White Cubes Resort</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4831 Worthington Drive
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$435,000</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-06.jpg">
                                <figure class="ts-item__info">
                                    <h4>Bristol Tower Complex</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4127 Winding Way
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">$85,900</div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-07.jpg">
                                <figure class="ts-item__info">
                                    <h4>River Apartments</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">
                                    $120,000
                                </div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <div class="badge badge-dark">Rent</div>

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-08.jpg">
                                <figure class="ts-item__info">
                                    <h4>Apartment for Rent</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        4831 Worthington Drive
                                    </aside>
                                </figure>
                                <div class="ts-item__info-badge">
                                    <span>$480</span>
                                    <small>/ month</small>
                                </div>
                            </a>

                            <!--Card Body-->
                            <div class="card-body ts-item__body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item ts-card-->
                    </div>
                    <!--end Item col-md-4-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--PRICING
        =============================================================================================================-->
        <section id="pricing" class="ts-block pt-0">
            <div class="container">

                <!--Title-->
                <div class="ts-title text-center">
                    <h2 class="mb-5">Affordable Prices</h2>
                </div>

                <!--Row-->
                <div class="row no-gutters ts-cards-same-height">

                    <!--Price Box-->
                    <div class="col-sm-4 col-lg-4">
                        <div class="card text-center ts-price-box">

                            <!--Header-->
                            <div class="card-header" data-bg-color="#dadada">
                                <h5 class="text-white" data-bg-color="#000296">Basic</h5>
                                <div class="ts-title">
                                    <h3 class="font-weight-normal">Free</h3>
                                    <small class="ts-opacity__50">Forever</small>
                                </div>
                            </div>

                            <!--Body-->
                            <div class="card-body p-0 border-bottom-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">1 Property</li>
                                    <li class="list-group-item">1 Agent Profile</li>
                                    <li class="list-group-item ts-na"><s>Agency Profile</s></li>
                                    <li class="list-group-item ts-na"><s>Featured Properties</s></li>
                                </ul>
                            </div>

                            <!--Footer-->
                            <div class="card-footer bg-transparent pt-0 border-0">
                                <a href="#" class="btn btn-outline-primary">Select Now</a>
                            </div>

                        </div>
                    </div>
                    <!--end price-box-->

                    <!--Price Box Promoted-->
                    <div class="col-sm-4 col-lg-4">
                        <div class="card text-center ts-price-box ts-price-box__promoted">

                            <!--Header-->
                            <div class="card-header" data-bg-color="#00004c">
                                <h5 class="text-white ts-bg-primary">Premium</h5>
                                <div class="ts-title text-white">
                                    <h3 class="font-weight-normal">
                                        <sup>$</sup>9,99
                                    </h3>
                                    <small class="ts-opacity__50">per month</small>
                                </div>
                            </div>

                            <!--Body-->
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">20 Properties</li>
                                    <li class="list-group-item">10 Agent Profiles</li>
                                    <li class="list-group-item">5 Agency Profiles</li>
                                    <li class="list-group-item">Featured Properties</li>
                                </ul>
                            </div>

                            <!--Footer-->
                            <div class="card-footer bg-transparent pt-0 border-0">
                                <a href="#" class="btn btn-primary">Select Now</a>
                            </div>

                        </div>
                    </div>
                    <!--end price-box-->

                    <!--Price Box-->
                    <div class="col-sm-4 col-lg-4">
                        <div class="card text-center ts-price-box">

                            <!--Header-->
                            <div class="card-header" data-bg-color="#dadada">
                                <h5 class="text-white" data-bg-color="#000296">Professional</h5>
                                <div class="ts-title">
                                    <h3 class="font-weight-normal">
                                        <sup>$</sup>19,99
                                    </h3>
                                    <small class="ts-opacity__50">Per Month</small>
                                </div>
                            </div>

                            <!--Body-->
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Unlimited Properties</li>
                                    <li class="list-group-item">Unlimited Agent Profiles</li>
                                    <li class="list-group-item">Unlimited Agency Profiles</li>
                                    <li class="list-group-item">Featured Properties</li>
                                </ul>
                            </div>

                            <!--Footer-->
                            <div class="card-footer bg-transparent pt-0 border-0">
                                <a href="#" class="btn btn-outline-primary">Select Now</a>
                            </div>

                        </div>
                    </div>
                    <!--end price-box-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

        <!--ITEM CAROUSEL
        =============================================================================================================-->
        <section class="ts-block" data-bg-pattern="assets/img/bg-pattern-dot.png">

            <!--Title-->
            <div class="ts-title text-center">
                <h2>Our Top Picks</h2>
            </div>

            <!--Carousel-->
            <div class="owl-carousel ts-items-carousel" data-owl-items="5" data-owl-dots="1">

                <!--Item-->
                <div class="slide">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        <div class="ts-ribbon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-01.jpg">
                            <div class="ts-item__info-badge">
                                $350,000
                            </div>
                            <figure class="ts-item__info">
                                <h4>Big Luxury Apartment</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        <div class="ts-ribbon-corner">
                            <span>Updated</span>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-02.jpg">
                            <figure class="ts-item__info">
                                <h4>Cozy Design Studio</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$125,000</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-03.jpg">
                            <figure class="ts-item__info">
                                <h4>Family Villa</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4127 Winding Way
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$45,900</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-04.jpg">
                            <div class="ts-item__info-badge">
                                $860,000
                            </div>
                            <figure class="ts-item__info">
                                <h4>Traditional Restaurant</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-05.jpg">
                            <figure class="ts-item__info">
                                <h4>White Cubes Resort</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$435,000</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-06.jpg">
                            <figure class="ts-item__info">
                                <h4>Bristol Tower Complex</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4127 Winding Way
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$85,900</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-07.jpg">
                            <figure class="ts-item__info">
                                <h4>River Apartments</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">
                                $120,000
                            </div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end slide-->

                <!--Item-->
                <div class="slide">
                    <div class="card ts-item ts-card ts-item__lg">

                        <div class="badge badge-primary">Rent</div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image" data-bg-image="assets/img/img-item-thumb-08.jpg">
                            <figure class="ts-item__info">
                                <h4>Apartment for Rent</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">
                                <span>$480</span>
                                <small>/ month</small>
                            </div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end slide-->


            </div>
        </section>
        <!--end ts-block-->

        <!--SUBMIT BANNER
        =============================================================================================================-->
        <section id="submit-banner" class="ts-block">
            <div class="container">

                <div class="ts-block-inside text-center ts-separate-bg-element text-white" data-bg-image-opacity=".4" data-bg-image="assets/img/bg-chair.jpg" data-bg-color="#000">
                    <figure class="h1 font-weight-light mb-2">Have Some Property For Sale?</figure>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <a href="submit.html" class="btn btn-light">Submit Your Own</a>
                </div>

            </div>
        </section>

        <!--PARTNERS
        =============================================================================================================-->
        <section id="partners" class="ts-block pt-4 pb-0">
            <div class="container">

                <!--Logos-->
                <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners py-3">

                    <a href="#">
                        <img src="assets/img/logo-01.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-02.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-03.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-04.png" alt="">
                    </a>

                    <a href="#">
                        <img src="assets/img/logo-05.png" alt="">
                    </a>

                </div>
                <!--end logos-->
            </div>
        </section>

    </main>

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->

    <footer id="ts-footer">

        <!--MAIN FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-main">
            <div class="container">
                <div class="row">

                    <!--Brand and description-->
                    <div class="col-md-6">
                        <a href="#" class="brand">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat tempor sapien.
                            In lobortis posuere tincidunt. Curabitur malesuada tempus ligula nec maximus. Nam tortor
                            arcu,
                            tincidunt quis molestie non, sagittis dignissim ligula. Fusce est ipsum, pharetra in felis
                            ac,
                            lobortis volutpat diam.
                        </p>
                        <a href="#" class="btn btn-outline-dark mb-4">Contact Us</a>
                    </div>

                    <!--Navigation-->
                    <div class="col-md-2">
                        <h4>Navigation</h4>
                        <nav class="nav flex-row flex-md-column mb-4">
                            <a href="#" class="nav-link">Home</a>
                            <a href="#" class="nav-link">Listing</a>
                            <a href="#" class="nav-link">About Us</a>
                            <a href="#" class="nav-link">Sign In</a>
                            <a href="#" class="nav-link">Register</a>
                            <a href="#" class="nav-link">Submit Property</a>
                        </nav>
                    </div>

                    <!--Contact Info-->
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <address class="ts-text-color-light">
                            2590 Rocky Road
                            <br>
                            Philadelphia, PA 19108
                            <br>
                            <strong>Email: </strong>
                            <a href="#" class="btn-link">office@example.com</a>
                            <br>
                            <strong>Phone:</strong>
                            +1 215-606-0391
                            <br>
                            <strong>Skype: </strong>
                            real.estate1
                        </address>
                    </div>

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-main-->

        <!--SECONDARY FOOTER CONTENT
        =============================================================================================================-->
        <section id="ts-footer-secondary">
            <div class="container">

                <!--Copyright-->
                <div class="ts-copyright">(C) 2018 ThemeStarz, All rights reserved</div>

                <!--Social Icons-->
                <div class="ts-footer-nav">
                    <nav class="nav">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </nav>
                </div>
                <!--end ts-footer-nav-->

            </div>
            <!--end container-->
        </section>
        <!--end ts-footer-secondary-->

    </footer>
    <!--end #ts-footer-->

</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js"></script>
<script src="assets/js/richmarker-compiled.js"></script>
<script src="assets/js/markerclusterer_packed.js"></script>
<script src="assets/js/infobox.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/dragscroll.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/map-google.js"></script>

</body>
</html>