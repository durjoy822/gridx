@extends('home.layout.master')
@section('title')
    Home
@endsection
@section('body')
{{--    About--}}
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-me-box shadow-box">
                        <a class="overlay-link" href="{{route('about')}}"></a>
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <div class="img-box">
                            @if($about->admin_photo==!null)
                            <img src="{{$about->admin_photo}}" alt="About Me">
                            @else
                                <img src="{{asset('backend')}}/assets/images/user.png" alt="About Me">
                            @endif
                        </div>
                        <div class="infos">
                            <h4>{{$about->working_post}}</h4>
                            <h1>{{$about->first_name}} {{$about->last_name}}</h1>
                            <p>{{$about->short_description}}</p>
                            <a href="#" class="about-btn">
                                <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-credentials-wrap">
                        <div data-aos="zoom-in">
                            <div class="banner shadow-box">
                                <div class="marquee">
                                    <div>
                                        <span class="h6">{{$slider->slider_details}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="gx-row d-flex gap-24">
                            <div data-aos="zoom-in">
                                <div class="about-crenditials-box info-box shadow-box h-full">
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

                            <div data-aos="zoom-in">
                                <div class="about-project-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="{{route('work')}}"></a>
                                    <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                    <img src="{{asset('frontend')}}/assets/images/my-works.png" alt="My Works">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>SHOWCASE</h4>
                                            <h1>Projects</h1>
                                        </div>

                                        <a href="#" class="about-btn">
                                            <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-12">
                    <div class="blog-service-profile-wrap d-flex gap-24">
                        <div data-aos="zoom-in">
                            <div class="about-blog-box info-box shadow-box h-full">
                                <a href="{{route('blog')}}" class="overlay-link"></a>
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <img src="{{asset('frontend')}}/assets/images/gfonts.png" alt="GFonts">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Blog</h4>
                                        <h1>GFonts</h1>
                                    </div>

                                    <a href="blog.html" class="about-btn">
                                        <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="flex-1">
                            <div class="about-services-box info-box shadow-box h-full">
                                <a href="{{route('service')}}" class="overlay-link"></a>
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <div class="icon-boxes">
                                    <i class="fa-solid fa-laptop-code"  style="font-size: 30px "></i>
                                    <i class="fa-solid fa-gear" style="font-size: 30px"></i>
                                    <i class="fa-solid fa-list-check" style="font-size: 30px"></i>
                                    <i class="fa-solid fa-sitemap" style="font-size: 30px"></i>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>specialization</h4>
                                        <h1>Services Offering</h1>
                                    </div>

                                    <a href="#" class="about-btn">
                                        <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in">
                            <div class="about-profile-box info-box shadow-box h-full">
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <div class="inner-profile-icons shadow-box">
                                    @foreach($socialMedias as $socialMedia)
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

                    </div>
                </div>

            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-client-box info-box shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <div class="clients d-flex align-items-start gap-24 justify-content-center">
                            <div class="client-item">
                                <h1>01</h1>
                                <p>Years <br>Experience</p>
                            </div>

                            <div class="client-item">
                                <h1>0{{$clientcount}}</h1>
                                <p>CLIENTS <br>WORLDWIDE</p>
                            </div>

                            <div class="client-item">
                                <h1>0{{$projectcount}}</h1>
                                <p>Total <br>Projects</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-contact-box info-box shadow-box">
                        <a class="overlay-link" href="{{route('contact')}}"></a>
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <img src="{{asset('frontend')}}/assets/images/icon2.png" alt="Icon" class="star-icon">
                        <h1>Let's <br>work <span>together.</span></h1>
                        <a href="#" class="about-btn">
                            <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

