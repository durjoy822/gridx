@extends('home.layout.master')
@section('title')
    service
@endsection
@section('body')
<!-- Service -->
<section class="service-area">
    <div class="container">
        <h1 class="section-heading" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> My Offerings <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>

        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="service-sidebar" data-aos="fade-right">
                    <div class="service-sidebar-inner shadow-box">
                        <ul>
                            @foreach($services as $service)
                            <li>
                                <i class="{{$service->icon}}" style="font-size: 35px"></i>
                                @if($service->category==1)
                                    Development
                                @elseif($service->category==2)
                                    Web Designing
                                @elseif($service->category==3)
                                    Client Satisfaction
                                @elseif($service->category==4)
                                    Punctuality
                                @elseif($service->category==5)
                                    Graphics Design
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-8">
                <h1 class="section-heading" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> My Offerings <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>

                <div class="service-content-wrap" data-aos="zoom-in">
                    <div class="service-content-inner shadow-box">
                        <div class="service-items">
                            @foreach($services as $service)
                            <div class="service-item">
                                <h3>
                                    @if($service->category==1)
                                        Development
                                    @elseif($service->category==2)
                                        Web Designing
                                    @elseif($service->category==3)
                                        Client Satisfaction
                                    @elseif($service->category==4)
                                        Punctuality
                                    @elseif($service->category==5)
                                        Graphics Design
                                    @endif
                                </h3>
                                <p>{{$service->service_details}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
