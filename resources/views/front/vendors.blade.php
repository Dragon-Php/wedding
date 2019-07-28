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
                <h2 class="title">{{Html::image($vendortype->icon, '', ['class'=>'img-fluid', 'width'=>'30'])}} {{$vendortype->title}}</h2>
            </div>
            <!-- <div class="col-4 col-sm-4 col-md-3 col-lg-1 col-xl-1">
                <a href="{{url('Category/'.$vendortype->slug)}}" class="view-all">View all</a>
            </div> -->
        </div>
        <div class="category-gallery vendor_list">
            @include('front.layouts.vendorlist')
        </div>
    </div>

</section>


@endsection