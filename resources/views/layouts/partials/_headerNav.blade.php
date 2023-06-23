<nav>
    <div class="wrapper">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('images/logo-vanward/fulllogo_transparent_nobuffer.png') }}" alt="" height="50px" width="auto">
            </a>
        </div>
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="#">@lang('public.client login')</a></li>
            <li><a href="javascript:goTo('ourFirm');">@lang('public.our firm')</a></li>
            <li><a href="javascript:goTo('careers');">@lang('public.careers')</a></li>
            <li><a href="javascript:goTo('sustainability');">@lang('public.sustainability')</a></li>
            <li><a href="javascript:goTo('contact');">@lang('public.contact us')</a></li>
            <li>
                <a href="javascript:goTo('privateBanking')" class="desktop-item">@lang('public.private banking')</a>
                <input type="checkbox" id="showPrivateBanking">
                <label for="showPrivateBanking" class="mobile-item">@lang('public.private banking')</label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <h6>@lang('public.private wealth management')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('investmentAdvisory')">@lang('public.investment advisory')</a></li>
                                <li><a href="javascript:goTo('wealthPlanning')">@lang('public.wealth planning')</a></li>
                                <li><a href="javascript:goTo('philanthropicAdvisory')">@lang('public.philanthropic advisory')</a>
                                </li>
                                <li><a href="javascript:goTo('trustServices')">@lang('public.trust services')</a></li>
                                <li><a href="javascript:goTo('privateClientLending')">@lang('public.private client lending')</a>
                                </li>
                                <li><a href="javascript:goTo('centerForWomenAndWealth')">@lang('public.center for women & wealth')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.corporate advisory & banking')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('corporateAdvisory')">@lang('public.corporate advisory')</a></li>
                                <li><a href="javascript:goTo('corporateBanking')">@lang('public.corporate banking')</a></li>
                                <li><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.private equity')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('aboutVanward')">@lang('public.about vanward')</a></li>
                                <li><a href="javascript:goTo('investmentProfile')">@lang('public.investment profile')</a></li>
                                <li><a
                                        href="javascript:goTo('investmentStrategyAndTransactionTypes')">@lang('public.investment strategy & transaction types')</a>
                                </li>
                                <li><a href="javascript:goTo('selectPortfolioCompanies')">@lang('public.select portfolio companies')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="javascript:goTo('investmentManagement')" class="desktop-item">@lang('public.investment management')</a>
                <input type="checkbox" id="showInvestmentManagement">
                <label for="showInvestmentManagement" class="mobile-item">@lang('public.investment management')</label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <h6>@lang('public.public equity')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('usLargeCapEquity')">@lang('public.US large cap equity')</a></li>
                                <li><a href="javascript:goTo('globalEquity')">@lang('public.global equity')</a></li>
                                <li><a href="javascript:goTo('usSmallAndMidCapEquity')">@lang('public.US small & mid-cap equity')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.fixed income')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('taxableFixedIncomeStrategies')">@lang('public.taxable fixed income strategies')</a>
                                </li>
                                <li><a href="javascript:goTo('taxExemptFixedIncomeStrategy')">@lang('public.tax-exempt fixed income strategy')</a>
                                </li>
                                <li><a href="javascript:goTo('usTipsStrategy')">@lang('public.US TIPS strategy')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.open account')</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="javascript:goTo('investorServices')" class="desktop-item">@lang('public.investor services')</a>
                <input type="checkbox" id="showInvestorServices">
                <label for="showInvestorServices" class="mobile-item">@lang('public.investor services')</label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <h6>@lang('public.custody & fund services')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('custody')">@lang('public.custody')</a></li>
                                <li><a href="javascript:goTo('depositaryAndTrustee')">@lang('public.depositary & trustee')</a></li>
                                <li><a href="javascript:goTo('fundAccounting')">@lang('public.fund accounting')</a></li>
                                <li><a href="javascript:goTo('fundAdministration')">@lang('public.fund administration')</a></li>
                                <li><a href="javascript:goTo('transferAgency')">@lang('public.transfer agency')</a></li>
                                <li><a href="javascript:goTo('globalTax')">@lang('public.global tax')</a></li>
                                <li><a href="javascript:goTo('collateralManagementCustody')">@lang('public.collateral management')</a></li>
                                <li><a href="javascript:goTo('fundOrderAndCustody')">@lang('public.fund order & custody')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.specialist expertise')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('crossBorderFunds')">@lang('public.cross-border funds')</a></li>
                                <li><a href="javascript:goTo('usFunds')">@lang('public.US funds')</a></li>
                                <li><a href="javascript:goTo('consultantsAndAdvisors')">@lang('public.consultants and advisors')</a>
                                </li>
                                <li><a href="javascript:goTo('distributionIntelligence')">@lang('public.distribution and intelligence')</a></li>
                                <li><a href="javascript:goTo('alternativeFunds')">@lang('public.alternative funds')</a></li>
                                <li><a href="javascript:goTo('exchangeTradedFunds')">@lang('public.exchange traded funds')</a></li>
                                <li><a href="javascript:goTo('insurance')">@lang('public.insurance')</a></li>
                                <li><a href="javascript:goTo('regulatoryIntelligence')">@lang('public.regulatory intelligence')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.markets')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('foreignExchange')">@lang('public.foreign exchange')</a></li>
                                <li><a href="javascript:goTo('activeFxExecution')">@lang('public.active fx execution')</a></li>
                                <li><a href="javascript:goTo('infoFx')">@lang('public.infofx')</a></li>
                                <li><a href="javascript:goTo('currencyHedging')">@lang('public.currency hedging')</a></li>
                                <li><a href="javascript:goTo('securitiesLending')">@lang('public.securities lending')</a></li>
                                <li><a href="javascript:goTo('marketIntelligence')">@lang('public.market intelligence')</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h6>@lang('public.investment operations & technology solutions')</h6>
                            <ul class="mega-links">
                                <li><a href="javascript:goTo('technologyServices')">@lang('public.technology services')</a></li>
                                <li><a href="javascript:goTo('middleOfficeOutsourcing')">@lang('public.middle office outsourcing')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
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
