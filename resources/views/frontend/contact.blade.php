@extends('frontend.layouts.master')
@section('content')
    <div class="tf-section-2 widget-box-icon " style="padding-top:15px;">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section-1">
                        <h1 class="tf-title pb-20">Contact Us</h1>
                        <p class="pb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/address.png" alt="">
                        <div class="title"><a href="#">Office address</a></div>
                        <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                    </div>
                </div>
                <div data-wow-delay="0.1s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/email.png" alt="">
                        <div class="title"><a href="#">Email</a></div>
                        <p>open9@support.com</p>
                    </div>
                </div>
                <div data-wow-delay="0.2s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/phone.png" alt="">
                        <div class="title"><a href="#">Phone number</a></div>
                        <p>(316) 555-0116</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-section-2 widget-box-icon">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section-1">
                        <h2 class="tf-title pb-20">Contact us</h2>
                        <p class="pb-40">Have A Question? Need Help? Don't Hesitate, Drop Us A Line</p>
                    </div>
                </div>
                <div class="col-12 m-auto">
                    <form id="commentform" class="comment-form">
                        <div class="flex gap30">
                            <fieldset class="name">
                                <input class="style-1" type="text" id="name" placeholder="Your name*" name="name"
                                    tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="email">
                                <input class="style-1" type="email" id="email" placeholder="Email address*"
                                    name="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="subject">
                                <input class="style-1" type="text" id="number" placeholder="Number" name="number"
                                    tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <fieldset class="message">
                            <textarea class="style-1" id="message" name="message" rows="4" placeholder="Your message*" tabindex="4"
                                aria-required="true" required=""></textarea>
                        </fieldset>
                        <div class="btn-submit m-auto">
                            <button class="tf-button style-1 m-auto" type="submit">Send message <i
                                    class="icon-arrow-up-right2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
