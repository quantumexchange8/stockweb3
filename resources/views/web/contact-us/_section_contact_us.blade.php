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
