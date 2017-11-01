<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                @forelse (config('admin.menus') as $key => $data)
                @php
                    if(!Auth::user()->isLevel([$data->level])) continue;
                @endphp
                <li {{ count($data->submenu) ? '"class="has_sub"' : "" }}>
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="{{ $data->icon }}"></i> <span> {{ $data->name }} </span>
                     @if (count($data->submenu))
                     <span class="menu-arrow"></span>
                     @endif
                     </a>
                    @if (count($data->submenu))
                    <ul class="list-unstyled">
                        @foreach ($data->submenu as $key => $menuChild)
                        @php
                            if(!Auth::user()->isLevel([$menuChild->level])) continue;
                        @endphp
                            <li><a href="{{ $menuChild->uri }}">{{ $menuChild->name }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @empty
                    <li>
                        <a href="#">No data</a>
                    </li>
                @endforelse
                

                <li class="menu-title">More</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary">
                        <i class="md md-settings"></i>
                        <span> Settings </span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="mail-inbox.html">Inbox</a></li>
                        <li><a href="mail-compose.html">Compose Mail</a></li>
                        <li><a href="mail-read.html">View Mail</a></li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="user-detail">
        <div class="dropup">
            <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                <img  src="/uploads/avatar/{{ Auth::user()->avatar }}" alt="user-img" class="img-circle">
                <span class="user-info-span">
                    <h5 class="m-t-0 m-b-0">{{ Auth::user()->name }}</h5>
                    <p class="text-muted m-b-0">
                        <small><i class="fa fa-circle text-success"></i> <span>Online</span></small>
                    </p>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
            </ul>

        </div>
    </div>
</div>
