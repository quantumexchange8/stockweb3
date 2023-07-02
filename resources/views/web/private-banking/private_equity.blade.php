<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.private equity')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.private equity')</h1>
        <p style="padding-top: 10px;">
            @lang('public.private equity caption 1') <br><br>

            @lang('public.private equity caption 2')
        </p>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('aboutVanward')">@lang('public.about vanward')</a></h6>
                <p>@lang('public.private equity caption 3')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('aboutVanward')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">@lang('public.investment strategy & transaction types')</a></h6>
                <p>@lang('public.private equity caption 4')
                </p>
                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('investmentProfile')">@lang('public.investment profile')</a>
                </h6>
                <p>@lang('public.private equity caption 5')
                </p>

                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('investmentProfile')">@lang('public.read more')</a></div>
                </div>
            </div>
            <div class="card">
                <h6 class="card-title"><a href="javascript:goTo('selectPortfolioCompanies')">@lang('public.select portfolio companies')</a></h6>
                <p>@lang('public.private equity caption 6')
                </p>

                <div class="link-blog read-more">
                    <div class="cl-effect-14"><a href="javascript:goTo('selectPortfolioCompanies')">@lang('public.read more')</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.private-banking._sidebar')
    </div>
</div>
