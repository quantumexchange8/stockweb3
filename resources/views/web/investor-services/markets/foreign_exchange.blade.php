<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investorServices')">@lang('public.investor services')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('markets')">@lang('public.markets')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.foreign exchange')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.foreign exchange')</h2>
        <p style="padding-top: 10px;">
            @lang('public.foreign exchange 1')
            <br><br>
            <strong>@lang('public.foreign exchange 2')</strong>
            <br>
            @lang('public.foreign exchange 3')

            <br><br>
            <strong>@lang('public.foreign exchange 4')</strong>
            <br>
            @lang('public.foreign exchange 5')

            <br><br>
            <strong>@lang('public.foreign exchange 6')</strong>
            <br>
            @lang('public.foreign exchange 7')

            <br><br>
            @lang('public.foreign exchange 8')

            <br><br>
            <a href="javascript:goTo('tokyoFixingRates')">@lang('public.tokyo fixing rates')</a>
            <br><br>
            <a href="javascript:goTo('termsAndConditions')">@lang('public.terms and conditions')</a>
            <br><br>
            <a href="javascript:goTo('regulatoryReportingRequirements')">@lang('public.regulatory reporting requirements')</a>
            <br><br>
            <a href="javascript:goTo('fxDisclosure')">@lang('public.fx disclosure statement')</a>
        </p>
    </div>
    <div class="five columns">
        @include('web.investor-services._sidebar')
    </div>
</div>
