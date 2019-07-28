<footer>
    <div class="container-fluid">
        <div class="footer-in">
            <div class="row">
                <div class="col-6 col-sm-3 col-md-3 co-lg-3 col-xl-3">
                    <h5>About us</h5>
                    <p>
                        {{\App\Master\Page::where('id', '2')->first()->short_description}}
                    </p>
                </div>

                <div class="col-6 col-sm-3 col-md-3 co-lg-3 col-xl-3">
                    <h5>Site map</h5>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('aboutus')}}">About us</a>
                        </li>
                        <li>
                            <a href="{{route('contactus')}}">Contact us</a>
                        </li>
                        <li>
                            <a href="{{route('categories')}}">Categories</a>
                        </li>

                        <li>
                            <a href="{{route('privacypolicy')}}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-3 col-md-3 co-lg-3 col-xl-3">
                    <h5>Site map</h5>
                </div>
                <div class="col-12 col-sm-3 col-md-3 co-lg-3 col-xl-3">
                    <h5>Contact us</h5>
                    <address>
        <ul>
          <li class="address"> {{\App\Master\Setting::where('key', 'address')->first()->value}}  </li>
          <li class="mail"> <a href="">{{\App\Master\Setting::where('key', 'contact_email')->first()->value}}</a>  </li>
          <li class="phone"> {{\App\Master\Setting::where('key', 'contact_number')->first()->value}}  </li>
          <li class="social">Follow us on :  <a href="{{\App\Master\Setting::where('key', 'fb_share_link')->first()->value}}" target="_blank" class="margin-r-10 v-center" style="color:#3b5998"><i class="fa fa-facebook h6"></i></a> 
            <a href="{{\App\Master\Setting::where('key', 'ln_share_link')->first()->value}}" target="_blank" class="margin-r-10 v-center" style="color:#55acee"><i class="fa fa-linkedin h6"></i></a>
            <a href="{{\App\Master\Setting::where('key', 'tw_share_link')->first()->value}}" target="_blank" class="margin-r-10 v-center" style="color:#55acee"><i class="fa fa-twitter h6"></i></a>
          </li>
        </ul>

      </address>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright">
        <p>{{\App\Master\Setting::where('key', 'copyright')->first()->value}} </p>
    </div>
</footer>
