@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')



<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
       <div class="row">
          <div>
             <img src="{{ asset('images/contact-banr.jpg') }}" width="1600" height="436" alt="" title="" class="img-fluid"/>
         </div>
     </div>
 </div><!-- inner banner -->


 <div class="privacy-policy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="inr-head">
                    <h2>{{ $policy -> name }}</h2>
                </div><!-- top heading -->
                
                <div class="pp-btm">
                    {!! $policy -> detail !!}
                </div>
            </div>
        </div>
    </div>
</div><!-- privacy policy content -->

@endsection