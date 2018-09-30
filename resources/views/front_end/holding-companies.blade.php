@extends('layouts.app')

@section('title', 'Holding Companies')

@section('content')


<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
       <div class="row">
          <div>
             <img src="{{ asset('images/holding-companies-banr.jpg') }}" width="1600" height="436" alt="" title="" class="img-fluid"/>
         </div>
     </div>
 </div><!-- inner  banner -->


 <div class="container-fluid section5 holding-companies">
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
           <a href="#" target="_blank" rel="external"> Visit Website </a>
       </div>
   </div>
   <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/kids-academy.png') }}" width="86" height="30" title="" alt="" /></figure>
       <h3>Kids Academy Childcare Group</h3>
       <p>Kids Academy Childcare is multi-award winning British nursery &amp; pre-school established in the United Kingdom 15 years ago and offers a British...</p>
       <a href="#" target="_blank" rel="external"> Visit Website </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/dunes-hospitality.png') }}" width="47" height="47" title="" alt="" /></figure>
       <h3>Dunes Hospitality L.L.C. </h3>
       <p>Dune Hospitality forms the Food &amp; Beverage arm of Faraj Bin Hamoodha Holding. The company work at acquiring and developing...</p>
       <a href="#" target="_blank" rel="external"> Visit Website </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/wise-investment.png') }}" width="48" height="48" title="" alt="" /></figure>
       <h3>Wise Investment L.L.C.</h3>
       <p>Identifying key Private Equity and Real Estate both locally and abroad, Wise Investment L.L.C. investment arm of Faraj Bin Hamoodah Holding.</p>
       <a href="#" target="_blank" rel="external"> Visit Website </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/bin-hamoodah.png') }}" width="152" height="67" title="" alt="" /></figure>
       <h3>Bin Hamoodah Group </h3>
       <p>The group consists of companies collectively owned by the Bin Hamoodah family in over 10 industries. These include:...</p>
       <a href="#" target="_blank" rel="external"> Visit Website </a>
   </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="companies">
       <figure><img src="{{ asset('images/fbhh.png') }}" width="46" height="46" title="" alt="" /></figure>
       <h3>FBHH Stables</h3>
       <p>Headed by Ali Faraj Bin Hamoodah, this privately owned horse stables focuses on equestrian show jumping and breeding both locally and abroad...</p>
       <a href="#" target="_blank" rel="external"> Visit Website </a>
   </div>
</div>
</div><!-- bottom content -->

</div>
</div><!-- our companies -->

@endsection