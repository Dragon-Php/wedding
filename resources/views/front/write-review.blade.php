@extends('front.index')
@section('content')
<section class="review shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                <h1 class="title">Write a Review for your Wedding Vendors</h1>
                <p>Had a great experience with your wedding photographer? Or the food at the venue left you disappointed? Please tell us your experience below. Your reviews help other engaged couples in making informed decisions.</p>
            </div>
        </div>
        @if(session()->get('error'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button> {{ session()->get('error')}}
        </div>
        @endif
        @if(session()->get('success'))
        <div class="alert alert-success">
            <button class="close" data-close="alert"></button> {{ session()->get('success')}}
        </div>
        @endif
    </div>
</section>
<section class="review ">
    <style type="text/css">
        .form-group {
            text-align: left;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">

                <!-- <div class="review-form shadow" data-toggle="modal" data-target="#exampleModalCenter"> -->
                <div class="review-form shadow" >
                    
                    {{Form::open(['url'=>route('write-review'), 'id'=>'review-form', 'files'=>true])}}

                        <div class="form-group">
                            <label>Select Venor*</label>
                            <input type="text" class="form-control" name="vendor" placeholder="Type vendor name*">
                            @if($errors->first('vendor_id'))
                                <font color="red">{{$errors->first('vendor_id')}}</font>
                            @endif
                            <div class="row vendor_rate_list" data-url="{{url('api/allvendors')}}" >
                                <div class="col-md-12 vendor_content_list"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-8 col-md-8 col-xl-8 col-lg-8">
                                <div class="form-group">

                                    <label for="exampleInputPassword1">Rate Vendor*</label>
                                    <ul class="vender-type rating">
                                        @for($i = 1; $i < 11; $i++)
                                        <li>
                                            <input type="text" data-value="{{$i}}" class="form-control review_{{$i}}">
                                        </li>
                                        @endfor
                                        <li><span class="rate_me"></span></li>
                                        @if($errors->first('rate'))
                                            <font color="red">{{$errors->first('rate')}}</font>
                                        @endif
                                    </ul>
                                </div>
                                <input type="hidden" name="rate">
                                <input type="hidden" name="vendor_id">
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Share on Facebook</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Tell us about your experience*"></textarea>
                            @if($errors->first('description'))
                                <font color="red">{{$errors->first('description')}}</font>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="text" name="amount" class="form-control" placeholder="How much did you spend on this vendor*">
                            @if($errors->first('amount'))
                                <font color="red">{{$errors->first('amount')}}</font>
                            @endif
                        </div>
                        <input type="file" name="photo" style="display: none">
                        @if($errors->first('photo'))
                            <font color="red">{{$errors->first('photo')}}</font>
                        @endif
                        <input type="button" class="photos-button" value="Add Photos">
                        <input type="submit" class="custom-button" value="Submit Review">

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

{{ Html::script('js/review.js')}}
@endsection