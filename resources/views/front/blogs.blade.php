@extends('front.index')
@section('content')
<div class="blog-head">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                <div class="blog-div about-div">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                            <div class="blog-post">
                                <a href="#">{{Html::image($blog_second->image,'',['class'=>'img-fluid'])}}</a>
                                <div class="blog-title">
                                    <h2> {{$blog_first->short_description}} </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                            <div class="blog-post">
                                <a href="#">{{Html::image($blog_second->image,'',['class'=>'img-fluid'])}}</a>
                                <div class="blog-title">
                                    <h2> {{$blog_second->short_description}} </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<section class="contact-us-list">
    <div class="container-fluid">
        <div class="contact-in">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-12 col-sm-4 col-md-4 co-lg-4 col-xl-4">
                    <div class="search-blog">
                        <a href="{{url('Blog-Detail/'.$blog->id)}}">
                            {{ Html::image($blog->image, '', ['class'=>'img-fluid'])}}
                            <h3>{{ $blog->title}}</h3>
                            <h6>BY {{ $blog->auther}} | {{ date('d M, Y', strtotime($blog->created_at))}}</h6>
                            <p>{{ $blog->short_description}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>

</section>
@endsection