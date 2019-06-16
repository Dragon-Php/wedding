@extends('front.index')
@section('content')
<section class="home-banner">
    <img src="images/homebanner.jpg" class="img-fluid">
</section>
<section class="category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title">Find Vendors At Every Budget</h2>
                <span class="sub-title">Photographers, venues, makeup artists & more at your budget & style.</span>
            </div>
        </div>
        <div class="category-gallery">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-6 col-sm-3 col-md-3 co-lg-3 col-xl-3" style="margin-bottom: 15px">
                    <div class="category-img">
                        {{ Html::image($category->image, '', ['class'=>'img-fluid'])}}
                        <div class="category-name">
                            <h5><a href="{{ url('Category/'.$category->slug)}}">{{$category->title}}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="button" class="custom-button" onclick="window.location='#';" value="Browse all Categories">
            </div>
        </div>
    </div>
    </div>

</section>
<section class="browse-category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title">Browse Real Weddings</h2>
            </div>
        </div>
        <div class="category-gallery">
            <div class="row">
                <div class="col-12 col-sm-4 col=md-4 col=lg-4 col-xl-4">
                    <div class="category-img">
                        <img src="images/browse-1.jpg" class="img-fluid">
                        <div class="category-name">
                            <h6><a href=""><a href=""><a href="">Here is my experience of buying my sabyasachi lahenga !</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col=md-4 col=lg-4 col-xl-4">
                    <div class="category-img">
                        <img src="images/browse-2.jpg" class="img-fluid">
                        <div class="category-name">
                            <h6><a href=""><a href=""><a href="">Here is my experience of buying my sabyasachi lahenga !</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col=md-4 col=lg-4 col-xl-4">
                    <div class="category-img">
                        <img src="images/browse-1.jpg" class="img-fluid">
                        <div class="category-name">
                            <h6><a href=""><a href=""><a href="">Here is my experience of buying my sabyasachi lahenga !</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="button" class="custom-button" onclick="window.location='#';" value="Browse all Categories">
            </div>
        </div>
    </div>
    </div>

</section>
<section class="contact-us">
    <div class="container-fluid">
        <div class="category-gallery">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="contact-desc">
                        <div class="contact-heading">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="title">Get WedMeGood on your smartphone</h2>
                                    <h6>Explore wedding ideas | Get wedding checklist | Shortlist Vendors</h6>
                                </div>
                            </div>
                        </div>
                        <p>You will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for free</p>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="contact-heading">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Mobile No.">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" class="custom-button" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection