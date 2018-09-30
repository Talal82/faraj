@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
       <div class="row">
          <div>
             <img src="images/contact-banr.jpg" width="1600" height="436" alt="" title="" class="img-fluid"/>
         </div>
     </div>
 </div><!-- inner banner -->
 
 <div class="contact">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="inr-head">
                    <h2>Contact Us</h2>
                </div>
                <address>
                    <h3>Faraj Bin Hamoodah Holding L.L.C.</h3>
                    <p>
                        P O Box 35995, Abu Dhabi, UAE
                        <br>
                        Tel: +971 2 4910000
                        <br>
                        Fax: +971 2 4910001
                        <br>
                        Email: info@fbhholding.ae
                    </p>
                </address>
            </div><!-- left contact detail -->
            
            
            <div class="offset-xl-1 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="inr-head">
                    <h2>Feedback Form</h2>
                </div>
                <div class="feedb-form">
                    <form method="post" name="" action="">
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group float-right">
                            <label>Comapny:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group float-right">
                            <label>Email:</label>
                            <input class="form-control" type="email" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group" style="width: 100%;">
                            <label>Message:</label>
                            <textarea name="" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="botm-butns">
                            <button type="submit">Submit</button>
                            <button type="reset">Clear</button>
                        </div>
                    </form>
                </div>
            </div><!-- right feedback  -->                
            
        </div>
    </div>
</div><!-- midd from and address details  -->

<div class="gmap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.907271868619!2d54.43892183211328!3d24.418934802030744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e42739f62fb3b%3A0x3ac04b783b50edf!2sFaraj+Bin+Hamoodah+Holding!5e0!3m2!1sen!2s!4v1525868790250" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><!-- google map -->

@endsection