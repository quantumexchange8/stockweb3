<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.young professionals network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.young professionals network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"The Young Professionals Network offers fantastic opportunities for employees in the early stages of
                their career to get involved at WAML, joining has helped me grow personally and professionally.”
            </em></p>
        <br>
        <p><strong>– Sean Farrell, Young Professional Network Co-Chair</strong></p>
        <br>
        <p>The mission of the Young Professionals Network is to engage, develop, and connect employees who are early
            in their careers, or new to WAML or the financial services industry. We offer opportunities for
            employees to expand their professional networks, build their personal brands, and support our
            communities. Special programs promote constructive peer and mentor relationships while empowering
            members with the skills needed to drive success as future leaders. We create a forum for employees to
            have an open dialogue about the opportunities and challenges of a multi-generational workplace.</p>
        <br>
        <h2 style="padding-bottom: 20px;">YPN Survey</h2>
        <hr>
        <br>
        <p>The Dublin chapter of Wingate’s Young Professionals Network marked the firm’s bicentennial anniversary in
            2018 by assessing the current and future shape of today’s workplace. The network conducted a survey of
            two distinct demographic groups in employment—under 30 and over 30—to understand their attitudes toward
            work and education. The survey tested the hypothesis that the current and future workforces are
            distinctly different in terms of work attitudes, expectations, and values. <a
                href="https://www.wgaml.com/resource/blob/36828/f5fb8e50cfa8a8d930c0ce7b114b097e/dublin-ypn-paper-data.pdf"
                target="_blank">Read the full report here.</a></p>

        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">Signature Events</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/urban-garden.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Urban Garden</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.cares') and YPN New York City hosted an Urban Garden Rooftop event. The volunteers spent a morning
                    planting new vegetables, weeding and watering the garden. The garden benefits local residents who
                    are learning how to farm, cook and serve more nutritious meals to their families.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/meet-the-youngest-irish-person-to-climb-mount-everest.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Meet the Youngest Irish Person Ever to Climb Mount
                    Everest
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>YPN Dublin hosted special guest speaker, Rob Mortell, — the youngest Irish person ever to climb Mount
                    Everest! Rob shared his insight into the preparations and challenges of reaching the summit, and
                    discussed how teams can succeed in some of the world’s most inhospitable environments.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/invest-in-yourself.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Invest in Yourself and Your Career
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>YPN hosted a two-part event series on the themes of “Investing in Yourself" and "Investing in Your
                    Career." The discussions explored how panelists created their own unique, internal career mobility
                    opportunities, and the successes, challenges and humor they have encountered over the course of
                    their careers.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/understanding-generation-gap.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Understanding the Generation Gap
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>YPN Boston hosted speakers from Talent Catalyst to help attendees understand how to bridge the
                    generation gap by learning how to effectively have conversations, set expectations, and build
                    relationships in today’s multi-generational workforce.
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
