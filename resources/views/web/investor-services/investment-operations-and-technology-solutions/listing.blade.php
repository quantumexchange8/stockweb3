<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investorServices')">@lang('public.investor services')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.investment operations & technology solutions')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.investment operations & technology solutions')</h1>
        <p style="padding-top: 10px;">
            @lang('public.investment operations and technology solutions 1')
        </p>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('technologyServices')">@lang('public.technology services')</a>
                </h6>
                <p>
                    @lang('public.investment operations and technology solutions 2')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('technologyServices')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.middle office outsourcing')</a>
                </h6>
                <p>
                    @lang('public.investment operations and technology solutions 3')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.investor-services._sidebar')
    </div>
</div>
