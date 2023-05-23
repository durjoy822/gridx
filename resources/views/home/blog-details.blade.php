@extends('home.layout.master')
@section('title')
    Blog-Details
@endsection
@section('body')


<!-- Breadcrumb -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content" data-aos="fade-up">
            <p>HOME -- BLOG--BLOG DETAIlS</p>
            <h1 class="section-heading"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> Blog Details <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>
        </div>
    </div>
</section>


<!-- Blog Details -->
<section class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details-content">
                    <div class="img-box">
                        <img src="{{asset(asset($blogDetails->image))}}" alt="Blog" >
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar">
                    <div class="blog-sidebar-inner">
                        <div class="blog-sidebar-widget categories-widget" data-aos="zoom-in">
                            <div class="blog-sidebar-widget-inner shadow-box">
                                <h3>Post Analysis</h3>

                                <ul>
                                    <li><a>Post Creator:&nbsp &nbsp  {{$blogDetails->creator}} </a></li>
                                    <li><a>Total viewer: &nbsp  0</a></li>
                                    <li><a>Posted Date: &nbsp &nbsp{{$blogDetails->created_at->format("D, d M y")}}</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h1>{{$blogDetails->blog_title}}</h1>
                <p>{!!$blogDetails->details!!}</p>
            </div>
        </div>
</section>
@endsection
