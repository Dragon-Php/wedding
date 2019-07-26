@extends('front.index')
@section('content')
<section class="vendor-list vendor-desc-sec">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-9 col-lg-10 col-xl-10">
                <h2 class="title"> {{$vendor_detail->name}}
              </h2>
            </div>
        </div>
        <div class="category-gallery ">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 co-lg-8 col-xl-8 vendor-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="venu-img">
                                {{Html::image($vendor_detail->vendor_profile->banner, '' , ['class'=>'img-fluid'])}}
                                <div class="venu-name">
                                    <ul>
                                        <li>
                                            <h5>{{$vendor_detail->name}}</h5>
                                            <p><i class="fa h6 fa-map-marker"></i>
                                            @if($vendor_detail->vendor_profile->city_id != '') 
                                                {{$vendor_detail->vendor_profile->city->name}},
                                            @endif
                                            @if($vendor_detail->vendor_profile->state_id != '') 
                                                {{$vendor_detail->vendor_profile->state->name}},
                                            @endif
                                            @if($vendor_detail->vendor_profile->country_id != '') 
                                                {{$vendor_detail->vendor_profile->country->name}}
                                            @endif
                                            </p>
                                        </li>
                                        <li><span class="StarRating center rating-5 regular"><i class="fa fa-star margin-r-5"></i> 4.9</span>
                                            <p>5 reviews</p>
                                        </li>
                                    </ul>
                                    <ul class="price">
                                        <li>
                                            <p><i class="fa h6 fa-inr margin-r-5"></i> 1600,50 onwards</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row" style="margin-top: 100px;">
                        <div class="col-md-12" style="">
                            <h3 class="title" >Portfolio</h3>
                            <hr>
                            <div class="">
                                
                                @php $galleries = $vendor_detail->user_portfolio()->get() @endphp
                                <div class="container portfolio" style="margin: 20px 0 20px 0;">

                                    <div class="row">
                                        @foreach($galleries as $gallery)
                                        <div class="col-md-3" style="margin-bottom: 10px">
                                            {{ Html::image($gallery->image, '', ['class'=>'img-responsive', 'width'=>'100%'])}}
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 co-lg-4 col-xl-4 vendor-desc2">
                    <div class="vendor-price">
                        <div class="card">
                            <div class="card-body">
                                {{ Html::image('images/book-venue-shape-5.svg', '', ['class'=>'img-fluid'])}}
                                <h6><span class="pink">Event Wedding</span> has a best price guarantee at this venue</h6>
                                <h6>Call : {{$vendor_detail->contact}}</h6>
                                <h6>View our venue booking service</h6>
                            </div>

                        </div>
                        <div class="card price-starting">
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">

                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0">
                                            Starting Price
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Pricing Info  <i class="fa fa-angle-up h6"></i>

                                            </button>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <h6><i class="fa h6 fa-inr margin-r-5"></i> 1600,50 onwards</h6>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <hr>
    </div>
    <div class="container" style="text-align: left">
        <h3>About {{ $vendor_detail->name}}</h3>
        <hr>
        {!! $vendor_detail->vendor_profile->description!!}
    </div>
    <div class="container" style="text-align: left">
    <hr>
        
        <h3>Reviews</h3>
        <hr>
        <p>All reviews</p>
    </div>
</section>


@endsection