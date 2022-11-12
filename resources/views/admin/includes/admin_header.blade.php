<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
					<li class="btn-group nav-item">
						<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
							<i class="nav-link-icon mdi mdi-menu"></i>
					    </a>
					</li>
      </ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>
		  <!-- Notifications -->


	      <!-- User Account-->
          <li class="dropdown user user-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="{{Session::get('name')}}">
				<img src="{{asset('/')}}backend/images/avatar/avatar-13.png" alt="">


			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">
				 <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="{{ route('admin.password.change') }}"><i class="ti-wallet text-muted mr-2"></i> Change Password</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>

				 <form method="POST" action="{{ route('logout') }}">
                                @csrf
				 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="ti-lock text-muted mr-2"></i> Logout</a>
         </form>
			  </li>
			</ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>
