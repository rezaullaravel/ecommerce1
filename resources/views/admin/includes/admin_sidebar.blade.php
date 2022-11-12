 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('admin.dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{asset('/')}}backend/images/logo-dark.png" alt="">
						  <h3><b>Ecommerce</b> Project</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="{{ route('admin.dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brnads</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('view.all.brands')}}"><i class="ti-more"></i>All Brands</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('view.categories')}}"><i class="ti-more"></i>All Category</a></li>

             <li><a href="{{route('view.subcategories')}}"><i class="ti-more"></i>All Subcategory</a></li>

              <li><a href="{{route('view.subsubcategories')}}"><i class="ti-more"></i>All Subsubcategory</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('product.add')}}"><i class="ti-more"></i>Add product</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage.slider') }}"><i class="ti-more"></i>Manage slider</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('view.all.coupons')}}"><i class="ti-more"></i>All Coupons</a></li>

          </ul>
        </li>





      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
