<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'OpenSans-Light-webfont';
    }

    nav {
        position: fixed;
        z-index: 99;
        width: 100%;
        background: #242526;
    }

    nav .wrapper {
        position: relative;
        max-width: 1300px;
        padding: 0px 0px;
        height: 70px;
        line-height: 70px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 12px !important;
    }

    .wrapper .logos a {
        color: #f2f2f2;
        font-size: 30px;
        font-weight: 600;
        text-decoration: none;
    }

    .wrapper .nav-links {
        display: inline-flex;
        text-align: right'

    }

    .nav-links li {
        list-style: none;
    }

    .nav-links li a {
        color: #f2f2f2;
        text-decoration: none;
        font-size: 12px;
        font-weight: 500;
        padding: 9px 15px;
        border-radius: 5px;
    }

    .nav-links li a:hover {
        background: #3A3B3C;
    }

    .nav-links .mobile-item {
        display: none;
    }

    .nav-links .drop-menu {
        position: absolute;
        background: #242526;
        width: 180px;
        line-height: 45px;
        top: 85px;
        opacity: 0;
        visibility: hidden;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .nav-links li:hover .drop-menu,
    .nav-links li:hover .mega-box {
        transition: all 0.3s ease;
        top: 70px;
        opacity: 1;
        visibility: visible;
    }

    .nav-links li .drop-menu,
    .nav-links li .mega-box {
        -webkit-transition: 0.3s ease;
        transition: all 0.3s ease;
        top: 70px;
        opacity: 1;
        visibility: hidden;
    }

    .drop-menu li a {
        width: 100%;
        display: block;
        padding: 0 0 0 15px;
        font-weight: 400;
        border-radius: 0px;
    }

    .mega-box {
        position: absolute;
        left: 0;
        width: 100%;
        padding: 0 30px;
        top: 85px;
        opacity: 0;
        visibility: hidden;
    }

    .mega-box .content {
        background: #242526;
        padding: 25px 20px;
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-wrap: wrap;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .mega-box .content .row {
        width: calc(25% - 30px);
        line-height: 45px;
    }

    .content .row img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .content .row header {
        color: #f2f2f2;
        font-size: 16px;
        font-weight: 500;
        justify-content: center;
    }

    .content .row .mega-links {
        margin-left: -40px;
        border-top: 1px solid rgba(255, 255, 255, 0.09);
    }

    .row .mega-links li {
        padding: 0 20px;
    }

    .row .mega-links li a {
        padding: 0px;
        padding: 10px 20px;
        color: #d9d9d9;
        font-size: 12px;
        display: block;
    }

    .row .mega-links li a:hover {
        color: #f2f2f2;
    }

    .wrapper .btn {
        color: #fff;
        font-size: 30px;
        cursor: pointer;
        display: none;
    }

    .wrapper .btn.close-btn {
        position: absolute;
        right: 30px;
        top: 10px;
    }

    @media screen and (max-width: 970px) {
        .wrapper .btn {
            display: block;
        }

        .wrapper .nav-links {
            position: fixed;
            height: 100vh;
            width: 100%;
            max-width: 350px;
            top: 0;
            left: -100%;
            background: #242526;
            display: block;
            padding: 50px 10px;
            line-height: 50px;
            overflow-y: auto;
            box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.18);
            transition: all 0.3s ease;
        }

        /* custom scroll bar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #242526;
        }

        ::-webkit-scrollbar-thumb {
            background: #3A3B3C;
        }

        #menu-btn:checked~.nav-links {
            left: 0%;
        }

        #menu-btn:checked~.btn.menu-btn {
            display: none;
        }

        #close-btn:checked~.btn.menu-btn {
            display: block;
        }

        .nav-links li {
            margin: 15px 10px;
        }

        .nav-links li a {
            padding: 0 20px;
            display: block;
            font-size: 20px;
        }

        .nav-links .drop-menu {
            position: static;
            opacity: 1;
            top: 65px;
            visibility: visible;
            padding-left: 20px;
            width: 100%;
            max-height: 0px;
            overflow: hidden;
            box-shadow: none;
            transition: all 0.3s ease;
        }

        #showDrop:checked~.drop-menu,
        #showPrivateBanking:checked~.mega-box {
            max-height: 100%;
        }

        #showDrop:checked~.drop-menu,
        #showInvestmentManagement:checked~.mega-box {
            max-height: 100%;
        }

        #showDrop:checked~.drop-menu,
        #showInvestorServices:checked~.mega-box {
            max-height: 100%;
        }

        .nav-links .desktop-item {
            display: none;
        }

        .nav-links .mobile-item {
            display: block;
            color: #f2f2f2;
            font-size: 20px;
            font-weight: 500;
            padding-left: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-links .mobile-item:hover {
            background: #3A3B3C;
        }

        .drop-menu li {
            margin: 0;
        }

        .drop-menu li a {
            border-radius: 5px;
            font-size: 18px;
        }

        .mega-box {
            position: static;
            top: 65px;
            opacity: 1;
            visibility: visible;
            padding: 0 20px;
            max-height: 0px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .mega-box .content {
            box-shadow: none;
            flex-direction: column;
            padding: 20px 20px 0 20px;
        }

        .mega-box .content .row {
            width: 100%;
            margin-bottom: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .mega-box .content .row:nth-child(1),
        .mega-box .content .row:nth-child(2) {
            border-top: 0px;
        }

        .content .row .mega-links {
            border-left: 0px;
            padding-left: 15px;
        }

        .row .mega-links li {
            margin: 0;
        }

        .content .row header {
            font-size: 16px;
        }

        .content:hover {
            visibility: visible;
        }
    }

    nav input {
        display: none;
    }

    .body-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        text-align: center;
        padding: 0 30px;
    }

    .body-text div {
        font-size: 45px;
        font-weight: 600;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<nav>
    <div class="container">
        <div class="wrapper">
            <div class="logos"><a href="#"></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="https://client.wgaml.com/">CLIENT LOGIN</a></li>
                <li><a href="javascript:goTo('ourFirm');">OUR FIRM</a></li>
                <li><a href="javascript:goTo('careers');">CAREERS</a></li>
                <li><a href="javascript:goTo('sustainability');">SUSTAINABILITY</a></li>
                <li><a href="javascript:goTo('contact');">CONTACT US</a></li>
                <li>
                    <a href="javascript:goTo('privateBanking')" class="desktop-item">PRIVATE BANKING</a>
                    <input type="checkbox" id="showPrivateBanking">
                    <label for="showPrivateBanking" class="mobile-item">PRIVATE BANKING</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <header>Private Wealth Management</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('investmentAdvisory')">Investment Advisory</a></li>
                                    <li><a href="javascript:goTo('wealthPlanning')">Wealth Planning</a></li>
                                    <li><a href="javascript:goTo('philanthropicAdvisory')">Philanthropic Advisory</a>
                                    </li>
                                    <li><a href="javascript:goTo('trustServices')">Trust Services</a></li>
                                    <li><a href="javascript:goTo('privateClientLending')">Private Client Lending</a>
                                    </li>
                                    <li><a href="javascript:goTo('centerForWomenAndWealth')">Center for Women &
                                            Wealth</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Corporate Advisory & Banking</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('corporateAdvisory')">Corporate Advisory</a></li>
                                    <li><a href="javascript:goTo('corporateBanking')">Corporate Banking</a></li>
                                    <li><a href="javascript:goTo('centerForFamilyBusiness')">Center for Family
                                            Business</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Private Equity<br>&nbsp;</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('aboutWingate')">About Wingate</a></li>
                                    <li><a href="javascript:goTo('investmentProfile')">Investment Profile</a></li>
                                    <li><a href="javascript:goTo('investmentStrategyAndTransactionTypes')">Investment
                                            Strategy & Transaction Types</a></li>
                                    <li><a href="javascript:goTo('selectPortfolioCompanies')">Select Portfolio
                                            Companies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:goTo('investmentManagement')" class="desktop-item">INVESTMENT MANAGEMENT</a>
                    <input type="checkbox" id="showInvestmentManagement">
                    <label for="showInvestmentManagement" class="mobile-item">INVESTMENT MANAGEMENT</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <header>Public Equity</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('usLargeCapEquity')">U.S. Large Cap Equity</a></li>
                                    <li><a href="javascript:goTo('globalEquity')">Global Equity</a></li>
                                    <li><a href="javascript:goTo('usSmallAndMidCapEquity')">U.S. Small & Mid-Cap
                                            Equity</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Fixed Income</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('taxableFixedIncomeStrategies')">Taxable Fixed Income
                                            Strategies</a></li>
                                    <li><a href="javascript:goTo('taxExemptFixedIncomeStrategy')">Tax-Exempt Fixed
                                            Income Strategy</a></li>
                                    <li><a href="javascript:goTo('usTipsStrategy')">U.S. TIPS Strategy</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Open Account</header>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:goTo('investorServices')" class="desktop-item">INVESTOR SERVICES</a>
                    <input type="checkbox" id="showInvestorServices">
                    <label for="showInvestorServices" class="mobile-item">INVESTOR SERVICES</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <header>Custody & Fund Services<br>&nbsp;</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('custody')">Custody</a></li>
                                    <li><a href="javascript:goTo('depositaryAndTrustee')">Depositary & Trustee</a></li>
                                    <li><a href="javascript:goTo('fundAccounting')">Fund Accounting</a></li>
                                    <li><a href="javascript:goTo('fundAdministration')">Fund Administration</a></li>
                                    <li><a href="javascript:goTo('transferAgency')">Transfer Agency</a></li>
                                    <li><a href="javascript:goTo('globalTax')">Global Tax</a></li>
                                    <li><a href="javascript:goTo('collateralManagementCustody')">Collateral
                                            Management</a></li>
                                    <li><a href="javascript:goTo('fundOrderAndCustody')">Fund Order & Custody</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Specialist Expertise<br>&nbsp;</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('crossBorderFunds')">Cross-Border Funds</a></li>
                                    <li><a href="javascript:goTo('usFunds')">US Funds</a></li>
                                    <li><a href="javascript:goTo('consultantsAndAdvisors')">Consultants and Advisors</a>
                                    </li>
                                    <li><a href="javascript:goTo('distributionIntelligence')">Distribution
                                            Intelligence</a></li>
                                    <li><a href="javascript:goTo('alternativeFunds')">Alternative Funds</a></li>
                                    <li><a href="javascript:goTo('exchangeTradedFunds')">Exchange Traded Funds</a></li>
                                    <li><a href="javascript:goTo('insurance')">Insurance</a></li>
                                    <li><a href="javascript:goTo('regulatoryIntelligence')">Regulatory Intelligence</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Markets<br>&nbsp;</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('foreignExchange')">Foreign Exchange</a></li>
                                    <li><a href="javascript:goTo('activeFxExecution')">Active FX Execution</a></li>
                                    <li><a href="javascript:goTo('infoFx')">InfoFX</a></li>
                                    <li><a href="javascript:goTo('currencyHedging')">Currency Hedging</a></li>
                                    <li><a href="javascript:goTo('securitiesLending')">Securities Lending</a></li>
                                    <li><a href="javascript:goTo('marketIntelligence')">Market Intelligence</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Investment Operations & Technology Solutions</header>
                                <ul class="mega-links">
                                    <li><a href="javascript:goTo('technologyServices')">Technology Services</a></li>
                                    <li><a href="javascript:goTo('middleOfficeOutsourcing')">Middle Office
                                            Outsourcing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </div>
</nav>

@push('custom-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var links = document.querySelectorAll('.mega-box a');

            links.forEach(function(link) {
                link.addEventListener('click', function() {
                    var megaBox = this.closest('.mega-box');
                    megaBox.style.display = 'none';

                    setTimeout(function() {
                        megaBox.style.display = 'block';
                    }, 500); // Set the timeout to 1000 milliseconds (1 second)
                });
            });
        });
    </script>
@endpush
