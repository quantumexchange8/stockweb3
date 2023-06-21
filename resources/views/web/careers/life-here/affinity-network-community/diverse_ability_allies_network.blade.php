<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.diverse ability allies network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.diverse ability allies network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"Learning how to harness your abilities, whatever they may be, is key to professional and personal
                development. Diverse Ability Allies Network was created to connect with and without disabilities to
                celebrate our unique skills. We support the empowerment of people with disabilities through
                advocacy, technology, and organizational adaptations."</em></p>
        <br>
        <p><strong>– Andrew Hofer,&nbsp;Diverse Ability Allies Network Executive Sponsor</strong></p>
        <br>
        <p>The mission of the Diverse Ability Allies Network (DAAN) is to encourage and support every member of the
            Firm in achieving their full potential by demonstrating that Vanward is a supportive and inclusive
            environment for employees who are disabled, or care for individuals with disabilities. By increasing
            awareness, collaboration, problem-solving, adaptation, innovation, and advocacy for community members
            with disabilities, we provide a more comfortable, inclusive, and understanding work environment for
            everyone.</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">Signature Events</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/defining-dyslexia.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Defining Dyslexia</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>DAAN and the <a href="javascript:goTo('parentingNetwork')">@lang('public.parenting network')</a> hosted the
                    International Dyslexia Association to learn about dyslexia, dispel any myths and discuss ways to
                    support those with dyslexia. Attendees also had an opportunity to experience what it feels like to
                    have dyslexia first-hand through simulation exercises.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/daan-art-of-blinders.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Art of Blinders</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>This workshop gave employees the opportunity to experience the four “Sightless Principals of
                    Communication” – distractions, ambiguity, obstacles, and competition. Through a discussion and team
                    building activities, participants learned how to leverage sensory communication to become more
                    effective communicators and listeners.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/ban-daan-event.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Dis-labeled: The Value of Different Abilities &
                    Allyship
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>Co-hosted by the Black Affinity Network, diversability advocate Nancy Oduro led a discussion about
                    the importance of creating a workplace where diversity awareness always includes ability. Attendees
                    learned how to be strong allies who remove roadblocks for colleagues with diverse abilities.
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
