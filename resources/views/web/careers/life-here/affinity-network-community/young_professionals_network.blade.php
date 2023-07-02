<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.young professionals network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.young professionals network')</h2>
        <p style="padding-top: 10px;">
        <p><em>@lang('public.young professionals 1')
            </em></p>
        <br>
        <p><strong>@lang('public.young professionals 2')</strong></p>
        <br>
        <p>@lang('public.young professionals 3')</p>
        <br>
        <h2 style="padding-bottom: 20px;">@lang('public.young professionals 4')</h2>
        <hr>
        <br>
        <p>@lang('public.young professionals 5') <a
                href="https://www.wgaml.com/resource/blob/36828/f5fb8e50cfa8a8d930c0ce7b114b097e/dublin-ypn-paper-data.pdf"
                target="_blank">@lang('public.young professionals 6')</a></p>

        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">@lang('public.signature events')</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/urban-garden.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.young professionals 7')</h6>
                <p>@lang('public.young professionals 8')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/meet-the-youngest-irish-person-to-climb-mount-everest.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">
                    @lang('public.young professionals 9')
                </h6>
                <p>@lang('public.young professionals 10')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/invest-in-yourself.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.young professionals 11')
                </h6>
                <p>@lang('public.young professionals 12')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/understanding-generation-gap.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.young professionals 13')
                </h6>
                <p>@lang('public.young professionals 14')
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
