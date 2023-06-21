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
                <li><a href="javascript:goTo('centerForWomenAndWealth')">Center For Women &amp; Wealth</a></li>
                <ul>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Conversations On Women,
                            Wealth & Leadership</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('corporateAdvisoryAndBanking')">@lang('public.corporate advisory') &amp; Banking</a>
            <ul>
                <li><a href="javascript:goTo('corporateAdvisory')">@lang('public.corporate advisory')</a></li>
                <li><a href="javascript:goTo('corporateBanking')">@lang('public.corporate banking')</a></li>
                <li><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a></li>
                <ul>
                    <li><a href="javascript:goTo('definingLegacyAndTheFutureOfTheBusiness')">Defining Legacy and the Future of the Business</a></li>
                    <li><a href="javascript:goTo('buildingASupportTeam')">Building a Support Team</a></li>
                    <li><a href="javascript:goTo('successionPlanningManagementAndOwnership')">Succession Planning – Management and Ownership</a></li>
                    <li><a href="javascript:goTo('capitalPolicies')">Capital Policies</a></li>
                    <li><a href="javascript:goTo('employmentPolicies')">Employment Policies</a></li>
                    <li><a href="javascript:goTo('governanceAndCommunications')">Governance and Communications</a></li>
                    <li><a href="javascript:goTo('distributionsAndFamilyLiquidity')">Distributions and Family Liquidity</a></li>
                    <li><a href="javascript:goTo('balancingCompetingInterests')">Balancing Competing Interests</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('privateEquity')">@lang('public.private equity')</a>
            <ul>
                <li><a href="javascript:goTo('aboutWingate')">@lang('public.about wingate')</a></li>
                <li><a href="javascript:goTo('investmentProfile')">@lang('public.investment profile')</a></li>
                <li><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">Investment Strategy &amp;
                        Transaction Types</a></li>
                <li><a href="javascript:goTo('selectPortfolioCompanies')">@lang('public.select portfolio companies')</a></li>
            </ul>
        </li>
    </ul>
</div>
