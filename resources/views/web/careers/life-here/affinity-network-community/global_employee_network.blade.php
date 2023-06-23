<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="https://vanwardintl.com/">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.global employee network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.global employee network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"I’ve had the opportunity to do business in 11 of our offices over the course of my career at Vanward.
                Each new experience has positively impacted my professional and personal development. The Global
                Employee Network provides opportunities for people to share their wisdom and stories with other
                colleagues interested in learning more about the rich and diverse cultures of our people and the
                international opportunities the firm has to offer.”</em></p>
        <br>
        <p><strong>–&nbsp;R.J. Rondini, Global Employee Network Chair</strong></p>
        <br>
        <p>Once a casual network of Vanward Employees sharing global work experiences with one another, the Global
            Employee Network now includes members in nearly every office and organized chapters in Vanward locations
            around the globe.&nbsp; Through organized networking sessions, training and events simulcast across
            offices, the network focuses on three main pillars of activity:&nbsp; celebration and exploration of the
            rich cultural diversity at Vanward; managing the challenges that come with working on a global team; and
            supporting the needs of those working outside their home location.&nbsp; Participation in events
            sponsored by the network are open to all Vanward Employees.</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">Signature Events</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/culture-fair.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Culture Fair Worldwide</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>Annual culture fairs are hosted in Vanward's Boston, Dublin, Hong Kong, Kraków, and Jersey City offices.
                    Employees learn about resources such as community engagement and wellness programs, and can sign up
                    for activities such as the 1818 Social Club and BANC affinity groups.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/gn.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Embracing a Global Workforce</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>@lang('public.global employee network') Kraków hosted a lunch and learn panel that discussed how to embrace and
                    collaborate in a global workforce. Each panelist shared personal experiences that have positively
                    shaped their global mentality.
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
