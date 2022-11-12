@extends('frontend.master')

@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('frontend.common.sidebar_categories')
        <!-- /.side-menu -->
        <!-- ================================== TOP NAVIGATION : END ================================== -->

        <!-- ============================================== HOT DEALS ============================================== -->
       @include('frontend.common.hot_deals_product')
        <!-- ============================================== HOT DEALS: END ============================================== -->

        <!-- ============================================== SPECIAL OFFER ============================================== -->
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
            <h3 class="section-title">Special Offer</h3>
            <div class="sidebar-widget-body outer-top-xs">
              <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              
                <div class="item">
                  <div class="products special-product">  

                    @foreach($speacialOffers as $special_offer)                                     
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">                              
                              <div class="image"> <a href="#"> <img src=" {{ asset( $special_offer->product_thambnail ) }}"alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="#">{{ $special_offer->product_name }}</a></h3>
                              <div class="rating rateit-small"></div>

                              <div class="product-price"> <span class="price"> {{ $special_offer->discount_price }}</span> </div>

                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro -->                       
                    </div> 

                    @endforeach  {{--  for spical offer --}}
                  </div>
                </div>

              </div>
            </div>
            <!-- /.sidebar-widget-body --> 
          </div>
          <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== -->



        <!-- ============================================== PRODUCT TAGS ============================================== -->
        @include('frontend.common.product_tag')
        <!-- /.sidebar-widget -->
        <!-- ============================================== PRODUCT TAGS : END
         ============================================== -->


        <!-- ============================================== SPECIAL DEALS ============================================== -->

        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Special Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  {{--speacial deals product--}}
                  @foreach($speaciaDeals as $speaciaDeal)
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset($speaciaDeal->product_thambnail)}}"  alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">{{ $speaciaDeal->product_name }}</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> {{ $speaciaDeal->selling_price }} </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  @endforeach
                  {{--speacial deals product end--}}
                  
                  
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== SPECIAL DEALS : END ============================================== -->
        <!-- ============================================== NEWSLETTER ============================================== -->
        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
              </div>
              <button class="btn btn-primary">Subscribe</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== NEWSLETTER: END ============================================== -->

        <!-- ============================================== Testimonials============================================== -->
        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
          <div id="advertisement" class="advertisement">
            <div class="item">
              <div class="avatar"><img src="{{asset('/')}}frontend/assets/images/testimonials/member1.png" alt="Image"></div>
              <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">John Doe <span>Abc Company</span> </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->

            <div class="item">
              <div class="avatar"><img src="{{asset('/')}}frontend/assets/images/testimonials/member3.png" alt="Image"></div>
              <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
            </div>
            <!-- /.item -->

            <div class="item">
              <div class="avatar"><img src="{{asset('/')}}frontend/assets/images/testimonials/member2.png" alt="Image"></div>
              <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->

          </div>
          <!-- /.owl-carousel -->
        </div>

        <!-- ============================================== Testimonials: END ============================================== -->


      </div>
      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->

      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->

        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

            {{-- slider loop --}}
            @foreach($sliders as $slider)

            <div class="item" style="background-image:">
              <img src="{{ $slider->slider_img }}">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"><h2 class="text-success">{{ $slider->title }}</h2></div>
                  
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{ $slider->description }}</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Ecommerce shop</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->
            @endforeach {{-- slider loop end --}}

          {{--  <div class="item" style="background-image: url({{asset('/')}}frontend/assets/images/sliders/02.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Spring 2016</div>
                  <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item --> --}}

          </div>
          <!-- /.owl-carousel -->
        </div>

        <!-- ========================================= SECTION – HERO : END ========================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>
              <!-- .col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.info-boxes-inner -->

        </div>
        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">

          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>

              @foreach($categories as $category)

              <li><a data-transition-type="backSlide" href="#category{{$category->id }}" data-toggle="tab">{{ $category->category_name }}</a></li>
              @endforeach

              
            </ul>
            <!-- /.nav-tabs -->
          </div>

          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                  {{-- product show loop --}}
                  @foreach($products as $product)

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->
                          @php
                          $amount=$product->selling_price-$product->discount_price;
                          $discount=($product->discount_price*100)/$product->selling_price; 
                          @endphp

                          <div>
                            @if($product->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{ route('product.detail',$product->id)  }}">{{$product->product_name  }}</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span>{{$product->discount_price}}</span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->
                  @endforeach {{-- product show loop end --}}

                
                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>

            {{-- categorywise product show --}}
             @foreach($categories as $category)
            <div class="tab-pane " id="category{{$category->id  }}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

               @php
               $catwiseproducts=App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
               @endphp 

                  @foreach($catwiseproducts as $product)

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{asset($product->product_thambnail)}}" alt=""></a> </div>
                          <!-- /.image -->


                          @php
                          $amount=$product->selling_price-$product->discount_price;
                          $discount=($product->discount_price*100)/$product->selling_price; 
                          @endphp

                          <div>
                            @if($product->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>

                          





                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">{{$product->product_name  }}</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price">

                           <p>{{ $product->discount_price }} </p> 

                           <span class="price-before-discount">TK.{{$product->selling_price}}</span> 

                         </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->
                  @endforeach {{-- product show loop end --}}

                
                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>
            @endforeach
            <!-- /.tab-pane -->
            {{-- categorywis product show end --}}

           
            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.scroll-tabs -->
        <!-- ============================================== SCROLL TABS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('/')}}frontend/assets/images/banners/home-banner1.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('/')}}frontend/assets/images/banners/home-banner2.jpg" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.wide-banners -->

        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

















        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

             {{--featured product show--}}
             @foreach($featuredProducts as $featuredProduct)
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  
                  <div class="product-image">
                    <div class="image"> <a href="{{route('product.detail',$featuredProduct->id)}}"><img  src="{{asset($featuredProduct->product_thambnail)}}" alt=""></a> </div>
                    <!-- /.image -->

                  
                    @php
                          $amount=$featuredProduct->selling_price-$featuredProduct->discount_price;
                          $discount = ($featuredProduct->discount_price*100)/$featuredProduct->selling_price; 


                          @endphp

                          <div>
                            @if($featuredProduct->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>
                   

                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{route('product.detail',$featuredProduct->id)}}">{{ $featuredProduct->product_name }}</a></h3>
                   
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> {{ $featuredProduct->discount_price }} TK </span> 
                    <span class="price-before-discount">{{ $featuredProduct->selling_price }} TK</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary icon" 
                            type="button"  onclick="productView(this.id)"  id="{{ $featuredProduct->id }}" title="Add Cart"> 
                             <i class="fa fa-shopping-cart"> </i> </button>
                              </li>
                        {{-- <li class="lnk wishlist"> <button type="button" onclick="addToWishList(this.product_id)" id="{{ $featuredProduct->id }}" class="add-to-cart"  title="Wishlist"> <i class="icon fa fa-heart"></i> </button> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}

                        <button class="btn btn-primary icon" type="button" title="Wishlist" 
                             id="{{ $featuredProduct->id }}"
                             onclick="addToWishList(this.id)">
                              <i class="fa fa-heart"></i> </button>

                               <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" 
                            title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            @endforeach
         
            {{--featured product show end--}}
            <!-- /.item -->

            
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
















        </section>
        <!-- /.section -->
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{asset('/')}}frontend/assets/images/banners/home-banner.jpg" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">New Mens Fashion<br>
                      <span class="shopping-needs">Save up to 40% off</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label -->
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->
        </div>
        <!-- /.wide-banners -->
        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

        <!--$skip_product_0-->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">{{$skip_category_0->category_name}}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

             {{--skip product show--}}
             @foreach($skip_product_0 as $skipProduct)
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  
                  <div class="product-image">
                    <div class="image"> <a href="{{ route('product.detail',$skipProduct->id) }}"><img  src="{{asset($skipProduct->product_thambnail)}}" alt=""></a> </div>
                    <!-- /.image -->

                  
                    @php
                          $amount=$skipProduct->selling_price-$skipProduct->discount_price;
                          $discount = ($skipProduct->discount_price*100)/$skipProduct->selling_price; 


                          @endphp

                          <div>
                            @if($skipProduct->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>
                   

                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{route('product.detail',$skipProduct->id)}}">{{ $skipProduct->product_name }}</a></h3>
                   
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> {{ $skipProduct->discount_price }} TK </span> 
                    <span class="price-before-discount">{{ $skipProduct->selling_price }} TK</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            @endforeach
         
            {{--skip product show end--}}
            <!-- /.item -->

            
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->

        </section>
        <!--$skip_product_0 end-->

        <!--skip_product_2-->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">{{$skip_category_2->category_name}}</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

             {{--skip product show--}}
             @foreach($skip_product_2 as $skipProduct)
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  
                  <div class="product-image">
                    <div class="image"> <a href="{{route('product.detail',$skipProduct->id)}}"><img  src="{{asset($skipProduct->product_thambnail)}}" alt=""></a> </div>
                    <!-- /.image -->

                  
                    @php
                          $amount=$skipProduct->selling_price-$skipProduct->discount_price;
                          $discount = ($skipProduct->discount_price*100)/$skipProduct->selling_price; 


                          @endphp

                          <div>
                            @if($skipProduct->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>
                   

                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{route('product.detail',$skipProduct->id)}}">{{ $skipProduct->product_name }}</a></h3>
                   
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> {{ $skipProduct->discount_price }} TK </span> 
                    <span class="price-before-discount">{{ $skipProduct->selling_price }} TK</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            @endforeach
         
            {{--skip product show end--}}
            <!-- /.item -->

            
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->

        </section>
        <!--skip_product_2 end-->

        <!--skip product brand-->
         <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Product Brand</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

             {{--skip product brand show--}}
             @foreach($skip_brand_product_0 as $skipProduct)
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset($skipProduct->product_thambnail)}}" alt=""></a> </div>
                    <!-- /.image -->

                  
                    @php
                          $amount=$skipProduct->selling_price-$skipProduct->discount_price;
                          $discount = ($skipProduct->discount_price*100)/$skipProduct->selling_price; 


                          @endphp

                          <div>
                            @if($skipProduct->discount_price==NULL)
                            <div class="tag new"><span>No discount</span></div>
                            @else
                            <div class="tag hot"><span>{{round($discount)}}%</span></div>
                            @endif

                          </div>
                   

                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{route('product.detail',$skipProduct->id)}}">{{ $skipProduct->product_name }}</a></h3>
                   
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> {{ $skipProduct->discount_price }} TK </span> 
                    <span class="price-before-discount">{{ $skipProduct->selling_price }} TK</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            @endforeach
         
            {{--skip product brand show end--}}
            <!-- /.item -->

            
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->

        </section>
        <!--skip product brand end-->


































        <!-- ============================================== BEST SELLER ============================================== -->

        <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Best seller</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p20.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p21.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p22.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p23.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p24.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p25.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p26.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{asset('/')}}frontend/assets/images/products/p27.jpg" alt=""> </a> </div>
                            <!-- /.image -->

                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.product-micro-row -->
                    </div>
                    <!-- /.product-micro -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== BEST SELLER : END ============================================== -->

        <!-- ============================================== BLOG SLIDER ============================================== -->

        <!-- /.section -->
        <!-- ============================================== BLOG SLIDER : END ============================================== -->

        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">New Arrivals</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p19.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p28.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p30.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p1.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p2.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{asset('/')}}frontend/assets/images/products/p3.jpg" alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action -->
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->

              </div>
              <!-- /.products -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
        </section>
        <!-- /.section -->
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand1.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand2.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand3.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand4.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand5.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand6.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand2.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand4.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand1.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('/')}}frontend/assets/images/brands/brand5.png" src="{{asset('/')}}frontend/assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider -->
      </div>
      <!-- /.logo-slider-inner -->

    </div>
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div>
  <!-- /.container -->
</div>
@endsection
