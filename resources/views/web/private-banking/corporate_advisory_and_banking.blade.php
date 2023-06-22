<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.corporate advisory & banking')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.corporate advisory & banking')</h1>
        <p style="padding-top: 10px;">
            @lang('public.corporate advisory and banking caption 1')<br><br>

            @lang('public.corporate advisory and banking caption 2')
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('corporateAdvisory')">@lang('public.corporate advisory')</a>
                    </h6>
                    <p>@lang('public.corporate advisory and banking caption 3')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('corporateAdvisory')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a></h6>
                    <p>@lang('public.corporate advisory and banking caption 4')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('corporateBanking')">@lang('public.corporate banking')</a>
                    </h6>
                    <p>@lang('public.corporate advisory and banking caption 5')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('corporateBanking')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns" id="sidebar">
        @include('web.private-banking._sidebar')
    </div>
</div>
