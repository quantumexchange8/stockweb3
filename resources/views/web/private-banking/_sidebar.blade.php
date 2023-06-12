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
    <h5>Private Banking</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('privateWealthManagement')">Private Wealth Management</a>
            <ul>
                <li><a href="javascript:goTo('investmentAdvisory')">Investment Advisory</a></li>
                <li><a href="javascript:goTo('wealthPlanning')">Wealth Planning</a></li>
                <li><a href="javascript:goTo('philanthropicAdvisory')">Philanthropic Advisory</a></li>
                <li><a href="javascript:goTo('trustServices')">Trust Services</a></li>
                <li><a href="javascript:goTo('privateClientLending')">Private Client Lending</a></li>
                <li><a href="javascript:goTo('centerForWomenAndWealth')">Center For Women &amp; Wealth</a></li>
                <ul>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Conversations On Women,
                            Wealth & Leadership</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('corporateAdvisoryAndBanking')">Corporate Advisory &amp; Banking</a>
            <ul>
                <li><a href="javascript:goTo('corporateAdvisory')">Corporate Advisory</a></li>
                <li><a href="javascript:goTo('corporateBanking')">Corporate Banking</a></li>
                <li><a href="javascript:goTo('centerForFamilyBusiness')">Center For Family Business</a></li>
                <ul>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Defining Legacy and the Future of the Business</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Building a Support Team</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Succession Planning – Management and Ownership</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Capital Policies</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Employment Policies</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Governance and Communications</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Distributions and Family Liquidity</a></li>
                    <li><a href="javascript:goTo('conversationsOnWomenWealthAndLeadership')">Balancing Competing Interests</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="javascript:goTo('privateEquity')">Private Equity</a>
            <ul>
                <li><a href="javascript:goTo('aboutWingate')">About Wingate</a></li>
                <li><a href="javascript:goTo('investmentProfile')">Investment Profile</a></li>
                <li><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">Investment Strategy &amp;
                        Transaction Types</a></li>
                <li><a href="javascript:goTo('selectPortfolioCompanies')">Select Portfolio Companies</a></li>
            </ul>
        </li>
    </ul>
</div>
