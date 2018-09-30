@extends('layouts.app')

@section('title', 'Home')

@section('content')


<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid">
       <div class="row">
        <div class="owl-carousel home-slider owl-theme">
            <div class="item">
                <img class="d-block w-100 img-fluid" src="{{ asset('images/slide-01.jpg') }}" width="1600" height="581" title="" alt="">
            </div>
            <div class="item">
                <img class="d-block w-100 img-fluid" src="{{ asset('images/slide-02.jpg') }}" width="1600" height="581" title="" alt="">
            </div>
            <div class="item">
                <img class="d-block w-100 img-fluid" src="{{ asset('images/slide-03.jpg') }}" width="1600" height="581" title="" alt="">
            </div>
        </div>
    </div>
</div><!-- slider -->

<div class="container-fluid section2">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="short-about">
               <h2>Welcome to Faraj Bin Hamoodah Holding</h2>
               <p>At the heart of every Emirati household are strong family values and the resolve to further enhance the rich Arabian culture and diverse community that <br/> surrounds us. This is especially true of the Bin Hamoodah family, whose roots in contributing towards the growth of the United Arab Emirates in almost <br/> every area of business stretches back as far as four decades.</p>
               <a href="{{ route('about') }}#section1"> Read More </a>
           </div>
       </div>
   </div>
</div>
</div><!-- homepage welcome sec -->

<div class="container-fluid section3">
   <div class="container">
      <div class="row">
        
         <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="cm-bg">
               <div class="img">
                  <figure>
                    <img src="{{ asset('images/board.jpg') }}" class="img-fluid"/>
                </figure>
            </div>
            <div class="detail">
              <h2>Chairman’s Message</h2>
              <p>Today, Faraj Bin Hamoodah Holding (FBHH) celebrates the achievement of a new organizational structure, with a successful corporate culture launching a new era where the founders and second generation work in harmony to maintain excellence and growth. FBHH is committed to supporting and playing a significant role in enhancing the reputation of the family’s business as a leading player in the UAE.</p>
              <h3>HE Faraj Ali Bin Hamoodah - <span>Chairman</span> <a href="{{ route('about') }}#section2">Read More</a> </h3>
          </div>
      </div>
  </div><!-- about chairman -->

  <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 padding-left">
    <div class="mission">
       <div class="detail">
          <h4>Our Mission</h4>
          <p>Our mission is to build and strengthen the community by delivering quality products and services from around the world...</p>
          <a href="{{ route('about') }}#section3">Read More</a>
      </div>
      <div class="detail">
          <h4>Our Vision</h4>
          <p>From the start, we saw Faraj Bin Hamoodah Holding as a multinational organisation, welcoming a work force from all over the world...</p>
          <a href="{{ route('about') }}#section4">Read More</a>
      </div>
  </div>
</div><!-- our mission -->

</div>
</div>
</div><!-- about chairman and our mission section -->

<div class="container-fluid section4" style="background: url({{ asset('images/bg2.jpg') }}) center top no-repeat; background-attachment: fixed;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="content">
               <h2>Pride in our past drives us to shape our future</h2>
               <p>“He who does not know his past cannot make the best of his present <br/>
               and  future, for it is from the past that we learn.” </p>
               <h3>HH Sheikh Zayed bin Sultan Al Nahyan</h3>
           </div>
       </div>
   </div>
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="the-board">
           <h4>The Board</h4>
       </div>
       
       <div class="owl-carousel the-boards owl-theme">
        <div class="item">
            <div class="board">
                <figure><img src="{{ asset('images/board.jpg') }}" width="187" height="225" class="img-fluid"/></figure>
                <h5>HE Faraj Ali Bin Hamoodah</h5>
                <span>Chairman</span>
            </div>
        </div>    
        <div class="item">
            <div class="board">
                <figure><img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid"/></figure>
                <h5>Khalifa Faraj Bin Hamoodah</h5>
                <span>Vice Chairman</span>
            </div>
        </div>    
        <div class="item">
            <div class="board">
                <figure><img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid"/></figure>
                <h5>Marwan Faraj Bin Hamoodah </h5>
                <span>Board Member</span>
            </div>
        </div>    
        <div class="item">
            <div class="board">
                <figure><img src="{{ asset('images/dummy.png') }}" width="187" height="225" class="img-fluid"/></figure>
                <h5>Ali Faraj Bin Hamoodah </h5>
                <span>Board Member</span>
            </div>
        </div>    
    </div>    

</div>
</div>
</div>
</div><!-- the board -->

<div class="container-fluid section5">
   <div class="container">
    
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="heading">
               <h2>Our Companies</h2>
           </div>
       </div>
   </div><!-- top heading -->

   <div class="row">
     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="companies">
           <figure><img src="{{ asset('images/almaha-edu.png') }}" width="47" height="47" title="" alt="" /></figure>
           <h3>Al Maha Educational Facilities L.L.C.</h3>
           <p>Providing world-class education throughout the UAE, Al Maha Educational Facilities is dedicated to working with regional &amp; international brands...</p>
           <a href="{{ route('companies-detail') }}"> Read More </a>
       </div>
   </div>
   <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/kids-academy.png') }}" width="86" height="30" title="" alt="" /></figure>
       <h3>Kids Academy Childcare Group</h3>
       <p>Kids Academy Childcare is multi-award winning British nursery &amp; pre-school established in the United Kingdom 15 years ago and offers a British...</p>
       <a href="{{ route('companies-detail') }}"> Read More </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/dunes-hospitality.png') }}" width="47" height="47" title="" alt="" /></figure>
       <h3>Dunes Hospitality L.L.C. </h3>
       <p>Dune Hospitality forms the Food &amp; Beverage arm of Faraj Bin Hamoodha Holding. The company work at acquiring and developing...</p>
       <a href="{{ route('companies-detail') }}"> Read More </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/wise-investment.png') }}" width="48" height="48" title="" alt="" /></figure>
       <h3>Wise Investment L.L.C.</h3>
       <p>Identifying key Private Equity and Real Estate both locally and abroad, Wise Investment L.L.C. investment arm of Faraj Bin Hamoodah Holding.</p>
       <a href="{{ route('companies-detail') }}"> Read More </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/bin-hamoodah.png') }}" width="152" height="67" title="" alt="" /></figure>
       <h3>Bin Hamoodah Group </h3>
       <p>The group consists of companies collectively owned by the Bin Hamoodah family in over 10 industries. These include:...</p>
       <a href="{{ route('companies-detail') }}"> Read More </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/fbhh.png') }}" width="46" height="46" title="" alt="" /></figure>
       <h3>FBHH Stables</h3>
       <p>Headed by Ali Faraj Bin Hamoodah, this privately owned horse stables focuses on equestrian show jumping and breeding both locally and abroad...</p>
       <a href="{{ route('companies-detail') }}"> Read More </a>
   </div>
</div>
</div><!-- bottom content -->

</div>
</div><!-- our companies -->

<div class="container-fluid section5 section6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
         <div class="col-lg-4 col-md-4">
            <div class="news-style">
               <div class="img">
                  <img src="{{ asset('images/news-01.jpg') }}" width="370" height="209" alt="" title="" class="img-fluid"/>
              </div>
              <div class="detail">
                  <h3>Faraj News Heading </h3>
                  <p>Providing world-class education throughout the UAE, Al Maha Educational Facilities is dedicated to working with regional & international brands and operators on all</p>
                  <a href="{{ route('multimedia') }}"> Read More </a>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="news-style">
           <div class="img">
              <img src="{{ asset('images/news-02.jpg') }}" width="370" height="209" alt="" title="" class="img-fluid"/>
          </div>
          <div class="detail">
              <h3>Faraj News Heading </h3>
              <p>Kids Academy Childcare is multi-award winning British nursery & pre-school established in the United Kingdom 15 years ago and offers a British-based curriculum for </p>
              <a href="{{ route('multimedia') }}"> Read More </a>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="news-style">
       <div class="img">
          <img src="{{ asset('images/news-03.jpg') }}" width="370" height="209" alt="" title="" class="img-fluid"/>
      </div>
      <div class="detail">
          <h3>Faraj News Heading </h3>
          <p>Dune Hospitality forms the Food & Beverage arm of Faraj Bin Hamoodha Holding. The company work at acquiring and developing distinguished international</p>
          <a href="{{ route('multimedia') }}"> Read More </a>
      </div>
  </div>
</div>
</div>
</div>
</div><!-- Recent News  --> 


@endsection