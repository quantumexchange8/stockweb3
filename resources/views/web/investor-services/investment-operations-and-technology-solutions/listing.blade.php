<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
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
            The increasing complexity of today's global markets has led many asset gatherers to seek a growing array of
            middle and back office solutions from custody and fund services providers. Whether it be the provision of
            technology services on a 'Software as a Service' (SaaS) basis or a more complete outsourcing capability,
            Vanward is committed to helping our clients make informed decisions about which strategies are best suited
            to their businesses. We believe in a modular implementation approach that allows clients to retain more
            control and minimize execution risk.
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('technologyServices')">@lang('public.technology services')</a>
                    </h6>
                    <p>
                        Making key components of Vanward’s technology platform available on a SaaS and IaaS basis.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('technologyServices')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.middle office outsourcing')</a>
                    </h6>
                    <p>Providing modular operational and technology outsourcing options that maximize client control and
                        minimize risk.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.investor-services._sidebar')
    </div>
</div>
