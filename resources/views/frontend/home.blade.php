@extends('frontend.layouts.master')
@section('content')
    <div class="tf-section action" style="margin-top:70px;">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="action__body"
                        style="background-image: url(./assets/img/banner-2.png) !important;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center right;
                                        background-color: transparent;
                                        height:auto;">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h1 style="line-height:normal">Go <b style="color:#000">Noticed</b> Go <b
                                        style="color:#000">Premium</b> </h1>
                                <p class="text-white">With <b style="color:#000;">Premium</b>, your number
                                    plates get prime
                                    exposure and top placement only serious sellers</p>
                                <div class="flat-button flex mt-4">
                                    <a href="#" class="tf-button style-2 h50 w190 mr-10 text-white"
                                        style="background:#E12323">Boost My Visibility<i
                                            class="icon-arrow-up-right2"></i></a>
                                    <a href="#" class="tf-button style-2 h50 w230 bg-white"
                                        style="background:#FFF;color:#000">Upgrade To Premium<i
                                            class="icon-arrow-up-right2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.components.features')
    @include('frontend.components.users')
    @include('frontend.components.steps')
    @include('frontend.components.cta')
    @include('frontend.components.recently')
@endsection
