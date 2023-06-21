<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('ourFirm')">@lang('public.our firm')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.important statements & disclosures')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.important statements & disclosures')</h1>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('dataProtectionNotice')">@lang('public.data protection notice')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('dataProtectionNotice')">read
                                more</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('bcpStatement')">@lang('public.BCP statement')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('bcpStatement')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('additionalDisclosures')">@lang('public.additional disclosures')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('additionalDisclosures')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('onlineSecurity')">@lang('public.online security')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('onlineSecurity')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('regulationE')">@lang('public.regulation E')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('regulationE')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;">
                        <a href="javascript:goTo('confidentialEthicsReporting')">@lang('public.confidential ethics reporting')</a>
                    </h6>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('confidentialEthicsReporting')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.our-firm._sidebar')
    </div>
</div>
