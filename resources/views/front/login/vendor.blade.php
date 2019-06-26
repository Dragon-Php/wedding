<div class="modal-content" id="customer-div" style="display: none;">
    <div class="modal-body">
        <div class="img-form">
            <img src="images/user-auth2.png">
        </div>
        <div class="login-form">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalCenterTitle">"A dream without a plan is just a wish"</h5>
                <h6 class="modal-sub-title" id="exampleModalCenterTitle">Sign In to access your Dashboard</h6>

            </div>
            <form>
                <span class="customer-signup vendor_login" data-url="{{ route('vendor_login')}}">
                    <div class="vendor_loginsuccess"></div>
                    <div class="form-group"> 
                        <input type="email" id="vendorloginemail" class="form-control" placeholder="Email*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" id="vendorloginpassword" placeholder="password*">
                        <input type="checkbox" onclick="showVendorLoginPassword()">
                        <label for="show"></label>
                    </div>
                    <a type="submit" class="custom-button vendorlogin" style="background-color: #0069d9;">Sign In</a>
                    <ul class="signin-text">
                        <li>
                            <span class="text-left">Forgot Password?</span>
                        </li>
                        <li>
                            <span class="text-right">New to Wedding event? 
                                <a id="customer-new-signup">Sign up</a>
                            </span>
                        </li>
                    </ul>

                </span>
                <span class="customer-new-signup vendor_signup" data-url="{{ route('vendor_register')}}"  style="display: none;">
                    <div class="vendor_regsuccess"></div>
                    <div class="form-group"> 
                        <input type="text" class="form-control" id="brand_name" placeholder="Brand name*">
                    </div>
                    <div class="form-group"> 
                        <input type="text" Autocomplete id="vendor_city" class="form-control" placeholder="City (choose your base city here)*">
                    </div>
                    @php

                    $vendor_type = \App\Master\VendorType::all()->pluck('title', 'id');
                    @endphp
                    <div class="form-group"> 
                        {{ Form::select('vendor_type[]', $vendor_type, '',['class'=>'form-control', 'placeholder'=>'Select Category', 'multiple'=>'multiple', 'style'=>'height:100px', 'id'=>'vendor_cateory'])}}
                    </div>

                    <div class="form-group"> 
                        <input type="email" class="form-control" id="vendor_reg_email" placeholder="Email*">
                    </div>
                    <div class="form-group"> 
                        <input type="number" class="form-control" id="vendor_reg_mobile" placeholder="Enter your mobile number*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" value="" id="vendorregpassword" placeholder="password*">
                        <input type="checkbox" onclick="showVendorRegPassword()">
                        <label for="show"></label>
                    </div>
                    <a type="submit" class="custom-button" id="vendor_signup" style="background-color: #0069d9;">Sign Up</a>
                    <ul class="signin-text">
                        <li><span class="text-left">Forgot Password?</span></li>
                        <li><span class="text-right">New to Wedding event? <a id="customer-signup">Sign in</a></span></li>
                    </ul>

                </span>
                <div class="profile-btn" id="customer-height">
                    <span>Are you a Customer?
                        <button type="button" class="btn btn-primary" id="vendor-login" style="    background-color: #951B4A;">
                        Customer Sign In
                        </button>
                    </span>

                </div>
            </form>
        </div>
    </div>

</div>