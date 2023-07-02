<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investorServices')">@lang('public.investor services')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.markets')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.markets')</h1>
        <p style="padding-top: 10px;">
            @lang('public.markets 1')
        </p>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('foreignExchange')">@lang('public.foreign exchange')</a>
                </h6>
                <p>@lang('public.markets 2')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('foreignExchange')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('infoFx')">@lang('public.infofx')</a>
                </h6>
                <p>@lang('public.markets 3')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('infoFx')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('securitiesLending')">@lang('public.securities lending')</a>
                </h6>
                <p>@lang('public.markets 4')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('securitiesLending')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('activeFxExecution')">@lang('public.active fx execution')</a>
                </h6>
                <p>@lang('public.markets 5')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('activeFxExecution')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('currencyHedging')">@lang('public.currency hedging')</a>
                </h6>
                <p>@lang('public.markets 6')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('currencyHedging')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('marketIntelligence')">@lang('public.market intelligence')</a>
                </h6>
                <p>@lang('public.markets 7')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('marketIntelligence')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.investor-services._sidebar')
    </div>
</div>
