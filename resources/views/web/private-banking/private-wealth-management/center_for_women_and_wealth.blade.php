<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateWealthManagement')">@lang('public.private wealth management')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.center for women & wealth')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.center for women & wealth')</h2>
        <p style="padding-top: 10px;">
            @lang('public.center for women and wealth caption 1')
        </p>
        <h2 style="padding-top: 10px;">Partnerships</h2>
        <p style="padding-top: 10px;"><a href="https://www.newamerica.org/better-life-lab/">New America: Better Life Lab</a></p>
        <p style="padding-top: 10px;">
            @lang('public.center for women and wealth caption 2')
        </p>
    </div>
    <div class="five columns">
        @include('web.private-banking._sidebar')
    </div>
</div>
