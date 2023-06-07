<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @include('layouts.partials._head')
</head>

<body>
    <!-- Primary Page Layout -->
    <div id="preloader"></div>

    @include('layouts.partials._headerSticky')

    @include('layouts.partials._headerNav')

    @yield('content')

    {{-- <div id="services">
        <div class="container">
            <div class="sixteen columns">
                <h1>Services</h1>
            </div>
            <div class="sixteen columns">
                <div class="sep"></div>
            </div>
            <div class="sixteen columns">
                <p>We tackle business problems with intelligence. We use cutting-edge tech and cutting-edge thinking to
                    bring brands to life online and direct consumer behaviour.</p>
            </div>
        </div>
        <div id="services-wrapper">
            <div class="container">
                <div class="four columns">
                    <div class="services-wrap">
                        <div class="services-wrap-icon">
                            <img src="images/ser1.png" alt="" />
                        </div>
                        <h6>Responsive Design</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent.</p>
                        <a href="#modal" class="list-group-item" id="fall">
                            <p>more</p>
                        </a>
                    </div>
                </div>
                <div class="four columns">
                    <div class="services-wrap">
                        <div class="services-wrap-icon">
                            <img src="images/ser2.png" alt="" />
                        </div>
                        <h6>Video Marketing</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent.</p>
                        <a href="#modal1" class="list-group-item" id="slide">
                            <p>more</p>
                        </a>
                    </div>
                </div>
                <div class="four columns">
                    <div class="services-wrap">
                        <div class="services-wrap-icon">
                            <img src="images/ser3.png" alt="" />
                        </div>
                        <h6>Search Engine</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent.</p>
                        <a href="#modal2" class="list-group-item" id="newspaper">
                            <p>more</p>
                        </a>
                    </div>
                </div>
                <div class="four columns">
                    <div class="services-wrap">
                        <div class="services-wrap-icon">
                            <img src="images/ser4.png" alt="" />
                        </div>
                        <h6>Monitoring</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent.</p>
                        <a href="#modal3" class="list-group-item" id="sidefall">
                            <p>more</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="clients">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Clients</h3>
                </div>
                <div class="sixteen columns">
                    <div class="sep1"></div>
                </div>
            </div>
            <div class="container">
                <div class="clients-wrap">
                    <ul class="slider4">
                        <li>
                            <div class="four columns">
                                <img src="images/logo/1.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/2.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/3.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/4.png" alt="" />
                            </div>
                        </li>
                        <li>
                            <div class="four columns">
                                <img src="images/logo/5.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/6.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/7.png" alt="" />
                            </div>
                            <div class="four columns">
                                <img src="images/logo/8.png" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="testimonials">
            <div class="parallax2"></div>
            <div class="background-grid"></div>
            <div class="container">
                <div class="sixteen columns">
                    <h3>Testimonials</h3>
                </div>
                <div class="sixteen columns">
                    <div class="sep1"></div>
                </div>
                <div class="sixteen columns">
                    <ul class="slider3">
                        <li>
                            <div class="test">
                                <div class="icon-test">&#xf10e;</div>
                                <h6>Pellentesque egestas ornare sagittis. Sed augue lorem, dignissim eget bibendum
                                    vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam placerat sapien elit.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra.</h6>
                                <p><span>John Doe, Utcrayons General director</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="test">
                                <div class="icon-test">&#xf10e;</div>
                                <h6>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam.
                                    Etiam placerat sapien elit. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos. Pellentesque egestas ornare sagittis.</h6>
                                <p><span>Caroline Smith, Imperio General director</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="folio">
        <div class="container">
            <div class="sixteen columns">
                <h1>Portfolio</h1>
            </div>
            <div class="sixteen columns">
                <div class="sep"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container">
            <div class="sixteen columns">
                <div id="portfolio-filter">
                    <ul id="filter">
                        <li>
                            <div class="cl-effect-14"><a href="#" class="current" data-filter="*"
                                    title="">Show all</a></div>
                        </li>
                        <li>
                            <div class="cl-effect-14"><a href="#" data-filter=".photography"
                                    title="">photography</a></div>
                        </li>
                        <li>
                            <div class="cl-effect-14"><a href="#" data-filter=".illustration"
                                    title="">illustration</a></div>
                        </li>
                        <li>
                            <div class="cl-effect-14"><a href="#" data-filter=".motion-graphics"
                                    title="">motion graphics</a></div>
                        </li>
                        <li>
                            <div class="cl-effect-14"><a href="#" data-filter=".web-design" title="">web
                                    design</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container">
            <div class="all-works">
                <div class="one-third column one-work photography web-design illustration">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/1.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work illustration">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/2.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work motion-graphics">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/3.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work photography">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/4.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work illustration">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/5.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work motion-graphics illustration">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/6.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work photography">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/7.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work web-design">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/8.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work illustration photography">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/9.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work motion-graphics web-design">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/10.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work photography motion-graphics">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/11.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work motion-graphics">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/12.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work photography">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/15.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work illustration">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/17.jpg" alt="" />
                    </a>
                </div>
                <div class="one-third column one-work web-design">
                    <a class='iframe group1' href="project.html" title="">
                        <div class="work-text">
                            <h6>Project Name</h6>
                        </div>
                        <img src="images/gallery/13.jpg" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="blog">
        <div class="parallax3"></div>
        <div class="background-color"></div>
        <div class="container">
            <div class="sixteen columns">
                <h3>Blog</h3>
            </div>
            <div class="sixteen columns">
                <div class="sep1"></div>
            </div>
        </div>
        <div id="blog-slide" class="owl-carousel owl-theme">
            <div class="blog-wrap">
                <div class="container">
                    <div class="eight columns">
                        <img src="images/gallery/8.jpg" alt="" />
                    </div>
                    <div class="eight columns">
                        <div class="blog-date"><span>07.11.</span></div>
                        <h6>Post With Image</h6>
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam
                            placerat sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">image</a><a href="#">design</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container">
                    <div class="eight columns">
                        <ul class="slider5">
                            <li>
                                <img src="images/gallery/12.jpg" alt="" />
                            </li>
                            <li>
                                <img src="images/gallery/13.jpg" alt="" />
                            </li>
                            <li>
                                <img src="images/gallery/7.jpg" alt="" />
                            </li>
                        </ul>
                    </div>
                    <div class="eight columns">
                        <div class="blog-date"><span>02.11.</span></div>
                        <h6>Post With Slider</h6>
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam
                            placerat sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">image</a><a href="#">design</a><a
                                href="#">slider</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container">
                    <div class="eight columns">
                        <div class="media">
                            <iframe
                                src="http://player.vimeo.com/video/18130984?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=000000"></iframe>
                        </div>
                    </div>
                    <div class="eight columns">
                        <div class="blog-date"><span>26.10.</span></div>
                        <h6>Post With Video</h6>
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam
                            placerat sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">video</a><a href="#">design</a><a
                                href="#">photo</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container">
                    <div class="eight columns">
                        <div class="media-audio">
                            <iframe
                                src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F67943430"></iframe>
                        </div>
                    </div>
                    <div class="eight columns">
                        <div class="blog-date"><span>20.10.</span></div>
                        <h6>Post With Audio</h6>
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam
                            placerat sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">audio</a><a href="#">music</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- footer -->
    <footer>
        @include('layouts.partials._footer')
    </footer>

    <!-- Modals -->
    @include('layouts.partials._modals')

    <!-- Switch Panel -->
    @include('layouts.partials._switchPanel')

    <!-- JAVASCRIPT -->
    @include('layouts.partials._scripts')
</body>

</html>
