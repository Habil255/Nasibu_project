<!doctype html>
<html lang="en">

<head>
    <title>blog | Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>




        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">


                    <div class="site-logo">
                        <a href="index.html" class="text-black"><span class="text-primary">nm</a>
                    </div>

                    <div class="col-12">
                        <nav class="site-navigation text-right ml-auto " role="navigation">

                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                {{-- <li><a href="#home-section" class="nav-link">Home</a>
                                </li>
                                <li><a href="#services-section" class="nav-link">Services</a></li>

                                <li class="has-children">
                                    <a href="index.html#about-section" class="nav-link">About Us</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="index.html#team-section" class="nav-link">Team</a></li>
                                        <li><a href="index.html#pricing-section" class="nav-link">Pricing</a></li>
                                        <li><a href="index.html#faq-section" class="nav-link">FAQ</a></li>
                                        --}}
                                        {{-- <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>--}}

                                {{-- <li><a href="index.html#press-section"
                                        class="nav-link">Press</a></li>

                                <li><a href="index.html#testimonials-section" class="nav-link">Testimonials</a></li>
                                <li><a href="index.html#blog-section" class="nav-link active">Blog</a></li>
                                --}}
                                <li><a href="/" class="nav-link">Home</a></li>
                            </ul>
                        </nav>

                    </div>

                    <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                            class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>

        <div class="site-section-cover overlay inner-page bg-light h-100%"
            style=" background-image: url('images/n67.jpg');" data-aos="fade">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-10">

                        <div class="box-shadow-content">
                            <div class="block-heading-1">
                                <span class="d-block mb-3 text-white" data-aos="fade-up">{{$time}}<span
                                        class="mx-2 text-primary">&bullet;</span> by James Miller</span>
                                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Nm Blog</h1>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>



        <section class="site-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 blog-content">
                        <div class="row">
                            @foreach ($blogposts as $blogpost)
                                
                           
                            <div class="col-md-6 mb-2" data-aos="fade-up" data-aos-delay="200">
                                    <h3>{{$blogpost->title}}</h3>
                                <a href="single.html" class="mb-4 d-block "><img src="blogs_contents/{{$blogpost->image}}" height="100%" width="100%" alt="Image"
                                    class="img-fluid rounded"></a>
                                <p>{{Illuminate\Support\Str::of($blogpost->body_1)->words(100)}}<a href="blog/{{$blogpost->id}}">Read More</a></p>
                            </div>
                            @endforeach
                            
                            {{-- <div class="col-md-6 mb-2" data-aos="fade-up" data-aos-delay="200">
                                <h3>Why Girrafe likes to Travel</h3>
                                <a href="single.html" class="mb-4 d-block "><img src="blogs_contents/1607977534.jpeg " height="1000%" width="100%" alt="Image"
                                    class="img-fluid rounded"></a>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, deleniti inventore! Amet cumque vel enim soluta, sit doloribus porro temporibus, eos mollitia laboriosam accusantium libero vitae aspernatur quaerat, omnis labore excepturi quo nihil repellat consectetur praesentium exercitationem fugiat possimus molestiae. Iusto libero nam sunt commodi fugit? Maiores enim distinctio amet!
                            </div>

                             <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <h3>Why Girrafe likes to Travel</h3>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, deleniti inventore! Amet cumque vel enim soluta, sit doloribus porro temporibus, eos mollitia laboriosam accusantium libero vitae aspernatur quaerat, omnis labore excepturi quo nihil repellat consectetur praesentium exercitationem fugiat possimus molestiae. Iusto libero nam sunt commodi fugit? Maiores enim distinctio amet!
                            </div> --}}
    
    
                        </div>


                        

                    </div>
                    <div class="col-md-4 sidebar ">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box">
                            <div class="categories">
                                <h3>Categories</h3>
                                <li><a href="/tech-posts/{{$blogpost->id}}">Tech<span>(12)</span></a></li>
                                <li><a href="/busi-posts/{{$blogpost->id}}">Business <span>(22)</span></a></li>
                                <li><a href="/science-posts/{{$blogpost->id}}">Science <span>(1)</span></a></li>
                                <li><a href="/music-posts/{{$blogpost->id}}">Music <span>(37)</span></a></li>
                                <li><a href="/trav-posts/{{$blogpost->id}}">Travel <span>(42)</span></a></li>
                                <li><a href="/laughs-posts/{{$blogpost->id}}">Laughs <span>(1)</span></a></li>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <img src="images/_MG_6932.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
                            <h3 class="text-black">About The Author</h3>
                            <p>Nasibu also curates playlists on music streaming platforms under the moniker VNKP. Also
                                monitoring music and as well as ensuring that you are getting access to maintain the
                                audience and the platform.</p>
                            <p><a href="https://linktr.ee/naxibu" class="btn btn-primary btn-md text-white">Read
                                    More</a></p>
                        </div>

                        {{-- <div class="sidebar-box">
                            <h3>Paragraph</h3>
                            <p>If you need any assistance to your company is better not to quit, since I'm here for you
                                to ensure that you get in touch with your goal</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>


        @include('parts.footer')

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
