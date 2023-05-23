<style>
    .dropdown {
        display: inline-block;
        position: relative;
    }
    button{
        border:none;
        background: #59c4bc;
        border-radius:5px;
        padding:7px 10px;
        font-size:18px;
        cursor:pointer;
    }
    button:hover{
        background-color:#ddd;
    }
    .dropdown-options {
        display: none;
        position: absolute;
        overflow: auto;
        background-color:#fff;
        border-radius:5px;
        box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
    }
    .dropdown:hover .dropdown-options {
        display: block;
    }
    .dropdown-options a {
        display: block;
        color: #000000;
        padding: 5px;
        text-decoration: none;
        padding:10px 30px;
    }
    .dropdown-options a:hover {
        color: #0a0a23;
        background-color: #ddd;
        border-radius:5px;
    }
</style>

<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-brand">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
            <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
            @php $logo = \App\Models\Logo::where('status',1)->first(); @endphp
        @isset($logo->image)
            <a href="{{route('dashboard')}}"><img src="{{asset($logo->image)}}" style="height:35px"></a>
            @endisset

        </div>

        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <div class="dropdown">
                        <button> <i class="icon-settings pr-2px"></i> <span>Setting</span></button>
                        <div class="dropdown-options">
                            <a href="{{route('dashboard')}}"><i class="icon-home" style="margin-right: 2px"></i><span>Dashboard</span></a>
                            <a href="{{route('profile.index')}}"><i class="icon-user" style="margin-right: 2px"></i><span>Profile</span></a>
                            <a href="{{route('logout')}}"> <i class="fa fa-power-off"></i> <span>Logout</span></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
