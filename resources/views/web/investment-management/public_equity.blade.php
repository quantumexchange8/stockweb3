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
            Vanward Investment Management employs what we consider to be a low-risk approach to equity investing, based
            on consistent, objective, and logical decision-making. Long-term attractive risk-adjusted returns are
            generated for our clients by applying a comprehensive set of investment criteria to our portfolio.
            <br><br>

            Our guiding principles include:
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Invest in well-established, cash-generating companies that are market
            leaders in the provision of essential goods and services.
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;At the time of purchase, investments must be acquired at a discount to
            our estimate of intrinsic value* (e.g., a margin of safety** in the stock price).
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Invest in a small number of companies in order to minimise the impact of
            unanticipated company-specific issues, and invest only in companies that meet stringent business and
            valuation criteria.
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Think like owners and administrators by holding stakes in businesses
            over a long period of time to increase wealth and decrease transaction costs.
            <br><br>

            Learn how our bottom-up investment strategy incorporates <a href="javascript:goTo('esgApproach')"
                style="text-decoration: underline;">environmental, social and governance (ESG) considerations.</a>
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('usLargeCapEquity')">@lang('public.US large cap equity')</a>
                    </h6>
                    <p>The domestic large-cap equity strategy seeks to invest primarily in established, cash-generating
                        North American companies.

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
                    <p>A small- and mid-cap equity strategy that seeks to invest in a limited number of unpopular or
                        under-followed companies.

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
                    <p>A global equity strategy that seeks to invest in prominent North American and international
                        providers of essential goods and services.
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
                * Vanward's estimate of the cash that a business can generate and distribute to its shareholders over
                the remainder of its tenure.
                <br>
                * *A margin of safety exists when there is a significant discount to intrinsic value at the time of
                purchase; we seek to purchase at 75% or less of our estimate of intrinsic value.
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
