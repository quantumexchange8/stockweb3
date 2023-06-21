<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.what we look for')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.what we look for')</h1>
        <p style="padding-top: 10px;">
            At Wingate, your career path is yours to define. We hire bright self-starters,
            provide them the tools to succeed, and give them the freedom to excel.
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('undergraduateInternships')">Undergraduate
                            Internships</a></h6>
                    <p>Work on challenging, real-world projects while attending training and networking with employees
                        throughout the firm.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('undergraduateInternships')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('experiencedProfessionals')">Experienced
                            Professionals</a></h6>
                    <p>We are interested in exceptional, success-driven individuals who are excited to lead a
                        collaborative environment that fosters our values of Teamwork, Integrity, and Excellence.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('experiencedProfessionals')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('entryLevelProfessionals')">Entry Level
                            Professionals</a></h6>
                    <p>You've worked hard for your degree, and you're ready for what's next: a job that will challenge
                        you, inspire you, and encourage you to share your ideas.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('entryLevelProfessionals')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('restart')">@lang('public.restart')@</a></h6>
                    <p>Build valuable experience and refresh your skills while transitioning back into the corporate
                        workforce after a personal absence through a paid, 10-week Restart Assignment.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('restart')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
