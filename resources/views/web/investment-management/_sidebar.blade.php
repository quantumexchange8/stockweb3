<style>
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
</style>

<div id="sidebar">
    <h5>@lang('public.investment management')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('publicEquity')">@lang('public.public equity')</a>
            <ul>
                <li><a href="javascript:goTo('usLargeCapEquity')">@lang('public.US large cap equity')</a></li>
                <li><a href="javascript:goTo('globalEquity')">@lang('public.global equity')</a></li>
                <li><a href="javascript:goTo('usSmallAndMidCapEquity')">@lang('public.US small & mid-cap equity') & Mid-Cap Equity</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('fixedIncome')">@lang('public.fixed income')</a>
            <ul>
                <li><a href="javascript:goTo('taxableFixedIncomeStrategies')">@lang('public.fixed income')</a></li>
                <li><a href="javascript:goTo('taxExemptFixedIncomeStrategy')">@lang('public.tax-exempt fixed income') Strategy</a></li>
                <li><a href="javascript:goTo('usTipsStrategy')">@lang('public.US TIPS strategy')</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('openAccount')">@lang('public.open account')</a>
        </li>
        <li><a href="javascript:goTo('esgApproach')">ESG Approach</a>
        </li>
    </ul>
</div>
