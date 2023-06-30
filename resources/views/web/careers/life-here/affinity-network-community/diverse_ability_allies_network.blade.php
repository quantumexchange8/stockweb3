<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.diverse ability allies network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.diverse ability allies network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"@lang('public.diverse ability allies 1')"</em></p>
        <br>
        <p><strong>@lang('public.diverse ability allies 2')</strong></p>
        <br>
        <p>@lang('public.diverse ability allies 3')</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">@lang('public.signature events')</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/defining-dyslexia.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.diverse ability allies 4')</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.diverse ability allies 5') <a href="javascript:goTo('parentingNetwork')">@lang('public.parenting network')</a>
                    @lang('public.diverse ability allies 6')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/daan-art-of-blinders.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.diverse ability allies 7')</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.diverse ability allies 8')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/ban-daan-event.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.diverse ability allies 9')
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.diverse ability allies 10')
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
