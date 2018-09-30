@extends('layouts.app')

@section('title', 'Services')

@section('content')



<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
       <div class="row">
          <div>
             <img src="{{ asset('images/services-banr.jpg') }}" width="1600" height="436" alt="" title="" class="img-fluid"/>
         </div>
     </div>
 </div><!-- inner banner -->


 <div class="container-fluid section7">
   <div class="container">
      <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <div class="img">
                <img src="{{ asset('images/04.jpg') }}" width="371" height="216" alt="" title="" class="img-fluid"/>
            </div><!-- img sec -->

            <div class="social-responsibility">
                <div class="inr-head">
                    <h2>Corporate Social Responsibility</h2>
                </div>
                <p>In 2013, we embarked on our Corporate Social Responsibility strategy, further committing ourselves to actively improving the society we live in. Our core focus is on three elements: </p>
                <ul>
                    <li>Improving public health</li>
                    <li>Reinforcing Emirati family values</li>
                    <li>Creating career and social opportunities for young Emiratis</li>
                </ul>
                <p>
                    Honoured to be part of building our nation <br/></p>
                    <h3>"I had many dreams. I dreamt of our land keeping pace with the growth of the modern world.” – HH Sheikh Zayed bin Sultan Al Nahyan</h3>
                </div><!-- text details -->
                
            </div>
            
        </div>
    </div>
</div><!-- services -->

@endsection