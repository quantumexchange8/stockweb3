{{-- <style>
    /* Styles for the sidebar */
    #sidebar {
        font-family: 'OpenSans-Light-webfont', sans-serif;
        background-color: #333333;
        padding: 10px;
    }

    #sidebar h5 {
        padding: 10px;
        color: #ffffff;
        /* White text color */
    }

    #sidebar h6 {
        text-align: left;
        padding: 10px;
        color: #ffffff;
        /* White text color */
    }

    #sidebar hr {
        border-color: white;
    }

    #sidebar ul {
        padding: 10px;
        list-style: none;
        margin: 0;
    }

    #sidebar ul li {
        margin-bottom: 5px;
    }

    #sidebar ul li a {
        font-size: 14px;
        color: #ffffff;
        /* White text color */
        text-decoration: none;
    }

    #sidebar ul li a:hover {
        text-decoration: underline;
    }

    #sidebar ul ul {
        padding: 10px;
        margin-top: 5px;
    }

    #sidebar ul ul li {
        margin-bottom: 5px;
    }

    /* Nested list indicators */
    #sidebar ul ul li:before {
        content: "-";
        margin-right: 5px;
        color: #ffffff;
        /* White text color */
    }
    h2 {
        padding-top: 20px;
    }
</style> --}}

<div id="sidebar">
    <h5>@lang('public.our firm')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('thePartnership')">@lang('public.the partnership')</a>
        <li><a href="javascript:goTo('ourMissionAndProfile')">@lang('public.our mission & profile')</a>
        <li><a href="javascript:goTo('sustainability')">@lang('public.sustainability')</a>
        <li><a href="javascript:goTo('philanthropy')">@lang('public.philanthropy')</a>
        <li><a href="javascript:goTo('policiesAndDisclosures')">@lang('public.policies & disclosures')</a>
            <ul>
                <li><a href="javascript:goTo('importantStatementsAndDisclosures')">@lang('public.important statements & disclosures')</a>
                    <ul>
                        <li><a href="javascript:goTo('dataProtectionNotice')">@lang('public.data protection notice')</a></li>
                        <li><a href="javascript:goTo('onlineSecurity')">@lang('public.online security')</a></li>
                        <li><a href="javascript:goTo('bcpStatement')">@lang('public.BCP statement')</a></li>
                        <li><a href="javascript:goTo('regulationE')">@lang('public.regulation E')</a></li>
                        <li><a href="javascript:goTo('additionalDisclosures')">@lang('public.additional disclosures')</a></li>
                        <li><a href="javascript:goTo('confidentialEthicsReporting')">@lang('public.confidential ethics reporting')</a></li>
                    </ul>
                </li>
                <li><a href="javascript:goTo('legal')">@lang('public.legal')</a></li>
                <li><a href="javascript:goTo('privacyPolicy')">@lang('public.privacy policy')</a>
                    <ul>
                        <li><a href="javascript:goTo('cookiePolicy')">@lang('public.cookie policy')</a></li>
                        <li><a href="javascript:goTo('manageCookies')">@lang('public.manage cookies')</a></li>
                        <li><a href="javascript:goTo('personalInformationRequest')">@lang('public.personal information request')</a></li>
                    </ul>
                </li>
                <li><a href="javascript:goTo('newAccountPolicy')">@lang('public.new account policy')</a></li>
                <li><a href="javascript:goTo('usaPatriotAct')">@lang('public.USA patriot act')</a></li>
            </ul>
        </li>
    </ul>
</div>
