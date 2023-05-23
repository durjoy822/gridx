@php $logo = \App\Models\Logo::where('status',1)->first(); @endphp
<footer class="footer-area">
    <div class="container">
        <div class="footer-content text-center">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset($logo->image)}}" style="height: 50px" alt="Logo">
            </a>
            <ul class="footer-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('skill')}}">Skill</a></li>
                <li><a href="{{route('client')}}">Client</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <p class="copyright">
                &copy; All rights reserved by <span>{{$logo->name}}</span>
            </p>
        </div>
    </div>
</footer>
