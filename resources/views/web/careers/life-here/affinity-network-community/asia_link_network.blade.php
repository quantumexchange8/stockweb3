<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.asia link network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.asia link network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"The BANC networks have allowed me to create professional development opportunities for our members
                while connecting with us from across the globe."</em></p>
        <br>
        <p><strong>– Richard Ma, Asia Link Leader</strong></p>
        <br>
        <p>The Asia Link Network works to strengthen cultural understanding and improve global awareness of the
            countries, practices, and financial markets of Asia. Through discussions, lecture series, and meaningful
            dialogue, we promote the exchange of ideas that lead to better solutions for our employees and clients.
            Members receive networking, mentoring, and knowledge-building opportunities that help promote visibility
            and cultivate career growth. Our priority is to give employees pathways to advance their leadership,
            communication, and team-building skills that can be applied in the workplace.</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">Signature Events</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/spring-festival-cover.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Spring Festival</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>To mark Lunar New Year, or “Spring Festival” (the end of the coldest part of winter), Asia Link
                    Network members around the globe hosted events which included discussion around the Chinese Zodiac,
                    a traditional Lion Dance, festive cuisine, and competitive ping pong tournaments. The Network also
                    hosted special guests who explained the significance of tea in holidays and celebrations in Asian
                    Culture.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/diwali.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Celebrating Diwali</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>Asia Link hosted a special evening celebrating Diwali, the Indian Festival of Lights. The event
                    included a Diwali Lighting Ceremony, a presentation focused on the significance of Diwali in a
                    multicultural context, and a networking reception featuring Indian food, Diwali sweets, music, and
                    games.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/asia-link.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Asian Pacific American Heritage Month (US)
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>The India Chapter of New York City and Jersey City Asia Link celebrated its launch during Asian
                    Pacific American Heritage Month in the US. The color festival celebration included a Bollywood
                    musical called "Holi Hai,” offering participants an idea of what it is like to celebrate the
                    festival in India.
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
