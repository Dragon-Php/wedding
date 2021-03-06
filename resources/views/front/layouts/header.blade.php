<header>
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <!--<p> India's Favourite  Wedding Planning Platform</p>-->
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <p class="text-right">
                        @auth('web')
                        {{ Html::image('images/review-icon.png', '', ['class'=>'img-fluid'])}}<a href="{{route('write-review')}}" style="color: #fff;"> Write A Review</a>
                        @else
                            @auth('vendor')
                            @else
                                {{ Html::image('images/review-icon.png', '', ['class'=>'img-fluid'])}}<a href="#" style="color: #fff;" data-toggle="modal" data-target="#exampleModalCenter"> Write A Review</a>
                            @endauth
                        @endauth
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="nevigation">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}">Wedding Event</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('categories')}}">Categories <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Venu</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blogs</a>
                    </li>

                </ul>
                <ul class="nav-right">
                    <li>
                        <form>
                            <div class="form-group">
                                <select class="form-control" id="">
                                    <option>Language</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                </select>
                            </div>
                        </form>
                    </li>
                    @guest('web')
                        @guest('vendor')
                        <li class="nav-item">

                            <a class="nav-link" href="#">
                                <input type="button" value="Login" data-toggle="modal" data-target="#exampleModalCenter">
                            </a>
                        </li>
                        @endguest
                    @endguest

                    
                    
                    @auth('vendor')
                    <li class="nav-item">

                        <a class="nav-link btn"  href="{{route('vendor_profile')}}">
                            <input type="button" value="Profile">
                        </a>
                    </li>
                    <!-- <li class="nav-item">

                        <a class="nav-link btn"  href="{{route('vendor_logout')}}">
                            <input type="button" value="Logout">
                        </a>
                    </li> -->
                    @endauth
                    @auth('web')

                    <li class="nav-item">

                        <a class="nav-link btn"  href="{{route('user_profile')}}">
                            <input type="button" value="Profile">
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link btn"  href="{{route('user_logout')}}">
                            <input type="button" value="Logout">
                        </a>
                    </li> -->
                    @endauth


                </ul>
            </div>
        </nav>
    </div>
</header>