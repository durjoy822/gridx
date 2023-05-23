@extends('home.layout.master')
@section('title')
    Work
@endsection
@section('body')
    <!-- Projects -->
    <section class="projects-area">
        <div class="container">
            <h1 class="section-heading" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> All Projects <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>
{{--            <div class="text-center d-block d-sm-none " style="margin-bottom:5px">--}}
{{--                <button class=" btn btn-sm btn-info filters__button--items button is-checked mt-2"data-filter="*"> <span>All </span></button>&nbsp &nbsp--}}
{{--                <button class="btn btn-sm btn-info filters__button--items button mt-2" data-filter=".blog"> <span>Blog </span></button>&nbsp &nbsp--}}
{{--                <button class="btn btn-sm btn-info filters__button--items button mt-2" data-filter=".e_commerce"> <span>E-commerce </span></button>&nbsp &nbsp--}}
{{--                <button class="btn btn-sm btn-info filters__button--items button mt-2" data-filter=".management"> <span>Management App</span></button>&nbsp &nbsp--}}
{{--                <button class="btn btn-sm btn-info filters__button--items button mt-2" data-filter=".other"> <span>Other</span></button>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-md-4">
                    @foreach($leftprojects as $leftproject)
                    <div data-aos="zoom-in">
                        <div class="project-item shadow-box">
                            <a class="overlay-link" href="{{$leftproject->server_link}}"></a>
                            <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                            <div class="project-img">
                                <img src="{{asset($leftproject->image)}}" class="h-25" alt="Project">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="project-info">
                                    <p> Category &nbsp
                                        @if($leftproject->category==1)
                                            blog
                                        @elseif($leftproject->category==2)
                                            E-commerce
                                        @elseif($leftproject->category==3)
                                            Management App
                                        @elseif($leftproject->category==4)
                                            Other
                                        @endif
                                    </p>
                                    <h1>{{$leftproject->project_name}}</h1>
                                </div>
                                <a  class="project-btn">
                                    <img src="{{asset('frontend')}}/assets/images/icon.svg" alt="Button">
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-8">
                    <h1 class="section-heading m-0" data-aos="fade-up"><img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"> All Projects <img src="{{asset('frontend')}}/assets/images/star-2.png" alt="Star"></h1>

{{--                    <div class="text-center mb-5 d-none d-sm-block d-xs-block">--}}
{{--                       <button class=" btn btn-sm btn-info filters__button--items button is-checked"data-filter="*"> <span>All </span></button>&nbsp &nbsp--}}
{{--                       <button class="btn btn-sm btn-info filters__button--items button" data-filter=".blog"> <span>Blog </span></button>&nbsp &nbsp--}}
{{--                       <button class="btn btn-sm btn-info filters__button--items button" data-filter=".e_commerce"> <span>E-commerce </span></button>&nbsp &nbsp--}}
{{--                       <button class="btn btn-sm btn-info filters__button--items button" data-filter=".management"> <span>Management App</span></button>&nbsp &nbsp--}}
{{--                       <button class="btn btn-sm btn-info filters__button--items button" data-filter=".other"> <span>Other</span></button>--}}
{{--                    </div>--}}
                    <div class="d-flex align-items-start gap-24">
                        <div class="row">
                            @foreach($rightprojects as $rightproject)
                        <div class="col-md-6 col-sm-12">
                        <div data-aos="zoom-in" class="flex-1 blog" data-category="blog">
                            <div class="project-item shadow-box">
                                <a class="overlay-link" href="{{$rightproject->server_link}}"></a>
                                <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                                <div class="project-img">
                                    <img src="{{asset($rightproject->image)}}"  class="h-25"  alt="Project">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="project-info">
                                        <p>  Category &nbsp
                                            @if($rightproject->category==1)
                                                blog
                                            @elseif($rightproject->category==2)
                                                E-commerce
                                            @elseif($rightproject->category==3)
                                                Management App
                                            @elseif($rightproject->category==4)
                                                Other
                                            @endif
                                        </p>
                                        <h1>{{$rightproject->project_name}}</h1>
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
