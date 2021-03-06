@section('title', 'Dashboard')
@extends('layouts.design')
@section('content')
<div class="col-lg-12 col-sm-6 text-center mb-4">
    <!-- sales report area start -->
    <hr style="border-color: #9e0039;">
    <div class="sales-report-area mt-5 mb-5 ">
        <div class="row">
            {{-- bitcoin --}}
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><img  src="assets/images/icon/cryptoIcon/btc.png"></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Bitcoin (BTC)</h4>
                            <p id="hours"></p>
                                                        
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2 id="BTCRates"></h2>
                            {{-- <span>- 45.87</span> --}}
                        </div>
                    </div>
                    <canvas id="coin_sales1" height="100"></canvas>
                </div>
            </div>
            {{-- bitcoin cash--}}
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><img src="assets/images/icon/cryptoIcon/eth.png"></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Etherium (ETH)</h4>
                            <p id="hours1"></p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2 id="ETHRates"></h2>
                            {{-- <span>- 45.87</span> --}}
                        </div>
                    </div>
                    <canvas id="coin_sales2" height="100"></canvas>
                </div>
            </div>
            {{-- Etherium --}}
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><img src="assets/images/icon/cryptoIcon/ada.png"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Cardano (ADA)</h4>
                            <p id="hours2"></p>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2 id="ADARates"></h2>
                            {{-- <span>- 45.87</span> --}}
                        </div>
                    </div>
                    <canvas id="coin_sales3" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- sales report area end -->

    <!-- Team Members Row -->
    <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4"><br></h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="manageusers"><img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/mainbut/people.png" alt="">
          <h3>Manage Users</a>
          </h3>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="/cryptoexchange"><img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/mainbut/crypto.png" alt="">
          <h3>Crypto Exchange </a>
          </h3>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <a href="/setting"><img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/mainbut/setting.png" alt="">
          <h3>Setting</a>
          </h3>
        </div>
    </div>
    <!-- Team Members Row -->
</div>
{{-- save the api.they got limit 500 usage --}}
<script src="{{ asset('assets/js/api.js') }}"></script>
@endsection
