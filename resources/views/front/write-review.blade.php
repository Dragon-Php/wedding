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
    </div>
</section>
<section class="review ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                <!-- <div class="review-form shadow" data-toggle="modal" data-target="#exampleModalCenter"> -->
                <div class="review-form shadow" >
                    <form>

                        <div class="form-group">
                            <label>Select Venor*</label>
                            <input type="text" class="form-control" placeholder="Type vendor name*">
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-8 col-md-8 col-xl-8 col-lg-8">
                                <div class="form-group">

                                    <label for="exampleInputPassword1">Rate Vendor*</label>
                                    <ul class="vender-type">
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                        <li>
                                            <input type="text" class="form-control">
                                        </li>
                                    </ul>
                                </div>
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
                            <textarea class="form-control" placeholder="Tell us about your experience*"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="How much did you spend on this vendor*">
                        </div>
                        <input type="submit" class="photos-button" value="Add Photos">
                        <input type="submit" class="custom-button" value="Submit Review">

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection