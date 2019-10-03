<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <title>Document</title>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item first" href="#">
                    <div class="trans"></div>
                    <span class="class_description"> Calendar </span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calendar.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Departments</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/museum.png" class="image_menu">
                    <!-- Departments -->
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Maps</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/marker.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">News Room</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/video_call.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Open Information</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/graph_report.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Connect</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/thumb_like.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Jobs</span>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/user.png" class="image_menu">
                </a>
            </nav>
        </div>
    </div>

    <div class="navbar-bottom">
        <ul class="nav">
            <li class="col-lg-5">
                <a href="#">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/saint-paul.png">
                </a>
                <!-- <a class="nav-link active" href="#">Active</a> -->
            </li>

            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">RESIDENT</a>
                <div class="dropdown-menu rounded-0">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a class="dropdown-item" href="#">Community Services</a>
                                <a class="dropdown-item" href="#">District Councils</a>
                                <a class="dropdown-item" href="#">Education</a>
                                <a class="dropdown-item" href="#">Fire & Paramedics</a>
                                <a class="dropdown-item" href="#">Housing & Properties</a>
                                <a class="dropdown-item" href="#">Getting Arround</a>
                                <a class="dropdown-item" href="#">Library</a>
                                <a class="dropdown-item" href="#">Live in Saint Paul</a>
                            </div>
                            <div class="col">
                                <a class="dropdown-item" href="#">Park & Recreation</a>
                                <a class="dropdown-item" href="#">Payment Center</a>
                                <a class="dropdown-item" href="#">Permits & Licenses</a>
                                <a class="dropdown-item" href="#">Police</a>
                                <a class="dropdown-item" href="#">Reycycling</a>
                                <a class="dropdown-item" href="#">Garbage</a>
                                <a class="dropdown-item" href="#">Road Closures</a>
                                <a class="dropdown-item" href="#">Utilities</a>
                                <a class="dropdown-item" href="#">Road Construction</a>
                                <a class="dropdown-item" href="#">Parking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">BUSSINESS</a>
                <div class="dropdown-menu rounded-0" id="bussiness">
                    <a class="dropdown-item" href="#">Open for Bussiness</a>
                    <a class="dropdown-item" href="#">Do Bussiness With Us</a>
                    <a class="dropdown-item" href="#">Permits & Licenses</a>
                </div>
            </li>
            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">GOVERMENT</a>
                <div class="dropdown-menu text-right dropdown-menu-right rounded-0" id="goverment">
                    <a class="dropdown-item" href="#">City Council</a>
                    <a class="dropdown-item" href="#">Mayor's Office</a>
                    <a class="dropdown-item" href="#">Departements</a>
                    <a class="dropdown-item" href="#">Employement</a>
                    <a class="dropdown-item" href="#">Budget</a>
                    <a class="dropdown-item" href="#">Code and Ordinances</a>
                    <a class="dropdown-item" href="#">District Councils</a>
                </div>
            </li>

            <li class="nav-item col-lg dropdown">
                <a class="nav-link " data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">VISITORS</a>
                <div class="dropdown-menu text-right dropdown-menu-right rounded-0" id="visitors">
                    <a class="dropdown-item" href="#">Getting Around</a>
                    <a class="dropdown-item" href="#">Library</a>
                    <a class="dropdown-item" href="#">Park & Recreation</a>
                    <a class="dropdown-item" href="#">Parking</a>
                    <a class="dropdown-item" href="#">VisitSaintPaul.com</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="wrap banner-image">
        <img sizes="100vw" src="https://www.stpaul.gov/sites/default/files/Media%20Root/wabasha%20bridge.jpg" srcset="https://www.stpaul.gov/sites/default/files/styles/banner__320_/public/Media%20Root/wabasha%20bridge.jpg?itok=05iSAlVc 320w, https://www.stpaul.gov/sites/default/files/styles/banner__640_/public/Media%20Root/wabasha%20bridge.jpg?itok=f3c0gFrC 640w, https://www.stpaul.gov/sites/default/files/styles/banner__800_/public/Media%20Root/wabasha%20bridge.jpg?itok=oZKjthmV 800w, https://www.stpaul.gov/sites/default/files/styles/banner__1024_/public/Media%20Root/wabasha%20bridge.jpg?itok=6hJnNZRl 1024w, https://www.stpaul.gov/sites/default/files/styles/banner__1280_/public/Media%20Root/wabasha%20bridge.jpg?itok=nohpGfgo 1280w, https://www.stpaul.gov/sites/default/files/styles/banner__1600_/public/Media%20Root/wabasha%20bridge.jpg?itok=6OFz_acr 1600w, https://www.stpaul.gov/sites/default/files/styles/banner__2000_/public/Media%20Root/wabasha%20bridge.jpg?itok=xmvdxmw4 2000w, https://www.stpaul.gov/sites/default/files/styles/banner__2500_/public/Media%20Root/wabasha%20bridge.jpg?itok=6hUfyNXk 2500w" alt="Wabasha Bridge at Dusk">
        <div class="block-content search-form-front">
            <div class="block block-search" id="block-search-form" role="search">
                <div class="block-content">
                    <form action="/" method="post" id="search-block-form" accept-charset="UTF-8">
                        <div>
                            <input type="hidden" name="form_build_id" value="form-8iS14kBpXXF9JZwmjIL7DSrUmsyvkFAFmGmXRmEOcXQ">
                            <input type="hidden" name="form_id" value="search_block_form">
                            <label for="edit-search-block-form--2" class="visuallyhidden">Search</label>
                            <input id="edit-search-block-form--2" name="search_block_form" type="search" placeholder="Search" data-apachesolr-autocomplete-id="search-block-form" class="input--small-padding input--search single-spaced apachesolr-autocomplete form-text ui-autocomplete-input form-autocomplete" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <button class="input--search-submit" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-391 303 8 8">
                                    <style>
                                        .st0 {
                                            fill: #a2a2a1
                                        }
                                    </style>
                                    <path class="st0" d="M-386.4 303c-1.9 0-3.5 1.6-3.5 3.5 0 .6.2 1.2.4 1.7-.1 0-.1.1-.2.1l-1 1-.1.1c-.4.4-.3 1.1.1 1.4.4.4 1.1.3 1.4-.1l1-1 .1-.1c.5.3 1.1.4 1.7.4 1.9 0 3.5-1.6 3.5-3.5s-1.5-3.5-3.4-3.5zm0 1c1.4 0 2.5 1.1 2.5 2.5s-1.1 2.5-2.5 2.5c-.6 0-1.2-.2-1.7-.6l-.1-.1c-.4-.5-.7-1.1-.7-1.7 0-1.5 1.1-2.6 2.5-2.6z">
                                    </path>
                                </svg><span class="visuallyhidden">Search</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap wrap--cta-home">
        <nav class="rwd_menu--cta-home container menu menu--horizontal menu--cta-home">
            <ul class="grid-columns">
                <li class="menu-item--light">
                    <a href="/departments/mayors-office">
                        <span class="menu-item__center">
                            <span class="menu-item__sub-text">Melvin Carter</span>
                            <span class="menu-item__text">
                                Mayor's Office <span class="icon--arrow-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.9 24.8">
                                        <path fill="#fff" d="M0 12.4c0 6.9 5.6 12.4 12.4 12.4 6.9 0 12.4-5.6 12.4-12.4C24.9 5.6 19.3 0 12.4 0 5.6 0 0 5.6 0 12.4zm18.7.4l-8.5 7.9-1.4-1.5 6.9-6.4-6.8-6.5 1.4-1.5 8.4 8z">
                                        </path>
                                    </svg></span>
                            </span>
                        </span>
                    </a>
                </li>
                <li class="menu-item--dark">
                    <a href="/departments/city-council">
                        <span class="menu-item__center">
                            <span class="menu-item__sub-text">Saint Paul</span>
                            <span class="menu-item__text">
                                City Council <span class="icon--arrow-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.9 24.8">
                                        <path fill="#fff" d="M0 12.4c0 6.9 5.6 12.4 12.4 12.4 6.9 0 12.4-5.6 12.4-12.4C24.9 5.6 19.3 0 12.4 0 5.6 0 0 5.6 0 12.4zm18.7.4l-8.5 7.9-1.4-1.5 6.9-6.4-6.8-6.5 1.4-1.5 8.4 8z">
                                        </path>
                                    </svg></span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="hotnews">
        <h2 class="page-title">What's Happening</h2>
        <div class="whatsHappening row text-white">
            <div class="col-md-4">
                <div class="card rounded-0 cardBlue">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/1.png" class="card-img-top" alt="1111">
                    <div class="card-body">
                        <h5 class="card-title">Citywide Drop-Off Events in September</h5>
                        <p class="card-text">Recycle electronics, bulky items and more at upcoming drop-off events on
                            Sept. 14 & 28. Open to all Saint Paul residents!</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card rounded-0 cardGrey">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/4.png" class="card-img-top" alt="4444">
                    <div class="card-body">
                        <h5 class="card-title">Fall Gathering & Halloween Events</h5>
                        <p class="card-text">Gather together with friends and neighbors to celebrate the season at Saint
                            Paul fall festivals, community bonfires, and Halloween events.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0 cardGrey">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/2.png" class="card-img-top" alt="222">
                    <div class="card-body">
                        <h5 class="card-title">Fall Activity Registration</h5>
                        <p class="card-text">Register for fall activities online, in person, or over the phone starting
                            Monday, August 5.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card rounded-0 cardGreen">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/5.png" class="card-img-top" alt="5555">
                    <div class="card-body">
                        <h5 class="card-title">Youth Basketball Registration</h5>
                        <p class="card-text">Youth basketball registration runs September 1-30. Save 10-25% when you
                            register Sept. 1-5!</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0 cardGreen">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/3.png" class="card-img-top" alt="333">
                    <div class="card-body">
                        <h5 class="card-title">Update on Citywide Garbage 8/23/19</h5>
                        <p class="card-text">Garbage collection will continue uninterrupted in the City of Saint Paul.
                            Residents will vote on Ordinance 18-23 on the November 5, 2019 general election ballot.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card rounded-0 cardBlue">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/6.png" class="card-img-top" alt="666">
                    <div class="card-body">
                        <h5 class="card-title">National Public Lands Day</h5>
                        <p class="card-text">Celebrate National Public Lands Day on September 28 at Hidden Falls. Try
                            fishing, climbing, archery, canoeing and more!</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="grid-column">
            <div class="column">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/stpaul.png" id="logo" />
            </div>
            <div class="column" id="information">
                <p>15 Kellogg Blvd. West | Saint Paul, MN 55102 | General Information: 651-266-8989</p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/border.png" style="width:50vw;max-width: 100%; height:auto;" />
                <ul id="links">
                    <li><a href="http://google.com">Home</a></li>
                    <li>&ensp;|&ensp;</li>
                    <li><a href="http://google.com">Translate</a></li>
                    <li>&ensp;|&ensp;</li>
                    <li><a href="http://google.com">Website Policies</a></li>
                    <li>&ensp;|&ensp;</li>
                    <li><a href="http://google.com">Local Tax Notification</a></li>
                    <li>&ensp;|&ensp;</li>
                    <li> <a href="http://google.com">Photo Credit</a></li>
                </ul>
            </div>
            <div class="column">
                <ul id="social">
                    <li class="social"><a href="http://facebook.com"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png"></a></li>
                    <li class="social"><a href="http://youtube.com"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/youtube.png"></a></li>
                    <li class="social"><a href="http://twitter.com"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/twitter.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        var div = document.getElementById("block-search-form");
        var media = window.matchMedia("(max-width: 865px)");

        function myMedia(screen) {
            if (screen.matches) {
                div.style.visibility = 'hidden';
            } else {
                div.style.visibility = 'visible';
            }
        }
        media.addListener(myMedia);
    </script>
</body>

</html>