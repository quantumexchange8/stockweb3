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
    <h5>Investment Management</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('publicEquity')">Public Equity</a>
            <ul>
                <li><a href="javascript:goTo('usLargeCapEquity')">U.S. Large Cap Equity</a></li>
                <li><a href="javascript:goTo('globalEquity')">Global Equity</a></li>
                <li><a href="javascript:goTo('usSmallAndMidCapEquity')">U.S. Small & Mid-Cap Equity</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('fixedIncome')">Fixed Income</a>
            <ul>
                <li><a href="javascript:goTo('taxableFixedIncomeStrategies')">Taxable Fixed Income Strategies</a></li>
                <li><a href="javascript:goTo('taxExemptFixedIncomeStrategy')">Tax-Exempt Fixed Income Strategy</a></li>
                <li><a href="javascript:goTo('usTipsStrategy')">U.S. TIPS Strategy</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('openAccount')">Open Account</a>
        </li>
        <li><a href="javascript:goTo('esgApproach')">ESG Approach</a>
        </li>
    </ul>
</div>
