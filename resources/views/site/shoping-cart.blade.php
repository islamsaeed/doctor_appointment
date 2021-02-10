@extends('site.layouts.app')
@section('content')
<div class="page-wrapper">

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Shoping Cart</h1>
            <div class="text">What We Actually Do?</div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
                <li>Cart</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img
                                                    src="images/resource/products/11.jpg" alt=""></a></figure>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="prod-title">Patient Ninja</h4>
                                </td>
                                <td class="sub-total">$35.00</td>
                                <td class="qty">
                                    <div class="item-quantity style-two"><input class="quantity-spinner" type="text"
                                            value="2" name="quantity"></div>
                                </td>
                                <td class="total">$35.00</td>
                                <td><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="theme-btn cart-btn btn-style-four">UPDATE CART</button>
                    </div>

                </div>

                <div class="row clearfix">

                    <div class="column pull-left col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="shipping-block">
                            <div class="inner-box">
                                <h3>Shipping Free Shipping</h3>
                                <h4><a href="#">Calculate Shipping</a></h4>

                                <!-- Shipping Form -->
                                <div class="shipping-form">
                                    <!--Shipping Form-->
                                    <form method="post" action="shop.html">
                                        <div class="form-group">
                                            <select>
                                                <option>Pakistan</option>
                                                <option>USA</option>
                                                <option>China</option>
                                                <option>Germany</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" placeholder="State / county" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" placeholder="Postcode / ZIP" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-style-one" type="submit"
                                                name="submit-form"><span class="txt">UPDATE TOTALS</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column pull-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li>
                                <h3>Cart Totals</h3>
                            </li>
                            <li class="clearfix total"><span class="col">Sub Total</span><span
                                    class="col price">$35.00</span></li>
                            <li class="clearfix total"><span class="col">Total</span><span
                                    class="col price">$35.00</span></li>
                            <li class="text-right"><button type="submit"
                                    class="theme-btn btn-style-four proceed-btn">Proceed to Checkout</button></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Cart Section-->

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
                                        metus turpis.</div>
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
<!--End pagewrapper-->
@endsection
