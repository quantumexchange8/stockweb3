<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investorServices')">@lang('public.investor services')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investorServices')">@lang('public.investment operations & technology solutions')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.technology services')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.technology services')</h1>
        <p style="padding-top: 10px;">
            Designed for asset gatherers who want to retain control over their operational processes while leveraging
            cost effective, efficient and cutting-edge financial technology, Wingate makes key components of our
            technology platform available to clients. With direct access to our Global Custody, US Custody, Fund
            Accounting and Transfer Agency platforms, clients benefit from WAML's continuous product and regulatory
            investments in these large, resource intensive systems. In addition, our suite of Infomediary applications
            can provide the same access to WAML's connectivity, corporate actions, reconciliation and trade management
            modules.
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('dataConnectivityAndApplicationsViaInfomediary')">Data Connectivity & Applications via
                            Infomediary</a>
                    </h6>
                    <p>
                        Providing connectivity options designed to streamline reconciliation, trade management,
                        corporate actions, FX and other operational and technological challenges.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('dataConnectivityAndApplicationsViaInfomediary')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('accountOperatorDirectForUSDepositories')">@lang('public.account operator direct for US depositories')</a>
                    </h6>
                    <p>
                        Helping global financial institutions gain direct access to US central securities depositories.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('accountOperatorDirectForUSDepositories')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('globalCustodyDirect')">@lang('public.global custody direct')</a>
                    </h6>
                    <p>Helping global financial institutions expand and differentiate their global custody capabilities.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('globalCustodyDirect')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.investor-services._sidebar')
    </div>
</div>
