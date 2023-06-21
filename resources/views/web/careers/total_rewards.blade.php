<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.total rewards')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.total rewards')</h1>
        <p style="padding-top: 10px;">
            At Wingate ("WAML"), we recognize that our employees are integral to our success and the delivery of
            exceptional solutions to our clients. To show our appreciation and support, we offer a comprehensive Total
            Rewards package designed to assist you in managing your personal life while advancing your career.
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('benefitsWellnessAndCompensation')">Benefits,
                            Wellness and Compensation</a></h6>
                    <p>A high-quality benefits program emphasizing continued good health, financial security for your
                        future, and peace of mind.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('benefitsWellnessAndCompensation')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('ongoingLearning')">Ongoing
                            Learning</a></h6>
                    <p>Opportunities to expand your skills and knowledge through collaborative learning, on-the-job
                        application, and online tools.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('ongoingLearning')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('careerManagement')">Career
                            Management</a></h6>
                    <p>Career ownership with the support you need to nurture your long-term professional passion.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('careerManagement')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('mobility')">@lang('public.mobility')</a></h6>
                    <p>Opportunities to grow your expertise, take on new challenges, and reinvent yourself—without
                        leaving the firm.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('mobility')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
