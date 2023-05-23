@extends('home.layout.master')
@section('title')
    Contact
@endsection
@section('body')
    <!-- Contact -->
    <section class="contact-area">
        <div class="container">
            <div class="gx-row d-flex justify-content-between gap-24">
                <div class="contact-infos">
                    <h3 data-aos="fade-up">Contact Info</h3>
                    <ul class="contact-details">
                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="{{$contact->icon_1}}"></i>
                            </div>
                            <div class="right">
                                <span>Email us</span>
                                <h4>{{$contact->email_1}}</h4>
                                <h4>{{$contact->email_2}}</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="{{$contact->icon_2}}"></i>
                            </div>
                            <div class="right">
                                <span>Contact Us</span>
                                <h4>{{$contact->num_1}}</h4>
                                <h4>{{$contact->num_2}}</h4>
                            </div>
                        </li>

                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="icon-box shadow-box">
                                <i class="{{$contact->icon_3}}"></i>
                            </div>
                            <div class="right">
                                <span>Location</span>
                                <h4>{{$contact->location_1}}</h4>
                            </div>
                        </li>
                    </ul>

                    <h3 data-aos="fade-up">Social Info</h3>
                    <ul class="social-links d-flex align-center" data-aos="zoom-in">
                        @foreach($socialMedias as $socialMedia)
                        <li><a class="shadow-box" href="{{$socialMedia->link}}"><i class="{{$socialMedia->icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>

                <div data-aos="zoom-in" class="contact-form">
                    <div class="shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <img src="{{asset('frontend')}}/assets/images/icon3.png" alt="Icon">
                        <h1>Let’s work <span>together.</span></h1>
                        <form method="POST" action="{{route('sent.mail')}}">@csrf
                            <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="input-group">
                                <input type="text" name="name" id="full-name" placeholder="Name *">
                            </div>
                            <div class="input-group">
                                <input type="email" name="email" id="email" placeholder="Email *">
                            </div>
                            <div class="input-group">
                                <input type="text" name="subject" id="subject" placeholder="Your Subject *">
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Your Message *"></textarea>
                            </div>
                            <div class="input-group">
                                <button class="theme-btn submit-btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
