@extends('layouts.master')
@section('content')

    <!--Page Banner Area Start-->
    <div class="page-banner-area" style="background-image: url(assets/images/bg/ml.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                        <h1>MOBILE LEGEND</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
    <!--Blog Area Start-->
    <div class="blog-details-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-xs-50">
        <div class="container">
            <div class="row row-25">
                <div class="col-lg-15">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-details">
                                <div class="blog-img">
                                    <a href="single-blog.html"><img src="assets/images/bg/ml2.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3>MOBILE LEGEND : BANG BANG</h3>
                                    <p>Game online adalah sebuah permainan yang dimainkan menggunakan jaringan internet yang dapat menghubungkan player satu dengan yang lain. Game online sangat banyak jenisnya, mulai dari game online berbasis mobile gaming yang dimainkan melalui perangkat gawai (gadget), sampai dimainkan melalui personal computer seperti Game Mobile Lagend ini. Mobile Legends: Bang Bang adalah sebuah permainan MOBA (Multiplayer Online Battle Arena) yang dirancang untuk ponsel. Kedua tim lawan berjuang untuk mencapai dan menghancurkan basis musuh sambil mempertahankan basis mereka sendiri untuk mengontrol tiga "lane" yang dikenal sebagai "top(lane atas)", "middle (lane tengah)" dan "bottom(lane bawah)", yang menghubungkan basis mereka.</p>
                                    <p>Game Mobile Legends dibuat,diciptakan dan dimiliki oleh developer China yaitu Moonton Technology Co.,Ltd Moonton Bermarkas di kota Shanghai,China. Game ini dirilis pada Tanggal 11 Juli 2016 khusus untuk server Tiongkok dan Indonesia sedangkan untuk IOS server global dirilis pada tanggal 9 November 2016.</p>
                                </div>
                            </div>
                        </div>
                    </div>

        <h1>Form Untuk Order</h1>

        <div class="Forum-create-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-xs-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="forum-form">
                        <form action="{{ route('transaksiPengguna') }}" method="post">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>Nama</label>
                                       <input name="name" required="required" type="text" value="{{Auth::user()->username}}">
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>No. Telphone</label>
                                       <input name="notelp" type="text" placeholder="Enter Phone Number Here">
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>Id/Email in Game</label>
                                       <input name="ign" type="text" placeholder="Enter Your Id/Email in Game Here">
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>Password in Game</label>
                                       <input name="pass" type="password" placeholder="Enter Your Password in Game Here">
                                    </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio1" value="Warrior">
                                <input type="hidden" name="rank_tujuan" value="Elite">
                                <input type="hidden" name="price" value="15000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio1">Warrior-Elite : Rp.15.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio2" value="Elite">
                                <input type="hidden" name="rank_tujuan" value="Master">
                                <input type="hidden" name="price" value="25000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio2">Elite-Master : Rp.25.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio3" value="Master">
                                <input type="hidden" name="rank_tujuan" value="Grandmaster">
                                <input type="hidden" name="price" value="40000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio3">Master-Grandmaster : Rp.40.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio4" value="Grandmaster">
                                <input type="hidden" name="rank_tujuan" value="Epic">
                                <input type="hidden" name="price" value="90000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio4">Grandmaster-Epic : Rp.90.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio5" value="Epic">
                                <input type="hidden" name="rank_tujuan" value="Legend">
                                <input type="hidden" name="price" value="140000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio5">Epic-Legend : Rp.140.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio6" value="Legend">
                                <input type="hidden" name="rank_tujuan" value="Mythic">
                                <input type="hidden" name="price" value="190000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio6">Legend-Mythic : Rp.190.000</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rank_awal" id="inlineRadio7" value="Mythic">
                                <input type="hidden" name="rank_tujuan" value="Mythical Glory">
                                <input type="hidden" name="price" value="980000">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <label class="form-check-label" for="inlineRadio7">Mythic-Mythical Glory : Rp.980.000</label>
                                </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <div class="forum-post">
                                    <br>
                                        <button class="df-btn">Create Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>            
       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--Blog Area End-->
    

    @stop