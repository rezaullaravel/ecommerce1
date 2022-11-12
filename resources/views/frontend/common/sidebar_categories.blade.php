<div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              {{-- category loop --}}
              @foreach($categories as $category)
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="{{ $category->category_icon }}" aria-hidden="true"></i>{{$category->category_name  }}</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">

                      <div class="col-sm-12 col-md-3">

                         @php
                          $subcategories=App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();
                          @endphp

                          {{-- subcategory loop --}}
                          @foreach($subcategories as $subcategory)
                        <ul class="links list-unstyled">
                          <li><a href="{{ route('subcatwise.product',$subcategory->id) }}">{{ $subcategory->subcategory_name }}</a></li>
                          
                        </ul>
                        @endforeach {{-- subcategory loop end --}}
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col -->
                     
                      <!-- /.col -->
                      
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              @endforeach {{-- category loop end --}}

             
            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>