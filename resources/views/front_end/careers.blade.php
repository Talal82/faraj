@extends('layouts.app')

@section('title', 'Careers')

@section('content')


<!--center area section -->
<div class="site_wrap">
    
    <div class="container-fluid sub-banner">
       <div class="row">
          <div>
             <img src="images/careers-banr.jpg" width="1600" height="436" alt="" title="" class="img-fluid"/>
         </div>
     </div>
 </div><!-- inner banner -->


 <div class="careers">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="inr-head">
                    <h2>Career</h2>
                </div>
            </div><!-- top heading  -->
            
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="carer-form">
                    <p>Field with <span>*</span> are required</p>
                    <form method="post" action="" id="" name="">
                        <div class="form-group">
                            <label>Position:<span>*</span></label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Title:</label>
                            <select name="" class="form-control">
                                <option selected>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Nationality:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <select name="" class="form-control">
                                <option selected>Day</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                            <select name="" class="form-control">
                                <option selected>Month</option>
                                <option>January</option>
                                <option>Februry</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                            </select>
                            <select name="" class="form-control">
                                <option selected>Year</option>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Mobile:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" type="email" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Current Location:</label>
                            <select name="" class="form-control">
                                <option selected>Select your Country</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input class="form-control" type="text" name="" value="" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Language:</label>
                            <select name="" class="form-control">
                                <option selected>Arabic</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                            <select name="" class="form-control">
                                <option selected>English</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                            <select name="" class="form-control">
                                <option selected>Other</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Experience detail:</label>
                            <textarea name="" placeholder="" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload your CV:</label>
                            <input class="form-control" type="file" name="" value="" placeholder="" />
                        </div>
                        <div class="botm-butns">
                            <button type="submit">Submit</button>
                            <button type="reset">Clear</button>
                        </div>    
                    </form>
                </div>
            </div><!-- left form -->
            
            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img class="carer-img" src="images/careers-img.png" width="424" height="435" alt="" title="" />
            </div><!-- right img -->
            
        </div>
    </div>
</div><!-- careers -->


@endsection