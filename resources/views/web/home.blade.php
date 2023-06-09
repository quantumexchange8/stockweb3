@extends('layouts.app')
@section('title', 'Home | Vulcanus')

@section('content')
    @include('layouts.partials._headerSticky')

    <section id="content">
        <article id="home" class="active">
            <div id="wrapper-slider">
                <div id="controls">
                    <div class="background-grid"></div>
                    <div class="prev"></div>
                    <div class="next"></div>
                </div>
            </div>
            <div class="home-text">
                <p><span>Web Design - Brand Design - Visual Identity - Illustrations</span></p>
                <div class="rotator">
                    <div>
                        <h1>BORN INTO <span>CREATIVITY</span></h1>
                    </div>
                    <div>
                        <h1>FOCUSED ON <span>STRATEGY</span></h1>
                    </div>
                    <div>
                        <h1>INSPIRED BY <span>TECHNOLOGY</span></h1>
                    </div>
                </div>
                <div class="link-home">
                    <div class="cl-effect-14"><a href="javascript:goTo('about');">start here</a></div>
                </div>
            </div>
        </article>

        <article id="about" class="off">
            <div class="container">
                <div class="sixteen columns">
                    <h1>About Us</h1>
                </div>
                <div class="sixteen columns">
                    <div class="sep"></div>
                </div>
                <div class="sixteen columns">
                    <p>We're a close team of creatives, designers & developers who work together to create beautiful,
                        engaging digital experiences. We take pride in delivering only the best.</p>
                </div>
            </div>
            <div class="container">
                <div id="about-img-wrap">
                    <div class="slider1">
                        <div class="slide">
                            <div class="eight columns">
                                <img src="images/office1.gif" alt="" />
                            </div>
                            <div class="eight columns">
                                <img src="images/office2.gif" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="eight columns">
                                <img src="images/office3.gif" alt="" />
                            </div>
                            <div class="eight columns">
                                <img src="images/office4.gif" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="skills">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>Our Skills</h3>
                    </div>
                    <div class="sixteen columns">
                        <div class="sep1"></div>
                    </div>
                    <div class="eight columns">
                        <ul class="skill">
                            <li><span class="bar bar-prc1"></span>
                                <p>Css</p>
                            </li>
                            <li><span class="bar bar-prc2"></span>
                                <p>jQuery</p>
                            </li>
                            <li><span class="bar bar-prc3"></span>
                                <p>Wordpress</p>
                            </li>
                        </ul>
                    </div>
                    <div class="eight columns">
                        <ul class="skill">
                            <li><span class="bar bar-prc4"></span>
                                <p>Graphic Design</p>
                            </li>
                            <li><span class="bar bar-prc5"></span>
                                <p>Html</p>
                            </li>
                            <li><span class="bar bar-prc6"></span>
                                <p>MoTools</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="team">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>Meet The Team</h3>
                    </div>
                    <div class="sixteen columns">
                        <div class="sep1"></div>
                    </div>
                </div>
                <div class="container">
                    <ul class="slider2">
                        <li>
                            <div class="eight columns">
                                <div class="team-wrap">
                                    <div class="social-team text-align-left">
                                        <ul class="list-social">
                                            <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                        </ul>
                                    </div>
                                    <h5 class="text-align-left">James Bean</h5>
                                    <img src="images/team1.png" alt="" />
                                    <p><span>CEO Founder</span></p>
                                </div>
                            </div>
                            <div class="eight columns">
                                <div class="team-wrap">
                                    <div class="social-team text-align-right">
                                        <ul class="list-social">
                                            <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                        </ul>
                                    </div>
                                    <h5 class="text-align-right">Isabella Moro</h5>
                                    <img src="images/team2.png" alt="" />
                                    <p><span>Web Designer</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="eight columns">
                                <div class="team-wrap">
                                    <div class="social-team text-align-left">
                                        <ul class="list-social">
                                            <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                        </ul>
                                    </div>
                                    <h5 class="text-align-left">Caroline Smith</h5>
                                    <img src="images/team3.png" alt="" />
                                    <p><span>Web Marketing</span></p>
                                </div>
                            </div>
                            <div class="eight columns">
                                <div class="team-wrap">
                                    <div class="social-team text-align-right">
                                        <ul class="list-social">
                                            <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                            <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                        </ul>
                                    </div>
                                    <h5 class="text-align-right">David Ive</h5>
                                    <img src="images/team4.png" alt="" />
                                    <p><span>Developer</span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="sixteen columns">
                        <a href="javascript:goTo('home');"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="sixteen columns">
                        <p><span>© Vulcan - a HTML 5 template with serious impact. Created by</span> IG Design</p>
                    </div>
                    <div class="sixteen columns">
                        <div class="social-bottom">
                            <ul class="bottom-social">
                                <li class="icon-bottom"><a href="#">&#xf099;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09a;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09b;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf0d5;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        @include('web.private-banking.listing')



        <article id="services" class="off">
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
            <div id="testimonials">
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
            <div class="footer">
                <div class="container">
                    <div class="sixteen columns">
                        <a href="javascript:goTo('home');"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="sixteen columns">
                        <p><span>© Vulcan - a HTML 5 template with serious impact. Created by</span> IG Design</p>
                    </div>
                    <div class="sixteen columns">
                        <div class="social-bottom">
                            <ul class="bottom-social">
                                <li class="icon-bottom"><a href="#">&#xf099;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09a;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09b;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf0d5;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>


        <article id="folio" class="off">
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
            <div class="footer">
                <div class="container">
                    <div class="sixteen columns">
                        <a href="javascript:goTo('home');"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="sixteen columns">
                        <p><span>© Vulcan - a HTML 5 template with serious impact. Created by</span> IG Design</p>
                    </div>
                    <div class="sixteen columns">
                        <div class="social-bottom">
                            <ul class="bottom-social">
                                <li class="icon-bottom"><a href="#">&#xf099;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09a;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09b;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf0d5;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>




        <article id="contact" class="off">
            <div class="container">
                <div class="sixteen columns">
                    <h1>Contact</h1>
                </div>
                <div class="sixteen columns">
                    <div class="sep"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div id="map"></div>
            <div id="contact-details">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>Contact Details</h3>
                    </div>
                    <div class="sixteen columns">
                        <div class="sep1"></div>
                    </div>
                    <div class="one-third column">
                        <div class="icon-contact">&#xf015;</div>
                        <div class="detail">
                            <p>100 Biscayne Blvd. (North) 21st Floor New World Tower Miami, Florida 33148</p>
                        </div>
                    </div>
                    <div class="one-third column">
                        <div class="icon-contact">&#xf095;</div>
                        <div class="detail">
                            <p>(305) 555-4446</p>
                            <p>(305) 555-4457</p>
                        </div>
                    </div>
                    <div class="one-third column">
                        <div class="icon-contact">&#xf003;</div>
                        <div class="detail">
                            <p>general: office@yoursite.com</p>
                            <p>support: support@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact-mes">
                <div class="container">
                    <div class="sixteen columns">
                        <h3>Drop Us a Line</h3>
                    </div>
                    <div class="sixteen columns">
                        <div class="sep1"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="sixteen columns">
                        <form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
                            <label for="name">Name: *
                                <span class="error" id="err-name">please enter name</span>
                            </label>
                            <input name="name" id="name" type="text" />
                            <label for="email">E-Mail: *
                                <span class="error" id="err-email">please enter e-mail</span>
                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                            </label>
                            <input name="email" id="email" type="text" />
                            <label for="message">Message:</label>
                            <textarea name="message" id="message"></textarea>
                            <button class="send_message" id="send">Submit</button>
                            <div class="error" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </form>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="sixteen columns">
                        <a href="javascript:goTo('home');"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="sixteen columns">
                        <p><span>© Vulcan - a HTML 5 template with serious impact. Created by</span> IG Design</p>
                    </div>
                    <div class="sixteen columns">
                        <div class="social-bottom">
                            <ul class="bottom-social">
                                <li class="icon-bottom"><a href="#">&#xf099;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09a;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09b;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf0d5;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article id="blog" class="off">
            <div class="container">
                <div class="sixteen columns">
                    <h1>Blog</h1>
                </div>
                <div class="sixteen columns">
                    <div class="sep"></div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="container">
                    <div class="eight columns">
                        <img src="images/gallery/8.jpg" alt="" />
                    </div>
                    <div class="eight columns">
                        <div class="blog-date"><span>07.11.</span></div>
                        <h6>Post With Image</h6>
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam placerat
                            sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">image</a><a href="#">design</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap post2">
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
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam placerat
                            sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">image</a><a href="#">design</a><a
                                href="#">slider</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap post1">
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
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam placerat
                            sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">video</a><a href="#">design</a><a
                                href="#">photo</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrap post2">
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
                        <p>Dignissim eget bibendum vitae, scelerisque eget justo. Duis tincidunt erat quam. Etiam placerat
                            sapien elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos. Pellentesque egestas ornare sagittis.</p>
                        <div class="blog-tag"><a href="#">audio</a><a href="#">music</a></div>
                        <div class="clear"></div>
                        <div class="link-blog">
                            <div class="cl-effect-14"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="sixteen columns">
                        <a href="javascript:goTo('home');"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="sixteen columns">
                        <p><span>© Vulcan - a HTML 5 template with serious impact. Created by</span> IG Design</p>
                    </div>
                    <div class="sixteen columns">
                        <div class="social-bottom">
                            <ul class="bottom-social">
                                <li class="icon-bottom"><a href="#">&#xf099;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09a;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf09b;</a></li>
                                <li class="icon-bottom"><a href="#">&#xf0d5;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
