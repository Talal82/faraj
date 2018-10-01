@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
        <div class="row">
            <div>
                <img src="{{ asset('images/about-banr.jpg') }}" width="1600" height="436" alt="" title="" class="img-fluid"/>
            </div>
        </div>
    </div><!-- inner banner -->
    
    <div class="container-fluid about-us" id="scroll-section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h2> {{ $about -> aboutus_title }} </h2>
                        {!! $about -> aboutus_detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- who we are section -->
    
    <div class="container-fluid chairman-msg" id="scroll-section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="c-img">
                        <figure>
                            <img src="images/board.jpg" width="187" height="225" class="img-fluid"/>
                        </figure>
                        <h3>HE Faraj Ali Bin Hamoodah <br/>
                            <span>Chairman</span> 
                        </h3>
                    </div>
                    <div class="c-detail">
                        <h4>{{ $about -> message_title }}</h4>
                        {!! $about -> message_detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- chairsman message -->
    
    <div class="container-fluid mission-vission">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mission" id="scroll-section3">
                        <h5>{{ $about -> mission_title }}</h5>
                        {!! $about -> mission_detail !!}
                    </div>
                    <div class="mission" id="scroll-section4">
                        <h5>{{ $about -> vision_title }}</h5>
                        {!! $about -> vision_detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- missin and vision -->
    
    <div class="container-fluid section6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h2>The Board</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="owl-carousel in-about owl-theme">
                        <div class="item">
                            <div class="board">
                                <figure>
                                    <a href="{{ asset('images/board.jpg') }}" data-fancybox="board" data-thumb="{{ asset('images/board.jpg') }}" data-caption="HE Faraj Ali Bin Hamoodah<br>Chairman">
                                        <img src="{{ asset('images/board.jpg') }}" width="187" height="225" class="img-fluid">
                                    </a>    
                                </figure>
                                <h3>HE Faraj Ali Bin Hamoodah</h3>
                                <span>Chairman</span>
                            </div>
                        </div>    
                        <div class="item">
                            <div class="board">
                                <figure>
                                    <a href="{{ asset('images/dummy.png') }}" data-fancybox="board" data-thumb="{{ asset('images/dummy.png') }}" data-caption="Khalifa Faraj Bin Hamoodah<br>Vice Chairman">
                                        <img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid">
                                    </a>    
                                </figure>
                                <h3>Khalifa Faraj Bin Hamoodah</h3>
                                <span>Vice Chairman</span>
                            </div>
                        </div>    
                        <div class="item">
                            <div class="board">
                                <figure>
                                    <a href="{{ asset('images/dummy.png') }}" data-fancybox="board" data-thumb="{{ asset('images/dummy.png') }}" data-caption="Marwan Faraj Bin Hamoodah<br>Board Member">
                                        <img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid">
                                    </a>    
                                </figure>
                                <h3>Marwan Faraj Bin Hamoodah </h3>
                                <span>Board Member</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="board">
                                <figure>
                                    <a href="{{ asset('images/dummy.png') }}" data-fancybox="board" data-thumb="{{ asset('images/dummy.png') }}" data-caption="Ali Faraj Bin Hamoodah<br>Board Member">
                                        <img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid">
                                    </a>    
                                </figure>
                                <h3>Ali Faraj Bin Hamoodah </h3>
                                <span>Board Member</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="board">
                                <figure>
                                    <a href="{{ asset('images/dummy.png') }}" data-fancybox="board" data-thumb="{{ asset('images/dummy.png') }}" data-caption="Ali Faraj Bin Hamoodah<br>Board Member">
                                        <img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid">
                                    </a>    
                                </figure>
                                <h3>Ali Faraj Bin Hamoodah </h3>
                                <span>Board Member</span>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div><!-- the board -->

    @endsection