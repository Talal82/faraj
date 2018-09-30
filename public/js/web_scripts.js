// JavaScript Document
$(document).ready(function(){
    //homepage slider 
    $('.home-slider').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'fadeIn',
        autoplay:true,
        items:1,
        margin:0,
        stagePadding:0,
        smartSpeed:450,
        dots:false,
        nav:true,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
    });
    
    //sticky navbar
    $(window).on("scroll", function(){
       if($(window).scrollTop() > 300) {
            $(".hdr-wrap").addClass("sticky");   
       }else {
           $(".hdr-wrap").removeClass("sticky");   
       } 
    });
    
    //smothly scroill to id on page load 
    var page_url = window.location.href;
    var page_id = page_url.substring(page_url.lastIndexOf("#") + 1);
    if(page_id ===  "section1"){
       $("html, body").animate({
           scrollTop: $("#scroll-" + page_id).offset().top
       }, 1000);
       }else if(page_id === "section2"){
            $("html, body").animate({
               scrollTop: $("#scroll-" + page_id).offset().top 
            }, 1000);
        }else if(page_id === "section3"){
            $("html, body").animate({
               scrollTop: $("#scroll-" + page_id).offset().top - 25 
            }, 1000);
        }else if(page_id === "section4"){
            $("html, body").animate({
               scrollTop: $("#scroll-" + page_id).offset().top - 25 
            }, 1000);
        }
    
   //active menu class based on page url
    $(".header .main-manu ul li a").each(function() {   
        if (this.href === window.location.href) {
            $(".header .main-manu ul li a.active").removeClass("active");
            $(this).addClass("active");
        }
    });
        
    //custom tabs on multimedia
	 $('.tab-menu li.tablink').click(function(){
		 var tab_id = $(this).attr('data-tab');
		 $('.tab-menu li').removeClass('active');
		 $('.tab-cntnt').removeClass('current');
		 $(this).addClass('active');
		 $("#"+tab_id).addClass('current');
	 });
    
    //fancybox image gallery
        $("[data-fancybox]").fancybox({
            // Options will go here
            animationEffect : "zoom-in-out",
            transitionEffect : "zoom-in-out",
            buttons : [
            'zoom',
            'close',
            'thumbs',
            'fullScreen'    
          ],
            thumbs : {
                autoStart   : true,                  // Display thumbnails on opening
                hideOnClose : true,                   // Hide thumbnail grid when closing animation starts
                parentEl    : '.fancybox-container',  // Container is injected into this element
                axis        : 'y'                     // Vertical (y) or horizontal (x) scrolling
            },
        });
    
    //mobile menu 
    //for mobile menu //complete with one level
	//for mobile menu //complete with one level
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
		$(".main-manu").toggleClass("menu-move");
	});
	$("#nav-icon2 , .main-manu").click(function(e){
		e.stopPropagation();
	});
	$(document).click(function(){
        /*$(".stick-menu").toggleClass("menu-move");*/
		/*$('#nav-icon2').removeClass('open');*/
	});
	//for mobile menu dropdown one level
	$('.dd-togle').click(function() {
		$(this).children('.m-dd').slideToggle();
	});
 //for mobile menu //complete with one level
    
    //the board 
    $('.the-boards').owlCarousel({
        autoplay:false,
        mouseDrag:false,
        dots:true,
        loop:false,
        /*animateIn: 'flipInX',*/
        items:4,
        stagePadding:0,
        smartSpeed:450,
        margin:0,
        autoWidth:true,
        nav:false,
        freeDrag:false,
        responsive:{
            0:{
                items:1,
                autoWidth:false,
            },
            576:{
                items:2,
                autoWidth:false,
            },
            768:{
                items:3,
                autoWidth:false,
            },
            992:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });    
    
        //in about us page  
    $('.in-about').owlCarousel({
        autoplay:false,
        mouseDrag:false,
        dots:true,
        loop:false,
        /*animateIn: 'flipInX',*/
        items:5,
        stagePadding:0,
        smartSpeed:450,
        margin:0,
        autoWidth:true,
        nav:false,
        freeDrag:false,
        responsive:{
            0:{
                items:1,
                autoWidth:false,
            },
            576:{
                items:2,
                autoWidth:false,
            },
            768:{
                items:3,
                autoWidth:false,
            },
            992:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });    
    
    
});