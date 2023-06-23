@extends('layouts.app')
@section('title', 'Vanward International')

@section('content')
    <article id="home" class="off">
        <div id="wrapper-slider">
            <div id="controls">
                <div class="background-grid"></div>
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
        <div class="home-text">
            <p><span>Web Design - Brand Design - Visual Identity - Illustrations</span></p>
            <div class="rotator">
                <div>
                    <h1>BORN INTO <span>CREATIVITY</span></h1>
                </div>
                <div>
                    <h1>FOCUSED ON <span>STRATEGY</span></h1>
                </div>
                <div>
                    <h1>INSPIRED BY <span>TECHNOLOGY</span></h1>
                </div>
            </div>
            <div class="link-home">
                <div class="cl-effect-14"><a href="javascript:goTo('about');">start here</a></div>
            </div>
        </div>
    </article>

    <article id="about" class="off">
        <div class="container">
            <div class="sixteen columns">
                <h1>About Us</h1>
            </div>
            <div class="sixteen columns">
                <div class="sep"></div>
            </div>
            <div class="sixteen columns">
                <p>We're a close team of creatives, designers & developers who work together to create beautiful,
                    engaging digital experiences. We take pride in delivering only the best.</p>
            </div>
        </div>
        <div class="container">
            <div id="about-img-wrap">
                <div class="slider1">
                    <div class="slide">
                        <div class="eight columns">
                            <img src="images/office1.gif" alt="" />
                        </div>
                        <div class="eight columns">
                            <img src="images/office2.gif" alt="" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="eight columns">
                            <img src="images/office3.gif" alt="" />
                        </div>
                        <div class="eight columns">
                            <img src="images/office4.gif" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="skills">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Our Skills</h3>
                </div>
                <div class="sixteen columns">
                    <div class="sep1"></div>
                </div>
                <div class="eight columns">
                    <ul class="skill">
                        <li><span class="bar bar-prc1"></span>
                            <p>Css</p>
                        </li>
                        <li><span class="bar bar-prc2"></span>
                            <p>jQuery</p>
                        </li>
                        <li><span class="bar bar-prc3"></span>
                            <p>Wordpress</p>
                        </li>
                    </ul>
                </div>
                <div class="eight columns">
                    <ul class="skill">
                        <li><span class="bar bar-prc4"></span>
                            <p>Graphic Design</p>
                        </li>
                        <li><span class="bar bar-prc5"></span>
                            <p>Html</p>
                        </li>
                        <li><span class="bar bar-prc6"></span>
                            <p>MoTools</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="team">
            <div class="container">
                <div class="sixteen columns">
                    <h3>Meet The Team</h3>
                </div>
                <div class="sixteen columns">
                    <div class="sep1"></div>
                </div>
            </div>
            <div class="container">
                <ul class="slider2">
                    <li>
                        <div class="eight columns">
                            <div class="team-wrap">
                                <div class="social-team text-align-left">
                                    <ul class="list-social">
                                        <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                    </ul>
                                </div>
                                <h5 class="text-align-left">James Bean</h5>
                                <img src="images/team1.png" alt="" />
                                <p><span>CEO Founder</span></p>
                            </div>
                        </div>
                        <div class="eight columns">
                            <div class="team-wrap">
                                <div class="social-team text-align-right">
                                    <ul class="list-social">
                                        <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                    </ul>
                                </div>
                                <h5 class="text-align-right">Isabella Moro</h5>
                                <img src="images/team2.png" alt="" />
                                <p><span>Web Designer</span></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eight columns">
                            <div class="team-wrap">
                                <div class="social-team text-align-left">
                                    <ul class="list-social">
                                        <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                    </ul>
                                </div>
                                <h5 class="text-align-left">Caroline Smith</h5>
                                <img src="images/team3.png" alt="" />
                                <p><span>Web Marketing</span></p>
                            </div>
                        </div>
                        <div class="eight columns">
                            <div class="team-wrap">
                                <div class="social-team text-align-right">
                                    <ul class="list-social">
                                        <li class="icon-soc"><a href="#">&#xf099;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09a;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf09b;</a></li>
                                        <li class="icon-soc"><a href="#">&#xf0d5;</a></li>
                                    </ul>
                                </div>
                                <h5 class="text-align-right">David Ive</h5>
                                <img src="images/team4.png" alt="" />
                                <p><span>Developer</span></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @include('layouts.partials._footer')
    </article>

    <!-- Private Banking -->
    <article id="privateBanking" class="active" style="text-align: left;">
        @include('web.private-banking._section_listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Private Banking > Private Wealth Management -->
    <article id="privateWealthManagement" class="off" style="text-align: left;">
        @include('web.private-banking.private_wealth_management')
        @include('layouts.partials._footer')
    </article>
    <!-- Private Banking > Private Wealth Management > * x 6 -->
    <article id="investmentAdvisory" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.investment_advisory')
        @include('layouts.partials._footer')
    </article>
    <article id="wealthPlanning" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.wealth_planning')
        @include('layouts.partials._footer')
    </article>
    <article id="philanthropicAdvisory" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.philanthropic_advisory')
        @include('layouts.partials._footer')
    </article>
    <article id="trustServices" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.trust_services')
        @include('layouts.partials._footer')
    </article>
    <article id="privateClientLending" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.private_client_lending')
        @include('layouts.partials._footer')
    </article>
    <article id="centerForWomenAndWealth" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.center_for_women_and_wealth')
        @include('layouts.partials._footer')
    </article>
    <article id="conversationsOnWomenWealthAndLeadership" class="off" style="text-align: left;">
        @include('web.private-banking.private-wealth-management.conversations_on_women_wealth_and_leadership')
        @include('layouts.partials._footer')
    </article>


    <!-- Private Banking > Corporate Advisory & Banking -->
    <article id="corporateAdvisoryAndBanking" class="off" style="text-align: left;">
        @include('web.private-banking.corporate_advisory_and_banking')
        @include('layouts.partials._footer')
    </article>
    <!-- Private Banking > Corporate Advisory & Banking > * x 3 -->
    <article id="corporateAdvisory" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.corporate_advisory')
        @include('layouts.partials._footer')
    </article>
    <article id="corporateBanking" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.corporate_banking')
        @include('layouts.partials._footer')
    </article>
    <article id="centerForFamilyBusiness" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center_for_family_business')
        @include('layouts.partials._footer')
    </article>
    <!-- Private Banking > Corporate Advisory & Banking > Center For Family Business > * x 8 -->
    <article id="definingLegacyAndTheFutureOfTheBusiness" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.defining')
        @include('layouts.partials._footer')
    </article>
    <article id="buildingASupportTeam" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.building')
        @include('layouts.partials._footer')
    </article>
    <article id="successionPlanningManagementAndOwnership" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.succession')
        @include('layouts.partials._footer')
    </article>
    <article id="capitalPolicies" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.capital')
        @include('layouts.partials._footer')
    </article>
    <article id="employmentPolicies" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.employment')
        @include('layouts.partials._footer')
    </article>
    <article id="governanceAndCommunications" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.governance')
        @include('layouts.partials._footer')
    </article>
    <article id="distributionsAndFamilyLiquidity" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.distributions')
        @include('layouts.partials._footer')
    </article>
    <article id="balancingCompetingInterests" class="off" style="text-align: left;">
        @include('web.private-banking.corporate-advisory-and-banking.center.balancing')
        @include('layouts.partials._footer')
    </article>


    <!-- Private Banking > Private Equity -->
    <article id="privateEquity" class="off" style="text-align: left;">
        @include('web.private-banking.private_equity')
        @include('layouts.partials._footer')
    </article>
    <!-- Private Banking > Private Equity > * x 4 -->
    <article id="aboutVanward" class="off" style="text-align: left;">
        @include('web.private-banking.private-equity.about_vanward')
        @include('layouts.partials._footer')
    </article>
    <article id="investmentProfile" class="off" style="text-align: left;">
        @include('web.private-banking.private-equity.investment_profile')
        @include('layouts.partials._footer')
    </article>
    <article id="investmentStrategyAndTransactionTypes" class="off" style="text-align: left;">
        @include('web.private-banking.private-equity.investment_strategy_and_transaction_types')
        @include('layouts.partials._footer')
    </article>
    <article id="selectPortfolioCompanies" class="off" style="text-align: left;">
        @include('web.private-banking.private-equity.select_portfolio_companies')
        @include('layouts.partials._footer')
    </article>

    <!-- Investment Management -->
    <article id="investmentManagement" class="off" style="text-align: left;">
        @include('web.investment-management._section_listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investment Management > Public Equity -->
    <article id="publicEquity" class="off" style="text-align: left;">
        @include('web.investment-management.public_equity')
        @include('layouts.partials._footer')
    </article>
    <!-- Investment Management > Public Equity > * x 3 -->
    <article id="globalEquity" class="off" style="text-align: left;">
        @include('web.investment-management.public-equity.global_equity')
        @include('layouts.partials._footer')
    </article>
    <article id="usLargeCapEquity" class="off" style="text-align: left;">
        @include('web.investment-management.public-equity.us_large_cap_equity')
        @include('layouts.partials._footer')
    </article>
    <article id="usSmallAndMidCapEquity" class="off" style="text-align: left;">
        @include('web.investment-management.public-equity.us_small_and_mid_cap_equity')
        @include('layouts.partials._footer')
    </article>
    <!-- Investment Management > Fixed Income -->
    <article id="fixedIncome" class="off" style="text-align: left;">
        @include('web.investment-management.fixed_income')
        @include('layouts.partials._footer')
    </article>
    <!-- Investment Management > Fixed Income > * x 3 -->
    <article id="taxExemptFixedIncomeStrategy" class="off" style="text-align: left;">
        @include('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy')
        @include('layouts.partials._footer')
    </article>
    <article id="taxableFixedIncomeStrategies" class="off" style="text-align: left;">
        @include('web.investment-management.fixed-income.taxable_fixed_income_strategies')
        @include('layouts.partials._footer')
    </article>
    <article id="usTipsStrategy" class="off" style="text-align: left;">
        @include('web.investment-management.fixed-income.us_tips_strategy')
        @include('layouts.partials._footer')
    </article>
    <!-- Investment Management > Open Account -->
    <article id="openAccount" class="off" style="text-align: left;">
        @include('web.investment-management.open_account')
        @include('layouts.partials._footer')
    </article>
    <article id="esgApproach" class="off" style="text-align: left;">
        @include('web.investment-management.esg_approach')
        @include('layouts.partials._footer')
    </article>

    <!-- Investor Services -->
    <article id="investorServices" class="off" style="text-align: left;">
        @include('web.investor-services.listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Custody & Fund Services -->
    <article id="custodyAndFundServices" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Custody & Fund Services > * x 8 -->
    <article id="custody" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.custody')
        @include('layouts.partials._footer')
    </article>
    <article id="depositaryAndTrustee" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.depositary_and_trustee')
        @include('layouts.partials._footer')
    </article>
    <article id="fundAccounting" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.fund_accounting')
        @include('layouts.partials._footer')
    </article>
    <article id="fundAdministration" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.fund_administration')
        @include('layouts.partials._footer')
    </article>
    <article id="transferAgency" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.transfer_agency')
        @include('layouts.partials._footer')
    </article>
    <article id="globalTax" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.global_tax')
        @include('layouts.partials._footer')
    </article>
    <article id="collateralManagementCustody" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.collateral_management')
        @include('layouts.partials._footer')
    </article>
    <article id="fundOrderAndCustody" class="off" style="text-align: left;">
        @include('web.investor-services.custody-and-fund-services.fund_order_and_custody')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Specialist Expertise -->
    <article id="specialistExpertise" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Specialist Expertise > Cross Border Funds -->
    <article id="crossBorderFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross_border_funds')
        @include('layouts.partials._footer')
    </article>
    <article id="greaterChina" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.greater_china')
        @include('layouts.partials._footer')
    </article>
    <article id="latinAmerica" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.latin_america')
        @include('layouts.partials._footer')
    </article>
    <article id="japan" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.japan')
        @include('layouts.partials._footer')
    </article>
    <article id="dublin" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.dublin')
        @include('layouts.partials._footer')
    </article>
    <article id="luxembourg" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.luxembourg')
        @include('layouts.partials._footer')
    </article>
    <article id="globalServiceModel" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.cross-border-funds.global_service_model')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Specialist Expertise -->
    <article id="usFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.us_funds')
        @include('layouts.partials._footer')
    </article>
    <article id="consultantsAndAdvisors" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.consultants_and_advisors')
        @include('layouts.partials._footer')
    </article>
    <article id="distributionIntelligence" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.distribution_intelligence')
        @include('layouts.partials._footer')
    </article>
    <article id="alternativeFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.alternative_funds')
        @include('layouts.partials._footer')
    </article>
    <article id="realAssetsAndInfrastructure" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.alternative-funds.real_assets_and_infrastruction')
        @include('layouts.partials._footer')
    </article>
    <article id="privateEquityAlternativeFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.alternative-funds.private_equity')
        @include('layouts.partials._footer')
    </article>
    <article id="hedgeFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.alternative-funds.hedge_funds')
        @include('layouts.partials._footer')
    </article>
    <article id="syndicatedAndOriginatedDebt" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.alternative-funds.syndicated_and_originated_debt')
        @include('layouts.partials._footer')
    </article>
    <article id="exchangeTradedFunds" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.exchange_traded_funds')
        @include('layouts.partials._footer')
    </article>
    <article id="insurance" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.insurance')
        @include('layouts.partials._footer')
    </article>
    <article id="regulatoryIntelligence" class="off" style="text-align: left;">
        @include('web.investor-services.specialist-expertise.regulatory_intelligence')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Markets -->
    <article id="markets" class="off" style="text-align: left;">
        @include('web.investor-services.markets.listing')
        @include('layouts.partials._footer')
    </article>
    <article id="foreignExchange" class="off" style="text-align: left;">
        @include('web.investor-services.markets.foreign_exchange')
        @include('layouts.partials._footer')
    </article>
    <article id="tokyoFixingRates" class="off" style="text-align: left;">
        @include('web.investor-services.markets.foreign-exchange.tokyo_fixing_rates')
        @include('layouts.partials._footer')
    </article>
    <article id="termsAndConditions" class="off" style="text-align: left;">
        @include('web.investor-services.markets.foreign-exchange.terms_and_conditions')
        @include('layouts.partials._footer')
    </article>
    <article id="regulatoryReportingRequirements" class="off" style="text-align: left;">
        @include('web.investor-services.markets.foreign-exchange.regulatory_reporting_requirements')
        @include('layouts.partials._footer')
    </article>
    <article id="fxDisclosure" class="off" style="text-align: left;">
        @include('web.investor-services.markets.foreign-exchange.fx_disclosure_statement')
        @include('layouts.partials._footer')
    </article>
    <article id="activeFxExecution" class="off" style="text-align: left;">
        @include('web.investor-services.markets.active_fx_execution')
        @include('layouts.partials._footer')
    </article>
    <article id="infoFx" class="off" style="text-align: left;">
        @include('web.investor-services.markets.infofx')
        @include('layouts.partials._footer')
    </article>
    <article id="currencyHedging" class="off" style="text-align: left;">
        @include('web.investor-services.markets.currency_hedging')
        @include('layouts.partials._footer')
    </article>
    <article id="securitiesLending" class="off" style="text-align: left;">
        @include('web.investor-services.markets.securities_lending')
        @include('layouts.partials._footer')
    </article>
    <article id="marketIntelligence" class="off" style="text-align: left;">
        @include('web.investor-services.markets.market_intelligence')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Investment Operations & Technology Solutions -->
    <article id="investmentOperationsAndTechnologySolutions" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Investment Operations & Technology Solutions > Technology Services -->
    <article id="technologyServices" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.technology_services')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Investment Operations & Technology Solutions > Technology Services > * x 3 -->
    <article id="dataConnectivityAndApplicationsViaInfomediary" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.technology-services.data_connectivity_and_applications_via_infomediary')
        @include('layouts.partials._footer')
    </article>
    <article id="globalCustodyDirect" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.technology-services.global_custody_direct')
        @include('layouts.partials._footer')
    </article>
    <article id="accountOperatorDirectForUSDepositories" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.technology-services.account_operator_direct_for_us_depositories')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Investment Operations & Technology Solutions > Middle Office Outsourcing -->
    <article id="middleOfficeOutsourcing" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing')
        @include('layouts.partials._footer')
    </article>
    <!-- Investor Services > Investment Operations & Technology Solutions > Middle Office Outsourcing > * x 4 -->
    <article id="targetedTechnologySolutionsViaInfomediary" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.targeted_technology_solutions_via_infomediary')
        @include('layouts.partials._footer')
    </article>
    <article id="hostedOperationsAndReporting" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.hosted_operations_and_reporting')
        @include('layouts.partials._footer')
    </article>
    <article id="investmentAccountingAndEnterpriseDataSupport" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.investment_accounting_and_enterprise_data_support')
        @include('layouts.partials._footer')
    </article>
    <!-- here is collateral management which has already exist -->
    <article id="infoRecon" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.infoRecon')
        @include('layouts.partials._footer')
    </article>
    <article id="infoNav" class="off" style="text-align: left;">
        @include('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.infoNAV')
        @include('layouts.partials._footer')
    </article>


    <!-- Our Firm -->
    <article id="ourFirm" class="off" style="text-align: left;">
        @include('web.our-firm._section_listing')
        @include('layouts.partials._footer')
    </article>
    <article id="thePartnership" class="off" style="text-align: left;">
        @include('web.our-firm.the_partnership')
        @include('layouts.partials._footer')
    </article>
    <article id="ourMissionAndProfile" class="off" style="text-align: left;">
        @include('web.our-firm.our_mission_and_profile')
        @include('layouts.partials._footer')
    </article>
    <article id="sustainability" class="off" style="text-align: left;">
        @include('web.our-firm.sustainability')
        @include('layouts.partials._footer')
    </article>
    <article id="philanthropy" class="off" style="text-align: left;">
        @include('web.our-firm.philanthropy')
        @include('layouts.partials._footer')
    </article>
    <article id="policiesAndDisclosures" class="off" style="text-align: left;">
        @include('web.our-firm.policies_and_disclosures')
        @include('layouts.partials._footer')
    </article>
    <!-- Our Firm > Policies & Disclosures -->
    <article id="importantStatementsAndDisclosures" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important_statements_and_disclosures')
        @include('layouts.partials._footer')
    </article>
    <!-- Our Firm > Policies & Disclosures > Important Statement & Disclosures -->
    <article id="dataProtectionNotice" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.data_protection_notice')
        @include('layouts.partials._footer')
    </article>
    <article id="bcpStatement" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.bcp_statement')
        @include('layouts.partials._footer')
    </article>
    <article id="additionalDisclosures" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.additional_disclosures')
        @include('layouts.partials._footer')
    </article>
    <article id="onlineSecurity" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.online_security')
        @include('layouts.partials._footer')
    </article>
    <article id="regulationE" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.regulation_e')
        @include('layouts.partials._footer')
    </article>
    <article id="confidentialEthicsReporting" class="off" style="text-align: left;">
        @include('web.our-firm.policies.important.confidential_ethics_reporting')
        @include('layouts.partials._footer')
    </article>
    <article id="legal" class="off" style="text-align: left;">
        @include('web.our-firm.policies.legal')
        @include('layouts.partials._footer')
    </article>
    <article id="privacyPolicy" class="off" style="text-align: left;">
        @include('web.our-firm.policies.privacy_policy')
        @include('layouts.partials._footer')
    </article>
    <article id="cookiePolicy" class="off" style="text-align: left;">
        @include('web.our-firm.policies.privacy.cookie_policy')
        @include('layouts.partials._footer')
    </article>
    <article id="manageCookies" class="off" style="text-align: left;">
        @include('web.our-firm.policies.privacy.manage_cookies')
        @include('layouts.partials._footer')
    </article>
    <article id="personalInformationRequest" class="off" style="text-align: left;">
        @include('web.our-firm.policies.privacy.personal_information_request')
        @include('layouts.partials._footer')
    </article>
    <article id="newAccountPolicy" class="off" style="text-align: left;">
        @include('web.our-firm.policies.new_account_policy')
        @include('layouts.partials._footer')
    </article>
    <article id="usaPatriotAct" class="off" style="text-align: left;">
        @include('web.our-firm.policies.usa_patriot_act')
        @include('layouts.partials._footer')
    </article>

    <!-- Careers -->
    <article id="careers" class="off" style="text-align: left;">
        @include('web.careers._section_listing')
        @include('layouts.partials._footer')
    </article>
    <!-- Careers > * x 2 -->
    <article id="whatWeLookFor" class="off" style="text-align: left;">
        @include('web.careers.what_we_look_for')
        @include('layouts.partials._footer')
    </article>
    <article id="totalRewards" class="off" style="text-align: left;">
        @include('web.careers.total_rewards')
        @include('layouts.partials._footer')
    </article>
    <!-- Careers > What We Look For > * x 4 -->
    <article id="undergraduateInternships" class="off" style="text-align: left;">
        @include('web.careers.what-we-look-for.undergraduate_internships')
        @include('layouts.partials._footer')
    </article>
    <article id="entryLevelProfessionals" class="off" style="text-align: left;">
        @include('web.careers.what-we-look-for.entry_level_professionals')
        @include('layouts.partials._footer')
    </article>
    <article id="experiencedProfessionals" class="off" style="text-align: left;">
        @include('web.careers.what-we-look-for.experienced_professionals')
        @include('layouts.partials._footer')
    </article>
    <article id="restart" class="off" style="text-align: left;">
        @include('web.careers.what-we-look-for.restart')
        @include('layouts.partials._footer')
    </article>
    <!-- Careers > Total Rewards > * x 4 -->
    <article id="benefitsWellnessAndCompensation" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.benefits_wellness_and_compensation')
        @include('layouts.partials._footer')
    </article>
    <article id="thrivePhysically" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.benefits.thrive_physically')
        @include('layouts.partials._footer')
    </article>
    <article id="thriveFinancially" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.benefits.thrive_financially')
        @include('layouts.partials._footer')
    </article>
    <article id="thrivePersonally" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.benefits.thrive_personally')
        @include('layouts.partials._footer')
    </article>
    <article id="careerManagement" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.career_management')
        @include('layouts.partials._footer')
    </article>
    <article id="ongoingLearning" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.ongoing_learning')
        @include('layouts.partials._footer')
    </article>
    <article id="signaturePrograms" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.ongoing.signature_programs')
        @include('layouts.partials._footer')
    </article>
    <article id="mobility" class="off" style="text-align: left;">
        @include('web.careers.total-rewards.mobility')
        @include('layouts.partials._footer')
    </article>
    <!-- Careers > Life Here > * x 4 -->
    <article id="lifeHere" class="off" style="text-align: left;">
        @include('web.careers.life_here')
        @include('layouts.partials._footer')
    </article>
    <article id="ourCulture" class="off" style="text-align: left;">
        @include('web.careers.life-here.our_culture')
        @include('layouts.partials._footer')
    </article>
    <article id="coreValues" class="off" style="text-align: left;">
        @include('web.careers.life-here.core_values')
        @include('layouts.partials._footer')
    </article>
    <article id="affinityNetworkCommunity" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity_network_community')
        @include('layouts.partials._footer')
    </article>
    <!-- Careers > Life Here > Affinity > * x 10 -->
    <article id="asiaLinkNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.asia_link_network')
        @include('layouts.partials._footer')
    </article>
    <article id="blackAffinityNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.black_affinity_network')
        @include('layouts.partials._footer')
    </article>
    <article id="diverseAbilityAlliesNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.diverse_ability_allies_network')
        @include('layouts.partials._footer')
    </article>
    <article id="globalEmployeeNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.global_employee_network')
        @include('layouts.partials._footer')
    </article>
    <article id="latinoCulturalNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.latino_cultural_network')
        @include('layouts.partials._footer')
    </article>
    <article id="militaryVeteransNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.military_veterans_network')
        @include('layouts.partials._footer')
    </article>
    <article id="parentingNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.parenting_network')
        @include('layouts.partials._footer')
    </article>
    <article id="prideNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.pride_network')
        @include('layouts.partials._footer')
    </article>
    <article id="womensNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.womens_network')
        @include('layouts.partials._footer')
    </article>
    <article id="youngProfessionalsNetwork" class="off" style="text-align: left;">
        @include('web.careers.life-here.affinity-network-community.young_professionals_network')
        @include('layouts.partials._footer')
    </article>
    <article id="cares" class="off" style="text-align: left;">
        @include('web.careers.life-here.cares')
        @include('layouts.partials._footer')
    </article>

    <!-- Contact Us -->
    <article id="contact" class="off">
        @include('web.contact-us._section_contact_us')
        @include('layouts.partials._footer')
    </article>

@endsection
