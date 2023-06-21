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
    h2 {
        padding-top: 20px;
    }
</style>

<div id="sidebar">
    <h5>@lang('public.our firm')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('thePartnership')">The Partnership</a>
        <li><a href="javascript:goTo('ourMissionAndProfile')">Our Mission & Profile</a>
        <li><a href="javascript:goTo('sustainability')">@lang('public.sustainability')</a>
        <li><a href="javascript:goTo('philanthropy')">Philanthropy</a>
        <li><a href="javascript:goTo('policiesAndDisclosures')">Policies & Disclosures</a>
            <ul>
                <li><a href="javascript:goTo('importantStatementsAndDisclosures')">Important Statements & Disclosures</a>
                    <ul>
                        <li><a href="javascript:goTo('dataProtectionNotice')">Data Protection Notice</a></li>
                        <li><a href="javascript:goTo('onlineSecurity')">Online Security</a></li>
                        <li><a href="javascript:goTo('bcpStatement')">BCP Statement</a></li>
                        <li><a href="javascript:goTo('regulationE')">Regulation E</a></li>
                        <li><a href="javascript:goTo('additionalDisclosures')">Additional Disclosures</a></li>
                        <li><a href="javascript:goTo('confidentialEthicsReporting')">Confidential Ethics Reporting</a></li>
                    </ul>
                </li>
                <li><a href="javascript:goTo('legal')">Legal</a></li>
                <li><a href="javascript:goTo('privacyPolicy')">Privacy Policy</a>
                    <ul>
                        <li><a href="javascript:goTo('cookiePolicy')">Cookie Policy</a></li>
                        <li><a href="javascript:goTo('manageCookies')">Manage Cookies</a></li>
                        <li><a href="javascript:goTo('personalInformationRequest')">Personal Information Request</a></li>
                    </ul>
                </li>
                <li><a href="javascript:goTo('newAccountPolicy')">New Account Policy</a></li>
                <li><a href="javascript:goTo('usaPatriotAct')">USA PATRIOT Act</a></li>
            </ul>
        </li>
    </ul>
</div>
