@extends('home.layout.master')
@section('title')
    skill
@endsection
@section('body')
    <!-- Contact -->
    <section class="contact-area">
        <div class="container">
            <div class="gx-row d-flex justify-content-between gap-24">
                <div class="contact-infos">
                    <h3 data-aos="fade-up">Skilled Category</h3>
                    <ul class="contact-details">
                        <li class="d-flex align-items-center" data-aos="zoom-in">
                            <div class="right">
                                @foreach($skills as $skill)
                                <h3 style="margin-bottom: 10px"><i class="{{$skill->icon}}" style="margin-right: 10px"></i>{{$skill->name}}</h3>
                                @endforeach
                            </div>
                        </li>
                    </ul>

                    <h3 data-aos="fade-up" style="margin-bottom: 5px">Subscribe Now </h3>
                    <h2>Get My <span class="text-primary">Newsletter</span> </h2>
                    <ul class="social-links d-flex align-center" data-aos="zoom-in">
                        <form action="{{route('subscriber.store')}}" method="post">
                            @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="full-name" placeholder="Inter Your Email">
                            <button type="submit" class=" btn btn-warning ">Send Now</button>
                            <div class="text-danger">@error('email'){{$message}} @enderror</div>
                        </div>
                        </form>
                    </ul>
                </div>

                <div data-aos="zoom-in" class="contact-form">
                    <div class="shadow-box">
                        <img src="{{asset('frontend')}}/assets/images/bg1.png" alt="BG" class="bg-img">
                        <img src="{{asset('frontend')}}/assets/images/icon3.png" alt="Icon">
                        <h1>Skill Categoy <span> Chart</span></h1>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{--Pi chart--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


    <script>
        var xValues = [];
        var yValues = [];
        var barColors = [];

        @foreach ($chartData as $data)
        xValues.push("{{ $data->name }}");
        yValues.push({{ $data->skill_percentage }});
        barColors.push("{{ $data->chart_color }}");
        @endforeach

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                    display: true,
                    text: "Skill chart percentage"
                }
            }
        });
    </script>








    {{--    <script>--}}
{{--        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];--}}
{{--        var yValues = [55, 49, 44, 24, 15];--}}
{{--        var barColors = ["red", "green","blue","orange","brown"];--}}

{{--        new Chart("myChart", {--}}
{{--            type: "bar",--}}
{{--            data: {--}}
{{--                labels: xValues,--}}
{{--                datasets: [{--}}
{{--                    backgroundColor: barColors,--}}
{{--                    data: yValues--}}
{{--                }]--}}
{{--            },--}}
{{--            options: {--}}
{{--                legend: {display: false},--}}
{{--                title: {--}}
{{--                    display: true,--}}
{{--                    text: "Skill chart percentage "--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

@endsection


