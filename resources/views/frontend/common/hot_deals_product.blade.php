 <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">hot deals</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            {{--hot deals product loop--}}
            @php
            $hotdealsProducts=App\Models\Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->limit(6)->get();
            @endphp
            @foreach($hotdealsProducts as $hotdealsProduct)
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> <img src="{{asset($hotdealsProduct->product_thambnail)}}" alt=""> </div>

                  {{--<div class="sale-offer-tag"><span>49%<br>
                    off</span></div>--}}
                    @php
                          $amount=$hotdealsProduct->selling_price-$hotdealsProduct->discount_price;
                          $discount = ($hotdealsProduct->discount_price*100)/$hotdealsProduct->selling_price; 


                          @endphp

                          <div class="sale-offer-tag">
                            @if($hotdealsProduct->discount_price==NULL)
                            <span>No discount</span>
                            @else
                            <span>{{round($discount)}}%<br>off</span>
                            @endif

                          </div>


                  <div class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper hidden-md">
                      <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->

                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detail.html">{{ $hotdealsProduct->product_name }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="product-price"> <span class="price"> {{ $hotdealsProduct->discount_price }} TK </span> 
                  <span class="price-before-discount">{{ $hotdealsProduct->	selling_price }} TK</span> </div>
                  <!-- /.product-price -->

                </div>
                <!-- /.product-info -->

                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                      <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </div>
                  </div>
                  <!-- /.action -->
                </div>
                <!-- /.cart -->
              </div>
            </div>
            @endforeach
            {{--hot deals product loop end--}}
            
            
          </div>
          <!-- /.sidebar-widget -->
        </div>