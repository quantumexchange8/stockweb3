<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->as('web.')->group(function () {
    Route::get('/', 'home')->name('home');
});
    // Our Firm
Route::controller(PageController::class)->prefix('our-firm')->as('web.our-firm.')->group(function () {
    Route::get('', 'listingOurFirm')->name('listing');
    Route::get('/our-mission-and-profile', 'ourMissionAndProfile')->name('our_mission_and_profile');
    Route::get('/philanthropy', 'philanthropy')->name('philanthropy');
    Route::get('/policies-and-disclosures', 'policiesAndDisclosures')->name('policies_and_disclosures');
    Route::get('/sustainability', 'sustainability')->name('sustainability');
    Route::get('/the-partnership', 'thePartnership')->name('the_partnership');
});
    // Contact Us
Route::controller(PageController::class)->prefix('contact-us')->as('web.contact-us.')->group(function () {
    Route::get('', 'contactUs')->name('contact_us');
    Route::get('/office-location', 'officeLocation')->name('office_location');
    Route::get('/subscription-page', 'subscriptionPage')->name('subscription_page');
    Route::get('/unsubscribe-page', 'unsubscribePage')->name('unsubscribe_page');
});
    // Careers
Route::controller(PageController::class)->prefix('careers')->as('web.careers.')->group(function () {
    Route::get('', 'listingCareers')->name('listing');
    Route::get('/life-here', 'lifeHere')->name('life_here');
    Route::get('/search-for-jobs', 'searchForJobs')->name('search_for_jobs');
    Route::get('/total-rewards', 'totalRewards')->name('total_rewards');
    Route::get('/what-we-look-for', 'whatWeLookFor')->name('what_we_look_for');
});
    // Careers > Life Here
Route::controller(PageController::class)->prefix('careers/life-here')->as('web.careers.life-here.')->group(function () {
    Route::get('/cares', 'cares')->name('cares');
    Route::get('/core-values', 'coreValues')->name('core_values');
    Route::get('/our-culture', 'ourCulture')->name('our_culture');
});
    // Careers > Life Here > Affinity Network Community
Route::controller(PageController::class)->prefix('careers/life-here/affinity-network-community')->as('web.careers.life-here.affinity-network-community.')->group(function () {
    Route::get('/asia-link-network', 'asiaLinkNetwork')->name('asia_link_network');
    Route::get('/black-affinity-network', 'blackAffinityNetwork')->name('black_affinity_network');
    Route::get('/diverse-ability-allies-network', 'diverseAbilityAlliesNetwork')->name('diverse_ability_allies_network');
    Route::get('/global-employee-network', 'globalEmployeeNetwork')->name('global_employee_network');
    Route::get('/latino-cultural-network', 'latinoCulturalNetwork')->name('latino_cultural_network');
    Route::get('/military-veterans-network', 'militaryVeteransNetwork')->name('military_veterans_network');
    Route::get('/parenting-network', 'parentingNetwork')->name('parenting_network');
    Route::get('/pride-network', 'prideNetwork')->name('pride_network');
    Route::get('/womens-network', 'womensNetwork')->name('womens_network');
    Route::get('/young-professionals-network', 'youngProfessionalsNetwork')->name('young_professionals_network');
});
    // Careers > Total Rewards
Route::controller(PageController::class)->prefix('careers/total-rewards')->as('web.careers.total-rewards.')->group(function () {
    Route::get('/benefits-wellness-and-compensation', 'benefitsWellnessAndCompensation')->name('benefits_wellness_and_compensation');
    Route::get('/career-management', 'careerManagement')->name('career_management');
    Route::get('/mobility', 'mobility')->name('mobility');
    Route::get('/ongoing-learning', 'ongoingLearning')->name('ongoing_learning');
});
    // Careers > What We Look For
Route::controller(PageController::class)->prefix('careers/what-we-look-for')->as('web.careers.what-we-look-for.')->group(function () {
    Route::get('/entry-level-professionals', 'entryLevelProfessionals')->name('entry_level_professionals');
    Route::get('/experienced-professionals', 'experiencedProfessionals')->name('experienced_professionals');
    Route::get('/restart', 'restart')->name('restart');
    Route::get('/undergraduate-internships', 'undergraduateInternships')->name('undergraduate_internships');
});
    // Investment Management
Route::controller(PageController::class)->prefix('investment-management')->as('web.investment-management.')->group(function () {
    Route::get('', 'listingInvestmentManagement')->name('listing');
});
    // Investment Management > Fixed Income
Route::controller(PageController::class)->prefix('investment-management/fixed-income')->as('web.investment-management.fixed-income.')->group(function () {
    Route::get('', 'listingFixedIncome')->name('listing');
    Route::get('/tax-exempt-fixed-income-strategy', 'taxExemptFixedIncomeStrategy')->name('tax_exempt_fixed_income_strategy');
    Route::get('/taxable-fixed-income-strategies', 'taxableFixedIncomeStrategies')->name('taxable_fixed_income_strategies');
    Route::get('/us-tips-strategy', 'usTipsStrategy')->name('us_tips_strategy');
});
    // Investment Management > Open Account
Route::controller(PageController::class)->prefix('investment-management/open-account')->as('web.investment-management.')->group(function () {
    Route::get('', 'openAccount')->name('open_account');
});
    // Investment Management > Public Equity
Route::controller(PageController::class)->prefix('investment-management/public-equity')->as('web.investment-management.public-equity.')->group(function () {
    Route::get('', 'listingPublicEquity')->name('listing');
    Route::get('/global-equity', 'globalEquity')->name('global_equity');
    Route::get('/us-large-cap-equity', 'usLargeCapEquity')->name('us_large_cap_equity');
    Route::get('/us-small-and-mid-cap-equity', 'usSmallAndMidCapEquity')->name('us_small_and_mid_cap_equity');
});
    // Investor Services
Route::controller(PageController::class)->prefix('investor-services')->as('web.investor-services.')->group(function () {
    Route::get('', 'listingInvestorServices')->name('listing');
});
    // Investor Services > Custody and Fund Services
Route::controller(PageController::class)->prefix('investor-services/custody-and-fund-services')->as('web.investor-services.custody-and-fund-services.')->group(function () {
    Route::get('', 'listingCustodyAndFundServices')->name('listing');
    Route::get('/collateral-management', 'collateralManagementCustody')->name('collateral_management');
    Route::get('/custody', 'custody')->name('custody');
    Route::get('/depositary-and-trustee', 'depositaryAndTrustee')->name('depositary_and_trustee');
    Route::get('/fund-accounting', 'fundAccounting')->name('fund_accounting');
    Route::get('/fund-administration', 'fundAdministration')->name('fund_administration');
    Route::get('/fund-order-and-custody', 'fundOrderAndCustody')->name('fund_order_and_custody');
    Route::get('/global-tax', 'globalTax')->name('global_tax');
    Route::get('/transfer-agency', 'transferAgency')->name('transfer_agency');
});
    // Investor Services > Investment Operations and Technology Solutions
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions')->as('web.investor-services.investment-operations-and-technology-solutions.')->group(function () {
    Route::get('', 'listingInvestmentOperationsAndTechnologySolutions')->name('listing');
    Route::get('/middle-office-outsourcing', 'middleOfficeOutsourcing')->name('middle_office_outsourcing');
    Route::get('/technology-services', 'technologyServices')->name('technology_services');
});
    // Investor Services > Investment Operations and Technology Solutions > Middle Office Outsourcing
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions/middle-office-outsourcing')->as('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.')->group(function () {
    Route::get('/collateral-management', 'collateralManagementInvestment')->name('collateral_management');
    Route::get('/hosted-operations-and-reporting', 'hostedOperationsAndReporting')->name('hosted_operations_and_reporting');
    Route::get('/investment-accounting-and-enterprise-data-support', 'investmentAccountingAndEnterpriseDataSupport')->name('investment_accounting_and_enterprise_data_support');
    Route::get('/targeted-technology-solutions-via-infomediary', 'targetedTechnologySolutionsViaInfomediary')->name('targeted_technology_solutions_via_infomediary');
});
    // Investor Services > Investment Operations and Technology Solutions > Technology Services
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions/technology-services')->as('web.investor-services.investment-operations-and-technology-solutions.technology-services.')->group(function () {
    Route::get('/account-operator-direct-for-us-depositories', 'accountOperatorDirectForUsDepositories')->name('account_operator_direct_for_us_depositories');
    Route::get('/data-connectivity-and-applications-via-infomediary', 'dataConnectivityAndApplicationsViaInfomediary')->name('data_connectivity_and_applications_via_infomediary');
    Route::get('/global-custody-direct', 'globalCustodyDirect')->name('global_custody_direct');
});
    // Investor Services > Markets
Route::controller(PageController::class)->prefix('investor-services/markets')->as('web.investor-services.markets.')->group(function () {
    Route::get('', 'listingMarkets')->name('listing');
    Route::get('/active-fx-execution', 'activeFxExecution')->name('active_fx_execution');
    Route::get('/currency-hedging', 'currencyHedging')->name('currency_hedging');
    Route::get('/foreign-exchange', 'foreignExchange')->name('foreign_exchange');
    Route::get('/infofx', 'infoFx')->name('infofx');
    Route::get('/securities-lending', 'securitiesLending')->name('securities_lending');
    Route::get('/market-intelligence', 'marketIntelligence')->name('market_intelligence');
});
    // Investor Services > Markets > Foreign Exchange
Route::controller(PageController::class)->prefix('investor-services/markets/foreign-exchange')->as('web.investor-services.markets.foreign-exchange.')->group(function () {
    Route::get('/fx-disclosure-statement', 'fxDisclosureStatement')->name('fx_disclosure_statement');
    Route::get('/regulatory-reporting-requirements', 'regulatoryReportingRequirements')->name('regulatory_reporting_requirements');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('terms_and_conditions');
    Route::get('/tokyo-fixing-rates', 'tokyoFixingRates')->name('tokyo_fixing_rates');
});
    // Investor Services > Markets > Securities Lending
Route::controller(PageController::class)->prefix('investor-services/markets/securities-lending')->as('web.investor-services.markets.securities-lending.')->group(function () {
    Route::get('/waml_securities_lending_execution_policy', 'wamlSecuritiesLendingExecutionPolicy')->name('waml_securities_lending_execution_policy');
});
    // Investor Services > Specialist Expertise
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise')->as('web.investor-services.specialist-expertise.')->group(function () {
    Route::get('', 'listingSpecialistExpertise')->name('listing');
    Route::get('/alternative-funds', 'alternativeFunds')->name('alternative_funds');
    Route::get('/consultants-and-advisors', 'consultantsAndAdvisors')->name('consultants_and_advisors');
    Route::get('/cross-border-funds', 'crossBorderFunds')->name('cross_border_funds');
    Route::get('/distribution-intelligence', 'distributionIntelligence')->name('distribution_intelligence');
    Route::get('/exchange-traded-funds', 'exchangeTradedFunds')->name('exchange_traded_funds');
    Route::get('/insurance', 'insurance')->name('insurance');
    Route::get('/regulatory-intelligence', 'regulatoryIntelligence')->name('regulatory_intelligence');
    Route::get('/us-funds', 'usFunds')->name('us_funds');
});
    // Investor Services > Specialist Expertise > Alternative Funds
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise/alternative-funds')->as('web.investor-services.specialist-expertise.alternative-funds.')->group(function () {
    Route::get('/hedge-funds', '')->name('hedge_funds');
    Route::get('/private-equity', '')->name('private_equity');
    Route::get('/real-assets-and-infrastruction', '')->name('real_assets_and_infrastruction');
    Route::get('/syndicated-and-originated-debt', '')->name('syndicated_and_originated_debt');
});
    // Investor Services > Specialist Expertise > Cross-border Funds
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise/cross-border-funds')->as('web.investor-services.specialist-expertise.cross-border-funds.')->group(function () {
    Route::get('/dublin', 'dublin')->name('dublin');
    Route::get('/global_service_model', 'globalServiceModel')->name('global_service_model');
    Route::get('/greater_china', 'greaterChina')->name('greater_china');
    Route::get('/japan', 'japan')->name('japan');
    Route::get('/latin_america', 'latinAmerica')->name('latin_america');
    Route::get('/luxembourg', 'luxembourg')->name('luxembourg');
});
    // Private Banking
Route::controller(PageController::class)->prefix('private-banking')->as('web.private-banking.')->group(function () {
    Route::get('', 'listingPrivateBanking')->name('listing');
    Route::get('/corporate-advisory-and-banking', 'corporateAdvisoryAndBanking')->name('corporate_advisory_and_banking');
    Route::get('/private-equity', 'privateEquityPrivateBanking')->name('private_equity');
    Route::get('/private-wealth-management', 'privateWealthManagement')->name('private_wealth_management');
});
    // Private Banking > Corporate Advisory and Banking
Route::controller(PageController::class)->prefix('private-banking/corporate-advisory-and-banking')->as('web.private-banking.corporate-advisory-and-banking.')->group(function () {
    Route::get('/center-for-family-business', 'centerForFamilyBusiness')->name('center_for_family_business');
    Route::get('/corporate-advisory', 'corporateAdvisory')->name('corporate_advisory');
    Route::get('/corporate-banking', 'corporateBanking')->name('corporate_banking');
});
    // Private Banking > Private Equity
Route::controller(PageController::class)->prefix('private-banking/private-equity')->as('web.private-banking.private-equity.')->group(function () {
    Route::get('/about-wingate', 'aboutWingate')->name('about_wingate');
    Route::get('/invest-profile', 'investProfile')->name('invest_profile');
    Route::get('/investment-strategy-and-transaction-types', 'investmentStrategyAndTransactionTypes')->name('investment_strategy_and_transaction_types');
    Route::get('/select-portfolio-companies', 'selectPortfolioCompanies')->name('select_portfolio_companies');
});
    // Private Banking > Private Wealth Management
Route::controller(PageController::class)->prefix('private-banking/private-wealth-management')->as('web.private-banking.private-wealth-management.')->group(function () {
    Route::get('/center-for-women-and-wealth', 'centerForWomenAndWealth')->name('center_for_women_and_wealth');
    Route::get('/investment-advisory', 'investmentAdvisory')->name('investment_advisory');
    Route::get('/philanthropic-advisory', 'philanthropicAdvisory')->name('philanthropic_advisory');
    Route::get('/private-client-landing', 'privateClientLanding')->name('private_client_landing');
    Route::get('/trust-services', 'trustServices')->name('trust_services');
    Route::get('/wealth-planning', 'wealthPlanning')->name('wealth_planning');
});
