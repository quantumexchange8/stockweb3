<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investmentManagement')">@lang('public.investment management')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.public equity')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">
    <div class="eleven columns">
        <h1>@lang('public.public equity')</h1>
        <p style="padding-top: 10px;">
            @lang('public.public equity 1')
            <br><br>
            @lang('public.public equity 2')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;@lang('public.public equity 3')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;@lang('public.public equity 4')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;@lang('public.public equity 5')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;@lang('public.public equity 6')
            <br><br>
            @lang('public.public equity 7') <a href="javascript:goTo('esgApproach')"
                style="text-decoration: underline;">@lang('public.public equity 8')</a>
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('usLargeCapEquity')">@lang('public.US large cap equity')</a>
                    </h6>
                    <p>@lang('public.public equity 9')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('usLargeCapEquity')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a
                            href="javascript:goTo('usSmallAndMidCapEquity')">@lang('public.US small & mid-cap equity')</a></h6>
                    <p>@lang('public.public equity 10')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a
                                href="javascript:goTo('usSmallAndMidCapEquity')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('globalEquity')">@lang('public.global equity')</a></h6>
                    <p>@lang('public.public equity 11')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('globalEquity')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="eleven columns">
            <p style="padding-top: 10px; font-style: italic">
                @lang('public.public equity 12')
                <br>
                @lang('public.public equity 13')
                <br><br>
            </p>
            <p style="display: flex; justify-content: space-around;">
                <strong>@lang('public.invest reminder 1')</strong>
                <strong>@lang('public.invest reminder 2')</strong>
                <strong>@lang('public.invest reminder 3')</strong>
            </p>
        </div>
    </div>
    <div class="five columns">
        @include('web.investment-management._sidebar')
    </div>
</div>
