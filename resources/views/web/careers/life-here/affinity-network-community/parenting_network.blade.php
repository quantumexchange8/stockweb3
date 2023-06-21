<div class="container breadcrumb">
    <div class="sixteen columns">
        <span>
            <a href="javascript:goTo('home')">@lang('public.home')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('careers')">@lang('public.careers')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('lifeHere')">@lang('public.life here')</a>&nbsp;&nbsp;>
            <a href="javascript:goTo('affinityNetworkCommunity')">@lang('public.affinity network community')</a>&nbsp;&nbsp;>
            &nbsp;&nbsp;<strong>@lang('public.parenting network')</strong>
        </span>
    </div>
    <br><br>
    <hr>
</div>
<div class="container">

    <div class="eleven columns">
        <h2>@lang('public.parenting network')</h2>
        <p style="padding-top: 10px;">
        <p><em>"In today's fast-paced, hyper-connected environment, the Parenting Network aims to help us deal with
                a wide range of family topics. We view parenting as a journey that presents different challenges at
                each stage and we want to ensure the Parenting Network provides the tools to help our members
                successfully navigate each one. As a father of four, I’m committed to ensuring our network helps us
                balance a happy and successful home and work life."</em></p>
        <br>
        <p><strong>– Joe Pennini, Parenting Network Co-Chair</strong></p>
        <br>
        <p>The Parenting Network provides a community of encouragement and education for those facing
            responsibilities and obligations as parents and caregivers. By sharing information, experiences, and
            resources, we connect employees to identify, discuss, and overcome issues affecting working families.
            Within the Parenting network, members tend to group themselves around the stages of parenthood: Prenatal
            and New Parents, Elementary School Age Children, Middle School/ High School Age Children, College Age/
            Adult Children, and Reverse Parenting. The Parenting Network closely partners with the other BANC
            networks, such as the <a href="javascript:goTo('prideNetwork')">Pride</a>, <a
                href="javascript:goTo('diverseAbilityAlliesNetwork')">Diverse Abilities Allies</a>, and <a
                href="javascript:goTo('womensNetwork')">Women's</a> networks to ensure support programs are
            appropriately tailored to employee needs. Our goal is to equip members with the knowledge and support
            needed to grow their careers while successfully balancing the competing demands of work and home. We
            also help to evolve our workplace by providing input on WAML policies and products from a family and
            caregiver perspective.</p>
        </p>
        <div style="padding-top: 30px;">
            <h2 style="padding-bottom: 20px;">Signature Events</h2>
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/daughters-and-sons.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Bring Your Children to Work Day (Annual)
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>This event is held each year in many of our global offices. Bring Your Children to work day is
                    designed to strengthen the connection between education and work, as well as relationships between
                    employees and the children in their lives. Activities are planned in each office to encourage
                    teamwork and accountability; including games, volunteer opportunities and job shadowing.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/parent-icon-280.jpg') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Financial Planning for Parents</h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>The NY Parenting Network hosted a global financial planning discussion designed especially for
                    parents. Attendees participated in an open discussion on topics such as life insurance, disability
                    insurance, college tuition, and planning for your will.
                </p>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <hr>
            <div class="two columns">
                <img src="{{ asset('images/affinity/pride.png') }}" alt=""
                    width="75%" height="auto">
            </div>
            <div class="eight columns">
                <h6 style="text-align: left; padding-bottom: 10px;">Navigating the New Normal
                </h6>
                <strong>
                    {{-- <p>Little Rock, AR</p> --}}
                </strong>
                <p>In collaboration with the Parenting Network and Greater Boston PFLAG, panelists shared their
                    experiences in navigating complex issues such as supporting children to come out or to accept their
                    own “otherness.” This event allowed parents and allies to ask questions in a safe environment to
                    learn from those navigating similar experiences.
                </p>
            </div>
        </div>
    </div>
    <div class="five columns">
        @include('web.careers._sidebar')
    </div>
</div>
