<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.parenting network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.parenting network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"@lang('public.parenting 1')"</em></p>
        <br>
        <p><strong>@lang('public.parenting 2')</strong></p>
        <br>
        <p>@lang('public.parenting 3') <a href="javascript:goTo('prideNetwork')">@lang('public.short pride')</a>, <a
                href="javascript:goTo('diverseAbilityAlliesNetwork')">@lang('public.short diverse abilities')</a>, @lang('public.and') <a
                href="javascript:goTo('womensNetwork')">@lang('public.short womens')</a> @lang('public.parenting 4')</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">@lang('public.signature events')</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/daughters-and-sons.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.parenting 5')
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.parenting 6')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/parent-icon-280.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.parenting 7')</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.parenting 8')
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/pride.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">@lang('public.parenting 9')
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.parenting 10')
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
