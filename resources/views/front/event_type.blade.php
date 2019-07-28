@extends('front.index')
@section('content')
<section class="vendor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="h1">Plan your Event</h1>
                @include('front.layouts.search')

            </div>
        </div>
    </div>
</section>
<section class="vendor-filter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- <form>
                    <ul class="banner-form">
                        <li>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>No of Guests</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Price per Plate</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Venue Type</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Space Preference</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Average Rating</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </form> -->

            </div>
        </div>
    </div>
</section>


<section class="vendor-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-9 col-lg-11 col-xl-11">
                <h2 class="title">{{Html::image($category_->icon, '', ['class'=>'img-fluid', 'width'=>'30'])}} {{$category_->title}}</h2>
            </div>
            <!-- <div class="col-4 col-sm-4 col-md-3 col-lg-1 col-xl-1">
                <a href="{{url('Category/'.$category_->slug)}}" class="view-all">View all</a>
            </div> -->
        </div>
        <div class="category-gallery">
            <div class="row">
            	@php 
					
				@endphp
				@foreach($vendor_types as $vendor_type)
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="venu-img">
                        <a href="{{ url('All-Vendors/'.$vendor_type->slug)}}">
                        {{Html::image($vendor_type->image, '', ['class'=>'img-fluid'])}}
                        </a>    
                        
                        <div class="venu-name">
                            <ul>
                                <li>
                                    <a style="color: #4a4a4a" href="{{ url('All-Vendors/'.$vendor_type->slug)}}">
                                        <h5>{{$vendor_type->title}}</h5>
                                    </a>
                                </li>
                                <li><!-- <span class="StarRating center rating-5 regular"><i class="fa fa-star margin-r-5"></i> 4.9</span>
                                    <p>5 reviews</p> -->
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
                @endforeach
                
            </div>
        </div>
    </div>

</section>


@endsection