<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Fireup - <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
</head>

<body>

    <header>
        <div class="bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-lg-5">
                        <div class="d-flex align-items-center">
                            <a href="index.php"><img src="images/logo.png" class="img-fluid logo" alt="logo"></a>
                            <button type="button" class="simple mx-4 menu js-menu x" id="borgir">
                                <span class="line top"></span>
                                <span class="line middle"></span>
                                <span class="line bottom"></span>
                            </button>
                            <div class="dropdown-container">
                                <button class="dropdown-toggler simple" type="button">Services</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services_dropDown">
            <div class="wrapper">
                <div class="serviceCard">
                    <a href="graphic-design.php">
                        <div class="inner-w">
                            <div class="sc-top">
                                <img src="images/service-d-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="sc-bot">
                                <h5 class="sc-title">Design services</h5>
                                <p class="sc-excerpt">Pictures say a thousand words. Lucky for you we know how....</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="serviceCard">
                    <a href="social-media-marketing.php">
                        <div class="inner-w">
                            <div class="sc-top">
                                <img src="images/service-d-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="sc-bot">
                                <h5 class="sc-title">Social media marketing</h5>
                                <p class="sc-excerpt">We'll help you grown your online presence and convert your followers..</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="serviceCard">
                    <a href="mobile-app-development.php">
                        <div class="inner-w">
                            <div class="sc-top">
                                <img src="images/service-d-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="sc-bot">
                                <h5 class="sc-title">App development</h5>
                                <p class="sc-excerpt">Let us design your mobile app so that your business can stay...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="serviceCard">
                    <a href="web-design.php">
                        <div class="inner-w">
                            <div class="sc-top">
                                <img src="images/service-d-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="sc-bot">
                                <h5 class="sc-title">Web design & development</h5>
                                <p class="sc-excerpt">We build, create and maintain user-friendly
                                    Websites with the wow factor...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="sc-d-footer text-center">
                <a href="javascript:void(0)" class="orange-link">View all services <i class="fas fa-chevron-right ml-2"></i></a>
            </div>
        </div>
        <div class="fullscreenMenu">
            <ul class="menu-Main">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="menu__links" href="our-story.php">Our story</a>
                </li>
                <li>
                    <a class="menu__links" href="our-chapters.php">Our chapters</a>
                </li>
                <li>
                    <a class="menu__links" href="our-collection.php">Our collection</a>
                </li>
                <li>
                    <a class="menu__links" href="blog.php">Blogs</a>
                </li>
                <li>
                    <a class="menu__links" href="contact-us.php">Get in touch</a>
                </li>
            </ul>
        </div>
    </header>