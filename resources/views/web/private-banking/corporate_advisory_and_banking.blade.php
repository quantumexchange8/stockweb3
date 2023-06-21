<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('privateBanking')">@lang('public.private banking')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.corporate advisory & banking')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h1>@lang('public.corporate advisory & banking')</h1>
        <p style="padding-top: 10px;">
            As a long-standing, owner-operated partnership that has flourished since 1818, we have a comprehensive understanding of the challenges faced by private company owners and managers. This unique perspective, coupled with our unwavering commitment to putting the best interests of our clients first, fosters long-lasting relationships based on mutual trust. We are not motivated by short-term transactional gains; rather, our sole objective is to provide our clients with objective and insightful advice throughout their financial journeys.<br><br>

            The Corporate Advisory & Banking team is comprised of senior corporate finance experts with extensive experience collaborating with business owners and managers on M&A and financing transactions. We deliver the full scope of Vanward to our clients by collaborating effectively with subject matter experts throughout our Private Banking division and the firm.
        </p>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('corporateAdvisory')">@lang('public.corporate advisory')</a>
                    </h6>
                    <p>We provide our clients with objective and actionable guidance to help them achieve their unique business and personal goals.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('corporateAdvisory')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.center for family business')</a></h6>
                    <p>The provision of consulting services and capital to family business proprietors in order to assist them in addressing their unique challenges.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('centerForFamilyBusiness')">@lang('public.read more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five columns">
            <div class="card" style="padding: 5px;">
                <div style="background-color: #DEDEDE; padding: 20px; height: 250px;">
                    <h6 style="text-align: left;"><a href="javascript:goTo('corporateBanking')">@lang('public.corporate banking')</a>
                    </h6>
                    <p>Capital with added value for substantial privately held U.S. companies with outstanding credit profiles.
                    </p>
                    <div class="clear"></div>
                    <div class="link-blog">
                        <div class="cl-effect-14"><a href="javascript:goTo('corporateBanking')">@lang('public.read more')</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="five columns" id="sidebar">
        @include('web.private-banking._sidebar')
    </div>
</div>
