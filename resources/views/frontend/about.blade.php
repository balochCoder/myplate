@extends('frontend.layouts.master')
@section('content')
    <div class="flat-pages-title" style="padding:30px 0">
        <div class="themesflat-container w1490">
            <div class="row">
                <div class="col-12 pages-title">
                    <div class="content" style="padding-bottom:0">
                        <h1 data-wow-delay="0s" class="wow fadeInUp">About Us</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.1s" style="font-size:18px;">UAE’s premier marketplace for
                            buying and selling custom number plates.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-title about-us relative" style="padding:30px 0">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-12 pages-title">
                    <div class="relative">
                        <div class="swiper-container carousel3-type2"
                            data-swiper='{
                                    "loop":false,
                                    "slidesPerView": 1,
                                    "observer": true,
                                    "observeParents": true,
                                    "spaceBetween": 12,
                                    "breakpoints": {
                                        "768": {
                                            "slidesPerView": 2
                                        },
                                        "1024": {
                                            "slidesPerView": 3
                                        }
                                    }
                                }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tf-card-box style-7">
                                        <div class="card-media">
                                            <a href="#">
                                                <img src="./assets/img/about1.png" alt="">
                                            </a>
                                        </div>
                                        <!-- <div class="button-place-bid">
                                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                    </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-card-box style-7">
                                        <div class="card-media">
                                            <a href="#">
                                                <img src="./assets/img/about2.png" alt="">
                                            </a>
                                        </div>
                                        <!-- <div class="button-place-bid">
                                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                    </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-card-box style-7">
                                        <div class="card-media">
                                            <a href="#">
                                                <img src="./assets/img/about3.png" alt="">
                                            </a>
                                        </div>
                                        <!-- <div class="button-place-bid">
                                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                    </div> -->
                                    </div>
                                </div>
                                <!--<div class="swiper-slide">-->
                                <!--    <div class="tf-card-box style-7">-->
                                <!--        <div class="card-media">-->
                                <!--            <a href="#">-->
                                <!--                <img src="./assets/plates/plates/plate_two.png" alt="">-->
                                <!--            </a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-section-2 counter">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-12">
                    <div class="counter__body-1">
                        <div class="counter-1">
                            <div class="number-counter">
                                <span class="number" data-speed="3000" data-to="99" data-inviewport="yes">99</span>K+
                            </div>
                            <h6 class="title">Artwork</h6>
                        </div>
                        <div class="space">
                            <svg width="80" height="19" viewBox="0 0 80 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                            </svg>
                        </div>
                        <div class="counter-1">
                            <div class="number-counter">
                                <span class="number" data-speed="3000" data-to="72" data-inviewport="yes">72</span>K+
                            </div>
                            <h6 class="title">Auction</h6>
                        </div>
                        <div class="space">
                            <svg width="80" height="19" viewBox="0 0 80 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                            </svg>
                        </div>
                        <div class="counter-1">
                            <div class="number-counter">
                                <span class="number" data-speed="3000" data-to="35" data-inviewport="yes">35</span>K+
                            </div>
                            <h6 class="title">Artist</h6>
                        </div>
                        <div class="space">
                            <svg width="80" height="19" viewBox="0 0 80 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="0.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                                <circle opacity="0.2" cx="40" cy="9.5" r="9" stroke="white"></circle>
                                <circle opacity="0.2" cx="40" cy="9.5" r="4.5" fill="white"></circle>
                                <rect opacity="0.2" x="49.75" y="9.25" width="29.5" height="0.5" stroke="white"
                                    stroke-width="0.5" stroke-dasharray="4 2"></rect>
                            </svg>
                        </div>
                        <div class="counter-1">
                            <div class="number-counter">
                                <span class="number" data-speed="3000" data-to="128" data-inviewport="yes">128</span>K+
                            </div>
                            <h6 class="title">NFTs Created</h6>
                        </div>
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
                        <h2 class="tf-title pb-40">Why choose us</h2>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/about-01.png" alt="">
                        <div class="title"><a href="#">Flexible payment</a></div>
                        <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                    </div>
                </div>
                <div data-wow-delay="0.1s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/about-01.png" alt="">
                        <div class="title"><a href="#">Huge data warehouse</a></div>
                        <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                    </div>
                </div>
                <div data-wow-delay="0.2s" class="wow fadeInUp col-md-4">
                    <div class="box-icon-item">
                        <img src="./assets/img/about-01.png" alt="">
                        <div class="title"><a href="#">3 layer security</a></div>
                        <p>Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.components.cta')
@endsection
