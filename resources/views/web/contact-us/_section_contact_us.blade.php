<style>
    .detail a {
        color: #282828;
        text-decoration: none;
    }
</style>

<div class="container breadcrumb" style="text-align: left;">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;
            >&nbsp;&nbsp;<strong>@lang('public.contact us')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>

<div id="contact">
    <div class="container">
        <div class="sixteen columns">
            <h1>Contact</h1>
        </div>
        <div class="sixteen columns">
            <div class="sep"></div>
        </div>
        <div class="sixteen columns" style="text-align: center;">
            <!-- Styles -->
            <style>
                #chartdiv {
                    width: 100%;
                    height: 500px;
                    overflow: hidden;
                }
            </style>

            @push('custom-scripts')
            <!-- Resources -->
            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

            <!-- Chart code -->
            <script src="{{ asset('js/custom-amcharts.js') }}"></script>
            @endpush


            <!-- HTML -->
            <div id="chartdiv"></div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Unit 1 25/F Shanghai Commercial Bank Tower, 12 Queen's Road Central, Hong Kong&t=&z=16&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>
                .mapouter {
                    position: relative;
                    text-align: center;
                    height: 400px;
                    width: 100%;
                }
            </style>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 100%;
                    width: 100%;
                }
            </style>
        </div>
    </div>
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
                    <p>Unit 1 25/F Shanghai Commercial Bank Tower, <br>
                        12 Queen's Road Central, Hong Kong
                    </p>
                </div>
            </div>
            <div class="one-third column">
                <div class="icon-contact">&#xf095;</div>
                <div class="detail">
                    <a href="tel:+852 5808 6078">+852 5808 6078</a>
                </div>
            </div>
            <div class="one-third column">
                <div class="icon-contact">&#xf003;</div>
                <div class="detail">
                    <a href="mailto:contactus@wgaml.com">contactus@wgaml.com</a>
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
</div>
