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
    <h5>@lang('public.investor services')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('custodyAndFundServices')">@lang('public.custody & fund services')</a>
            <ul>
                <li><a href="javascript:goTo('custody')">@lang('public.custody')</a></li>
                <li><a href="javascript:goTo('depositaryAndTrustee')">@lang('public.depositary & trustee')</a></li>
                <li><a href="javascript:goTo('fundAccounting')">@lang('public.fund accounting')</a></li>
                <li><a href="javascript:goTo('fundAdministration')">@lang('public.fund administration')</a></li>
                <li><a href="javascript:goTo('transferAgency')">@lang('public.transfer agency')</a></li>
                <li><a href="javascript:goTo('globalTax')">@lang('public.global tax')</a></li>
                <li><a href="javascript:goTo('collateralManagementCustody')">@lang('public.collateral management')</a></li>
                <li><a href="javascript:goTo('fundOrderAndCustody')">@lang('public.fund order & custody')</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('specialistExpertise')">@lang('public.specialist expertise')</a>
            <ul>
                <li><a href="javascript:goTo('crossBorderFunds')">@lang('public.cross-border funds')</a></li>
                <ul>
                    <li><a href="javascript:goTo('greaterChina')">Greater China</a></li>
                    <li><a href="javascript:goTo('latinAmerica')">Latin America</a></li>
                    <li><a href="javascript:goTo('japan')">Japan</a></li>
                    <li><a href="javascript:goTo('dublin')">Dublin</a></li>
                    <li><a href="javascript:goTo('luxembourg')">Luxembourg</a></li>
                    <li><a href="javascript:goTo('globalServiceModel')">Global Service Model</a></li>
                </ul>
                <li><a href="javascript:goTo('usFunds')">@lang('public.US funds')</a></li>
                <li><a href="javascript:goTo('consultantsAndAdvisors')">@lang('public.consultants and advisors')</a></li>
                <li><a href="javascript:goTo('distributionIntelligence')">@lang('public.distribution intelligence')</a></li>
                <li><a href="javascript:goTo('alternativeFunds')">@lang('public.alternative funds')</a></li>
                <ul>
                    <li><a href="javascript:goTo('realAssetsAndInfrastructure')">Real Assets & Infrastructure</a></li>
                    <li><a href="javascript:goTo('privateEquityAlternativeFunds')">@lang('public.private equity')</a></li>
                    <li><a href="javascript:goTo('hedgeFunds')">Hedge Funds</a></li>
                    <li><a href="javascript:goTo('syndicatedAndOriginatedDebt')">Syndicated And Original Debt</a></li>
                </ul>
                <li><a href="javascript:goTo('exchangeTradedFunds')">@lang('public.exchange traded funds')</a></li>
                <li><a href="javascript:goTo('insurance')">@lang('public.insurance')</a></li>
                <li><a href="javascript:goTo('regulatoryIntelligence')">@lang('public.regulatory intelligence')</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('markets')">@lang('public.markets')</a>
            <ul>
                <li><a href="javascript:goTo('foreignExchange')">@lang('public.foreign exchange')</a></li>
                <ul>
                    <li><a href="javascript:goTo('tokyoFixingRates')">Tokyo Fixing Rates</a></li>
                    <li><a href="javascript:goTo('termsAndConditions')">Terms And Conditions</a></li>
                    <li><a href="javascript:goTo('regulatoryReportingRequirements')">Regulatory Reporting Requirements</a></li>
                    <li><a href="javascript:goTo('fxDisclosure')">FX Disclosure</a></li>
                </ul>
                <li><a href="javascript:goTo('activeFxExecution')">@lang('public.active fx execution')</a></li>
                <li><a href="javascript:goTo('infoFx')">@lang('public.infofx')</a></li>
                <li><a href="javascript:goTo('currencyHedging')">@lang('public.currency hedging')</a></li>
                <li><a href="javascript:goTo('securitiesLending')">@lang('public.securities lending')</a></li>
                <li><a href="javascript:goTo('marketIntelligence')">@lang('public.market intelligence')</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('investmentOperationsAndTechnologySolutions')">@lang('public.investment operations & technology solutions')</a>
            <ul>
                <li><a href="javascript:goTo('technologyServices')">@lang('public.technology services')</a></li>
                <ul>
                    <li><a href="javascript:goTo('dataConnectivityAndApplicationsViaInfomediary')">Data Connectivity & Applications via Infomediary</a></li>
                    <li><a href="javascript:goTo('globalCustodyDirect')">Global Custody Direct</a></li>
                    <li><a href="javascript:goTo('accountOperatorDirectForUSDepositories')">Account Operator Direct for US Depositories</a></li>
                </ul>
                <li><a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.middle office outsourcing')</a></li>
                <ul>
                    <li><a href="javascript:goTo('targetedTechnologySolutionsViaInfomediary')">Targeted Technology Solutions via Infomediary</a></li>
                    <ul>
                        <li><a href="javascript:goTo('infoRecon')">InfoRecon</a></li>
                        <li><a href="javascript:goTo('infoNav')">InfoNAV</a></li>
                    </ul>
                    <li><a href="javascript:goTo('hostedOperationsAndReporting')">Hosted Operations & Reporting</a></li>
                    <li><a href="javascript:goTo('investmentAccountingAndEnterpriseDataSupport')">Investment Accounting & Enterprise Data Support</a></li>
                    <li><a href="javascript:goTo('collateralManagementCustody')">@lang('public.collateral management')</a></li>
                </ul>
            </ul>
        </li>
    </ul>
</div>
