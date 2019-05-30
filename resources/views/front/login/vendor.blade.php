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
                <span class="customer-signup">
                    <div class="form-group"> 
                        <input type="email" class="form-control" placeholder="Email*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" value="FakePSW" id="myInput" placeholder="password*">
                        <input type="checkbox" onclick="myFunction()">
                        <label for="show"></label>
                    </div>
                    <input type="submit" class="custom-button" value="Sign In" style="background-color: #0069d9;">
                    <ul class="signin-text">
                        <li>
                            <span class="text-left">Forgot Password?</span>
                        </li>
                        <li>
                            <span class="text-right">New to Wedding event? 
                                <button id="customer-new-signup">Sign up</button>
                            </span>
                        </li>
                    </ul>

                </span>
                <span class="customer-new-signup" style="display: none;">
                    <div class="form-group"> 
                        <input type="text" class="form-control" placeholder="Brand name*">
                    </div>
                    <div class="form-group"> 
                        <input type="text" Autocomplete id="searchTextField" class="form-control" placeholder="City (choose your base city here)*">
                    </div>
                    <div class="form-group"> 
                        <select class="form-control">
                            <option>Select vendor type*</option>
                            <option>Select vendor type</option>
                            <option>Select vendor type</option>
                            <option>Select vendor type</option>
                        </select>
                    </div>

                    <div class="form-group"> 
                        <input type="email" class="form-control" placeholder="Email*">
                    </div>
                    <div class="form-group"> 
                        <input type="number" class="form-control" placeholder="Enter your mobile number*">
                    </div>

                    <div class="form-group show-pw-div"> 
                        <input type="password" class="form-control" value="FakePSW" id="myInput" placeholder="password*">
                        <input type="checkbox" onclick="myFunction()">
                        <label for="show"></label>
                    </div>
                    <input type="submit" class="custom-button" value="Sign In" style="background-color: #0069d9;">
                    <ul class="signin-text">
                        <li><span class="text-left">Forgot Password?</span></li>
                        <li><span class="text-right">New to Wedding event? <button id="customer-signup">Sign up</button></span></li>
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