@extends('frontend.layouts.master')
@push('css')
    <style>
        .infor-product h2 {
            font-size: 24px;
        }

        .rox_box.one {
            top: 10%;
            width: 250px;
            left: calc(50% - 125px);
            /* 50% se center minus half width */
        }

        .rox_box.two {
            gap: 5px;
            top: 53%;
            width: 120px;
            left: calc(50% - 60px);
            height: 35px;
            justify-content: center;
        }

        .rox_box.two p.first_one {
            font-size: 8px;
            display: block !important;
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

        .rox_box.two p.last_one {
            font-size: 8px;
            display: static;
        }

        .rox_box.two .first_one,
        .rox_box.two .last_one {
            width: 100px;
            text-align: center;
        }

        .deskTopC {
            height: 450px !important;
            object-fit: cover !important;
        }

        @media only screen and (max-width: 600px) {
            .deskTopC {
                height: 350px !important;
            }
        }
    </style>
@endpush
@section('content')
    <div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-5 col-12">
                <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                    <div class="card-media mb-0">
                        <a href="#">
                            <img src="./assets/img/aaa.jpg" class="deskTopC" alt="" style="">
                            <div class="rox_box one">
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
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-12">
                <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                    <!-- <div class="text">8SIAN Main Collection</div> -->
                    <h2 style="font-weight:400">Plate Number: <b>098775</b> Code: <b>AA</b></h2>
                    <div class="author flex items-center mb-30">
                        <div class="avatar">
                            <img src="./assets/img/avatar-08.png" alt="Image">
                        </div>
                        <div class="info">
                            <span style="color:#FFF;">Owned by:</span>
                            <h6><a href="#!">Ahmed Khalil</a> </h6>
                        </div>
                    </div>
                    <div class="meta mb-20">
                        <div class="meta-item view">
                            <i class="fa-solid fa-share" style="color:#f52424e8"></i><a href="#!">Share It</a>
                        </div>
                        <div class="meta-item rating">
                            <i class="fa-solid fa-download" style="color:#f52424e8"></i><a href="#!">Download It</a>
                        </div>
                        <div class="meta-item favorites">
                            <i class="icon-create" style="color:#f52424e8"></i>Profile
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
                    <div class="content">
                        <div class="text text-white">Plate Number Price:</div>
                        <div class="flex justify-between">
                            <p>23,000 AED</p>
                            <!-- <a href="#" class="tf-button style-1 h50 w50 text-white">+971-111-1111<i class="fa fa-phone text-white"></i></a>
                            <a href="#" class="tf-button style-1 h50 w50 text-white">WhatsApp<i
                                    class="fa-brands fa-whatsapp v"></i></a> -->
                            <div data-wow-delay="0.2s" class=" wow fadeInUp flat-button flex justify-center animated"
                                style="gap: 10px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"
                                bis_skin_checked="1">
                                <a href="#" class="tf-button style-1 " style="">Call Now <i class="fa fa-phone"></i></a>
                                <a href="#" class="tf-button style-1 active" style="">WhatsApp <i
                                        class="fa-brands fa-whatsapp v"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-3">
                        <div data-wow-delay="0s" class="wow fadeInRight product-item description" style="height:182px;">
                            <h6 style="font-size:25px;"><i class="icon-description"></i>Important Note:</h6>
                            <!--<i class="icon-keyboard_arrow_down"></i>-->
                            <div class="content">
                                <p class="text-white mb-3"><i class="fa-solid fa-money-bill"></i>&nbsp;&nbsp; Don’t wire money online</p>
                                <p class="text-white"><i class="fa-solid fa-handshake"></i>&nbsp;&nbsp; Meet the seller in person</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-3">
                        <div data-wow-delay="0s" class="wow fadeInRight product-item details">
                            <h6><i class="icon-description"></i>Details</h6>
                            <!--<i class="icon-keyboard_arrow_down"></i>-->
                            <div class="content">
                                <div class="details-item">
                                    <span>Created At</span>
                                    <span class="tf-color">02/5/2025: 05:15pm</span>
                                </div>
                                <div class="details-item">
                                    <span>Unique ID</span>
                                    <span class="tf-color">0270</span>
                                </div>
                                <div class="details-item">
                                    <span>Last Updated</span>
                                    <span class="" class="tf-color">8 months ago</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@include('frontend.components.features')
@endsection
