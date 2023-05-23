
<header class="header-area">
    <div class="container">
        <div class="gx-row d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo">
                @php $logo = \App\Models\Logo::where('status',1)->first(); @endphp
                <img src="{{asset($logo->image)}}" style="height: 50px" alt="Logo">
            </a>

            <nav class="navbar">
                <ul class="menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('skill')}}">Skill</a></li>
                    <li><a href="{{route('client')}}">Client</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
                @if(isset($cvDownload->file))
                    <a href="http://localhost/gridx/public/{{$cvDownload->file}}" class="theme-btn">Download Cv</a>
                @else
                    <a href="#" class="theme-btn">Download Cv</a>
                @endif
            </nav>
            @if(isset($cvDownload->file))
                <a href="http://localhost/gridx/public/{{$cvDownload->file}}" class="theme-btn">Download Cv</a>
            @else
            <a href="#" class="theme-btn">Download Cv</a>
            @endif
            <div class="show-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

