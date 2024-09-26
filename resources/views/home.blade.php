<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medcenter</title>
    <!-- Microsof IE supporting -->
    <!--[if It IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <!-- css files-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    
    
    <!-- css files end-->
</head>

<body>

    <!-- start page loader -->
    <div class="loader">
        <div class="loading-background"></div>
    </div>
    <!-- end page loader -->

    <!-- start page scroll top -->
    <button class="button text-center scroll-top">
        <i class="fa fa-chevron-up"></i>
    </button>
    <!-- end page scroll top -->

    <!-- start navbar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="colored">MedCenter</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#clinics">Clinics</a></li>
                    <li><a href="#about-doctors">Doctors</a></li>
                    <li><a href="#about-as">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>
    <!-- end navbar-->

    <!-- start header section -->
    <section id="header" class="text-center header">
        <div class="overlay"></div><!-- overlay -->
        <div class="container "><!-- start container -->
            <h1>Paul<span class="colored">Rand</span></h1>
            <h2>Doctor <span class="colored">Brain</span> and <span class="colored">Surgeon</span></h2>
            <button id="go-to" class="button"><i class="fa fa-bar-chart" aria-hidden="true"></i> Our Works</button>
        </div> <!-- end container -->
    </section>
    <!-- end header section -->

    <!--section services -->
    <section id="services" class="padding text-center services">
        <div class="container">
            <div class="div-heading">
                <h2 class="heading">Our <span class="colored">Services</span></h2>
                <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/medicine.png"></div>
                        <h3 class="hedding-h3">100% <span class="colored">Safety</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/charity.png"></div>
                        <h3 class="hedding-h3">Full <span class="colored">care</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/sale.png"></div>
                        <h3 class="hedding-h3">Low <span class="colored">prices</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/24-hours.png"></div>
                        <h3 class="hedding-h3">Full <span class="colored">Support</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/window-cleaner.png"></div>
                        <h3 class="hedding-h3">Clean <span class="colored">Cinic</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/question (1).png"></div>
                        <h3 class="hedding-h3">Quick <span class="colored">Answer</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/checked (1).png"></div>
                        <h3 class="hedding-h3">100% <span class="colored">successful</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/siren (1).png"></div>
                        <h3 class="hedding-h3">Emergency <span class="colored">Ready</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--section services end -->

    <!--section Portfolio -->
    <section id="clinics" class="padding text-center">
        <div class="container">
            <div class="div-heading">
                <h2 class="heading">Our <span class="colored">Clinics</span></h2>
                <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
            </div>
            <div class="row">

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/analysis-2030266_1920.jpg"></div>
                        <h3 class="hedding-h3">Analytical <span class="colored">apparatus</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/mri-2813911_1920.jpg"></div>
                        <h3 class="hedding-h3">Radiology <span class="colored">device</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/mri-2813912_1920.jpg"></div>
                        <h3 class="hedding-h3">Red <span class="colored">rays</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/mri-2813897_1920.jpg"></div>
                        <h3 class="hedding-h3">Brain <span class="colored">scan</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/scientist-2141259_1920.jpg"></div>
                        <h3 class="hedding-h3">Medical <span class="colored">analysis</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div><img class="img-fluid center-block" src="image/hospital-2767950_1920.jpg"></div>
                        <h3 class="hedding-h3">Operating <span class="colored">rooms</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="button"><i class="fa fa-user-md" aria-hidden="true"></i> Medical items</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--section Portfolio end -->

    <!--section about-doctors -->
    <section id="about-doctors" class="padding text-center">
        <div class="container">
            <div class="div-heading">
                <h2 class="heading">Our <span class="colored">Docotrs</span></h2>
                <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">Johnathon</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">John Adams</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">Kall Adams</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">Petro mark</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">Adel arcos</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="info-two">
                    <img class=" img-responsive" src="image/1.jpg.jpg">
                    <h3 class="hedding-h3">Dr. <span class="colored">Max johan</span></h3>
                    <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </section>
    <!--section about-doctors end -->

    <!--section Portfolio -->
    <section id="health" class="text-center">
        <div class="overlay-two">
            <div class="container">
                <h2>For <span class="colored">Good <i class="fa fa-heartbeat" aria-hidden="true"></i> Health</span></h2>
            </div>
        </div>
    </section>
    <!--section Portfolio end -->

    <!--section about-doctors -->
    <section id="about-as" class="padding text-center">
        <div class="container">
            <div class="div-heading">
                <h2 class="heading">About <span class="colored">As</span></h2>
                <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/about-us.png"></div>
                        <h3 class="hedding-h3">One <span class="colored">team</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/care-about-environment (1).png"></div>
                        <h3 class="hedding-h3">All <span class="colored">egypt</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/horse-about-to-attack-side-view.png"></div>
                        <h3 class="hedding-h3">Good <span class="colored">health</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/telephone.png"></div>
                        <h3 class="hedding-h3">Cll <span class="colored">as</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/talking-about-money.png"></div>
                        <h3 class="hedding-h3">Low<span class="colored"> prices</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="info">
                        <div class="bar"><img src="image/professor-lecture-about-graduation.png"></div>
                        <h3 class="hedding-h3">Doctor's <span class="colored">excellent</span></h3>
                        <p class="lead">Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section about-doctors end -->

    <!-- start contact section -->
    <section id="contact" class="padding text-center">
        <div class="container"><!-- start container -->
            <div class="section-heading">
                <h2 class="heading">Contact <span class="colored">As</span></h2>
                <p class="lead">Lorem Ipsum is simply dummy typesetting industry.</p>
            </div>
            <form id="send_mail"><!-- start contact form -->
                <input name="email" class="form-control mail" type="email" placeholder="Your E-mail" />
                <textarea name="message" class="form-control message" placeholder="Your Message"></textarea>
                <button id="send_msg" class="btn-block button" type="button">
                    Send Message <i class="fa fa-send"></i>
                </button>
            </form><!-- end contact form -->
            <div class="social-links text-center">
                <a href="#"><i class="colored fa fa-facebook fa-lg fa-fw"></i></a>
                <a href="#"><i class="colored fa fa-twitter fa-lg fa-fw"></i></a>
                <a href="#"><i class="colored fa fa-linkedin fa-lg fa-fw"></i></a>
                <a href="#"><i class="colored fa fa-envelope fa-lg fa-fw"></i></a>
                <a href="#"><i class="colored fa fa-skype fa-lg fa-fw"></i></a>
                <a href="#"><i class="colored fa fa-instagram fa-lg fa-fw"></i></a>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end contact section -->



    <!-- start javascript files -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script><!-- jQuery js file -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script><!-- jQuery js file -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script><!-- Bootstrap js file -->
    <script src="{{asset('js/jquery.js')}}"></script><!-- custom js file -->
    <!-- end javascript files -->
</body>

</html>