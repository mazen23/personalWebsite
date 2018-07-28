<?php
header('X-Powered-By: MazenElGammal.com');
require_once  __DIR__ . '/vendor/autoload.php';
// Generate CSRF token to use in form hidden field
session_start();
//$token = NoCSRF::generate( 'csrfToken' );
$test=new CsrfToken();
//echo $test->generateHiddenField();
//print_r($_SESSION['csrf']);
//die();
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]
[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]
[if (gte IE 8)|!(IE)]><!<html class="no-js"  prefix="og: http://ogp.me/ns#" lang="en"> <![endif]
    <head>-->

        <!--- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Mazen El-Gammal - Software Application Engineer.</title>
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
        <meta itemprop="name" content="Mazen ElGammal">
        <meta itemprop="regionsAllowed" content="AD,AE,AF,AG,AI,AL,AM,AO,AQ,AR,AS,AT,AU,AW,AX,AZ,BA,BB,BD,BE,BF,BG,BH,BI,BJ,BL,BM,BN,BO,BQ,BR,BS,BT,BV,BW,BY,BZ,CA,CC,CD,CF,CG,CH,CI,CK,CL,CM,CN,CO,CR,CU,CV,CW,CX,CY,CZ,DE,DJ,DK,DM,DO,DZ,EC,EE,EG,EH,ER,ES,ET,FI,FJ,FK,FM,FO,FR,GA,GB,GD,GE,GF,GG,GH,GI,GL,GM,GN,GP,GQ,GR,GS,GT,GU,GW,GY,HK,HM,HN,HR,HT,HU,ID,IE,IL,IM,IN,IO,IQ,IR,IS,IT,JE,JM,JO,JP,KE,KG,KH,KI,KM,KN,KP,KR,KW,KY,KZ,LA,LB,LC,LI,LK,LR,LS,LT,LU,LV,LY,MA,MC,MD,ME,MF,MG,MH,MK,ML,MM,MN,MO,MP,MQ,MR,MS,MT,MU,MV,MW,MX,MY,MZ,NA,NC,NE,NF,NG,NI,NL,NO,NP,NR,NU,NZ,OM,PA,PE,PF,PG,PH,PK,PL,PM,PN,PR,PS,PT,PW,PY,QA,RE,RO,RS,RU,RW,SA,SB,SC,SD,SE,SG,SH,SI,SJ,SK,SL,SM,SN,SO,SR,SS,ST,SV,SX,SY,SZ,TC,TD,TF,TG,TH,TJ,TK,TL,TM,TN,TO,TR,TT,TV,TW,TZ,UA,UG,UM,US,UY,UZ,VA,VC,VE,VG,VI,VN,VU,WF,WS,YE,YT,ZA,ZM,ZW">
        <meta itemprop="isFamilyFriendly" content="True">
        <meta itemprop="description" content="Mazen ElGammal Online Profile.">
        <meta name="keywords" content="Mazen El-Gammal, Web Developer, Mazen ElGammal's Profile, WebSite, WebPage,WebPortal, Enterpreneur, Developer, Engineer,Web Developer,Software Engineer,Enthusiastic, Egyptian">
        
<!--        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Home - Mazen ElGammal" />-->

        
        
        <meta name="author" content="Mazen ElGammal">
        <meta name="description" content="Mazen ElGammal's Profile, Mazen ElGammal's WebSite, WebPage, WebPortal, Enterpreneur, Developer, Engineer,Web Developer,Software Engineer,Enthusiastic, Egyptian">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <!-- Mobile Specific Metas  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS
    ================================================== -->
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Script
        ================================================== -->
        <script src="js/modernizr.js"></script>
        <!-- Favicons
             ================================================== -->
        <link rel="shortcut icon" href="https://mazenelgammal.com/favicon.ico" >
        <style>
/*            ::-moz-selection { color: red;}
            ::selection { color: red; }*/
         
.loaderParent {
    width: 100%;
    height: 100%;
    background: #161415;
    position: fixed;
    opacity: 0.9;
    z-index: 999;
    top: 0;
    left: 0;
}

.loader {
  position: absolute;
  opacity: .7;
}

.loader circle {
  animation: draw 4s infinite ease-in-out;
  transform-origin: center;
  transform: rotate(-90deg);
}

.loader-2 circle,
.loader-6 circle {
  animation-delay: 1s;
}

.loader-7 circle {
  animation-delay: 2s;
}

.loader-4 circle, 
.loader-8 circle {
  animation-delay: 3s;
}

.loader-3 {
  left: -150px;
  transform: rotateY(180deg);
}

.loader-6,
.loader-7,
.loader-8 {
  left: -150px;
  transform: rotateX(180deg) rotateY(180deg);
}

.loader-5 circle {
  opacity: .2;
}

@keyframes draw {
  50% {
    stroke-dashoffset: 0;
    transform: scale(.5);
  }
}
.center {
    margin: 0 auto;
    display: block;
    top: 40%;
    position: relative;
    left: 46%;
}

        </style>
    </head>

    <body onload='exitLoader();'>
<div class="loaderParent">
<div class="center">
  <svg class="loader">
    <filter id="blur">
      <fegaussianblur in="SourceGraphic" stddeviation="2"></fegaussianblur>
    </filter>
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#F4F519" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-2">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#DE2FFF" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-3">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#FF5932" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-4">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#E97E42" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-5">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="white" stroke-width="6" stroke-linecap="round" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-6">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#00DCA3" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-7">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="purple" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
  <svg class="loader loader-8">
    <circle cx="75" cy="75" r="60" fill="transparent" stroke="#AAEA33" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
  </svg>
</div>
</div>
    
             <!-- Header ================================================== -->

        <header id="home">
            <nav id="nav-wrap" class=''>

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                <ul id="nav" class="nav">
                    <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
                    <li><a class="smoothscroll" href="#about">About</a></li>
                    <li><a class="smoothscroll" href="#resume">Resume</a></li>
                    <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
                    <li><a class="smoothscroll" href="#contact">Contact</a></li>
                </ul> <!-- end #nav -->
            </nav> <!-- end #nav-wrap -->

            <div class="row banner">
                <div class="banner-text">
                    <h1 class="responsive-headline">I'm Mazen El-Gammal</h1>
                    <h3>I'm an Enthusiastic <span>Software Application Engineer</span>, 
                        Focused on managing the interchange of data between an application and a browser.<br/>
                        Let's <a class="smoothscroll" href="#about">start scrolling</a>
                        and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
                    <hr />
                    <ul class="social">
                        <li><a href="https://eg.linkedin.com/in/mazenelgammal" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<!--                        <li><a href="https://www.facebook.com/MazenELGammal" target="_blank"><i class="fa fa-facebook"></i></a></li>-->
                        <li><a href="https://twitter.com/mazenelgammal" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/mazenelgammal/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="scrolldown">
                <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
            </p>
        </header> <!-- Header End -->

        <!-- About Section
        ================================================== -->
        <section id="about">
            <div class="row">
                <div class="three columns">
                    <img class="profile-pic"  src="images/profilepic.jpg" alt="" />
                </div>

                <div class="nine columns main-col">
                    <h2>About Me</h2>
                    <p>             
                        I work as a Software APPs Engineer at Valeo,
                        I love helping people find solutions that meet their specific needs.
                        One of my greatest passions is developing. I am also passionate about making a difference and a change.
                        I am a believer, and I love challenges and opportunities that improve my skills and help me move towards my goals.
                        I value maintaining relationships with family, colleagues, and friends.
                        And, I have an unstoppable desire for being a better person.
                        I learned to stretch my comfort zone,
                        and the reason I work here is because it’s an exciting, challenging,
                        enriching, rewarding, and a very eventful time.
                        Basically I am a technology geek!
                    </p>
                    <div class="row">
                        <div class="columns contact-details">
                            <h2>Contact Details</h2>
                            <p class="address">
                                <span>Mazen El-Gammal</span><br>
                                <span>Cairo, Egypt</span><br>
                                <span>mazen.elgammal92@gmail.com</span><br>
                                <span>admin@mazenelgammal.com</span>
                            </p>
                        </div>

                        <div class="columns download">
                            <p>
                                <a href="certificate/MazenElGammal-CV-2017.pdf" download="MazenElGammal-CV-2017.pdf" class="button"><i class="fa fa-download"></i>Download Resume</a>
                            </p>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end .main-col -->
            </div>
        </section> <!-- About Section End-->


        <!-- Resume Section
        ================================================== -->
        <section id="resume">
            <!-- Education
            ----------------------------------------------- -->
            <div class="row education">
                <div class="three columns header-col">
                    <h1><span>Education</span></h1>
                </div>
                <div class="nine columns main-col">
                    <div class="row item">

                        <div class="twelve columns">
                            <h3>Arab Academy for Science, Technology & Maritime Transport.</h3>
                            <p class="info">B.S. Degree in Computer Science <span>&bull;</span> <em class="date">JULY 2012</em></p>
                            <p>
                                GPA  (B+).  <br>
                                Faculty of Computer Science. <br>
                                Major : Information systems and security.<br>
                                Minor : Management and Information Systems.<br>
                                From: September/2008	To: July/2012<br>
                            </p>

                        </div>

                    </div> <!-- item end -->

                </div> <!-- main-col end -->

            </div> <!-- End Education -->


            <!-- Work
            ----------------------------------------------- -->
            <div class="row work">

                <div class="three columns header-col">
                    <h1><span>Work</span></h1>
                </div>

                <div class="nine columns main-col">

                    <div class="row item">

                        <div class="twelve columns">
                            <h3>Valeo</h3>
                            <p class="info">Senior Software Application Engineer
<!--                                <span>&bull;</span>-->
                                </br>
                                <em class="date">(November 2015 - Present)</em></p>
                        </div>

                    </div> <!-- item end -->

                    <div class="row item">
                        <div class="twelve columns">
                            <h3>Nafham</h3>
                            <p class="info">Senior Web Developer
<!--                                <span>&bull;</span>-->
                                </br>
                                <em class="date">(July 2015 - September 2015)</em></p>
                        </div>
                    </div> <!-- item end -->

                    <div class="row item">
                        <div class="twelve columns">
                            <h3>Kijamii</h3>
                            <p class="info">Web Developer
<!--                                <span>&bull;</span>-->
                                </br>
                                <em class="date">(February 2015 - June 2015)</em></p>
                        </div>
                    </div> <!-- item end -->

                    <div class="row item">
                        <div class="twelve columns">
                            <h3>BSocial</h3>
                            <p class="info">Web Developer
<!--                                <span>&bull;</span>-->
                                </br>
                                <em class="date">(November 2013 - January 2015)</em></p>
                        </div>
                    </div> <!-- item end -->

                    <div class="row item">
                        <div class="twelve columns">
                            <h3>RAYA CC</h3>
                            <p class="info">Technical Support Engineer
<!--                                <span>&bull;</span>-->
                                </br>
                                <em class="date">(January 2013 - August 2013)</em></p>
                        </div>
                    </div> <!-- item end -->

                </div> <!-- main-col end -->

            </div> <!-- End Work -->


            <!-- Skills
            ----------------------------------------------- -->
            <div class="row skill">

                <div class="three columns header-col">
                    <h1><span>Technical Skills</span></h1>
                </div>

                <div class="nine columns main-col">

                    <p>
                        “Every artist was first an amateur.” ― Ralph Waldo Emerson
                    </p>

                    <div class="bars">

                        <ul class="skills">
                            <li><span class="bar-expand php"></span><em>PHP</em></li>
                            <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                            <li><span class="bar-expand css3"></span><em>CSS3</em></li>
                            <li><span class="bar-expand jquery"></span><em>javascript &amp; jQuery</em></li>
                            <li><span class="bar-expand css3"></span><em>Google APPs Scripts</em></li>
                            <li><span class="bar-expand designPatterns"></span><em>Design patterns</em></li>
                            <li><span class="bar-expand designPatterns"></span><em>Database design</em></li>
                            <li><span class="bar-expand debugging"></span><em>Debugging</em></li>
                            <li><span class="bar-expand designPatterns"></span><em>Analysis and Dashboards</em></li>
                            <li><span class="bar-expand designPatterns"></span><em>Security</em></li>
                            <li><span class="bar-expand designPatterns"></span><em>Third Party APIs</em></li>
                        </ul>
                    </div><!-- end skill-bars -->
                </div> <!-- main-col end -->
            </div> <!-- End skills -->
        </section> <!-- Resume Section End-->


        <!-- Testimonials Section
        ================================================== -->
        <section id="testimonials">

            <div class="text-container">

                <div class="row">

                    <div class="two columns header-col">

                        <h1><span>My Favorite Proverbs</span></h1>

                    </div>

                    <div class="ten columns flex-container">

                        <div class="flexslider">

                            <ul class="slides">
                               <li>
                                    <blockquote>
                                        <p>
                                            Simplicity is the ultimate sophistication.
                                        </p>
                                        <cite>— Leonardo da Vinci</cite>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>
                                          Optimism is an occupational hazard of programming; feedback is the treatment
                                        </p>
                                        <cite>— Kent Beck</cite>
                                    </blockquote>
                                </li> 
                                <li>
                                    <blockquote>
                                        <p>
                                        If you really want to do something, you’ll find a way. If you don’t, you’ll find an excuse.                                   
                                        </p>
                                        <cite>— JIM ROHN</cite>
                                    </blockquote>             
                                </li> <!-- slide ends -->

                            </ul>

                        </div> <!-- div.flexslider ends -->

                    </div> <!-- div.flex-container ends -->

                </div> <!-- row ends -->

            </div>  <!-- text-container ends -->

        </section> <!-- Testimonials Section End-->


        <!-- Contact Section
        ================================================== -->
        <section id="contact">
            <div class="row section-head">
                <div class="two columns header-col">
                    <h1><span>Get In Touch.</span></h1>
                </div>
                <div class="ten columns">
                    <p class="lead">Get in touch,
                        I'm always standing by and eager to help.
                    </p>
                      <aside class="four columns footer-widgets">
                        <div class="widget widget_contact">
                            <h4>Address</h4>
                                <p class="address">
                                        <span>Mazen El-Gammal</span><br>
                                        <span> Cairo, Egypt</span><br>
                                        <span>mazen.elgammal92@gmail.com</span><br>
                                </p>
                        </div>
                    </aside>
                </div>
            </div>
        </section> <!-- Contact Section End-->


        <!-- footer
        ================================================== -->
        <footer>
            <div class="row">
                <div class="twelve columns">
                    <ul class="social-links">
                        <li><a href="https://eg.linkedin.com/in/mazenelgammal" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<!--                        <li><a href="https://www.facebook.com/MazenELGammal" target="_blank"><i class="fa fa-facebook"></i></a></li>-->
                        <li><a href="https://twitter.com/mazenelgammal" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/mazenelgammal/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>

                    <ul class="copyright">
                        <medium style="color:#0f90bf;">MazenElGammal.com &copy; <?php echo date("Y"); ?>.</medium>
                    </ul>
                </div>
                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#home">
                    <i class="icon-up-open"></i></a>
                </div>
            </div>
        </footer> <!-- Footer End-->

        <!-- Java Script
        ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

        <script src="js/jquery.flexslider.js"></script>
        <script src="js/waypoints.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/magnific-popup.js"></script>
        <script src="js/init.js"></script>
    </body>

</html>