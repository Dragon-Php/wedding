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
                        <button class="tablinks {{Route::currentRouteName() == 'user_password' ? 'active':''}}" onclick="window.location.href = '{{route('user_password')}}'">Change password</button>
                        <!--  -->
                        <button class="tablinks {{Route::currentRouteName() == 'user_inbox' ? 'active':''}}" onclick="window.location.href = '{{route('user_inbox')}}'">Inbox</button>
                        <a href="{{ route('user_logout')}}"><button class="tablinks" onclick="openCity(event, 'logout')">Logout</button></a>
                    </div>

                    <div id="London" class="tabcontent {{Route::currentRouteName() == 'user_profile' ? 'active_tabcontent':''}}" >
                      {{ Form::open(['url'=>route('about_user')])}}
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-md-10">
                                <h5>{{$user->name}}</h5>
                                <textarea name="description" class="form-control" placeholder="Write something about yourself">{{ !empty($user->profile) ? $user->profile->description:''}}</textarea>
                                <button class="btn btn-primary" type="submit" style="margin-top: 10px"> Save</button>
                            </div>
                        </div>
                        {{ Form::close()}}
                        
                    </div>

                    <div id="Paris" class="tabcontent {{Route::currentRouteName() == 'user_password' ? 'active_tabcontent':''}}">
                        <h3>Change password</h3>
                        @if(\Session::has('success'))
                        <div class="alert alert-success" role="alert">
                          {{\Session::get('success')}}
                        </div>
                        @endif
                        @if(\Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                          {{\Session::get('error')}}
                        </div>
                        @endif
                        
                        {{ Form::open(['url'=>route('user_password')])}}
                            <div class="password-cls">
                                <p>
                                    <input type="password" name="current_password" class="form-control" placeholder="Enter current password">
                                    @if($errors->first('current_password'))
                                    <font color="red">{{ $errors->first('current_password')}}</font>
                                    @endif
                                </p>
                                <p>
                                    <input type="password" name="password" class="form-control" placeholder="Enter new password">
                                    @if($errors->first('password'))
                                    <font color="red">{{ $errors->first('password')}}</font>
                                    @endif
                                </p>
                                <p>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter new password">
                                    @if($errors->first('password_confirmation'))
                                    <font color="red">{{ $errors->first('password_confirmation')}}</font>
                                    @endif
                                </p>

                                <p>
                                    <button class="btn btn-primary">Update</button>
                                </p>
                            </div>
                        {{ Form::close()}}
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
@endsection 