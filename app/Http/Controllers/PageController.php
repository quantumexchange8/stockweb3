<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('web.home');
    }
    // Careers
    public function lifeHere() {
        return view('web.careers.life_here');
    }
    public function listingCareers() {
        return view('web.careers.listing');
    }
    public function searchForJobs() {
        return view('web.careers.search_for_jobs');
    }
    public function totalRewards() {
        return view('web.careers.total_rewards');
    }
    public function whatWeLookFor() {
        return view('web.careers.what_we_look_for');
    }
    // Careers > Life Here
    public function cares() {
        return view('web.careers.life-here.cares');
    }
    public function core_values() {
        return view('web.careers.life-here.core_values');
    }
    public function our_culture() {
        return view('web.careers.life-here.our_culture');
    }
    // Careers > Life Here > Affinity Network Community
    public function asiaLinkNetwork() {
        return view('web.careers.life-here.affinity-network-community.asia_link_network');
    }
    public function blackAffinityNetwork() {
        return view('web.careers.life-here.affinity-network-community.black_affinity_network');
    }
    public function diverseAbilityAlliesNetwork() {
        return view('web.careers.life-here.affinity-network-community.diverse_ability_allies_network');
    }
    public function globalEmployeeNetwork() {
        return view('web.careers.life-here.affinity-network-community.global_employee_network');
    }
    public function latinoCulturalNetwork() {
        return view('web.careers.life-here.affinity-network-community.latino_cultural_network');
    }
    public function militaryVeteransNetwork() {
        return view('web.careers.life-here.affinity-network-community.military_veterans_network');
    }
    public function parentingNetwork() {
        return view('web.careers.life-here.affinity-network-community.parenting_network');
    }
    public function prideNetwork() {
        return view('web.careers.life-here.affinity-network-community.pride_network');
    }
    public function womensNetwork() {
        return view('web.careers.life-here.affinity-network-community.womens_network');
    }
    public function youngProfessionalsNetwork() {
        return view('web.careers.life-here.affinity-network-community.young_professionals_network');
    }
    // Careers > Total Rewards
    public function benefitsWellnessAndCompensation() {
        return view('web.careers.total-rewards.benefits_wellness_and_compensation');
    }
    public function careerManagement() {
        return view('web.careers.total-rewards.career_management');
    }
    public function mobility() {
        return view('web.careers.total-rewards.mobility');
    }
    public function ongoingLearning() {
        return view('web.careers.total-rewards.ongoing_learning');
    }
    // Careers > What We Look For
    public function entryLevelProfessionals() {
        return view('web.careers.what-we-look-for.entry_level_professionals');
    }
    public function experiencedProfessionals() {
        return view('web.careers.what-we-look-for.experienced_professionals');
    }
    public function restart() {
        return view('web.careers.what-we-look-for.restart');
    }
    public function undergraduateInternships() {
        return view('web.careers.what-we-look-for.undergraduate_internships');
    }

    // Investment Management
    public function listingInvestmentManagement() {
        return view('web.investment-management.listing');
    }
    // Investment Management > Fixed Income
    public function listingFixedIncome() {
        return view('web.investment-management.fixed-income.listing');
    }
    public function taxExemptFixedIncomeStrategy() {
        return view('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy');
    }
    public function taxableFixedIncomeStrategies() {
        return view('web.investment-management.fixed-income.taxable_fixed_income_strategies');
    }
    public function usTipsStrategy() {
        return view('web.investment-management.fixed-income.us_tips_strategy');
    }
    // Investment Management > Open Account
    public function listingOpenAccount() {
        return view('web.investment-management.open-account.listing');
    }
    // Investment Management > Public Equity
    public function listingPublicEquity() {
        return view('web.investment-management.public-equity.listing');
    }
    public function globalEquity() {
        return view('web.investment-management.public-equity.global_equity');
    }
    public function usLargeCapEquity() {
        return view('web.investment-management.public-equity.us_large_cap_equity');
    }
    public function usSmallAndMidCapEquity() {
        return view('web.investment-management.public-equity.us_small_and_mid_cap_equity');
    }

    // Investor Services
    public function listingInvestorServices() {
        return view('web.investor-services.listing');
    }
    // Investor Services > Custody and Fund Services
    public function listingCustodyAndFundServices() {
        return view('web.investor-services.custody-and-fund-services.listing');
    }
    public function collateralManagementCustody() {
        return view('web.investor-services.custody-and-fund-services.collateral_management');
    }
    public function custody() {
        return view('web.investor-services.custody-and-fund-services.custody');
    }
    public function depositaryAndTrustee() {
        return view('web.investor-services.custody-and-fund-services.depositary_and_trustee');
    }
    public function fundAccounting() {
        return view('web.investor-services.custody-and-fund-services.fund_accounting');
    }
    public function fundAdministration() {
        return view('web.investor-services.custody-and-fund-services.fund_administration');
    }
    public function fundOrderAndCustody() {
        return view('web.investor-services.custody-and-fund-services.fund_order_and_custody');
    }
    public function globalTax() {
        return view('web.investor-services.custody-and-fund-services.global_tax');
    }
    public function transferAgency() {
        return view('web.investor-services.custody-and-fund-services.transfer_agency');
    }
    // Investor Services > Investment Operations and Technology Solutions
    public function listingInvestmentOperationsAndTechnologySolutions() {
        return view('web.investor-services.investment-operations-and-technology-solutions.listing');
    }
    public function middleOfficeOutsourcing() {
        return view('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing');
    }
    public function technologyServices() {
        return view('web.investor-services.investment-operations-and-technology-solutions.technology_services');
    }
    // Investor Services > Investment Operations and Technology Solutions > Middle Office Outsourcing
    public function collateralManagementInvestment() {
        return view('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.collateral_management');
    }
    public function hostedOperationsAndReporting() {
        return view('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.hosted_operations_and_reporting');
    }
    public function investmentAccountingAndEnterpriseDataSupport() {
        return view('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.investment_accounting_and_enterprise_data_support');
    }
    public function targetedTechnologySolutionsViaInfomediary() {
        return view('web.investor-services.investment-operations-and-technology-solutions.middle-office-outsourcing.targeted_technology_solutions_via_infomediary');
    }
    // Investor Services > Investment Operations and Technology Solutions > Technology Services
    public function accountOperatorDirectForUsDepositories() {
        return view('web.investor-services.investment-operations-and-technology-solutions.technology-services.account_operator_direct_for_us_depositories');
    }
    public function dataConnectivityAndApplicationsViaInfomediary() {
        return view('web.investor-services.investment-operations-and-technology-solutions.technology-services.data_connectivity_and_applications_via_infomediary');
    }
    public function globalCustodyDirect() {
        return view('web.investor-services.investment-operations-and-technology-solutions.technology-services.global_custody_direct');
    }
    // Investor Services > Markets
    public function listingMarkets() {
        return view('web.investor-services.markets.listing');
    }
    public function activeFxExecution() {
        return view('web.investor-services.markets.active_fx_execution');
    }
    public function currencyHedging() {
        return view('web.investor-services.markets.currency_hedging');
    }
    public function infofx() {
        return view('web.investor-services.markets.infofx');
    }
    public function securities_lending() {
        return view('web.investor-services.markets.securities_lending');
    }
    public function securitiesLending() {
        return view('web.investor-services.markets.securities_lending');
    }
    // Investor Services > Markets > Foreign Exchange
    public function fxDisclosureStatement() {
        return view('web.investor-services.markets.foreign-exchange.fx_disclosure_statement');
    }
    public function regulatoryReportingRequirements() {
        return view('web.investor-services.markets.foreign-exchange.regulatory_reporting_requirements');
    }
    public function termsAndConditions() {
        return view('web.investor-services.markets.foreign-exchange.terms_and_conditions');
    }
    public function tokyoFixingRates() {
        return view('web.investor-services.markets.foreign-exchange.tokyo_fixing_rates');
    }
    // Investor Services > Markets > Securities Lending
    public function wamlSecuritiesLendingExecutionPolicy() {
        return view('web.investor-services.markets.securities-lending.waml_securities_lending_execution_policy');
    }
    // Investor Services > Specialist Expertise
    public function listingSpecialistExpertise() {
        return view('web.investor-services.specialist-expertise.listing');
    }
    public function alternativeFunds() {
        return view('web.investor-services.specialist-expertise.alternative_funds');
    }
    public function consultantsAndAdvisors() {
        return view('web.investor-services.specialist-expertise.consultants_and_advisors');
    }
    public function crossBorderFunds() {
        return view('web.investor-services.specialist-expertise.cross_border_funds');
    }
    public function distributionIntelligence() {
        return view('web.investor-services.specialist-expertise.distribution_intelligence');
    }
    public function exchangeTradedFunds() {
        return view('web.investor-services.specialist-expertise.exchange_traded_funds');
    }
    public function insurance() {
        return view('web.investor-services.specialist-expertise.insurance');
    }
    public function regulatoryIntelligence() {
        return view('web.investor-services.specialist-expertise.regulatory_intelligence');
    }
    public function usFunds() {
        return view('web.investor-services.specialist-expertise.us_funds');
    }
    // Investor Services > Specialist Expertise > Alternative Funds
    public function hedgeFunds() {
        return view('web.investor-services.specialist-expertise.alternative-funds.hedge_funds');
    }
    public function privateEquityAlternativeFunds() {
        return view('web.investor-services.specialist-expertise.alternative-funds.private_equity');
    }
    public function realAssetsAndInfrastruction() {
        return view('web.investor-services.specialist-expertise.alternative-funds.real_assets_and_infrastruction');
    }
    public function syndicatedAndOriginatedDebt() {
        return view('web.investor-services.specialist-expertise.alternative-funds.syndicated_and_originated_debt');
    }
    // Investor Services > Specialist Expertise > Cross-border Funds
    public function dublin() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.dublin');
    }
    public function globalServiceModel() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.global_service_model');
    }
    public function greaterChina() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.greater_china');
    }
    public function japan() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.japan');
    }
    public function latinAmerica() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.latin_america');
    }
    public function luxembourg() {
        return view('web.investor-services.specialist-expertise.cross-border-funds.luxembourg');
    }
    // Private Banking
    public function listingPrivateBanking() {
        return view('web.private-banking.listing');
    }
    public function corporateAdvisoryAndBanking() {
        return view('web.private-banking.corporate_advisory_and_banking');
    }
    public function privateEquityPrivateBanking() {
        return view('web.private-banking.private_equity');
    }
    public function privateWealthManagement() {
        return view('web.private-banking.private_wealth_management');
    }
    // Private Banking > Corporate Advisory and Banking
    public function centerForFamilyBusiness() {
        return view('web.private-banking.corporate-advisory-and-banking.center_for_family_business');
    }
    public function corporateAdvisory() {
        return view('web.private-banking.corporate-advisory-and-banking.corporate_advisory');
    }
    public function corporateBanking() {
        return view('web.private-banking.corporate-advisory-and-banking.corporate_banking');
    }
    // Private Banking > Private Equity
    public function aboutWingate() {
        return view('web.private-banking.private-equity.about_wingate');
    }
    public function investProfile() {
        return view('web.private-banking.private-equity.invest_profile');
    }
    public function investmentStrategyAndTransactionTypes() {
        return view('web.private-banking.private-equity.investment_strategy_and_transaction_types');
    }
    public function selectPortfolioCompanies() {
        return view('web.private-banking.private-equity.select_portfolio_companies');
    }
    // Private Banking > Private Wealth Management
    public function centerForWomenAndWealth() {
        return view('web.private-banking.private-wealth-management.center_for_women_and_wealth');
    }
    public function investmentAdvisory() {
        return view('web.private-banking.private-wealth-management.investment_advisory');
    }
    public function philanthropicAdvisory() {
        return view('web.private-banking.private-wealth-management.philanthropic_advisory');
    }
    public function privateClientLanding() {
        return view('web.private-banking.private-wealth-management.private_client_landing');
    }
    public function trustServices() {
        return view('web.private-banking.private-wealth-management.trust_services');
    }
    public function wealthPlanning() {
        return view('web.private-banking.private-wealth-management.wealth_planning');
    }

    // Contact Us
    public function contactUs() {
        return view('web.contact-us.contact_us');
    }
    public function officeLocation() {
        return view('web.contact-us.office_location');
    }
    public function subscriptionPage() {
        return view('web.contact-us.subscription_page');
    }
    public function unsubscribePage() {
        return view('web.contact-us.unsubscribe_page');
    }

    // Our Firm
    public function listingOurFirm() {
        return view('web.our-firm.listing');
    }
    public function ourMissionAndProfile() {
        return view('web.our-firm.our_mission_and_profile');
    }
    public function philanthropy() {
        return view('web.our-firm.philanthropy');
    }
    public function policiesAndDisclosures() {
        return view('web.our-firm.policies_and_disclosures');
    }
    public function sustainability() {
        return view('web.our-firm.sustainability');
    }
    public function thePartnership() {
        return view('web.our-firm.the_partnership');
    }
}
