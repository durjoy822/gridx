<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            @php $AdminInfo = \App\Models\adminProfileInfo::where('admin_id', Auth()->guard('admin')->user()->id)->first(); @endphp
            @if($AdminInfo->admin_photo!=null)
            <img src="{{asset($AdminInfo->admin_photo)}}" class="rounded-circle user-photo" alt="User Profile Picture">
            @else
            <img src="{{asset('backend')}}/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            @endif
                <div class="dropdown">
                <span>Welcome,</span>
                @if($AdminInfo->first_name||$AdminInfo->last_name !=null)
                    <a href="javascript:void(0);"class="user-name" data-toggle=""><strong>{{$AdminInfo->first_name}} {{$AdminInfo->last_name}}</strong></a>
                @else
                    <a href="javascript:void(0);"class="user-name" data-toggle=""><strong>{{Auth::guard('admin')->user()->name}} (Auth Name)</strong></a>
                    @endif
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="fa fa-cog"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"><i class="fa fa-home"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="hr">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                        </li>
                        <li>
                            <a href="#Payroll" class="has-arrow"><i class="fa fa-credit-card"></i><span>Working Expricence</span></a>
                            <ul>
                                <li><a href="{{route('experience.index')}}">List</a></li>
                                <li><a href="{{route('experience.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class="icon-graduation mr-2" style="font-size: 20px"></i><span>Educational Qualifi.  </span></a>
                            <ul>
                                <li><a href="{{route('education.index')}}">list</a></li>
                                <li><a href="{{route('education.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class="icon-social-dropbox mr-2" style="font-size: 20px"></i><span>Project</span></a>
                            <ul>
                                <li><a href="{{route('project.index')}}">list</a></li>
                                <li><a href="{{route('project.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class="icon-social-dropbox mr-2" style="font-size: 20px"></i><span>Work</span></a>
                            <ul>
                                <li><a href="{{route('work.home')}}">list</a></li>
                                <li><a href="">Add</a></li>
                            </ul>
                        <li>
                            <a href="#Report" class="has-arrow"><i class="icon-notebook mr-2" style="font-size: 20px"></i><span>Blog</span></a>
                            <ul>
                                <li><a href="{{route('blog.index')}}">list</a></li>
                                <li><a href="{{route('blog.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class=" icon-layers mr-2" style="font-size: 20px"></i><span> Service Offering</span></a>
                            <ul>
                                <li><a href="{{route('offer.index')}}">list</a></li>
                                <li><a href="{{route('offer.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class="icon-users mr-2" style="font-size: 20px" ></i><span> Client Review</span></a>
                            <ul>
                                <li><a href="{{route('client.index')}}">list</a></li>
                                <li><a href="{{route('client.add')}}">Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Report" class="has-arrow"><i class=" icon-settings mr-2" style="font-size: 20px"></i><span>Table</span></a>
                            <ul>
                                <li><a href="{{route('social.index')}}">Social Media link</a></li>
                                <li><a href="{{route('contact.index')}}">Contact</a></li>
                                <li><a href="{{route('skill.index')}}">Skill</a></li>
                                <li><a href="{{route('subscriber.index')}}">Subscriber/Newsleter</a></li>
                                <li><a href="{{route('slider.index')}}">Slider</a></li>
                                <li><a href="{{route('cv.index')}}">Upload (CV/PDF)</a></li>
                                <li><a href="{{route('logo.index')}}">Logo/icon/ footer info</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-user"></i>Users</a></li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple"><div class="purple"></div></li>
                    <li data-theme="blue"><div class="blue"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="red"><div class="red"></div></li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>

                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Allowed Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
