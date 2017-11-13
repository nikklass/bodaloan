@extends('site.layouts.master')

@section('title')

    Home

@endsection


@section('content')
    
    
    <div id="cp_store-banner" class="container">
        
            <ul id="store-banner" style="visibility:hidden;"> 

               
            </ul>
        </div>

        <div class="cp_contact-modal">
            <div class="modal fade" id="myModal" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h4>Send us a message</h4>
                            <p>Enter your name, email address and text of the message below and click Send message button</p>
                            <form class="row" action="#">
                                <div class="col-md-6">
                                    <input type="text" required placeholder="What’s your name?">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" required placeholder="Got an email address?">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" required placeholder="What’s the subject of your message?">
                                </div>
                                <div class="col-md-12">
                                    <textarea required rows="10" cols="10">Tell us about how we can help?</textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Send">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main" class="container">            
             
             <section class="cp_new-releases padd-tb-30 margin-btm-30 blog-style hidden-xs">
            
                <div class="order-steps-container">
                
                    <div class="order-steps-expander">
                        <div class="title">
                            Get your drink in 4 simple steps.
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="trigger">
                              See how
                            </a>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in order-steps" role="tabpanel" aria-labelledby="headingOne">
                            <div class="container2">
                                <ul>
                                    <li class="step one">
                                        <div>
                                            <div class="title">1. Select Hangout</div>
                                            <div class="description"><span>Select</span> <br>your favorite hangout</div>
                                        </div>
                                    </li>
                                    <li class="step two">
                                        <div>
                                            <div class="title">2. Make Order</div>
                                            <div class="description"><span>Order</span> <br>the drinks on offer</div>
                                        </div>
                                    </li>
                                    <li class="step three">
                                        <div>
                                            <div class="title">3. Pay</div>
                                            <div class="description">Make payment in advance</div>
                                        </div>
                                    </li>
                                    <li class="step four">
                                        <div>
                                            <div class="title">4. Enjoy</div>
                                            <div class="description">Enjoy your drink</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>                   
                    
                </div>
                
            </section>
            
            <div class="clearfix"></div>
                        
            <section class="cp_new-releases_top">
            
                <div class="container2">
                    
                    <div class="cp-heading-style-1 red_bg">
                        <h2 class="main-links"><a href="/clubs" class="black_link">CLUB OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>

                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items" class="featured-items">
                            
                            @foreach ($club_data as $club_offer)

                            <div class="item relative">
                                <div class="tkt-evt shadow1 tkt-border same-height">
                                    <a itemprop="url" class="image" href="{{ $club_offer->club->name }}">
                                        <img src="{{ $club_offer->club->images[0]->thumb_img }}" 
                                            alt="{{ $club_offer->club->name }} - {{ $club_offer->name }}"
                                            >

                                    </a>
                                    <div class="evt-info equalheight relative">
                                        <a href="{{ $club_offer->club->name }}" 
                                            class="date-box evt" itemprop="startDate" 
                                            content="{{ $club_offer->club->name }}"> 
                                            <span class="day">{{ formatDay($club_offer->start_date) }}</span> 
                                            <!-- <span class="date">
                                                {{ formatFriendlyDate($club_offer->start_date) }}
                                            </span>   -->
                                            <span class="month">{{ formatMonth($club_offer->start_date) }}</span> 
                                            <span class="year">{{ formatYear($club_offer->start_date) }}</span>  
                                        </a>  
                                        
                                        <h3 class="club truncate margin-right-10">
                                            <a href="{{ $club_offer->name }}" itemprop="name" 
                                                data-toggle="tooltip" data-placement="bottom" 
                                                title="{{ $club_offer->name }}">
                                                <span class="{{ $club_offer->name }} caps">
                                                    {{ reducelength($club_offer->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="{{ $club_offer->club->name }}" 
                                                itemprop="name" data-toggle="tooltip" 
                                                data-placement="bottom" 
                                                title="{{ $club_offer->club->name }}">
                                                <span class="{{ $club_offer->club->name }} caps">
                                                    {{ reducelength($club_offer->club->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <div class="text-box">
                                            <strong class="title">{{ $club_offer->club->name }}</strong> 
                                            <strong class="price">{{ $club_offer->club->name }}</strong>
                                            <strong class="cut-price">{{ $club_offer->club->name }}</strong><br/> 
                                        </div>
                                        <div class="text-box">
                                            <strong class="title2">Buy before: </strong> 
                                            <strong class="expires">
                                            {{ formatFriendlyDate($club_offer->expiry_date) }}
                                            </strong>
                                        </div>
                                        
                                        <div class="text-box">
                                            <a href="{{ $club_offer->club->name }}" 
                                            class="textbox-link" itemprop="name">
                                                More drinks ...
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                     
                        </div>
                        
                        <div class="owle customNavigation"> 
                            <a class="prev" id="owl_1_prev"><i class="fa fa-chevron-left"></i></a> 
                            <a class="next" id="owl_1_next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        
                        
                    </div>
                </section>
            
            </section>
            
            <div class="clearfix"></div>
            
            <section class="cp_new-releases_top margin-tb-30">
            
                <div class="container2">
                    
                    <div class="cp-heading-style-1 orange_bg">
                        <h2 class="main-links"><a href="/events" class="orange_link">EVENT OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items3" class="featured-items">
                           
                            
                            @foreach ($event_data as $event_offer) 
                            
                            <div class="item relative">
                                <div class="tkt-evt shadow1 tkt-border same-height">
                                    <a itemprop="url" class="image" href="{{ $event_offer->club->name }}">
                                        <img src="{{ $event_offer->club->images[0]->thumb_img }}" 
                                            alt="{{ $event_offer->club->name }} - {{ $event_offer->name }}"
                                            >
                                    </a>
                                    <div class="evt-info equalheight relative">
                                        <a href="{{ $event_offer->club->name }}" 
                                            class="date-box evt" itemprop="startDate" 
                                            content="{{ $event_offer->club->name }}"> 
                                            <span class="day">{{ formatDay($event_offer->start_date) }}</span> 
                                            <!-- <span class="date">
                                                {{ formatFriendlyDate($event_offer->start_date) }}
                                            </span>   -->
                                            <span class="month">{{ formatMonth($event_offer->start_date) }}</span> 
                                            <span class="year">{{ formatYear($event_offer->start_date) }}</span>  
                                        </a>  
                                        
                                        <h3 class="club truncate margin-right-10">
                                            <a href="{{ $event_offer->name }}" itemprop="name" 
                                                data-toggle="tooltip" data-placement="bottom" 
                                                title="{{ $event_offer->name }}">
                                                <span class="{{ $event_offer->name }} caps">
                                                    {{ reducelength($event_offer->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="{{ $event_offer->club->name }}" 
                                                itemprop="name" data-toggle="tooltip" 
                                                data-placement="bottom" 
                                                title="{{ $event_offer->club->name }}">
                                                <span class="{{ $event_offer->club->name }} caps">
                                                    {{ reducelength($event_offer->club->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <div class="text-box">
                                            <strong class="title">{{ $event_offer->club->name }}</strong> 
                                            <strong class="price">{{ $event_offer->club->name }}</strong>
                                            <strong class="cut-price">{{ $event_offer->club->name }}</strong><br/> 
                                        </div>
                                        <div class="text-box">
                                            <strong class="title2">Buy before: </strong> 
                                            <strong class="expires">
                                            {{ formatFriendlyDate($event_offer->expiry_date) }}
                                            </strong>
                                        </div>
                                        
                                        <div class="text-box">
                                            <a href="{{ $event_offer->club->name }}" 
                                            class="textbox-link" itemprop="name">
                                                More drinks ...
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                     
                        </div>
                        
                        <div class="owle customNavigation"> 
                            <a class="prev" id="owl_3_prev"><i class="fa fa-chevron-left"></i></a> 
                            <a class="next" id="owl_3_next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        
                        
                    </div>
                </section>
            
            </section>
            
            <div class="clearfix"></div>
            
            <section class="cp_new-releases_top margin-btm-30">
            
                <div class="container2">
                    
                    <div class="cp-heading-style-1 blue_bg">
                        <h2 class="main-links"><a href="/restaurants" class="red_link">RESTAURANT OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                
                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items2" class="featured-items">
                           
                            
                            @foreach ($restaurant_data as $rest_offer) 
                            
                            <div class="item relative">
                                <div class="tkt-evt shadow1 tkt-border same-height">
                                    <a itemprop="url" class="image" href="{{ $rest_offer->club->name }}">
                                        <img src="{{ $rest_offer->club->images[0]->thumb_img }}" 
                                            alt="{{ $rest_offer->club->name }} - {{ $rest_offer->name }}"
                                            >
                                    </a>
                                    <div class="evt-info equalheight relative">
                                        <a href="{{ $rest_offer->club->name }}" 
                                            class="date-box evt" itemprop="startDate" 
                                            content="{{ $rest_offer->club->name }}"> 
                                            <span class="day">{{ formatDay($rest_offer->start_date) }}</span> 
                                            <!-- <span class="date">
                                                {{ formatFriendlyDate($rest_offer->start_date) }}
                                            </span>   -->
                                            <span class="month">{{ formatMonth($rest_offer->start_date) }}</span> 
                                            <span class="year">{{ formatYear($rest_offer->start_date) }}</span>  
                                        </a>  
                                        
                                        <h3 class="club truncate margin-right-10">
                                            <a href="{{ $rest_offer->name }}" itemprop="name" 
                                                data-toggle="tooltip" data-placement="bottom" 
                                                title="{{ $rest_offer->name }}">
                                                <span class="{{ $rest_offer->name }} caps">
                                                    {{ reducelength($rest_offer->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="{{ $rest_offer->club->name }}" 
                                                itemprop="name" data-toggle="tooltip" 
                                                data-placement="bottom" 
                                                title="{{ $rest_offer->club->name }}">
                                                <span class="{{ $rest_offer->club->name }} caps">
                                                    {{ reducelength($rest_offer->club->name, 16) }}
                                                </span>
                                            </a>
                                        </h3>
                                        
                                        <div class="text-box">
                                            <strong class="title">{{ $rest_offer->club->name }}</strong> 
                                            <strong class="price">{{ $rest_offer->club->name }}</strong>
                                            <strong class="cut-price">{{ $rest_offer->club->name }}</strong><br/> 
                                        </div>
                                        <div class="text-box">
                                            <strong class="title2">Buy before: </strong> 
                                            <strong class="expires">
                                            {{ formatFriendlyDate($rest_offer->expiry_date) }}
                                            </strong>
                                        </div>
                                        
                                        <div class="text-box">
                                            <a href="{{ $rest_offer->club->name }}" 
                                            class="textbox-link" itemprop="name">
                                                More drinks ...
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                            
                     
                        </div>
                        
                        <div class="owle customNavigation"> 
                            <a class="prev" id="owl_2_prev"><i class="fa fa-chevron-left"></i></a> 
                            <a class="next" id="owl_2_next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        
                        
                    </div>
                </section>
            
            </section>
            
            <div class="clearfix"></div>
            
            
        </div>
        
        <div style="display:none;">
        
            <div id="my-modal">
                               
                
            </div>
        
        </div>
         

@endsection


@section('page_css')

    <link rel="stylesheet" href="{{ asset('css/magnific_popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colorbox/colorbox.css') }}">

@endsection


@section('page_scripts')

    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/workmark.js') }}"></script>

    <script type="text/javascript">

        "use strict";
         $('a[data-rel]').each(function() {
             $(this).attr('rel', $(this).data('rel'));
         });
         
         
         if ($('#carousel').length) {
             $('#carousel').flexslider({
                 animation: "slide",
                 controlNav: false,
                 animationLoop: false,
                 slideshow: true,
                 itemWidth: 130,
                 itemMargin: 0,
                 asNavFor: '#slider'
             });
             $('#slider').flexslider({
                 animation: "fade",
                 controlNav: false,
                 animationLoop: false,
                 slideshow: true,
                 sync: "#carousel",
                 start: function(slider) {
                     $('body').removeClass('loading');
                 }
             });
         }

         if ($('#owl-demo').length) {
             $("#owl-demo").owlCarousel({
                 autoPlay: 10000,
                 items: 3,
                 itemsDesktop: [1199, 3],
                 itemsDesktopSmall: [979, 3]
             });
         }
    
         //OWL CAROUSELS
         var owl_1 = $("#featured-items");
         if (owl_1.length) {
             owl_1.owlCarousel({
                 autoPlay: false,
                 items: 4,
                 itemsDesktop: [1199, 3],
                 itemsDesktopSmall: [979, 3],
                 itemsMobile: [480, 1]
             });
         }
         // Custom Navigation Events
         $("#owl_1_next").click(function() {
             owl_1.trigger('owl.next');
         })
         $("#owl_1_prev").click(function() {
                 owl_1.trigger('owl.prev');
         })
         // End Custom Navigation Events
    
         var owl_2 = $("#featured-items2");
         if (owl_2.length) {
             owl_2.owlCarousel({
                 autoPlay: false,
                 items: 4,
                 itemsDesktop: [1199, 3],
                 itemsDesktopSmall: [979, 3],
                 itemsMobile: [480, 1]
             });
         }
         // Custom Navigation Events
         $("#owl_2_next").click(function() {
             owl_2.trigger('owl.next');
         })
         $("#owl_2_prev").click(function() {
                 owl_2.trigger('owl.prev');
             })
             // End Custom Navigation Events
    
         var owl_3 = $("#featured-items3");
         if (owl_3.length) {
             owl_3.owlCarousel({
                 autoPlay: false,
                 items: 4,
                 itemsDesktop: [1199, 3],
                 itemsDesktopSmall: [979, 3],
                 itemsMobile: [480, 1]
             });
         }
         // Custom Navigation Events
         $("#owl_3_next").click(function() {
             owl_3.trigger('owl.next');
         })
         $("#owl_3_prev").click(function() {
             owl_3.trigger('owl.prev');
         })
         // End Custom Navigation Events
    
         //END OWL CAROUSELS
    
         
         if ($('.defaultCountdown').length) {
             var austDay = new Date();
             austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
             $('.defaultCountdown').countdown({
                 until: austDay
             });
             $('#year').text(austDay.getFullYear());
         }     
     
     //////////////////// START MAGNIFIC POPUP ////////////////////////////////////
     if ($('.popup-with-zoom-anim').length) {
    
        //MAGNIFIC POPUP
        $('.popup-with-zoom-anim').magnificPopup({
            
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
            
        });
    
    }
    </script>

@endsection

