@extends('site.layouts.app')
@section('content')
<div class="page-wrapper">


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Checkout</h1>
            <div class="text">What We Actually Do?</div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li><span class="fa fa-inbox"></span>Returning customer? <a href="#">Click here to login</a></li>
            </ul>

            <!--Login Section-->
            <section class="login-section style-two">
                <div class="inner-container">

                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="contact.html">
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Username Or Email*</label>
                                    <input type="text" name="username" placeholder="" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="txt">Login</span></button>
                                </div>

                                <div class="form-group no-margin col-lg-12 col-md-12 col-sm-12">
                                    <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label
                                        for="account-option-1"> Remember me</label>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <a href="#" class="psw">Lost your password?</a>
                                </div>

                            </div>

                        </form>

                    </div>
                    <!--End Login Form -->

                </div>

            </section>
            <!--End Login  Section-->

            <!--Default Links-->
            <ul class="default-links">
                <li><span class="fa fa-inbox"></span>Have a coupone? <a href="#">Click here to enter your code</a></li>
            </ul>

            <!--Coupon Box-->
            <div class="coupon-box">

                <!--Coupon Form-->
                <div class="coupon-form">
                    <form method="post" action="contact.html">
                        <div class="row clearfix">

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="username" placeholder="" required>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="txt">apply coupon</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Coupon Box-->

            <!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="checkout.html">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="checkout-title">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select class="custom-select-box">
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                    <input type="text" name="field-name" value=""
                                        placeholder="Apartment,suite,unit etc. (optional)">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="check-box"><input type="checkbox" name="shipping-option"
                                            id="account-option"> &ensp; <label for="account-option">Create An
                                            Account?</label></div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="text">Create an account by entering the information below. if you are a
                                        returning custoer please login at the top of the page.</div>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label"><strong>Account Password</strong></div>
                                    <input type="password" name="field-name" value="" placeholder="Password">
                                </div>

                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="checkout-title">
                                <h2>Ship to a different address?</h2>
                            </div>

                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                    <select class="custom-select-box">
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                    <input type="text" name="field-name" value=""
                                        placeholder="Apartment,suite,unit etc. (optional)">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Other Notes</div>
                                    <textarea class=""
                                        placeholder="Notes about your order,e.g. special notes for delivery."></textarea>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->

            <!--Order Box-->
            <div class="order-box">
                <h2>YOUR ORDER</h2>
                <div class="title-box clearfix">
                    <div class="col">PRODUCT</div>
                    <div class="col">TOTAL</div>
                </div>
                <ul>
                    <li class="clearfix"><strong>Patient Ninjas <i class="fa fa-times"></i>
                            1</strong><span>$35.00</span></li>
                    <li class="clearfix">SUBTOTAL<span>$35.00</span></li>
                    <li class="clearfix">SHIPPING<span class="free">Free Shipping</span></li>
                    <li class="clearfix">TOTAL<span>$35.00</span></li>
                </ul>
            </div>
            <!--End Order Box-->

            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">

                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong><span
                                            class="small-text">Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order won’t be shipped
                                            until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make
                                            your payment directly into our bank account. Please use your Order ID as the
                                            payment reference. Your order won’t be shipped until the funds have cleared
                                            in our account.</span></label>
                                </div>
                            </li>

                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span
                                            class="small-text">Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order won’t be shipped
                                            until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-4">
                                    <label for="payment-4"><strong>PayPal</strong><span class="image"><img
                                                src="images/resource/paypal.jpg" alt="" /></span></label>
                                    <a href="#" class="what-paypall">What is PayPal?</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="lower-box text-right">
                    <a href="#" class="theme-btn btn-style-one"><span class="txt">place order</span></a>
                </div>
            </div>
            <!--End Payment Box-->

        </div>
    </div>
    <!--End CheckOut Page-->

    <!--Main Footer-->
    <footer class="main-footer style-two">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo-3.png" alt="" /></a>
                                    </div>
                                    <div class="text">Meditech is a library of health and medical templates with
                                        predefined web elements which helps you to build your medical templates best
                                        site Provide Comprehensive Quality Care About Medical Care Health Suspendisse
                                        metus
                                        turpis.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>Departments</h2>
                                        <div class="separator"></div>
                                    </div>
                                    <ul class="footer-list">
                                        <li><a href="#">Surgery & Radiology</a></li>
                                        <li><a href="#">Family Medicine</a></li>
                                        <li><a href="#">Women’s Health</a></li>
                                        <li><a href="#">Optician</a></li>
                                        <li><a href="#">Pediatrics</a></li>
                                        <li><a href="#">Dermatology</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>News Update</h2>
                                        <div class="separator"></div>
                                    </div>

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-1.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a>
                                            </h3>
                                            <div class="post-date">July 11, 2017</div>
                                        </div>
                                    </div>

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="images/resource/news-image-2.jpg" alt="" />
                                            </div>
                                            <h3><a href="blog-detail.html">Achieving Better Health Care One Patient
                                                    Time</a></h3>
                                            <div class="post-date">July 11, 2018</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <div class="footer-title  clearfix">
                                        <h2>Contact Us</h2>
                                        <div class="separator"></div>
                                    </div>

                                    <ul class="contact-list">
                                        <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San Diego
                                            <br> CA 94117-1080 USA</li>
                                        <li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br> <a
                                                href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
                                        <li><span class="icon flaticon-message"></span>Do you have a Question? <a
                                                href="mailto:info@gmail.com">info@gmail.com</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
            </div>
        </div>

    </footer>

</div>

@endsection
<!--End pagewrapper-->
