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
                        <div class="docked-pr">Our Mission</div>
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
                        <div class="docked-pr">Resources</div>
                    </div>
                </a>
            </div>
        </div>
    @endpush
    <!--========================= Banner Section =========================-->


    <!--========================= Banner Section =========================-->

    <section class="homeBannerSec">
        <div class="bnrImg">
            <img src="{{ asset('assets/images/home-banner.jpg') }}" alt="">
        </div>
        <div class="bnrCaption">
            <div class="container">
                <div class="bnrCaptionTextArea">
                    <h2>Finding Smart Solutions to Big Problems Together</h2>
                    <p>The Blueprint Collective is an international coalition of equity driven practitioners supporting
                        organizations and communities to improve learning opportunities. We work with schools and programs
                        to access curated strategies and resources that facilitate effective professional development and
                        transformative educational outcomes for public school students.</p>
                    <p><a href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="bnrAfterImg">
            <img src="{{ asset('assets/images/bnr-after-img.png') }}" alt="">
        </div>
    </section>





    <!--========================= About Section =========================-->

    <section class="aboutSec">
        <div class="container">
            <div class="dFlx justifyCenter alignCenter">
                <div class="leftRoundBox">
                    <p>Expert project management for organizations to dramatically improve through research informed
                        collaboration</p>
                    <img src="{{ asset('assets/images/about-arrow.png') }}" alt="">
                </div>
                <div class="rightTextBox">
                    <p>The Blueprint Collective provides leadership development, curriculum support and instructional
                        coaching to programs, school istricts & professional networks. We serve in communities across the
                        world and work with teams to innovate, tailor and dramatically improve models of learning through
                        high quality professional development and coaching.</p>
                    <p><a href="{{ route('about') }}">About Blueprint Collective <img
                                src="{{ asset('assets/images/about-arrow2.png') }}" alt=""></a>
                    </p>
                </div>

            </div>
        </div>

    </section>





    <!--========================= Our Mission Section =========================-->

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
                                    <h2 class="misionText"><span>Our Mission</span></h2>
                                    <h2 class="text-color-white flex-l"><span
                                            data-w-id="1a9a55fb-2ade-a43f-3e90-99a9d0199139">The BluePrint Collectivve
                                            provides a highly rated and high quality curriculam in humanites and
                                            stem.</span></h2>
                                    <div class="m-v-sm">
                                        <p data-w-id="1a9a55fb-2ade-a43f-3e90-99a9d019913f" class="text-color-white">The
                                            Blueprint Collective delivers 360 on demand consulting from our leading
                                            educators and provide deeped on in person full
                                            day on site support, co facilitation and adult development, curriculum
                                            improvement and special
                                            education consulting.</p>
                                        <p><a class="linkText" href="#">EXPAND TO LEARN MORE</a></p>
                                    </div>
                                </div>
                                <div class="content-image-wrapper m-t-c1 mobCol">
                                    <img src="{{ asset('assets/images/our-mission-img.png') }}" alt="our-mission">
                                </div>
                                <div id="w-node-_1a9a55fb-2ade-a43f-3e90-99a9d0199149-43a113a9"
                                    class="content-image-wrapper m-t-c1 webCol">
                                    <div class="content-image-parent">
                                        <div class="content-image _1"><img
                                                src="{{ asset('assets/images/mission-img1.png') }}" loading="lazy"
                                                width="280" alt="" class="image" /></div>
                                        <div class="content-image _3"><img
                                                src="{{ asset('assets/images/mission-img2.png') }}" loading="lazy"
                                                width="230" alt="" class="image" /></div>
                                        <div class="content-image _5"><img
                                                src="{{ asset('assets/images/mission-img3.png') }}" loading="lazy"
                                                width="239.5" alt="" class="image" /></div>
                                        <div class="content-image _2"><img
                                                src="{{ asset('assets/images/mission-img4.png') }}" loading="lazy"
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
                                        <h2 class="eduText"><span>New Educator Development</span></h2>
                                        <h2><span data-w-id="8ec429b0-28a1-767c-7392-27468f62d617">The Blueprint Collective
                                                designs and supports cohorts of new educators using highly rated
                                                instructional strategies that engage students in high-quality, rigorous
                                                instruction.</span></h2>
                                        <div data-w-id="8ec429b0-28a1-767c-7392-27468f62d61d" class="m-v-sm">
                                            <p><span>We drive school improvement through innovative equity centered
                                                    professional learning, coaching and collaborative problem solving. The
                                                    Blueprint Collective delivers 360 on demand consulting from our leading
                                                    educators and provide deeped on in person full day on site support, co
                                                    facilitation and adult development, curriculum improvement and special
                                                    education consulting.

                                                    collaborators, and learners for life.
                                            </p>
                                            <p><a class="linkText blueText" href="#">EXPAND TO LEARN MORE</a></p>
                                        </div>
                                    </div>
                                    <div class="content-image-wrapper m-t-c3 mobCol">
                                        <img src="{{ asset('assets/images/educator-dev-img.png') }}" alt="">
                                    </div>
                                    <div id="w-node-_8ec429b0-28a1-767c-7392-27468f62d62b-43a113a9"
                                        class="content-image-wrapper m-t-c3 webCol">
                                        <div class="content-image-parent">

                                            <div class="content-image _32"><img
                                                    src="{{ asset('assets/images/home-img1.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _29"><img
                                                    src="{{ asset('assets/images/home-img2.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <div class="content-image _33"><img
                                                    src="{{ asset('assets/images/home-img3.png') }}" loading="lazy"
                                                    width="206" alt="" class="image" /></div>
                                            <!-- <div class="content-image _30"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f92895f99a1141f_barr-76.png')}}" loading="lazy" width="206" alt="" class="image" /></div>
                                                        <div class="content-image _28"><img src="https://uploads-ssl.webflow.com/623a5a014f92892442a113aa/623a5a014f9289c714a1141b_barr-72.png')}}" loading="lazy" width="206" alt="" class="image" /></div> -->
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


        <!--========================= Resources Section =========================-->

        <div class="yellow-sections-wrapper main-nav-section">
            <div id="yellow-sections" class="main-section-anchor"></div>
            <section class="section z-11">
                <div class="cover bg-yellow"></div>
                <div data-w-id="a1ef182e-2ea5-b368-2864-44e1356e5d4d" class="animation-wrapper p-100">
                    <div class="sticky-wrap">
                        <div data-w-id="f30f4935-293e-1766-e0c0-4a6fd3e2753d" class="reveal-wrapper">
                            <div class="container">
                                <div class="content-wrapper minus-m-t">
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3aa-43a113a9" class="content">
                                        <h2 class="eduText"><span>Resources</span></h2>
                                        <h2 data-w-id="2dc6c98b-dbd7-199c-37eb-e0935be6e3ab">The bluprit approach
                                            <br />support teaches in <br /><span
                                                data-w-id="f0a5a932-a155-4b3a-184f-86c300f118f2"
                                                class="text-blue bold">intellectual preparation</span>
                                        </h2>
                                        <div data-w-id="03586833-ac0b-a312-f808-60505386e17c" class="m-t-medium">
                                            <p><span>The Blueprint approach supports teachers in intellectual preparation of
                                                    their lesson plans and provides them with focused feedback and
                                                    structured mechanisms for revising and strengthening these plans.</span>
                                            </p>
                                            <p><span class="bold m-t-20">Guidance Provided centers on </span></p>
                                            <ul class="textList">
                                                <li>Looking at Student Work/Other Data Analysis</li>
                                                <li>Intellectual Prep/Co-Planning</li>
                                                <li>Observation, Feedback & Practice.</li>
                                                <li>Real-Time Coaching (RTC)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-image-wrapper m-t-c5 mobCol">
                                        <img src="{{ asset('assets/images/resource-img.png') }}" alt="">
                                    </div>
                                    <div id="w-node-_2dc6c98b-dbd7-199c-37eb-e0935be6e3bc-43a113a9"
                                        class="content-image-wrapper m-t-c5 webCol">
                                        <div class="content-image-parent">
                                            <div class="content-image _11"><img
                                                    src="{{ asset('assets/images/resources-img1.png') }}" loading="lazy"
                                                    width="242" alt="" class="image" /></div>
                                            <div class="content-image _8"><img
                                                    src="{{ asset('assets/images/resources-img2.png') }}" loading="lazy"
                                                    width="280" alt="" class="image" /></div>
                                            <div class="content-image _6"><img
                                                    src="{{ asset('assets/images/resources-img3.png') }}" loading="lazy"
                                                    width="280" alt="" class="image" /></div>
                                            <div class="content-image _7"><img
                                                    src="{{ asset('assets/images/resources-img4.png') }}" loading="lazy"
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

    <!--========================= Personal Performence Development Section =========================-->

    <section class="prsnlPrfrmneDevSec homBodyComnSec">
        <div class="prsnlPrfrmneDevBfrImg">
            <img src="{{ asset('assets/images/personal-performence-dev-before-pic.png') }}" alt="">
        </div>

        <div class="container">
            <div class="dFlx spaceBet alignCenter">
                <div class="middleTextArea">
                    <h3>The Blueprint Collective collaborates with schools and teams through a
                        <strong>variety of mechanisms</strong> based on formal and informal data around
                        <strong>student academic and personal performance</strong>
                        and teacher development. This includes
                    </h3>

                    <ul>
                        <li>Weekly PD sessions to offer a chance for teachers to meet in their
                            grade level and content teams to receive peer feedback, discuss
                            shared challenges, and refine systems and improvement plans.</li>
                        <li>Special Project teams bring together content teachers, SPED teachers,
                            campus leadership, and counselors to discuss the academic and broader
                            progress of scholars. Teams meet regularly to discuss growth measures
                            and use protocols to create plans and monitor progress.</li>
                        <li>Weekly coaching meetings that include time for lesson planning and
                            adjustment based on peer, teacher and coach feedback.</li>
                        <li>Faculty-wide meetings provide a platform for teachers to ask questions,
                            present concerns, and brainstorm amongst their peers.</li>

                    </ul>

                </div>

                <div class="rightImgArea">
                    <img src="{{ asset('assets/images/personal-performence-dev-pic.png') }}" alt="">
                </div>

            </div>

        </div>

    </section>


@stop
