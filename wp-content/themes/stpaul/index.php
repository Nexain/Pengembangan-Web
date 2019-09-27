<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?> /style.css">
    <title>Document</title>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item first" href="#">
                    <div class="trans"></div>
                    <span class="class_description"> Calendar </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Departments</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/museum.png" class="image_menu">
                    <!-- Departments -->
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Maps</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marker.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">News Room</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/video_call.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Open Information</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/graph_report.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Connect</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/thumb_like.png" class="image_menu">
                </a>
                <a class="blog-nav-item" href="#">
                    <span class="class_description">Jobs</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/user.png" class="image_menu">
                </a>
            </nav>
        </div>
    </div>

    <nav>
        <ul class="nav">
            <li class="col-lg-5">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/saint-paul.png">
                </a>
                <!-- <a class="nav-link active" href="#">Active</a> -->
            </li>
            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">RESIDENT</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Community Services</a>
                    <a class="dropdown-item" href="#">District Councils</a>
                    <a class="dropdown-item" href="#">Education</a>
                    <a class="dropdown-item" href="#">Fire & Paramedics</a>
                    <a class="dropdown-item" href="#">Housing & Properties</a>
                    <a class="dropdown-item" href="#">Getting Arround</a>
                    <a class="dropdown-item" href="#">Library</a>
                    <a class="dropdown-item" href="#">Live in Saint Paul</a>
                </div>
            </li>
            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">BUSSINESS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Open for Bussiness</a>
                    <a class="dropdown-item" href="#">Do Bussiness With Us</a>
                    <a class="dropdown-item" href="#">Permits & Licenses</a>
                </div>
            </li>
            <li class="nav-item col-lg dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">GOVERMENT</a>
                <div class="dropdown-menu text-right">
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
                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">VISITORS</a>
                <div class="dropdown-menu text-right">
                    <a class="dropdown-item" href="#">Getting Around</a>
                    <a class="dropdown-item" href="#">Library</a>
                    <a class="dropdown-item" href="#">Park & Recreation</a>
                    <a class="dropdown-item" href="#">Parking</a>
                    <a class="dropdown-item" href="#">VisitSaintPaul.com</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="bungkus">
        <img src="<?php echo get_template_directory_uri(); ?>/images/0.png" alt="000">
        <form action="">
            <input type="text" class="form-control-lg" placeholder="Search" style="text-align: center">
        </form>

        <div class="row bottom-bungkus">
            <div class="col-sm-6 kiri">
                <a href="" id="bungkus">
                    <!-- <span class="menu-item--center">
                        <span class="menu-item--sub-text">
                            Melvin Carter
                        </span>
                        <span class="menu-item--text">
                            Mayor's Office
                        </span>
                    </span> -->
                    <span class="menu-item--center">
                        <ul>
                            <li id="subitem">Melvin Carter</li>
                            <li id="item">Mayor's Office ></li>
                        </ul>
                    </span>
                </a>
            </div>
            <div class="col-sm-6 kanan">
                <a href="" id="bungkus">
                    <!-- <span class="menu-item--center">
                        <span class="menu-item--sub-text">
                            Saint Paul
                        </span>
                        <span class="menu-item--text">
                            City Council
                        </span>
                    </span> -->
                    <ul>
                        <li id="subitem">Saint Paul</li>
                        <li id="item">City Council ></li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="block-content search-from-front">
            <div id="block-search-form" class="block block-search" role="search">
                <div class="block-content">
                    <form id="search-block-form" action="/" method="post" accept="UTF-8">
                        <div> -->
    <!-- <input id="search-banner" type="text" class="form-control-lg" placeholder="Search" style="text-align: center"> -->
    <!-- <i class="fa-search" aria-hidden="true"></i> -->
    <!-- <button class="input--search-submit" type="submit">
                                <span class="visuallyhidden">Search</span>
                            </button> -->

    <!-- <input type="hidden" name="form_build_id" value="form-uduwrG5HGgSvdXFkZU86TX26QQGkz_S3YOthn6knkbw">
                            <input type="hidden" name="form_id" value="search_block_form"> -->
    <!-- <label for="edit-search-block-form--2" class="visuallyhidden">Search</label>
                            <input id="edit-search-block-form--2" name="search_block_form" type="search" placeholder="Search" class="input--small-padding input--search">
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    <!-- <div class="button-bottom-banner menu">
            <ul class="grid-columns">
                <li class="menu-item--light">
                    <a href="">
                        <span class="menu-item--center">
                            <span class="menu-item--sub-text">
                                Melvin Carter
                            </span>
                            <span class="menu-item--text">
                                Mayor's Office 
                            </span>
                        </span>
                    </a>
                </li>
                <li class="menu-item--dark">
                    <a href="">
                        <span class="menu-item--center">
                            <span class="menu-item--sub-text">
                            Saint Paul
                            </span>
                            <span class="menu-item--text">
                            City Council 
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div> -->
    <!-- <div class="button-bottom-banner">
            <div class="col-sm-6 kiri">
                <div class="sub-kiri">
                    <a href="">
                        <span class="menu-item--center">
                            <span class="menu-item--sub-text">
                                Melvin Carter
                            </span>
                            <span class="menu-item--text">
                                Mayor's Office
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 kanan">
                <div class="sub-kanan">
                    <a href="">
                        <span class="menu-item--center">
                            <span class="menu-item--sub-text">
                                Saint Paul
                            </span>
                            <span class="menu-item--text">
                                City Council
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->

    <div class="hotnews">
        <h2 class="page-title">What's Happening</h2>
        <div class="whatsHappening row text-white">
            <div class="col-md-4">
                <div class="card rounded-0 cardBlue">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/1.png" class="card-img-top" alt="1111">
                    <div class="card-body">
                        <h5 class="card-title">Citywide Drop-Off Events in September</h5>
                        <p class="card-text">Recycle electronics, bulky items and more at upcoming drop-off events on Sept. 14 & 28. Open to all Saint Paul residents!</p>
                    </div>
                </div>
                <div class="card rounded-0 cardGrey">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/4.png" class="card-img-top" alt="4444">
                    <div class="card-body">
                        <h5 class="card-title">Fall Gathering & Halloween Events</h5>
                        <p class="card-text">Gather together with friends and neighbors to celebrate the season at Saint Paul fall festivals, community bonfires, and Halloween events.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0 cardGrey">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/2.png" class="card-img-top" alt="222">
                    <div class="card-body">
                        <h5 class="card-title">Fall Activity Registration</h5>
                        <p class="card-text">Register for fall activities online, in person, or over the phone starting Monday, August 5.</p>
                    </div>
                </div>
                <div class="card rounded-0 cardGreen">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/5.png" class="card-img-top" alt="5555">
                    <div class="card-body">
                        <h5 class="card-title">Youth Basketball Registration</h5>
                        <p class="card-text">Youth basketball registration runs September 1-30. Save 10-25% when you register Sept. 1-5!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-0 cardGreen">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" class="card-img-top" alt="333">
                    <div class="card-body">
                        <h5 class="card-title">Update on Citywide Garbage 8/23/19</h5>
                        <p class="card-text">Garbage collection will continue uninterrupted in the City of Saint Paul. Residents will vote on Ordinance 18-23 on the November 5, 2019 general election ballot.</p>
                    </div>
                </div>
                <div class="card rounded-0 cardBlue">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/6.png" class="card-img-top" alt="666">
                    <div class="card-body">
                        <h5 class="card-title">National Public Lands Day</h5>
                        <p class="card-text">Celebrate National Public Lands Day on September 28 at Hidden Falls. Try fishing, climbing, archery, canoeing and more!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="grid-column">
            <div class="column">
                <img src="<?php echo get_template_directory_uri(); ?>/images/stpaul.PNG" id="logo" />
            </div>
            <div class="column" id="information">
                <p>15 Kellogg Blvd. West | Saint Paul, MN 55102 | General Information: 651-266-8989</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/border.PNG" style="width:50vw;max-width: 100%; height:auto;" />
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
                    <li><a href="http://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a></li>
                    <li><a href="http://youtube.com"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a></li>
                    <li><a href="http://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>