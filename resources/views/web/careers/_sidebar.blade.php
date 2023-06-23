{{-- <style>
    /* Styles for the sidebar */
    #sidebar {
        font-family: 'OpenSans-Light-webfont', sans-serif;
        background-color: #333333;
        padding: 10px;
    }

    #sidebar h5 {
        padding: 10px;
        color: #ffffff;
        /* White text color */
    }
    #sidebar h6 {
        text-align: left;
        padding: 10px;
        color: #ffffff;
        /* White text color */
    }

    #sidebar hr {
        border-color: white;
    }

    #sidebar ul {
        padding: 10px;
        list-style: none;
        margin: 0;
    }

    #sidebar ul li {
        margin-bottom: 5px;
    }

    #sidebar ul li a {
        font-size: 14px;
        color: #ffffff;
        /* White text color */
        text-decoration: none;
    }

    #sidebar ul li a:hover {
        text-decoration: underline;
    }

    #sidebar ul ul {
        padding: 10px;
        margin-top: 5px;
    }

    #sidebar ul ul li {
        margin-bottom: 5px;
    }

    /* Nested list indicators */
    #sidebar ul ul li:before {
        content: "-";
        margin-right: 5px;
        color: #ffffff;
        /* White text color */
    }
</style> --}}

<div id="sidebar">
    <h5>@lang('public.careers')</h5>
    <hr>
    <ul>
        <li><a href="javascript:goTo('whatWeLookFor')">@lang('public.what we look for')</a>
            <ul>
                <li><a href="javascript:goTo('undergraduateInternships')">@lang('public.undergraduate internships')</a></li>
                <li><a href="javascript:goTo('entryLevelProfessionals')">@lang('public.entry level professionals')</a></li>
                <li><a href="javascript:goTo('experiencedProfessionals')">@lang('public.experienced professionals')</a></li>
                <li><a href="javascript:goTo('restart')">@lang('public.restart')@</a></li>
            </ul>
        </li>
        <li><a href="javascript:goTo('totalRewards')">@lang('public.total rewards')</a>
            <ul>
                <li><a href="javascript:goTo('benefitsWellnessAndCompensation')">@lang('public.benefits, wellness and compensation')</a></li>
                <ul>
                    <li><a href="javascript:goTo('thrivePhysically')">@lang('public.benefits, wellness and compensation')</a></li>
                    <li><a href="javascript:goTo('thriveFinancially')">@lang('public.thrive financially')</a></li>
                    <li><a href="javascript:goTo('thrivePersonally')">@lang('public.thrive personally')</a></li>
                </ul>
                <li><a href="javascript:goTo('careerManagement')">@lang('public.career management')</a></li>
                <li><a href="javascript:goTo('ongoingLearning')">@lang('public.ongoing learning')</a></li>
                <ul>
                    <li><a href="javascript:goTo('signaturePrograms')">@lang('public.signature programs')</a></li>
                </ul>
                <li><a href="javascript:goTo('mobility')">@lang('public.mobility')</a></li>

            </ul>
        </li>
        <li><a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>
            <ul>
                <li><a href="javascript:goTo('ourCulture')">@lang('public.our culture')</a></li>
                <li><a href="javascript:goTo('coreValues')">@lang('public.core values')</a></li>
                <li><a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a></li>
                <ul>
                    <li><a href="javascript:goTo('asiaLinkNetwork')">@lang('public.asia link network')</a></li>
                    <li><a href="javascript:goTo('blackAffinityNetwork')">@lang('public.black affinity network')</a></li>
                    <li><a href="javascript:goTo('diverseAbilityAlliesNetwork')">@lang('public.diverse ability allies network')</a></li>
                    <li><a href="javascript:goTo('globalEmployeeNetwork')">@lang('public.global employee network')</a></li>
                    <li><a href="javascript:goTo('latinoCulturalNetwork')">@lang('public.latino cultural network')</a></li>
                    <li><a href="javascript:goTo('militaryVeteransNetwork')">@lang('public.military veterans network')</a></li>
                    <li><a href="javascript:goTo('parentingNetwork')">@lang('public.parenting network')</a></li>
                    <li><a href="javascript:goTo('prideNetwork')">@lang('public.pride network')</a></li>
                    <li><a href="javascript:goTo('womensNetwork')">@lang('public.womens network')</a></li>
                    <li><a href="javascript:goTo('youngProfessionalsNetwork')">@lang('public.young professionals network')</a></li>
                </ul>
                <li><a href="javascript:goTo('cares')">@lang('public.cares')</a></li>
            </ul>
        </li>
    </ul>
</div>
