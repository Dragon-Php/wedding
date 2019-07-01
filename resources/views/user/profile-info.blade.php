@extends('front.index')
@section('content')
<section class="contact-us-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="title"> User Info</h2>
            </div>

        </div>
        <div class="contact-in">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 co-lg-12 col-xl-12">

                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">User info</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Change password</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Inbox</button>
                        <a href="{{ route('user_logout')}}"><button class="tablinks" onclick="openCity(event, 'logout')">Logout</button></a>
                    </div>

                    <div id="London" class="tabcontent">
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

                    <div id="Paris" class="tabcontent">
                        <h3>Change password</h3>
                        <form>
                            <div class="password-cls">
                                <p>
                                    <input type="password" class="form-control" placeholder="Enter current password">
                                </p>
                                <p>
                                    <input type="password" class="form-control" placeholder="Re-Enter current password">
                                </p>
                                <p>
                                    <input type="password" class="form-control" placeholder="Enter new password">
                                </p>

                                <p>
                                    <button class="btn btn-primary">Update</button>
                                </p>
                            </div>
                        </form>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <h3>Inbox</h3>
                        <p>
                            <textarea class="form-control" placeholder="message"></textarea>
                        </p>
                    </div>
                   <!--  <div id="logout" class="tabcontent">

                        <p>
                            <a href="dsfkjgfndkj">ldkfmnsld</a>
                        </p>
                    </div> -->

                    <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }

                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                    </script>

                </div>

            </div>
        </div>
    </div>

</section>
@endsection 