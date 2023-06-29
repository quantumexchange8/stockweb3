<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('investmentManagement')">@lang('public.investment management')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('publicEquity')">@lang('public.public equity')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.global equity')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">
    <div class="eleven columns">
        <h2>@lang('public.global equity')</h2>
        <p style="padding-top: 10px;">
            @lang('public.global equity 1')
            <strong><span style="text-decoration: underline;">@lang('public.global equity 2')</span></strong><br><br>
            @lang('public.global equity 3')
            <br><br>
            <strong>@lang('public.global equity 4')</strong><br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 5')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 6')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 7')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 8')<br><br>
            <strong>@lang('public.global equity 9')</strong><br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 10')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 11')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 12')
            <br><br>
            <strong>@lang('public.global equity 13')</strong><br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 14')
            <br>
            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.global equity 15')
            <br><br>
            <span style="font-style: italic;">
                @lang('public.global equity 16')
            </span>
        </p>
        <p style="display: flex; justify-content: space-around;">
            <strong>@lang('public.invest reminder 1')</strong>
            <strong>@lang('public.invest reminder 2')</strong>
            <strong>@lang('public.invest reminder 3')</strong>
        </p>
    </div>
    <div class="five columns">
        @include('web.investment-management._sidebar')
    </div>
</div>
