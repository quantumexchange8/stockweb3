@extends('layouts.app')
@section('title', 'Home | Vulcanus')

@section('content')
    <div id="home">
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
                <div class="cl-effect-14"><a href="#about" class="scroll">start here</a></div>
            </div>
        </div>
    </div>

    <div id="about">
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

        <div id="skills">
            <div class="parallax"></div>
            <div class="background-grid"></div>
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
    </div>
@endsection
