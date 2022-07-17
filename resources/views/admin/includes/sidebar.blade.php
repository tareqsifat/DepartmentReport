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
    
    @if (Auth::check() && Auth::user()->role_id ==1) 
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
                    <a href="{{ route('admin_user_role_index') }}">
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

