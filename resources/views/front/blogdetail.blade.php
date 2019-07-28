@extends('front.index')
@section('content')
<section class="contact-us-list">
    <div class="container-fluid">
        <div class="contact-in">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                    <div class="search-blog">
                        <a href="blog-detail.html">

                            <h3>{{$blog->title}}</h3>
                            <h6>BY {{$blog->auther}} | {{date('d M, Y', strtotime($blog->created_at))}}</h6>
                            <p>{{$blog->description}}</p>
                            {{Html::image($blog->image, '', ['class'=>'img-fluid'])}}
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection