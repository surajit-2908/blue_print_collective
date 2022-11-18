@extends('layouts.layout')
@section('content')
    @push('left-bar')
        <!--========================= Left Number Section =========================-->
        <div class="left-docked-warpper">
            <div style="-webkit-transform:translate3d(-160%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-160%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-160%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-160%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="left-docked-nav">
                <a href="#black-sections" style="color:rgb(38,32,83)" class="docked-dp w-inline-block">
                    <div class="state-num">01</div>
                    <div class="docked-content">
                        <div style="background-color:rgb(38,32,83)" class="dicked-line"></div>
                        <div class="docked-pr">High Quality Curriculam Adaption & Implementation</div>
                    </div>
                </a>
                <a href="#gray-sections" style="color:rgb(38,32,83)" class="docked-dp w-inline-block">
                    <div class="state-num">02</div>
                    <div class="docked-content">
                        <div style="background-color:rgb(38,32,83)" class="dicked-line"></div>
                        <div class="docked-pr">New Educator Development</div>
                    </div>
                </a>
                <a href="#yellow-sections" style="color:rgb(38,32,83)" class="docked-dp w-inline-block">
                    <div class="state-num">03</div>
                    <div class="docked-content">
                        <div style="background-color:rgb(38,32,83)" class="dicked-line"></div>
                        <div class="docked-pr">High school graduate</div>
                    </div>
                </a>

                <a href="#yellow-sections-deep" style="color:rgb(38,32,83)" class="docked-dp w-inline-block">
                    <div class="state-num">04</div>
                    <div class="docked-content">
                        <div class="docked-pr">Special Education Support & Guidance</div>
                    </div>
                </a>

            </div>
        </div>
    @endpush


    <!--========================= Banner Section =========================-->

    <section class="inrBannerSec">
        <div class="container">
            <div class="dFlx spaceBet alignCenter">
                <div class="servicesLeftText">
                    <h1>The Blueprint Collective is an <strong>international coalition of equity driven
                            practitioners</strong> supporting organizations
                        and communities to <strong>improve learning opportunities.</strong></h1>

                    <p>We work with schools and programs to access curated
                        strategies and resources that facilitate effective professional development and transformative
                        educational outcomes for public school students. </p>

                </div>

                <div class="serviceRightImg">
                    <img src="{{ asset('assets/images/service-banner-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>





    <!--========================= Our Services Section =========================-->

    <div data-w-id="785186f1-240e-771e-6055-96ffe8d60b89" class="docked-wrapper show-docked">
        <div data-w-id="65d2bace-3f17-b3e2-af77-2f1d58b9ba67" class="black-sections-wrapper main-nav-section">
            <div id="black-sections" class="main-section-anchor"></div>
            <section data-w-id="0cd65039-6d44-c5ed-0a82-cdce7e555d0f" class="section z-5">
                <div class="top-image-wrapper"><img src="{{ asset('assets/images/about-after-img.png') }}" loading="lazy"
                        alt="" class="top-image" />
                    <div class="fix-edge"></div>
                </div>
                <div data-w-id="9c3ead8a-fb0a-641d-ece0-05312f3b7c74" class="animation-wrapper bg-black p-100">
                    <div class="sticky-wrap">
                        <div class="container">
                            <div class="content-wrapper">
                                <div id="w-node-_1a9a55fb-2ade-a43f-3e90-99a9d0199137-43a113a9" class="content">
                                    <h2 class="misionText"><span>Our Services</span></h2>
                                    <h2 class="text-color-white flex-l"><span
                                            data-w-id="1a9a55fb-2ade-a43f-3e90-99a9d0199139">High Quality Curriculam <span
                                                class="bold text-yellow">Adaption & Implementation</span> to succeed in
                                            life.</span></h2>
                                    <div class="m-v-sm">
                                        <p data-w-id="1a9a55fb-2ade-a43f-3e90-99a9d019913f" class="text-color-white">The
                                            Blueprint Collective provides a highly rated high quality curriculum in
                                            humanities and stem. We offer various levels of support depending on
                                            organizational goals, mission and annual focus. We also work with teams
                                            who are seeking to move beyond compliance towards a culture of continuous
                                            improvement Grounded in research on shared understanding on mathematical
                                            identities and routines guiding mastery, the Blueprint Math engages learners
                                            to greater focus on fewer topics linked across grades. Students participate
                                            in hands-on application of conceptual understanding, practice with skills and
                                            fluency and developing multiple solution paths towards mastery. </p>

                                    </div>
                                </div>
                                <div class="content-image-wrapper m-t-c1 mobCol">
                                    <img src="{{ asset('assets/images/service-img.png') }}" alt="Services">
                                </div>
                                <div id="w-node-_1a9a55fb-2ade-a43f-3e90-99a9d0199149-43a113a9"
                                    class="content-image-wrapper m-t-c1 webCol">
                                    <div class="content-image-parent">
                                        <div class="content-image _1"><img
                                                src="{{ asset('assets/images/adaption-img.png') }}" loading="lazy"
                                                width="280" alt="" class="image" /></div>
                                        <div class="content-image _333"><img
                                                src="{{ asset('assets/images/adaption-img2.png') }}" loading="lazy"
                                                width="230" alt="" class="image" /></div>
                                        <div class="content-image _555"><img
                                                src="{{ asset('assets/images/adaption-img3.png') }}" loading="lazy"
                                                width="239.5" alt="" class="image" /></div>
                                        <div class="content-image _222"><img
                                                src="{{ asset('assets/images/adaption-img4.png') }}" loading="lazy"
                                                width="338" alt="" class="image" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>






        <!--========================= Educator Development Section =========================-->

        <div data-w-id="acbc92d8-a872-bb0e-1cbe-5ca64178cc4d" class="gray-sections-wrapper main-nav-section">
            <div id="gray-sections" class="main-section-anchor"></div>
            <section class="section z-13">
                <div class="cover bg-warm-gray"></div>
                <div data-w-id="f5bc682c-560e-070e-dbd5-24bd0b0444bf" class="animation-wrapper bg-warm-gray p-100">
                    <div class="sticky-wrap">
                        <div data-w-id="16e513b2-5f1b-005d-fce8-43a650216822" class="reveal-wrapper">
                            <div class="container">
                                <div class="content-wrapper">
                                    <div id="w-node-_8ec429b0-28a1-767c-7392-27468f62d614-43a113a9" class="content">
                                        <h2 class="eduText"><span>Services</span></h2>
                                        <h2><span data-w-id="8ec429b0-28a1-767c-7392-27468f62d617">New Educator
                                                </br><strong class="bold">Development</strong></span></h2>
                                        <div data-w-id="8ec429b0-28a1-767c-7392-27468f62d61d" class="m-v-sm">
                                            <p><span>The Blueprint Collective designs and supports cohorts of new educators
                                                    using highly rated instructional strategies that engage students in
                                                    high-quality, rigorous instruction. Learning modules and coaching focus
                                                    on:</span></p>

                                            <ul class="serviceList">
                                                <li>Success Coaching and Relationship Building</li>
                                                <li>Personalized self driven learning on equity in teaching and learning
                                                </li>
                                                <li>Structured, Consistent Whole Group Instruction prioritizing:</li>
                                            </ul>
                                            <ol class="serviceListOl">
                                                <li>Seminars that engage in interpretation and argument about texts and
                                                    essential questions.</li>
                                                <li>Laboratory Investigations that result in data analysis and a written
                                                    product.</li>
                                                <li>Workshops that include sustained independent work time.</li>
                                                <li>College-Style Lectures that introduce material and concepts using social
                                                    media.</li>
                                                <li>Close Reading Lessons that focus on comprehension and mastery of
                                                    transferable skills.</li>
                                                <li>Guided Discovery that leads students through a project or active
                                                    questioning to discovery.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="content-image-wrapper m-t-c3 mobCol">
                                        <img src="{{ asset('assets/images/service-img2.png') }}" alt="">
                                    </div>
                                    <div id="w-node-_8ec429b0-28a1-767c-7392-27468f62d62b-43a113a9"
                                        class="content-image-wrapper m-t-c3 webCol">
                                        <div class="content-image-parent">

                                            <div class="content-image _32 image32"><img
                                                    src="{{ asset('assets/images/development-img1.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _29 image29"><img
                                                    src="{{ asset('assets/images/development-img2.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _28 image28"><img
                                                    src="{{ asset('assets/images/development-img3.png') }}"
                                                    loading="lazy" width="206" alt="" class="image" /></div>
                                            <div class="content-image _30 image30"><img
                                                    src="{{ asset('assets/images/development-img4.png') }}"
                                                    loading="lazy" width="206" alt="" class="image" /></div>
                                            <!--<div class="content-image _28"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289c714a1141b_barr-72.png')}}" loading="lazy" width="206" alt="" class="image" /></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/images/educator-dev-after-img.jpg') }}" loading="lazy" alt=""
                    class="bottom-image" />
            </section>
        </div>



        <!--========================= Services School Section =========================-->

        <div class="yellow-sections-wrapper main-nav-section">
            <div id="yellow-sections" class="main-section-anchor"></div>
            <section data-w-id="2dc6c98b-dbd7-199c-37eb-e0935be6e3a4" class="section z-11">
                <div class="cover bg-yellow"></div>
                <div data-w-id="a1ef182e-2ea5-b368-2864-44e1356e5d4d" class="animation-wrapper p-100 vh200">
                    <div class="sticky-wrap vh200">
                        <div data-w-id="f30f4935-293e-1766-e0c0-4a6fd3e2753d" class="reveal-wrapper">
                            <div class="container">
                                <div class="content-wrapper minus-m-t">
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3aa-43a113a9" class="content">
                                        <h2 class="eduText"><span>Services</span></h2>
                                        <h2 data-w-id="2dc6c98b-dbd7-199c-37eb-e0935be6e3ab">High school graduate</h2>
                                        <div data-w-id="03586833-ac0b-a312-f808-60505386e17c" class="m-t-medium">
                                            <p><span>The Blueprint approach supports teachers in intellectual preparation of
                                                    their
                                                    lesson plans and provides them with focused feedback and structured
                                                    mechanisms
                                                    for revising and strengthening these plans. Guidance Provided centers on
                                                    collaborators, and learners for life.</span></p>

                                            <ol class="serviceListOl mb20 ml0">
                                                <li>Looking at Student Work/Other Data Analysis</li>
                                                <li>Intellectual Prep/Co-Planning</li>
                                                <li>Workshops that include sustained independent work time.</li>
                                                <li>Observation, Feedback & Practice.</li>
                                                <li>Real-Time Coaching (RTC).</li>
                                            </ol>
                                            <p><span>The Blueprint Collective collaborates with schools and teams through a
                                                    variety
                                                    of mechanisms based on formal and informal data around student academic
                                                    and
                                                    personal performance and teacher development. This includes </span></p>

                                            <ul class="serviceList">
                                                <li>Weekly PD sessions to offer a chance for teachers to meet in their grade
                                                    level
                                                    and content teams to receive peer feedback, discuss shared challenges,
                                                    and refine
                                                    systems and
                                                    improvement plans.</li>

                                                <li>Special Project teams bring together content teachers, SPED teachers,
                                                    campus leadership, and counselors to discuss the academic and broader
                                                    progress of scholars. Teams meet
                                                    regularly to discuss growth measures and use protocols to create plans
                                                    and monitor progress.</li>

                                                <li>Weekly coaching meetings that include time for lesson planning and
                                                    adjustment based on peer, teacher and coach feedback.</li>

                                                <li>Faculty-wide meetings provide a platform for teachers to ask questions,
                                                    present concerns, and brainstorm amongst their peers.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-image-wrapper m-t-c5 mobCol">
                                        <img src="{{ asset('assets/images/service-img3.png') }}" alt="">
                                    </div>
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3bc-43a113a9"
                                        class="content-image-wrapper m-t-c5 webCol">
                                        <div class="content-image-parent">
                                            <div class="content-image _32"><img
                                                    src="{{ asset('assets/images/home-img1.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _29"><img
                                                    src="{{ asset('assets/images/home-img2.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _33"><img
                                                    src="{{ asset('assets/images/home-img33.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <!-- <div class="content-image _10"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f92899bb6a1143d_barr-101.png')}}" loading="lazy" width="242" alt="" class="image" /></div>
                 <div class="content-image _9"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289b3e2a11447_barr-99.png')}}" loading="lazy" width="280" alt="" class="image" /></div>
                 <div class="content-image _12"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f92891d0aa1146d_nick-fewings-zF_pTLx_Dkg-unsplash.png')}}" loading="lazy" width="156" alt="" class="image" /></div>
                 <div class="content-image _13"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289b0e4a11441_barr-100.png')}}" loading="lazy" width="156" alt="" class="image" /></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!--========================= Personal Performence Development Section =========================-->

        <div class="yellow-sections-wrapper main-nav-section minus-m-t">
            <div id="yellow-sections-deep" class="main-section-anchor"></div>
            <section class="section z-13">
                <div class="top-image-wrapper"><img
                        src="{{ asset('assets/images/personal-performence-dev-before-pic.png') }}" loading="lazy"
                        alt="" class="top-image" />
                    <div class="fix-edge"></div>
                </div>
                <!-- <div class="cover bg-yellow"></div> -->
                <div data-w-id="a1ef182e-2ea5-b368-2864-44e1356e5d4d" class="animation-wrapper bg-yellow p-100">
                    <div class="sticky-wrap">
                        <div data-w-id="f30f4935-293e-1766-e0c0-4a6fd3e2753d" class="reveal-wrapper">
                            <div class="container">
                                <div class="content-wrapper minus-m-t">
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3aa-43a113a9" class="content">
                                        <h2 class="misionText"><span style="color: #2e5076;">Our Services</span></h2>
                                        <h2 data-w-id="2dc6c98b-dbd7-199c-37eb-e0935be6e3ab">Special Education
                                            </br><strong>Support & Guidance</strong></h2>
                                        <div data-w-id="03586833-ac0b-a312-f808-60505386e17c" class="m-t-medium">
                                            <p class="pb20"><span>The Blueprint group supports schools and districts to
                                                    meet the
                                                    academic needs of all students, including but not limited to: students
                                                    with disabilities, English language learners, and economically
                                                    disadvantaged students. Blueprint works to ensure that all learners
                                                    make transformative academic gains by consulting on hiring certified,
                                                    qualified, and effective Teacher Leaders and designing tiers of
                                                    support including</span></p>
                                            <p class="pb20"><span><strong class="bold">Tier 1:</strong> High-quality
                                                    instruction with differentiated approaches; universal, preventive, and
                                                    proactive programs for all students (e.g. small group).</span></p>
                                            <p class="pb20"><span><strong class="bold">Tier 2:</strong> Targeted,
                                                    supplemental instruction for a limited period of time (4-6 weeks), with
                                                    progress monitoring to capture response.</span></p>
                                            <p><span><strong class="bold">Tier 3:</strong> Individualized,
                                                    high-intensity, assessment-based support outside the classroom with a
                                                    skilled specialist. The classroom teacher, special educator, or other
                                                    specialist regularly reassess Tier 2 and 3.</span></p>

                                        </div>
                                    </div>
                                    <div class="content-image-wrapper m-t-c5 mobCol">
                                        <img src="{{ asset('assets/images/service-img4.png') }}" alt="">
                                    </div>
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3bc-43a113a9"
                                        class="content-image-wrapper m-t-c5 webCol">
                                        <div class="content-image-parent">
                                            <div class="content-image _11"><img
                                                    src="{{ asset('assets/images/spacial-edu.png') }}" loading="lazy"
                                                    width="242" alt="" class="image" /></div>
                                            <div class="content-image _8 image8"><img
                                                    src="{{ asset('assets/images/spacial-edu2.png') }}" loading="lazy"
                                                    width="280" alt="" class="image" /></div>
                                            <div class="content-image _6 image6"><img
                                                    src="{{ asset('assets/images/adaption-img2.png') }}" loading="lazy"
                                                    width="280" alt="" class="image" /></div>
                                            <div class="content-image _7 image7"><img
                                                    src="{{ asset('assets/images/adaption-img3.png') }}" loading="lazy"
                                                    width="280" alt="" class="image" /></div>
                                            <!-- <div class="content-image _10"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f92899bb6a1143d_barr-101.png')}}" loading="lazy" width="242" alt="" class="image" /></div>
                 <div class="content-image _9"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289b3e2a11447_barr-99.png')}}" loading="lazy" width="280" alt="" class="image" /></div>
                 <div class="content-image _12"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f92891d0aa1146d_nick-fewings-zF_pTLx_Dkg-unsplash.png')}}" loading="lazy" width="156" alt="" class="image" /></div>
                 <div class="content-image _13"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289b0e4a11441_barr-100.png')}}" loading="lazy" width="156" alt="" class="image" /></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

@stop
