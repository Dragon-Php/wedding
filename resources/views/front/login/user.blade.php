<div class="modal-content" id="vendor-div">

    <div class="modal-body">
        <div class="img-form">
            <img src="images/user-auth.png">
        </div>
        <div class="login-form">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    "A dream without a plan is just a wish"
                </h5>
                <h6 class="modal-sub-title" id="exampleModalCenterTitle">
                    Sign In to start planning your Dream Wedding!
                </h6>

            </div>
            <form>
                <button type="button" class="facebook-login white center margin-t-20 radius h5 metro">Continue with Facebook</button>
                <p class="text-center">We are not going to post anything without your permission</p>
                <hr class="hr-text">

                <span class="signup-div">
                    <div class="form-group"> 
                        <input type="email" class="form-control" placeholder="Email*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" value="FakePSW" id="myInput" placeholder="password*">
                        <input type="checkbox" onclick="myFunction()">
                        <label for="show"></label>
                    </div>
                    <a href="profile-info.html" class="custom-button">Sign In</a>
                    <ul class="signin-text">
                        <li><span class="text-left">Forgot Password?</span></li>
                        <li><span class="text-right">New to Wedding event?<a id="new-signup">Sign up</a></span></li>
                    </ul>

                </span>

                <span class="new-signup-div" style="display: none;">
                    <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Name*">
                    </div>

                    <div class="form-group"> 
                        <input type="number" class="form-control" placeholder="Enter your mobile number*">
                    </div>

                    <div class="form-group"> 
                        <input type="email" class="form-control" placeholder="Email*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" value="FakePSW" id="myInput" placeholder="password*">
                        <input type="checkbox" onclick="myFunction()">
                        <label for="show"></label>

                    <a href="profile-info.html" class="custom-button">Sign In</a>
                    <ul class="signin-text">
                        <li>
                            <span class="text-left">Forgot Password?</span>
                        </li>
                        <li>
                            <span class="text-right">New to Wedding event? 
                                <a id="signup">Sign up</a>
                            </span>
                        </li>
                    </ul>

                    </div>

                </span>
                <div class="profile-btn">
                    <span>Are you a vendor?
                        <button type="button" class="btn btn-primary" id="customer-login">
                            Business Sign In
                        </button>
                    </span>

                </div>

            </form>
        </div>
    </div>

</div>