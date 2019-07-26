@extends('front.index')
@section('content')
<style type="text/css">
    .tabcontent {
        display: none;
    } 
    .active_tabcontent {
        display: block;
    }
    .remove_gallery {
        font-size: 20px !important;  
        color: #b51919;
        position: absolute;
        top: 0;
        right: 0;
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
                        <button class="tablinks {{Route::currentRouteName() == 'vendor_profile' ? 'active':''}}" onclick="window.location.href = '{{route('vendor_profile')}}'" id="defaultOpen">Vendor info</button>
                        <button class="tablinks {{Route::currentRouteName() == 'album' ? 'active':''}}" onclick="window.location.href = '{{route('album')}}'">Album</button>

                        <button class="tablinks {{Route::currentRouteName() == 'gallery' ? 'active':''}}" onclick="window.location.href = '{{route('gallery')}}'">Gallery</button>
                        <!--  -->
                        
                        <a href="{{ route('vendor_logout')}}"><button class="tablinks" onclick="openCity(event, 'logout')">Logout</button></a>
                    </div>

                    @php
                    $country_id  = $state_id  = $city_id  = $address  = $description = $banner = '';
                    $states =  $cities = [];
                    if($profile != ''){
                        $country_id  = $profile->country_id;
                        $state_id  = $profile->state_id;
                        $city_id  = $profile->city_id;
                        $address  = $profile->address;
                        $banner  = $profile->banner;
                        $description  = $profile->description;
                        $states = \App\Master\State::where('country_id', $country_id)->get();
                        $cities = \App\Master\City::where('state_id', $state_id)->get();
                    }
                    @endphp


                    <div id="Profile" class="tabcontent {{Route::currentRouteName() == 'vendor_profile' ? 'active_tabcontent':''}}" >
                      {{ Form::open(['url'=>route('vendor_profile'), 'files'=>true])}}
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
                                        <option {{ $country_id == $country->id ? 'selected="1"':''}} value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control states" name="state_id" onchange="getCity(this.value)">
                                        <option value="">Select State</option>
                                        @if(!empty($state_id))
                                        @foreach($states as $state)
                                        <option {{ $state_id == $state->id ? 'selected="1"':''}} value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control cities" name="city_id">
                                        <option value="">Select City</option>
                                        @if(!empty($city_id))
                                        @foreach($cities as $city)
                                        <option {{ $city_id == $city->id ? 'selected="1"':''}} value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="banner">
                                    @if($banner != '')
                                    {{ Html::image($banner, '', ['class'=>'img-responsive', 'width'=>'200'])}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="address" class="form-control"  placeholder="Enter full address">{{ $address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <h4>Adout yourself : </h4>
                                    <textarea name="description" class="form-control" placeholder="Write something about yourself">{{ $description }}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit" style="margin-top: 10px"> Save</button>
                            </div>
                        </div>
                        {{ Form::close()}}
                        
                    </div>

                    <div id="Album" class="tabcontent {{Route::currentRouteName() == 'album' ? 'active_tabcontent':''}}">
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

                    <div id="Gallery" class="tabcontent {{Route::currentRouteName() == 'gallery' ? 'active_tabcontent':''}}">
                        <h3>Gallery</h3>
                        {{ Form::open(['url'=>route('gallery'),  'files' => true])}}
                            <div class="form-group">
                                <label><b>Event Type : </b></label>
                                <select name="vendor_type_id" class="form-control">
                                    <option value="">Select Vendor type.</option>
                                    @foreach($vendor_types as $vendor_type)
                                    <option value="{{$vendor_type->id}}">{{$vendor_type->title}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('vendor_type_id'))
                                <font color="red">{{$errors->first('vendor_type_id')}}</font>
                                @endif
                            </div>

                            <div class="form-group">
                                <label><b>Album : </b></label>
                                <select name="album_id" class="form-control">
                                    <option value="">Select album.</option>
                                    @foreach($albums as $album)
                                    <option value="{{$album->id}}">{{$album->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label><b>Images : </b></label>
                                <input type="file" name="images[]" multiple="1">
                                @if($errors->first('images'))
                                <font color="red">{{$errors->first('images')}}</font>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary"> Add</button>
                        {{ Form::close()}}

                        <div class="container portfolio" style="margin-top: 20px">

                            <div class="row">
                                @foreach($galleries as $gallery)
                                <div class="col-md-3" style="margin-bottom: 10px">
                                    {{ Html::image($gallery->image, '', ['class'=>'img-responsive', 'width'=>'100%'])}}
                                    <a onclick="remove_gallery({{$gallery->id}})" =""><i class="fa fa-times remove_gallery"></i></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
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

<script type="text/javascript">
    
    function remove_gallery(gallery_id){
        if(gallery_id != ''){
            $.ajax({
                url : '{{url("Vendor/Gallery-Delete")}}/'+gallery_id,
                success : function(result){
                    alert('Gallery deleted successfully');
                    $('.portfolio').html(result);
                }
            });
        }
    }
</script>
@endsection 