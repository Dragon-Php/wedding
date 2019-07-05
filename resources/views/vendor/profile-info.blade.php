@extends('front.index')
@section('content')
<style type="text/css">
    .tabcontent {
        display: none;
    } 
    .active_tabcontent {
        display: block;
    }
</style>
<section class="contact-us-list">
    <div class="container-fluid" style="margin-top: 48px;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="title"> Vendor Info</h2>
            </div>
        </div>
        <div class="contact-in">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">
                    <div class="tab">
                        <button class="tablinks {{Route::currentRouteName() == 'user_profile' ? 'active':''}}" onclick="window.location.href = '{{route('user_profile')}}'" id="defaultOpen">User info</button>
                        <button class="tablinks {{Route::currentRouteName() == 'album' ? 'active':''}}" onclick="window.location.href = '{{route('album')}}'">Album</button>
                        <!--  -->
                        
                        <a href="{{ route('vendor_logout')}}"><button class="tablinks" onclick="openCity(event, 'logout')">Logout</button></a>
                    </div>

                    <div id="London" class="tabcontent {{Route::currentRouteName() == 'vendor_profile' ? 'active_tabcontent':''}}" >
                      {{ Form::open(['url'=>route('vendor_profile')])}}
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-md-10">
                                <h5>{{$user->name}}</h5>
                                <div class="form-group">
                                    <select class="form-control" name="country_id" onchange="getState(this.value)">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control states" name="state_id" onchange="getCity(this.value)">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control cities" name="city_id">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="address" class="form-control"  placeholder="Enter full address"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4>Adout yourself : </h4>
                                    <textarea name="description" class="form-control" placeholder="Write something about yourself">{{ !empty($user->profile) ? $user->profile->description:''}}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit" style="margin-top: 10px"> Save</button>
                            </div>
                        </div>
                        {{ Form::close()}}
                        
                    </div>

                    <div id="Paris" class="tabcontent {{Route::currentRouteName() == 'album' ? 'active_tabcontent':''}}">
                        <h3>Album</h3>
                        {{ Form::open(['url'=>route('album')])}}
                            <div class="">
                                <div class="form-inline">
                                    <input type="text" class="form-control" name="album">
                                    <button class="btn btn-primary" type="submit" style="margin-left: 10px"> Add</button>
                                </div>
                                @if($errors->first('album'))
                                <font color="red">{{$errors->first('album')}}</font>
                                @endif
                            </div>
                        {{ Form::close()}}
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($albums as $album)
                                <tr>
                                    <td>{{$album->title}}</td>
                                    <td><a href="{{url('Vendor/Album-Delete/'.$album->id)}}"><i class="fa fa-times" style="font-size: 25px;color: #ce2c2c;"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div id="Tokyo" class="tabcontent {{Route::currentRouteName() == 'user_inbox' ? 'active_tabcontent':''}}">
                        <h3>Inbox</h3>
                        <p>
                            <textarea class="form-control" placeholder="message"></textarea>
                        </p>
                    </div>
                  

                    <script>
                        
                    </script>

                </div>

            </div>
        </div>
    </div>

</section>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection 