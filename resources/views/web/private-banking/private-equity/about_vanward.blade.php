<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateWealthManagement')">@lang('public.private equity')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.about vanward')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.about vanward')</h2>
        <p style="padding-top: 10px;">
            @lang('public.about vanward 1')<br><br>

            @lang('public.about vanward 2')<br><br>

            <strong><span style="text-decoration: underline;">@lang('public.about vanward 3')</span></strong><br><br>

            <strong>@lang('public.about vanward 4')</strong><br><br>

            @lang('public.about vanward 5')<br><br>

            <strong>@lang('public.about vanward 6')</strong><br><br>

            @lang('public.about vanward 7')
        </p>
    </div>
    <div class="five columns">
        @include('web.private-banking._sidebar')
    </div>
</div>
