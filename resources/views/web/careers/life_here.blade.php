<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.life at vanward')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">
    <div class="eleven columns">
        <h1>@lang('public.life at vanward')</h1>
        <p style="padding-top: 10px;">
            @lang('public.life here 1')

        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('ourCulture')">@lang('public.our culture')</a></h6>
                    <p>@lang('public.life here 2')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('ourCulture')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a></h6>
                    <p>@lang('public.life here 3')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('coreValues')">@lang('public.core values')</a></h6>
                    <p>@lang('public.life here 4')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('coreValues')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('cares')">@lang('public.cares')</a></h6>
                    <p>@lang('public.life here 5')
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('cares')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
