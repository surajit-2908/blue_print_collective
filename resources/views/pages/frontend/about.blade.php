@extends('layouts.layout')
@section('content')
    <!--========================= Banner Section =========================-->

    <section class="inrBannerSec">
        <div class="container">
            <div class="dFlx spaceBet alignCenter">
                {{-- <div class="inrBnrLeftText">
                    <h1>
                        The Blueprint Collective is an
                        <strong>international coalition of equity driven practitioners</strong>
                        supporting organizations and communities to improve
                        <strong>learning opportunities.</strong>
                    </h1>

                    <p>
                        The Blueprint Collective is a network of proven educators
                        supporting schools and programs to achieve organizational goals
                        and close learning gaps. We help schools and leaders access
                        curated resources that facilitate effective learning for all. We
                        provide support at every level, from individual classrooms to
                        district-wide efforts to dramatically improve educational outcomes
                        for public school students.
                    </p>
                </div> --}}
                {!! $contentArr['top'] !!}

                <div class="inrBnrRightImg">
                    <img src="{{ asset('assets/images/about-banner-pic.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!--========================= Our Mission Section =========================-->

    <section class="inrOurMissionSec">
        <div class="inrOurMissionSecBfrImg">
            <img src="{{ asset('assets/images/inr-about-our-mission-img.png') }}" alt="" />
        </div>

        <div class="container">
            <div class="inrOurMissionHdnArea">
                <h2><span>Our Mission</span></h2>

                {{-- <p>
                    We drive school improvement through innovative equity centered
                    professional learning, coaching and collaborative problem solving.
                    The Blueprint Collective delivers 360 on demand consulting from our
                    leading educators and provide deeped on in person full day on site
                    support, co facilitation and adult development, curriculum
                    improvement and special education consulting.
                </p> --}}
                {!! $contentArr['our_mission'] !!}
            </div>

            <div class="inrOurMissionItemArea">
                <ul class="dFlx spaceBet">
                    @foreach ($tags as $tag)
                        <li>
                            <img src="{{ asset('storage/tags_image/') . '/' . $tag->image }}" alt="" />

                            <h3>{{ $tag->title }}</h3>
                        </li>
                    @endforeach
                    {{-- <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon1.png') }}" alt="" />

                        <h3>High Quality Curriculum adoption and Implementation</h3>
                    </li>

                    <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon2.png') }}" alt="" />

                        <h3>Program Evaluation Executive Leadership Coaching</h3>
                    </li>

                    <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon3.png') }}" alt="" />

                        <h3>Special Education Support & Guidance</h3>
                    </li>

                    <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon4.png') }}" alt="" />

                        <h3>New Educator Development</h3>
                    </li>

                    <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon5.png') }}" alt="" />

                        <h3>School & District Based Trainings</h3>
                    </li>

                    <li>
                        <img src="{{ asset('assets/images/inr-our-mission-item-icon6.png') }}" alt="" />

                        <h3>Principal Coaching</h3>
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>
@stop
