@extends('home.layout.master')
@section('title')
    About
@endsection
@section('body')
    <!-- About -->
    <section class="about-area">
        <div class="container">
            <div class="d-flex about-me-wrap align-items-start gap-24">
                <div data-aos="zoom-in">
                    <div class="about-image-box shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <div class="image-inner">
                            <img src="{{asset($about->admin_photo)}}" alt="About Me">
                        </div>
                    </div>
                </div>

                <div class="about-details" data-aos="zoom-in">
                    <h1 class="section-heading" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> Self-summary <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>
                    <div class="about-details-inner shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/icon2.png" alt="Star">
                        <h1>{{$about->first_name}} {{$about->last_name}}</h1>
                        <p>{!!$about->long_description  !!}</p>
                    </div>

                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-experience shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <h3>EXPERIENCE</h3>

                        <ul>
                            @foreach($experiences as $experience)
                            <li>
                                <p class="date">{{$experience->joining_year}} - {{$experience->year_left}}</p>
                                <h2>{{$experience->working_dep}}</h2>
                                <p class="type">{{$experience->working_place}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-education shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <h3>EDUCATION</h3>

                        <ul>
                            @foreach($educations as $education)
                            <li>
                                <p class="date">{{$education->joining_year}} - {{$education->completed_year}}</p>
                                <h2>{{$education->subject}}</h2>
                                <p class="type">{{$education->institute_name}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-12">
                    <div class="d-flex profile-contact-credentials-wrap gap-24">

                        <div data-aos="zoom-in">
                            <div class="about-profile-box info-box shadow-box h-full">
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <div class="inner-profile-icons shadow-box">
                                    @foreach($socialMedias as  $socialMedia)
                                    <a href="{{$socialMedia->link}}">
                                        <i class="{{$socialMedia->icon}}" style="font-size: 30px"></i>
                                    </a>
                                    @endforeach
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Stay with me</h4>
                                        <h1>Profiles</h1>
                                    </div>

                                    <a href="contact.html" class="about-btn">
                                        <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="flex-1">
                            <div class="about-contact-box info-box shadow-box">
                                <a class="overlay-link" href="{{route('contact')}}"></a>
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <img src="{{asset('frontend')}}/assets/images/icon2.png" alt="Icon" class="star-icon">
                                <h1>Let's <br>work <span>together.</span></h1>
                                <a href="contact.html" class="about-btn">
                                    <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                </a>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="h-full">
                            <div class="about-crenditials-box info-box shadow-box">
                                <a class="overlay-link" href="{{route('about')}}"></a>
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <img src="{{asset('frontend')}}/assets/images/sign.png" alt="Sign">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>more about me</h4>
                                        <h1>Credentials</h1>
                                    </div>

                                    <a href="credentials.html" class="about-btn">
                                        <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
