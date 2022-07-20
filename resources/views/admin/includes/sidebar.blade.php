<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Monthly Report</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Report Form</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i> Skilled Manpower List</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>CSE/IT Studing</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Branch Team Members</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Branch Resource List</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Archive</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Add to archive</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>archive list</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Notice Board</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Add to Notice</a>
            </li>
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Notice list</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Important Document</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Document list</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Notification</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Notification List</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Message</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Message list</a>
            </li>
        </ul>
    </li>

    @if (Auth::check() && Auth::user()->role_id==1) 
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User Management</div> 
            </a>      
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li> 
                <li>
                    <a href="{{ route('admin_user_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> User Role</a>
                </li> 
            </ul>
        </li>
    @endif

    
    

<li class="menu-label">Extra</li>
        <li>
            <a href="/", target="_blank">
                <div class="parent-icon">
                    <i class="zmdi zmdi-globe"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>


        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  confirm('Sure! You want to Logout!!') && document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class="fa fa-sign-out"></i>
                </div>
                <div class="menu-title">logout</div>
            </a>
        </li>

