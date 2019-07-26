@extends('front.index')
@section('content')
<section class="contact-us-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="title"> Contact Us</h2>
            </div>

        </div>
        <div class="contact-in">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                    <div class="contact-div">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary custom-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 co-lg-6 col-xl-6">
                    <div class="contact-div contact-div2">
                        <h2>Vendors</h2>
                        <p>If you are a registered vendor or a business looking to promote your brand on our portal, please send in your queries at vendors@wedmegood.com</p>
                        <hr>
                        <h2>Marketing Collaborations</h2>
                        <p>For brand collaborations - sponsored content, social media activations etc., please write into partnerships@wedmegood.com</p>
                        <hr>
                        <h2>Wedding Submissions</h2>
                        <p>WedMeGood features wedding across cultures, styles and budgets. To submit your wedding, kindly email us 15-20 photos at submissions@wedmegood.com</p>
                        <hr>
                        <h2>Careers</h2>
                        <p>We are a team of passionate young minds looking to reinvent the wedding space. Please check our careers page for current openings and email us at hr@wedmegood.com</p>
                        <hr>
                        <h2>Customers</h2>
                        <p>We love to hear from our precious users. For any feedback or queries simply write in to info@wedmegood.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection