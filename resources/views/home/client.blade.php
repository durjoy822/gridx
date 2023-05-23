@extends('home.layout.master')
@section('title')
    client
@endsection
@section('body')
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            /*background: linear-gradient(to bottom, #000428, #004683);*/
            animation: background-color 20s;
            min-height: 100vh;
        }

        /*@keyframes background-color {*/
        /*    0% {*/
        /*        background: linear-gradient(to bottom, #000428, #004683);*/
        /*    }*/

        /*    25% {*/
        /*        background: linear-gradient(135deg, #1a4223, #5ee95e);*/
        /*    }*/

        /*    50% {*/
        /*        background: linear-gradient(to bottom, #421a31, #e95ed2);*/
        /*    }*/

        /*    100% {*/
        /*        background: linear-gradient(-135deg, #fae37d, #881da8, #20668f);*/
        /*    }*/

        }

        .container {
            margin-top: 80px;
        }

        .container .col-lg-4 {
            display: flex;
            justify-content: center;
        }

        .card {
            width: 300px;
            height: 300px;
            transform-style: preserve-3d;
            perspective: 500px;
            border: none;
            background-color: inherit;
        }

        .card .face {
            position: absolute;
            color: #fff;
            width: 100%;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.06);
            transform-style: preserve-3d;
            transition: 0.5s;
            backface-visibility: hidden;
            border-top: 1px solid #ddd;
            border-left: 1px solid #ddd;
            /* border-right: 1px solid #999;
        border-bottom: 1px solid #999; */
        }

        .card .face.front-face,
        .card .face.back-face {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card .face.front-face .profile {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card .face.front-face .name {
            letter-spacing: 2px;
        }

        .card .face.front-face .designation {
            font-size: 0.8rem;
            color: #ddd;
            letter-spacing: 0.8px;
        }

        .card:hover .face.front-face {
            transform: rotateY(180deg);
        }

        .card .face.back-face {
            position: absolute;
            background: rgba(255, 255, 255, 0.06);
            transform: rotateY(180deg);
            padding: 20px 30px;
            text-align: center;
            user-select: none;
        }

        .card .face.back-face .fa-quote-left {
            position: absolute;
            top: 25px;
            left: 25px;
            font-size: 1.2rem;
        }

        .card .face.back-face .fa-quote-right {
            position: absolute;
            bottom: 35px;
            right: 25px;
            font-size: 1.2rem;
        }

        .card:hover .face.back-face {
            transform: rotateY(360deg);
        }

        @media(max-width: 991.5px) {
            .col-lg-4 {
                margin-top: 40px;
                margin-bottom: 20px;
            }
        }
    </style>
    <section id="our-testimonial" class="padding ">
        <div class="container" id="our-testimonial">
            <div class="row">
                @foreach($clients as $client)
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="card">
                        <div class="face front-face">
                            <img src="{{asset($client->image)}}"
                                 alt="" class="profile">
                            <div class="pt-3 text-uppercase name">
                                {{$client->name}}
                            </div>
                            <div class="designation">{{$client->working_dep}}</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial">
                               {{$client->review}}
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection


