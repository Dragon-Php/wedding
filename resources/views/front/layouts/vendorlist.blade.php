<div class="row">
	@php $i = 0; @endphp
	@foreach($vendors as $vendor)
    @php   
    $profile = $vendor->vendor_profile; 
    $reviews = $vendor->vendor_revews()->get();
    @endphp
    @if($profile != '')
    @php  $i++  @endphp
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="venu-img">
        	 <a href="{{url('Vendor-Detail/'.$vendor->slug)}}">
                {{Html::image($profile->banner, '', ['class'=>'img-fluid'])}}
            </a>
            
            <div class="venu-name">
                <ul>
                    <li>
                        <a style="color: #4a4a4a" href="{{url('Vendor-Detail/'.$vendor->slug)}}">
                            <h5>{{$vendor->name}}</h5>
                        </a>
                    </li>
                    <li><span class="StarRating center rating-5 regular"><i class="fa fa-star margin-r-5"></i>  @if($reviews->count() > 0 ) {{$reviews->avg('rating') }}  @else {{ 0 }} @endif</span>
                        <p> @if($reviews->count() > 0 ) {{ $reviews->count() }} @else {{ 0 }} @endif reviews</p>
                    </li>
                </ul>
                <!-- <ul class="price">
                    <li>
                        <p><i class="fa h6 fa-inr margin-r-5"></i> 1600,50 onwards</p>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    @endif
    @endforeach

    @if($i == 0) <p style="margin-left: 50%;">No vendor found.</p> @endif
    
</div>