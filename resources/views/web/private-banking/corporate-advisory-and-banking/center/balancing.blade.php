<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('corporateAdvisoryAndBanking')">@lang('public.corporate advisory & banking')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.balancing competing interests')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.balancing competing interests')</h2>
        <p style="padding-top: 10px;">
            @lang('public.balancing 1')
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.balancing 2')<br><br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.balancing 3')<br><br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.balancing 4')<br><br>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">@lang('public.insights')</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/spring-festival-cover.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.balancing 5')</h6>
                <p>@lang('public.balancing 6')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/diwali.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.balancing 7')</h6>
                <p>@lang('public.balancing 8')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/asia-link.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.balancing 9')
                </h6>
                <p>@lang('public.balancing 10')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/asia-link.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.balancing 11')
                </h6>
                <p>@lang('public.balancing 12')
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.private-banking._sidebar')
    </div>
</div>
