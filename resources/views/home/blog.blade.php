@extends('home.layout.master')
@section('title')
    Blog
@endsection
@section('body')
    <!-- Blog -->
    <section class="projects-area">
        <div class="container">
            <h1 class="section-heading" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> All Blog <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>
            <div class="row">
                <div class="col-md-4">
                    <div data-aos="zoom-in">
                        @foreach($leftblogs as $leftblog)
                        <div class="project-item shadow-box">
                            <a class="overlay-link" href="{{route('blog.details',['id'=>$leftblog->id])}}"></a>
                            <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                            <div class="project-img">
                                <img src="{{asset($leftblog->image)}}" alt="Project">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="project-info">
                                    <p><span>{{$leftblog->creator}}</span>&nbsp &nbsp <span>{{$leftblog->created_at->format("D, d M y")}}</span></p>
                                    <h1>{{$leftblog->blog_title}}</h1>
                                </div>
                                <a  class="project-btn">
                                    <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 class="section-heading m-0" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> All Blog <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>

                    <div class="d-flex align-items-start gap-24">
                        <div class="row">
                            @foreach($rightblogs as $rightblog )
                            <div class="col-md-6 col-sm-12">
                                <div data-aos="zoom-in" class="flex-1">
                                    <div class="project-item shadow-box">
                                        <a class="overlay-link" href="{{route('blog.details',['id'=>$rightblog->id])}}"></a>
                                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                        <div class="project-img">
                                            <img src="{{asset($rightblog->image)}}" alt="Project">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="project-info">
                                                <p><span>{{$leftblog->creator}}</span>&nbsp &nbsp <span>{{$leftblog->created_at->format("D, d M y")}}</span></p>
                                                <h1>{{$leftblog->blog_title}}</h1>
                                            </div>
                                            <a href="work-details.html" class="project-btn">
                                                <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

