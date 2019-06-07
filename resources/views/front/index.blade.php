<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding</title>
    {{ Html::style('css/bootstrap.min.css')}}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}
    {{ Html::style('css/style.css')}}
    {{ Html::style('css/responsive.css')}}
    {{ Html::script('js/jquery.min.js')}}
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#seach-box").hide("slide");
            });
            $("#show").click(function() {
                $("#seach-box").show("slow");
            });
        });
    </script>
    <meta name="__token" data-value="{{ csrf_token()}}" >

</head>

<body>
    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    {{ Html::script('js/bootstrap.min.js')}}

    <!------------------------ search section ------------------------------->

    <section class="" id="seach-box" style="display: none;">
        <button id="hide">X</button>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="h1 ">Your Wedding, Your Way</h1>
                    <h2 class="h6 margin-t-10 ">Find the best wedding vendors with thousands of trusted reviews</h2>
                    <form>
                        <ul class="banner-form">
                            <li>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Vender Type</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>City</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Contry</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Search</button>
                                </div>
                            </li>
                        </ul>
                    </form>
                    <p class="text-center">Popular Searches: Wedding Photographers in IndiaBridal Makeup in IndiaWedding Cards in IndiaWedding Venues in India</p>
                </div>
            </div>
        </div>

    </section>

    <!------------------------- login form ------------------------->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            

            <!-- ---------------------- customer signin----------- -->


            @include('front.login.user')
            <!-- ---------------------- Vendor signin----------- -->
            {{-- @include('front.login.vendor') --}}

        </div>
    </div>

    <a href="#top" class="back-top"><i class="fas fa-angle-up"></i></a>
    <!-- ------------ customer login-------------- -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#new-signup").click(function() {
                $("span.signup-div").hide();
                $("span.new-signup-div").show();
            });
            
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#signup").click(function() {
                $("span.new-signup-div").hide();
            });
            $("#signup").click(function() {
                $("span.signup-div").show();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#customer-new-signup").click(function() {
                $("span.customer-signup").hide();
            });
            $("#customer-new-signup").click(function() {
                $("span.customer-new-signup").show();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#customer-signup").click(function() {
                $("span.customer-new-signup").hide();
            });
            $("#customer-signup").click(function() {
                $("span.customer-signup").show();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#customer-login").click(function() {
                $("#vendor-div").hide();
            });
            $("#customer-login").click(function() {
                $("#customer-div").show();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#vendor-login").click(function() {
                $("#customer-div").hide();
            });
            $("#vendor-login").click(function() {
                $("#vendor-div").show();
            });
        });
    </script>

    <script>
        function showUserLoginPassword() {
            var x = document.getElementById("userloginpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function showUserRegPassword() {
            var x = document.getElementById("userregpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    {{ Html::script('js/user.js')}}

</body>

</html>