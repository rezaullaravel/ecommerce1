@php
$tags=App\Models\Product::groupBy('product_tags')->select('product_tags')->get();
@endphp






<div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
          	@foreach($tags as $tag)
            <div class="tag-list"> 
            	<a class="item active" title="Phone" href="{{route('product.tag',$tag->product_tags)}}">{{ $tag->product_tags}}</a>
            </div>
            @endforeach 

            <!-- /.tag-list -->
          </div>
          
          <!-- /.sidebar-widget-body -->
</div>