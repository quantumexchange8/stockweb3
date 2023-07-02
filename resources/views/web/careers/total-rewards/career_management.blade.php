<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('totalRewards')">@lang('public.total rewards')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.career management')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.career management')</h2>
        <div style="padding-top: 10px;">
            <p>
                @lang('public.career management 1')
            </p>
            <br>
            <div style="padding-left: 30px;">
                @lang('public.career management 2')
            </div>
            <br>
            <p>
                @lang('public.career management 3')
            </p>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
