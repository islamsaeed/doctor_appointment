@extends('site.layouts.app') @section('content')

<div class="page-wrapper">


    <section class="comming-soon" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">
            <div class="content">
                <div class="content-inner">
                    <h2>Comming Soon</h2>
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2019/11/17"></div>
                    </div>
                    <div class="text">Website is under construction. We'll be here soon with new <br> awesome site,
                        Subscribe to be notified.</div>
                    <!--Emailed Form-->
                    <div class="emailed-form">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn">Submit now</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
<!--End pagewrapper-->
@endsection
