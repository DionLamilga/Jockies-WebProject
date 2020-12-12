@extends('layouts.master')
@section('content')
    
    <!--Page Banner Area Start-->
    <div class="page-banner-area" style="background-image: url(assets/images/bg/page-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                        <h1>JOCKIES</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
     <!--Login Section Start-->
    <div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
        <div class="container">
            <div class="row">

                <!-- Login -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="gilbard-login">

                        <h3>We will need for your registration</h3>

                        <!-- Login Form -->
                        <form action="{{ route('registerPengguna') }}" method="post">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-12 mb-30"><input type="text" placeholder="Your username here" name="username"></div>
                                <div class="col-12 mb-30"><input type="email" placeholder="Your email here" name="email"></div>
                                <div class="col-12 mb-30"><input type="password" placeholder="Enter passward" name="password"></div>
                                <!-- <div class="col-12 mb-30"><input type="password" placeholder="Conform password" name="password"></div> -->
                                <div class="col-12"><input type="submit" value="register"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Login With Social -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="gilbard-social-login">
                        <h3>Also you can login with...</h3>

                        <a href="#" class="facebook-login">Login with <i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter-login">Login with <i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus-login">Login with <i class="fa fa-google-plus"></i></a>

                    </div>

                </div>

            </div>
        </div>
    </div>
     <!--Login Section End-->
               </div> 
            </div>
            
        </div>
        
    </div>
    <!--Projects section end-->
    
@stop