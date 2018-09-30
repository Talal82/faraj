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
                            <h2> Who We Are! </h2>
                            <p>
                                At the heart of every Emirati household are strong family values and the resolve to further enhance the rich Arabian culture and diverse community that surrounds us. This is especially true of the Bin Hamoodah family, whose roots in contributing towards the growth of the United Arab Emirates in almost every area of business stretches back as far as four decades. <br/> <br/>
                                It is with this in mind that the renowned businessman, Faraj Ali Bin Hamoodah along with his sons, established the private investment company, Faraj Bin Hamoodah Holding L.L.C. in 2008. Head quartered in Abu Dhabi, our family-owned company is dedicated to delivering quality services. Several corporations currently form our ever-burgeoning portfolio and to date, we have invested heavily in the educational, financial, real estate, hospitality and food & beverage sectors of the UAE market. <br/> <br/>
                                Each of our employees were chosen for their keen visionary sense and together, they have helped shape the future of our holding company. Within our subsidiaries, management and their teams are empowered to identify and pursue unique opportunities, encouraging personal growth and contribution within the company. <br/> <br/>
                                Since its inception in 2008, Faraj Bin Hamoodah Holding has been a major stakeholder in the renowned conglomerate, Bin Hamoodah Group. Established in 1967, the Bin Hamoodah Group has helped nurtured over 12 industries in the UAE, including oil, agriculture and engineering. For more information on the Group, please visit www.binhamoodah.ae.
                            </p>
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
                            <h4>Chairman’s Message</h4>
                            <p>Today, Faraj Bin Hamoodah Holding (FBHH) celebrates the achievement of a new organizational structure, with a successful corporate culture launching a new era where the founders and second generation work in harmony to maintain excellence and growth. FBHH is committed to supporting and playing a significant role in enhancing the reputation of the family’s business as a leading player in the UAE. <br/>
                            <br/>
                            Since 2008, FBHH has invested in the Education and Hospitality sectors, and further developed real estate and equity portfolios. The current investment policy is to invest in selective projects as a part of our diversification strategy beyond the business sectors of Bin Hamoodah Group of Companies. Businesses all over the world are now propelled to be more and more creative to meet the expectations of customers. We are witnessing more competition and major development in technology, creating challenges that encourage us to be more imaginative in our Investment strategies. <br/>
                            <br/>
                            Abu Dhabi and other Emirates in the UAE are part of the global markets exposed to International competition. With a clear vision and formal corporate governance in process, we are preparing the second generation to be part of the major players in the local and regional economies. <br/>
                            <br/>
                            As a Chairman of Faraj Bin Hamoodah Holding, I look forward to further creating new alliances and partnerships with source markets and key companies. I am excited about the prospects and continued development, growth and strengthening of all our stakeholders’ interests. Finally, I am fully committed to our on going Corporate Social Responsibility programmes and in furthering our bonds as a community.
                            </p>
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
                            <h5>Mission</h5>
                            <p>Our mission is to build and strengthen the community by delivering quality products and services from around the world within the: educational, hospitality, and real-estate industries. We aim to be recognised as high performing and innovative leaders and seen as a company that invests not only in our business, but also in our employees.</p>
                        </div>
                        <div class="mission" id="scroll-section4">
                            <h5>Vision</h5>
                            <p>From the start, we saw Faraj Bin Hamoodah Holding as a multinational organisation, welcoming a work force from all over the world. As our products and services are international, we partner with companies that share our vision and values using the following elements as our touchstone:</p>
                            <ul>
                                <li> <strong>People</strong> – to unite employees from around the world and create a fun, exciting and rewarding work place where everyone is inspired to output his / her very best. </li>
                                <li> <strong>Service</strong> – to bring to the UAE a strong portfolio of quality brands that place our country competitively on the global market. </li>
                                <li> <strong>Partners</strong> – to form and sustain a profitable network who together with us, intend on delivering value enhancing lines of business. </li>
                                <li> <strong>Community</strong> – to make a powerful impact and act in a responsible manner towards the community by opening pathways that help build, nurture and support its development. </li>
                            </ul>
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