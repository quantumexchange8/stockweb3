<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateWealthManagement')">@lang('public.private wealth management')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.philanthropic advisory')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.philanthropic advisory')</h2>
        <p style="padding-top: 10px;">
            @lang('public.philanthropic advisory paragraph 1')<br><br>

            @lang('public.philanthropic advisory paragraph 2')
        </p>

    </div>
    <div class="five columns">
        @include('web.private-banking._sidebar')
    </div>
</div>
