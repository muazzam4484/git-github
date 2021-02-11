<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Grid with Filters</title>
    
    <!-- Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="plugin-css/fancybox.css" rel="stylesheet">
    <link href="plugin-css/plugin.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('pickadate/lib/picker.js')}}"></script>

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- Wrapper -->
    <div class="careerfy-wrapper">

        <!-- Header -->
        <header id="careerfy-header" class="careerfy-header-one">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2"> <a href="index.html" class="careerfy-logo"><img src="images/img225.png" style="width:190;height: 52"></a> </aside>
                    <aside class="col-md-6">
                        <nav class="careerfy-navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="active"><a href="index.html" style="color:white">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://eyecix.com/html/careerfy/">Demo Careerfy</a></li>
                                            <li><a href="https://eyecix.com/html/careerfy-demos/hireright-demo/">Demo Hireright</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Auditins & Roles</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="job-listings.html">Job Listings</a></li>
                                            <li><a href="job-detail.html">Job Detail</a>
                                        </ul>
                                    </li>
                                    <li><a href="#">Talent Directory</a>
                                    </li>
                                </ul>
                            </div>
                      </nav>
                    </aside>
                    <aside class="col-md-4">
                        <div class="careerfy-right">
                            <ul class="careerfy-user-section">
                                <li><a class="careerfy-color careerfy-open-signin-tab" style="color:white" href="#">Register</a></li>
                                <li><a class="careerfy-color careerfy-open-signup-tab" style="color:white" href="#">Sign in</a></li>
                            </ul>
                            <a href="#" class="careerfy-simple-btn careerfy-bgcolor"><span> <i class="careerfy-icon careerfy-arrows-2"></i> Post Job</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </header>
        <!-- Header -->
        <!-- SubHeader -->
        <div class="careerfy-subheader">
            <span class="careerfy-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="careerfy-page-title">
                            <h1>Roles For Good Models</h1>
                            <p>Yes! You make or may not find the right role for you, but that’s ok.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SubHeader -->
        <!-- Main Content -->
        <div class="careerfy-main-content">
            <!-- Main Section -->
            <div class="careerfy-main-section careerfy-subheader-form-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 careerfy-typo-wrap">
                            <!-- Sub Header Form -->
                            <div class="careerfy-subheader-form">
                                <form class="careerfy-banner-search">
                                    <ul>
                                        <li>
                                            <input value="Job Title, Keywords, or Company" onblur="if(this.value == '') { this.value ='Job Title, Keywords, or Company'; }" onfocus="if(this.value =='Job Title, Keywords, or Company') { this.value = ''; }" type="text">
                                        </li>
                                        <li>
                                            <input value="City, State or ZIP" onblur="if(this.value == '') { this.value ='City, State or ZIP'; }" onfocus="if(this.value =='City, State or ZIP') { this.value = ''; }" type="text">
                                            <i class="careerfy-icon careerfy-location"></i>
                                        </li>
                                        <li>
                                            <div class="careerfy-select-style">
                                                <select>
                                                    <option>Categories</option>
                                                    <option>Categories</option>
                                                    <option>Categories</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="careerfy-banner-submit"> <input type="submit" value=""> <i class="careerfy-icon careerfy-search"></i> </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Sub Header Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Section -->
            <!-- Main Section -->
            <div class="careerfy-main-section">
                <div class="container">
                    <div class="row">
                        <aside class="careerfy-column-3 careerfy-typo-wrap">
                            <form class="careerfy-search-filter">
                                <div class="careerfy-search-filter-wrap careerfy-without-toggle">
                                    <h2><a href="#">Locations</a></h2>
                                    <div class="careerfy-search-box">
                                        <input value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }" type="text">
                                        <input type="submit" value="">
                                        <i class="careerfy-icon careerfy-search"></i>
                                    </div>
                                    <ul class="careerfy-checkbox">
                                        <li>
                                            <input type="checkbox" id="r1" name="rr" />
                                            <label for="r1"><span></span>San Francisco</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r2" name="rr" />
                                            <label for="r2"><span></span>Portland</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r3" name="rr" />
                                            <label for="r3"><span></span>London</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="r4" name="rr" />
                                            <label for="r4"><span></span>Bangalore</label>
                                        </li>
                                    </ul>
                                    <a href="#" class="careerfy-seemore">+see more</a>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Date Posted</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r5" name="rr" />
                                                <label for="r5"><span></span>Last Hour</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r6" name="rr" />
                                                <label for="r6"><span></span>Last 24 hours</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r7" name="rr" />
                                                <label for="r7"><span></span>Last 7 days</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r8" name="rr" />
                                                <label for="r8"><span></span>Last 14 days</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r9" name="rr" />
                                                <label for="r9"><span></span>Last 30 days</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r10" name="rr" />
                                                <label for="r10"><span></span>All</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Vacancy Type</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r11" name="rr" />
                                                <label for="r11"><span></span>Freelance</label>
                                                <small>13</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r12" name="rr" />
                                                <label for="r12"><span></span>Full Time</label>
                                                <small>4</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r13" name="rr" />
                                                <label for="r13"><span></span>Internship</label>
                                                <small>12</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r14" name="rr" />
                                                <label for="r14"><span></span>Part Time</label>
                                                <small>22</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r15" name="rr" />
                                                <label for="r15"><span></span>Temporary</label>
                                                <small>5</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r16" name="rr" />
                                                <label for="r16"><span></span>Volunteer</label>
                                                <small>20</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="careerfy-search-filter-wrap careerfy-search-filter-toggle">
                                    <h2><a href="#" class="careerfy-click-btn">Categories</a></h2>
                                    <div class="careerfy-checkbox-toggle">
                                        <ul class="careerfy-checkbox">
                                            <li>
                                                <input type="checkbox" id="r17" name="rr" />
                                                <label for="r17"><span></span>Feemale Models</label>
                                                <small>10</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r18" name="rr" />
                                                <label for="r18"><span></span>Male Singers</label>
                                                <small>2</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r19" name="rr" />
                                                <label for="r19"><span></span>Male Models</label>
                                                <small>6</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r20" name="rr" />
                                                <label for="r20"><span></span>TV Actor</label>
                                                <small>4</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r21" name="rr" />
                                                <label for="r21"><span></span>Commercial Actor</label>
                                                <small>19</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r22" name="rr" />
                                                <label for="r22"><span></span>Comedian</label>
                                                <small>5</small>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="r23" name="rr" />
                                                <label for="r23"><span></span>Anchor</label>
                                                <small>10</small>
                                            </li>
                                        </ul>
                                        <a href="#" class="careerfy-seemore">+see more</a>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <div class="careerfy-column-9 careerfy-typo-wrap">
                            <!-- FilterAble -->
                            <div class="careerfy-filterable">
                                <h2>Showing 0-12 of 37 results</h2>
                                <ul>
                                    <li>
                                        <i class="careerfy-icon careerfy-sort"></i>
                                        <div class="careerfy-filterable-select">
                                            <select>
                                                <option>Sort</option>
                                                <option>Sort</option>
                                                <option>Sort</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="careerfy-icon careerfy-squares"></i> Grid</a></li>
                                    <li><a href="#"><i class="careerfy-icon careerfy-list"></i> List</a></li>
                                </ul>
                            </div>
                            <!-- FilterAble -->
                            <!-- JobGrid -->
                            <div class="careerfy-job careerfy-job-grid">
                                <ul class="careerfy-row">
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label">Freelance</span>
                                                <a href="#"><img src="images/img53.jpg" alt=""></a>
                                                <span class="careerfy-featured-label">Featured</span>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Short film Actor</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i>City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label jobtype-label-green">Part Time</span>
                                                <a href="#"><img src="images/img39.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Male Model</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label jobtype-label-blue">Full Time</span>
                                                <a href="#"><img src="images/img54.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Singer</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label jobtype-label-red">Temporary</span>
                                                <a href="#"><img src="images/img12.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Pop Singer</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label jobtype-label-green">Part Time</span>
                                                <a href="#"><img src="images/img55.jpg" alt=""></a>    </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Show Host</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label">Freelance</span>
                                                <a href="#"><img src="images/img61.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Camera Man for Events</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label jobtype-label-red">Temporary</span>
                                                <a href="#"><img src="images/img34.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Video Editor</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label">Freelance</span>
                                                <a href="#"><img src="images/pic20.webp" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Childern Model </a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <div class="careerfy-job-grid-wrap">
                                            <figure>
                                                <span class="careerfy-jobtype-label">Freelance</span>
                                                <a href="#"><img src="images/img47.jpg" alt=""></a>
                                            </figure>
                                            <div class="careerfy-jobgrid-text">
                                                <div class="careerfy-job-tag"><a href="#">@ Massimo Artemisis</a></div>
                                                <h2><a href="#">Role for a child in Tv Commercial</a></h2>
                                                <ul class="careerfy-job-time">
                                                    <li><a href="#"></a></li>
                                                    <li>3 days ago</li>
                                                </ul>
                                                <span class="careerfy-job-location"><i class="careerfy-icon careerfy-maps-and-flags"></i> City , Province</span>
                                                <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Pagination -->
                            <div class="careerfy-pagination-blog">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    <li><span class="page-numbers current">01</span></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">03</a></li>
                                    <li><a class="page-numbers" href="#">04</a></li>
                                    <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Section -->
        </div>
        <!-- Main Content -->
        <!-- Footer -->
        <footer id="careerfy-footer" class="careerfy-footer-one">
            <div class="container">
                <!-- Footer Widget -->
                <div class="careerfy-footer-widget">
                    <div class="row">
                        <aside class="widget col-md-4 widget_contact_info">
                            <div class="widget_contact_wrap">
                                <a class="careerfy-footer-logo" href="index.html"><img src="images/img301.png" ></a>
                                <p>Our platform provides best services to find the job according to your desire and dream.Here you can find the best orgnizations that hires.</p>
                                <!-- <a href="#" class="careerfy-classic-btn careerfy-bgcolor">Learn more</a>-->
                               <div class="careerfy-banner-btn">
                                <a href='/contact' class="careerfy-bgcolorhover">
                            <!--<i class="careerfy-icon careerfy-up-arrow"></i>-->LEARN MORE</a>
                            </div>
                        </div>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Quick Links</h2></div>
                            <ul>
                                <li><a href='/about'>About Us</a></li>
                                <li><a href='/terms'>Terms & Condition</a></li>
                                <li><a href='/privacy'>Privacy Policy</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-3 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Candidates</h2></div>
                            <ul>
                                <li><a href='/job-listing'>Browse Role </a></li>
                                <li><a href='/candidate-profile-dash'>Candidate Dashboard</a></li>
                                <li><a href='/role-alert'>Roles Alerts</a></li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-2 widget_nav_manu">
                            <div class="footer-widget-title"><h2>Recruiters</h2></div>
                            <ul>
                                <li><a href='/talent'>Browse Candidates</a></li>
                                <li><a href='/employer-profile-dash'>Recruiter Dashboard</a></li>
                                <li><a href='/post-job'>Add Role</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- Footer Widget -->
                <!-- CopyRight -->
                <div class="careerfy-copyright">
                    <p>Copyrights © 2020 All Rights Reserved by <a href="#" class="careerfy-color">iStarz</a></p>
                    <ul class="careerfy-social-network">
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-facebook"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-twitter"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-dribbble"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-linkedin"></a></li>
                        <li><a href="#" class="careerfy-bgcolorhover fa fa-instagram"></a></li>
                    </ul>
                </div>
                <!-- CopyRight -->
              </div>
        </footer>
    </div>
    <!-- Footer -->
    <!-- Wrapper -->
    <!-- ModalLogin Box -->
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">
                <div class="careerfy-modal-title-box">
                    <h2>Login to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="careerfy-user-form">
                        <ul>
                            <li>
                                <label>Email Address:</label>
                                <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Password:</label>
                                <input value="Enter Password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-multimedia"></i>
                            </li>
                            <li>
                                <input type="submit" value="Sign In">
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="careerfy-user-form-info">
                            <p>Forgot Password? | <a href="#">Sign Up</a></p>
                            <div class="careerfy-checkbox">
                                <input type="checkbox" id="r10" name="rr" />
                                <label for="r10"><span></span> Remember Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign In With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Signup Box -->
    <div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalLogin">
        <div class="modal-inner-area">&nbsp;</div>
        <div class="modal-content-area">
            <div class="modal-box-area">
                <div class="careerfy-modal-title-box">
                    <h2>Signup to your account</h2>
                    <span class="modal-close"><i class="fa fa-times"></i></span>
                </div>
                <form>
                    <div class="careerfy-box-title">
                        <span>Choose your Account Type</span>
                    </div>
                    <div class="careerfy-user-options">
                        <ul>
                            <li class="active">
                                <a href="#">
                                     <i class="careerfy-icon careerfy-user"></i>
                                     <span>Candidate</span>
                                     <small>I want to discover awesome companies.</small>
                                 </a>
                            </li>
                            <li>
                                <a href="#">
                                     <i class="careerfy-icon careerfy-building"></i>
                                     <span>Employer</span>
                                     <small>I want to attract the best talent.</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="careerfy-user-form careerfy-user-form-coltwo">
                        <ul>
                            <li>
                                <label>First Name:</label>
                                <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>
                                <label>Last Name:</label>
                                <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-user"></i>
                            </li>
                            <li>
                                <label>Email Address:</label>
                                <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-mail"></i>
                            </li>
                            <li>
                                <label>Phone Number:</label>
                                <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                                <i class="careerfy-icon careerfy-technology"></i>
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <label>Categories:</label>
                                <div class="careerfy-profile-select">
                                    <select>
                                        <option>Sales & Marketing</option>
                                        <option>Sales & Marketing</option>
                                    </select>
                                </div>
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <img src="extra-images/login-robot.png" alt="">
                            </li>
                            <li class="careerfy-user-form-coltwo-full">
                                <input type="submit" value="Sign Up">
                            </li>
                        </ul>
                    </div>
                    <div class="careerfy-box-title careerfy-box-title-sub">
                        <span>Or Sign Up With</span>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="careerfy-login-media">
                        <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                        <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                        <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                    </ul>
                </form>
                
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="script/jquery.js"></script>
    <script src="script/bootstrap.js"></script>
    <script src="script/slick-slider.js"></script>
    <script src="plugin-script/counter.js"></script>
    <script src="plugin-script/fancybox.pack.js"></script>
    <script src="plugin-script/isotope.min.js"></script>
    <script src="plugin-script/functions.js"></script>
    <script src="script/functions.js"></script>
</body>
</html>
