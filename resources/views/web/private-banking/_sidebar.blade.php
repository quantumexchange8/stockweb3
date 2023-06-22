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
    <h5>@lang('public.private banking')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('privateWealthManagement')">@lang('public.private wealth management')</a>
            <ul>
                <li><a href="javascript:goTo('investmentAdvisory')">@lang('public.investment advisory')</a></li>
                <li><a href="javascript:goTo('wealthPlanning')">@lang('public.wealth planning')</a></li>
                <li><a href="javascript:goTo('philanthropicAdvisory')">@lang('public.philanthropic advisory')</a></li>
                <li><a href="javascript:goTo('trustServices')">@lang('public.trust services')</a></li>
                <li><a href="javascript:goTo('privateClientLending')">@lang('public.private client lending')</a></li>
                <li><a href="javascript:goTo('centerForWomenAndWealth')">@lang('public.center for women & wealth')</a></li>
                <ul>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">@lang('public.conversations on women, wealth & leadership')</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('corporateAdvisoryAndBanking')">@lang('public.corporate advisory & banking')</a>
            <ul>
                <li><a href="javascript:goTo('corporateAdvisory')">@lang('public.corporate advisory')</a></li>
                <li><a href="javascript:goTo('corporateBanking')">@lang('public.corporate banking')</a></li>
                <li><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a></li>
                <ul>
                    <li><a href="javascript:goTo('definingLegacyAndTheFutureOfTheBusiness')">@lang('public.defining legacy and the future of the business')</a></li>
                    <li><a href="javascript:goTo('buildingASupportTeam')">@lang('public.building a support team')</a></li>
                    <li><a href="javascript:goTo('successionPlanningManagementAndOwnership')">@lang('public.succession planning – management and ownership')</a></li>
                    <li><a href="javascript:goTo('capitalPolicies')">@lang('public.capital policies')</a></li>
                    <li><a href="javascript:goTo('employmentPolicies')">@lang('public.employment policies')</a></li>
                    <li><a href="javascript:goTo('governanceAndCommunications')">@lang('public.governance and communications')</a></li>
                    <li><a href="javascript:goTo('distributionsAndFamilyLiquidity')">@lang('public.distributions and family liquidity')</a></li>
                    <li><a href="javascript:goTo('balancingCompetingInterests')">@lang('public.balancing competing interests')</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('privateEquity')">@lang('public.private equity')</a>
            <ul>
                <li><a href="javascript:goTo('aboutWingate')">@lang('public.about vanward')</a></li>
                <li><a href="javascript:goTo('investmentProfile')">@lang('public.investment profile')</a></li>
                <li><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">@lang('public.investment strategy & transaction types')</a></li>
                <li><a href="javascript:goTo('selectPortfolioCompanies')">@lang('public.select portfolio companies')</a></li>
            </ul>
        </li>
    </ul>
</div>
