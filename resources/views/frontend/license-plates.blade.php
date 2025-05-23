@extends('frontend.layouts.master')
@push('css')
    <style>
        .tf-card-box:hover .card-media a img {
            transform: none !important;
        }

        @media only screen and (max-width: 2800px) {
            .artwork .Boxx {
                transform: translate(25px, 6px);
                height: auto;
            }

            .artwork .Boxx .box {
                width: 52px;
            }

            .artwork .Boxx .box p {
                margin-top: -7px;
                font-size: 17px;
            }
        }

        @media only screen and (max-width: 760px) {
            .artwork .Boxx {
                transform: translate(64px, 19px);
                height: 116px;
            }

            .artwork .Boxx .box {
                width: 120px;
            }

            .artwork .Boxx .box img {
                margin-top: 10px;
            }

            .artwork .Boxx .box p {
                margin-top: 5px;
                font-size: 35px;
            }

            .artwork .box_two p {
                font-size: 40px;
            }
        }

        @media only screen and (max-width: 500px) {
            .artwork .Boxx {
                transform: translate(30px, 6px);
                height: 70px;
            }

            .artwork .Boxx .box {
                width: 80px;
            }

            .artwork .Boxx .box img {
                margin-top: 6px;
            }

            .artwork .Boxx .box p {
                margin-top: -4.5px;
                font-size: 24px;
            }

            .artwork .box_two p {
                font-size: 32px;
            }
        }

        /*  */

        .rox_box.one {
            top: 10%;
            width: 200px;
            left: calc(50% - 100px);
        }

        img.aaa {
            height: 250px !important;
        }

        .rox_box.two {
            gap: 5px;
            top: 50%;
            width: 80px;
            left: calc(50% - 37px);
            height: 35px;
            justify-content: center;
        }

        .rox_box .imgBox {
            width: 150px;
            height: auto;
        }

        .rox_box p.first_one,
        .rox_box p.last_one {
            font-size: 14px;
            width: 100%;
            justify-content: center;
        }

        .rox_box.two .imgBox {
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rox_box.two .imgBox img {
            width: 100%;
            object-fit: cover;
            margin-top: 0;
            margin-left: 0;
            max-width: 100%;
            height: auto;
            margin: 0 auto;
        }

        .rox_box.two p.first_one {
            font-size: 7px;
        }

        .rox_box.two p.last_one {
            font-size: 7px;
            display: static;
        }

        .rox_box.two .first_one,
        .rox_box.two .last_one {
            width: 100px;
            text-align: center;
        }
    </style>
@endpush
@section('content')
    <div class="flat-title-page">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading text-center">Explore Plates</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="tf-section-2 artwork loadmore-12-item-1">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-category-checkbox mb-30">
                        <h5>Filter By City</h5>
                        <div class="content-wg-category-checkbox">
                            <form action="#">
                                <label>Dubai
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
                                <label>Abu Dhabi
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
                                <label>Sharjah
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
                                <label>Ajman
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label><br>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 col-12 m-auto">
                    <div class="row">
                        <div data-wow-delay="0s" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6 animated"
                            style="display: block; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="tf-card-box style-1">
                                <div class="card-media mb-0">
                                    <a href="plates-detail.php">
                                        <img src="./assets/img/aaa_2.jpg" class="aaa" alt="">
                                        <!-- <div class="rox_box one">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div>
                                        <div class="rox_box two">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div> -->
                                    </a>
                                </div>
                                <!-- <h5 class="name"><a href="#!">Dayco serpentine belt</a></h5> -->
                                <div class="mt-4 author flex flex-column items-center">
                                    <div class="flex items-center w-100">
                                        <div class="avatar">
                                            <img src="./assets/img/avatar-08.png" alt="Image">
                                        </div>
                                        <div class="info">
                                            <span>Created by:</span>
                                            <h6><a href="#!">Kathryn Murphy</a> </h6>
                                        </div>
                                    </div>
                                    <div class="divider"></div>

                                    <div class="info second w-100">
                                        <span>Created At:</span>
                                        <h6><a href="#!">02/12/2025 : 05:10PM</a> </h6>
                                    </div>
                                    <div class="info second d-flex w-100" style="gap:10px">
                                        <span>Price</span>
                                        <h6><a href="#!" style="font-size:15px;">AED 23,000</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div data-wow-delay="0.2s" class=" wow fadeInUp flat-button flex justify-center"
                                    style="    gap: 10px;">
                                    <a href="#" class="tf-button style-1 "
                                        style="width: 102px;height: auto;padding: 6px 0;">Call Now</a>
                                    <a href="#" class="tf-button style-1 active"
                                        style="width: 102px;height: auto;padding: 6px 0;">WhatsApp </a>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6 animated"
                            style="display: block; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="tf-card-box style-1">
                                <div class="card-media mb-0">
                                    <a href="plates-detail.php">
                                        <img src="./assets/img/aaa_2.jpg" class="aaa" alt="">
                                        <!-- <div class="rox_box one">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div>
                                        <div class="rox_box two">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div> -->
                                    </a>
                                </div>
                                <!-- <h5 class="name"><a href="#!">Dayco serpentine belt</a></h5> -->
                                <div class="mt-4 author flex flex-column items-center">
                                    <div class="flex items-center w-100">
                                        <div class="avatar">
                                            <img src="./assets/img/avatar-08.png" alt="Image">
                                        </div>
                                        <div class="info">
                                            <span>Created by:</span>
                                            <h6><a href="#!">Kathryn Murphy</a> </h6>
                                        </div>
                                    </div>
                                    <div class="divider"></div>

                                    <div class="info second w-100">
                                        <span>Created At:</span>
                                        <h6><a href="#!">02/12/2025 : 05:10PM</a> </h6>
                                    </div>
                                    <div class="info second d-flex w-100" style="gap:10px">
                                        <span>Price</span>
                                        <h6><a href="#!" style="font-size:15px;">AED 23,000</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div data-wow-delay="0.2s" class=" wow fadeInUp flat-button flex justify-center"
                                    style="    gap: 10px;">
                                    <a href="#" class="tf-button style-1 "
                                        style="width: 102px;height: auto;padding: 6px 0;">Call Now</a>
                                    <a href="#" class="tf-button style-1 active"
                                        style="width: 102px;height: auto;padding: 6px 0;">WhatsApp </a>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6 animated"
                            style="display: block; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="tf-card-box style-1">
                                <div class="card-media mb-0">
                                    <a href="plates-detail.php">
                                        <img src="./assets/img/aaa_2.jpg" class="aaa" alt="">
                                        <!-- <div class="rox_box one">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div>
                                        <div class="rox_box two">
                                            <p class="first_one">AA</p>
                                            <div class="imgBox">
                                                <img src="./assets/img/logos/logo-01.png" />
                                            </div>
                                            <p class="last_one">098775</p>
                                        </div> -->
                                    </a>
                                </div>
                                <!-- <h5 class="name"><a href="#!">Dayco serpentine belt</a></h5> -->
                                <div class="mt-4 author flex flex-column items-center">
                                    <div class="flex items-center w-100">
                                        <div class="avatar">
                                            <img src="./assets/img/avatar-08.png" alt="Image">
                                        </div>
                                        <div class="info">
                                            <span>Created by:</span>
                                            <h6><a href="#!">Kathryn Murphy</a> </h6>
                                        </div>
                                    </div>
                                    <div class="divider"></div>

                                    <div class="info second w-100">
                                        <span>Created At:</span>
                                        <h6><a href="#!">02/12/2025 : 05:10PM</a> </h6>
                                    </div>
                                    <div class="info second d-flex w-100" style="gap:10px">
                                        <span>Price</span>
                                        <h6><a href="#!" style="font-size:15px;">AED 23,000</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div data-wow-delay="0.2s" class=" wow fadeInUp flat-button flex justify-center"
                                    style="    gap: 10px;">
                                    <a href="#" class="tf-button style-1 "
                                        style="width: 102px;height: auto;padding: 6px 0;">Call Now</a>
                                    <a href="#" class="tf-button style-1 active"
                                        style="width: 102px;height: auto;padding: 6px 0;">WhatsApp </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div data-wow-delay="0s" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6 animated"
                            style="display: block; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="./assets/plates/plates/plate_two.png" alt="" class="w-100"
                                            style="height:auto!important">
                                     </a>
                                    <div class="rox_box">
                                        <p class="first_one">AA</p>
                                        <div class="imgBox">
                                            <img src="./assets/img/logos/logo-02.png" />
                                        </div>
                                        <p class="last_one">098775</p>
                                    </div>
                                </div>
                                <div class="mt-4 author flex flex-column items-center">
                                    <div class="flex items-center w-100">
                                        <div class="avatar">
                                            <img src="./assets/img/avatar-08.png" alt="Image">
                                        </div>
                                        <div class="info">
                                            <span>Created by:</span>
                                            <h6><a href="#!">Kathryn Murphy</a> </h6>
                                        </div>
                                    </div>
                                    <div class="divider"></div>

                                    <div class="info second w-100">
                                        <span>Created At:</span>
                                        <h6><a href="#!">02/12/2025 : 05:10PM</a> </h6>
                                    </div>
                                    <div class="info second d-flex w-100" style="gap:10px">
                                        <span>Price</span>
                                        <h6><a href="#!" style="font-size:15px;">AED 23,000</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div data-wow-delay="0.2s" class=" wow fadeInUp flat-button flex justify-center"
                                    style="    gap: 10px;">
                                    <a href="#" class="tf-button style-1 "
                                        style="width: 102px;height: auto;padding: 6px 0;">Call Now</a>
                                    <a href="#" class="tf-button style-1 active"
                                        style="width: 102px;height: auto;padding: 6px 0;">WhatsApp </a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-md-12 load-more">
                            <a id="button-loadmore" class="tf-button-loadmore">
                                <span>Load More</span>
                                <i class="icon-loading-1"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
