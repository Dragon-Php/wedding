@extends('front.index')
@section('content')
<section class="contact-us-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="title"> {{$page_content->title}}</h2>
            </div>

        </div>
        <div class="contact-in">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                    <div class="contact-div">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary custom-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                    <div class="contact-div contact-div2">
                        {!!$page_content->description!!}
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection