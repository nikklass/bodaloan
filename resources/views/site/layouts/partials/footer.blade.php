
<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<div id="disclaimer-dialog" class="zoom-anim-dialog mfp-hide">
    
    <div class="panel panel-default">

        <section class="cp_new-releases_top">
        
            <div class="container2">
                
                <div class="cp-heading-style-1 blue_bg">
                    <div class="col-sm-6 text-right">
                    	<img src="/images/logo_big.png" alt="Barddy" height="80">
                    </div>
                    <div class="col-sm-6">
                    	<h2 class="main-links white_link text-left">Barddy</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                
                <br>
                
                <p class="text_small text-center">
                    Barddy is a website and app that allows you to purchase drinks from your favorite club in advance at a discount.
                </p>
                
                <br>
                
            </div>
            
            <hr>
            
            <section class="cp_new-releases padd-btm-30 blog-style">
                
                <div>

                   <p class="text_small_2 text-center">
                        Enter your <strong>birth date</strong> below to proceed:
                   </p>
                   
                   <br>
                   
                   <form class="form-horizontal form-disclaimer"  data-parsley-validate>
                       
                       <div class="col-sm-4">
                        <select id="day" name="day" class="form-control selectpickerz text-center" data-parsley-trigger="change">
                                                                
                            <option value="">Select Day</option>
                            <?php
                                    
                                $items = generate_options(1,31); //show days
                                echo $items;
                            
                            ?>
                            
                        </select>
                       </div>
                       
                       <div class="col-sm-4">
                        <select id="month" name="month" class="form-control selectpickerz text-center" data-parsley-trigger="change">
                                                                
                            <option value="">Select Month</option>
                            <?php
                                    
                                $items = generate_options(1,12,true); //show months
                                echo $items;
                            
                            ?>
                            
                        </select>
                       </div>
                       
                       <div class="col-sm-4">
                        <select id="year" name="year" class="form-control selectpickerz text-center" data-parsley-trigger="change">
                                                                
                            <option value="">Select Year</option>
                            <?php
                                    
                                $items = generate_options(date('Y'),1900); //show years
                                echo $items;
                            
                            ?>
                            
                        </select>
                       </div>
                       
                       <div class="clearfix"></div>
                                               
                   <div class="text-center margin-top-10">
                        <img src="/images/above_18.png" width="60">
                    
                   </div>
                   
                   <hr>
                   
                   <br>
                   <p class="text_small text-center"> By entering, you accept our <a href="#" class="inlink">Pivacy and cookie terms</a></p>
                                                  
                   <div class="form-group static text-center">
                        <div class="checkbox">
                            <input id="remember" name="remember" checked="" required type="checkbox">
                            <label for="remember" class="text_smaller">  Remember me on this machine (unless shared)</label>
                        </div>
                    </div>
                   
                   <br><br>
                   
                        <button type="submit" class="btn btn-lg btn-block btn-success">Enter</button>
                        
                   </form>
                    
                </div>
                                
            </section>
        
        </section>
                    
   		<div class="clearfix"></div> 

    </div>
                                                                
</div>



<div class="mobile-apps hidden-xs">
    <div class="mobile-apps__container">
        <div class="mobile-apps__inner">
            <a href="https://play.google.com/store/apps/details?id=ke.co.heavybit.barddy" target="_blank">
            	<img alt="Barddy mobile app" class="mobile-apps__banner lazy-loaded" src="/images/barddy_app.png" width="198" height="244">
            </a>
            <noscript>&lt;img alt="Barddy mobile app" class="mobile-apps__banner" width="198" height="244" src="/images/barddy_app.png" /&gt;</noscript>
            <div class="mobile-apps__shadow"></div>
    
            <div class="mobile-apps__content">
                <div class="mobile-apps__title">
                    Barddy app in your pocket!
                </div>
                <p class="mobile-apps__tagline">
                    Get our app, it's the fastest way to buy drinks on the go.
                </p>
    
                <div class="mobile-apps__icons">
                    <!--<a href="" target="_blank" class="app-icon" rel="nofollow">
                        <img alt="App Store" src="<?//=SITEPATH?>images/app-icon-ios.png" width="152" height="45"><noscript>&lt;img alt="App Store" width="152" height="45" src="<?//=SITEPATH?>images/app-icon-ios.png" /&gt;</noscript>
                    </a>
                    <br>-->
                
                    <a href="https://play.google.com/store/apps/details?id=ke.co.heavybit.barddy" target="_blank" class="app-icon" rel="nofollow" title="Get Barddy app on Google Play">
                        <img alt="Google Play" src="/images/app-icon-android.png" width="129" height="45"><noscript>&lt;img alt="Google Play" width="129" height="45" src="/images/app-icon-android.png" /&gt;</noscript>
                    </a>
                    
                    <a href="#" target="_blank" class="app-icon noclick" rel="nofollow" title="Pay via MPESA">
                        <img alt="Mpesa" src="/images/icon-mpesa.png" width="129" height="45"><noscript>&lt;img alt="Mpesa" width="129" height="45" src="/images/icon-mpesa.png" /&gt;</noscript>
                    </a>
                    
                    <br>
                    
                 </div>
            </div>
        </div>
	</div>
</div>

<footer id="footer">

    <section class="cp_shipping-section padd-tb-20 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="cp_shipping-box">
                        <div class="cp_icon"><span class="icon-svg"></span></div>
                        <a href="#">24 Hours <em>Service</em></a> </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="cp_shipping-box">
                        <div class="cp_icon"><span class="icon-discount3"></span></div>
                        <a href="#">Buy And Get A <em>Discount</em></a> </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="cp_shipping-box">
                        <div class="cp_icon"><span class="icon-discount3"></span></div>
                        <a href="#">See Our<em>Latest Offers</em></a> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cp_footer-section-1 padd-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <h4>Connect With Us</h4>
                        <p>You can now talk to us via social media:</p>
                        <div class="footer-social">
                            <ul>
                                
                                @if ($site_settings->facebook_page_url) 
                                <li>
                                	<a href="{{ $site_settings->facebook_page_url }}" 
                                		target="_blank" class="facebook">
                                		<i class="fa fa-facebook"></i>
                                	</a>
                                </li>
                                @endif
                                
                                @if ($site_settings->twitter_page_url) 
                                    <li>
                                    	<a  href="{{ $site_settings->twitter_page_url }}" 
                                    	target="_blank" class="twitter">
                                    		<i class="fa fa-twitter"></i>
                                    	</a>
                                    </li>
                                @endif
                                
                                @if ($site_settings->instagram_page_url) 
                                    <li>
                                    	<a  href="{{ $site_settings->instagram_page_url }}" 
                                    	target="_blank" class="instagram">
                                    		<i class="fa fa-instagram"></i>
                                    	</a>
                                    </li>
                                @endif
                                
                                @if ($site_settings->linkedin_page_url) 
                                    <li><a  href="{{ $site_settings->linkedin_page_url }}" target="_blank" class="googleplus"><i class="fa fa-linkedin"></i></a></li>
                                @endif                                
                    
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <h4>Information</h4>
                        <ul class="cp_footer-list">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/downloads/privacy_cookie_policy.pdf" target="_blank">Privacy &amp; Cookie Policy</a></li>
                            <li><a href="/downloads/terms.pdf" target="_blank">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <h4>My account</h4>
                        <ul class="cp_footer-list">
                            <li><a href="/account">My account</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <h4>Subscribe to newsletter</h4>
                        <form action="#" class="form-add-subscription">
                            <div class="input-box"> <i class="fa fa-envelope"></i>
                                <input type="text" name="email" placeholder="Email  Address" required>
                            </div>
                            <input type="submit" value="Subscribe" class="orange">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cp_footer-section-3">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
            	<img src="/images/footer-logo.png" alt="{{ $site_settings->company_name_title }}">
            </a> 
            <strong class="copyrights"><?=date("Y")?> &copy; 
            {{ $site_settings->company_name_title }}. 
            Developed by <a href="http://showbiz.co.ke" target="_blank">Heavybit Ent.</a></strong> 
        </div>
    </section>

</footer>