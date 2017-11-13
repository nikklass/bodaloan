<?php 
  include_once("admin/api/includes/DB_handler.php"); 
  include_once("admin/api/includes/Config.php"); 
?>

<?php 

  //$db = new DbHandler();
  
  $show_main_site = true;
  $home = true;
  $owl_carousel = true;
  $show_offers_list = true;
  $show_popup = true;
  
  $form_validation = true; //form validation classes
  $show_form = true;
  
  $page_name = "Home";

?>

<!doctype html>
<html>

<head>
    
  <?php include_once("includes/top_css.php"); ?>
    
    <?php include_once("admin/includes/js.php"); ?>
    
</head>

<body class="big-store sticky-div">

    <div id="wrapper">

        <?php include_once("includes/header.php"); ?>

        <div id="cp_store-banner" class="container">
        
            <ul id="store-banner" style="visibility:hidden;">
            
            <?php
                                                            
        $items = $db->getHomeSliders("",true); //true onlyshows active data, false shows all
                                    
        foreach ($items['rows'] as $key => $val) {

          $id = $val["id"];
          $main_title = $val["name"];
          $second_title = $val["second_title"];
          $third_title = $val["third_title"];
          $fourth_title = $val["fourth_title"];
          $button_link_text = $val["button_link_text"];
          $button_link_url = $val["button_link_url"];
          $button_link_style = $val["button_link_style"];
          $created_at = $val["created_at"];
          $created_by = $val["created_by"];
          $item_large_image = $val["image"];
          
      ?>
          
          <li> <img src="<?=$item_large_image?>" alt="img">
                    
                        <div class="caption">
                            <div class="container">
                                <div class="holder"> <em><?=$main_title?></em>
                                    <h1><?=$second_title?></h1>
                                    <?php if ($third_title) { ?><p><?=$third_title?></p><?php }  ?>
                                    <?php if ($fourth_title) { ?><span><?=$fourth_title?></span><?php }  ?> 
                                    <a href="<?=$button_link_url?>" class="<?=$button_link_style?>"><?=$button_link_text?></a> </div>
                            </div>
                        </div>
                        
                    </li>
                
      <?php
      
        }
      
      ?>
               
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
                        <h2 class="main-links"><a href="<?=SITEPATH?>clubs" class="black_link">CLUB OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items" class="featured-items">
                                                       
                            <?php
                //get club offers
                $est_name_short = SHORT_HOME_TITLE_LENGTH;
                $offer_name_short = SHORT_HOME_TITLE_LENGTH;                                
                $items = $db->getOffers(DAY_AND_NIGHT_CLUB_ID, "", 1, 8, "", "", "", "normal", "", USER_ID, 1, "", $est_name_short, $offer_name_short); //get club offers with offer products
                //print_r($items); exit;
                                    
                foreach ($items['rows'] as $key => $val) {
        
                  $offer_status = ""; 
                  
                  $id = $val["id"];
                  $est_name = $val["est_name"];
                  $offer_name = $val["offer_name"];
                  $offer_name_short = $val["offer_name_short"];
                  $est_name_short = $val["est_name_short"];
                  $offer_url = $val["offer_url"];
                  $offer_start_date = $val["offer_start_date"];
                  $offer_start_date_day = $val["offer_start_date_day"];
                  $offer_start_date_date = $val["offer_start_date_date"];
                  $offer_start_date_month = $val["offer_start_date_month"];
                  $offer_start_date_year = $val["offer_start_date_year"];
                  $expiry_date_fmt3 = $val["expiry_date_fmt3"];
                  $offer_image = $val["offer_image"];
                  $est_id = $val["est_id"];
                  $offer_status = $val["status_id"];
                  $est_image = $val["est_image"];
                  $main_offer_product = $val["main_offer_product"];
                  
                  //set title class
                  if ($offer_status == EXPIRED_STATUS) { $title_class="strike"; }  else { $title_class=""; } 
                  
                  /*//does item have photo?
                  if (!$db->doesItemHavePhoto(OFFER_PHOTO, $id)){
                    $offer_image = $est_image;
                  }*/
                  
                  if ($main_offer_product) {
                    $product_name = $main_offer_product["name"];
                    $normal_price = $main_offer_product["normal_price_fmt"];
                    $offer_price = $main_offer_product["offer_price_fmt"];
                  } else {
                    $product_name = "";
                    $normal_price = "";
                    $offer_price = "";
                  }
                
                  if ($offer_start_date_day) { $offer_day = $offer_start_date_day; } else { $offer_day = ""; }
                  if ($offer_start_date_date) { $offer_date = $offer_start_date_date; } else { $offer_date = ""; }
                  if ($offer_start_date_month) { $offer_month = $offer_start_date_month; } else { $offer_month = ""; }
                  if ($offer_start_date_year) { $offer_year = $offer_start_date_year; } else { $offer_year = ""; }
                  
                  $the_image = $offer_image;
                  
                  $expiry_text = $expiry_date_fmt3;
                
              ?>
                            
                            <div class="item relative">
                <div class="tkt-evt shadow1 tkt-border">
                    <a itemprop="url" class="image" href="<?=$offer_url?>">
                    <img src="<?=SITEPATH?>includes/image.php/<?=$the_image?>?width=400&height=400&quality=100&cropratio=1:1&image=<?=$the_image?>" alt="<?=$est_name?> - <?=$offer_name?>">
            
                    </a>
                    <div class="evt-info equalheight relative">
                      <a href="<?=$offer_url?>" class="date-box evt" itemprop="startDate" content="<?=$offer_start_date?>"> 
                        <span class="day"><?=$offer_day?></span> 
                        <span class="date"><?=$offer_date?></span>  
                        <span class="month"><?=$offer_month?></span> 
                        <span class="year"><?=$offer_year?></span>  
                      </a>  
                                        
                                        <h3 class="club truncate margin-right-10">
                                        <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$offer_name?>">
                      <span class="<?=$title_class?> caps">
                        <?=$offer_name_short?>
                                            </span>
                                        </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$est_name?>">
                                                <span class="<?=$title_class?> caps">
                                                  <?=$est_name_short?>
                                                </span>
                                            </a>
                                        </h3>
                                        
                        <div class="text-box">
                          <strong class="title"><?=$product_name?></strong> 
                          <strong class="price"><?=$offer_price?></strong>
                          <strong class="cut-price"><?=$normal_price?></strong><br/> 
                      </div>
                                        <div class="text-box">
                          <strong class="title2">Buy before: </strong> 
                          <strong class="expires"><?=$expiry_text?></strong>
                      </div>
                                        
                                        <div class="text-box">
                          <a href="<?=$offer_url?>" class="textbox-link" itemprop="name">More drinks ...</a>
                      </div>
                                        
                    </div>
                  </div>
              </div>
                          
                            <?php
      
                }
              
              ?>
                     
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
                        <h2 class="main-links"><a href="<?=SITEPATH?>events" class="orange_link">EVENT OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items3" class="featured-items">
                           
                            
                            <?php
                //get event offers
                
                $est_name_short = SHORT_HOME_TITLE_LENGTH;
                $offer_name_short = SHORT_HOME_TITLE_LENGTH;                
                $items = $db->getOffers("", "", 1, 8, "", "", "", "event", "", USER_ID, 1, "", $est_name_short, $offer_name_short); 
                //get club offers with offer products
                                    
                foreach ($items['rows'] as $key => $val) {
        
                  $offer_status = "";                 
                  
                  $id = $val["id"];
                  $est_name = $val["est_name"];
                  $offer_name = $val["offer_name"];
                  $offer_name_short = $val["offer_name_short"];
                  $est_name_short = $val["est_name_short"];
                  $offer_url = $val["offer_url"];
                  $offer_start_date = $val["offer_start_date"];
                  $offer_start_date_day = $val["offer_start_date_day"];
                  $offer_start_date_date = $val["offer_start_date_date"];
                  $offer_start_date_month = $val["offer_start_date_month"];
                  $offer_start_date_year = $val["offer_start_date_year"];
                  $expiry_date_fmt3 = $val["expiry_date_fmt3"];
                  $offer_image = $val["offer_image"];
                  $offer_status = $val["status_id"];
                  $est_image = $val["est_image"];
                  $main_offer_product = $val["main_offer_product"];
                  
                  //set title class
                  if ($offer_status == EXPIRED_STATUS) { $title_class="strike"; }  else { $title_class=""; } 
                  
                  /*//does itme have photo?
                  if (!$db->doesItemHavePhoto(OFFER_PHOTO, $id)){
                    $offer_image = $est_image;
                  }*/
                  
                  if ($main_offer_product) {
                    $product_name = $main_offer_product["name"];
                    $normal_price = $main_offer_product["normal_price_fmt"];
                    $offer_price = $main_offer_product["offer_price_fmt"];
                  } else {
                    $product_name = "";
                    $normal_price = "";
                    $offer_price = "";
                  }
                
                  if ($offer_start_date_day) { $offer_day = $offer_start_date_day; } else { $offer_day = ""; }
                  if ($offer_start_date_date) { $offer_date = $offer_start_date_date; } else { $offer_date = ""; }
                  if ($offer_start_date_month) { $offer_month = $offer_start_date_month; } else { $offer_month = ""; }
                  if ($offer_start_date_year) { $offer_year = $offer_start_date_year; } else { $offer_year = ""; }
                  
                  $the_image = $offer_image;
                  
                  $expiry_text = $expiry_date_fmt3;
                
              ?>
                            
                            <div class="item relative">
                <div class="tkt-evt shadow1 tkt-border">
                    <a itemprop="url" class="image" href="<?=$offer_url?>">
                    <img src="<?=SITEPATH?>includes/image.php/<?=$the_image?>?width=400&height=400&quality=100&cropratio=1:1&image=<?=$the_image?>" alt="<?=$est_name?> - <?=$offer_name?>">
            
                    </a>
                    <div class="evt-info equalheight relative">
                      <a href="<?=$offer_url?>" class="date-box evt" itemprop="startDate" content="<?=$offer_start_date?>"> 
                        <span class="day"><?=$offer_day?></span> 
                        <span class="date"><?=$offer_date?></span>  
                        <span class="month"><?=$offer_month?></span> 
                        <span class="year"><?=$offer_year?></span>  
                      </a>  

                                        <h3 class="event truncate margin-right-10">
                                        <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$offer_name?>">
                      <span class="<?=$title_class?> caps">
                        <?=$offer_name_short?>
                                            </span>
                                        </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$est_name?>">
                                                <span class="<?=$title_class?> caps">
                                                  <?=$est_name_short?>
                                                </span>
                                            </a>
                                        </h3>
                                        
                        <div class="text-box">
                          <strong class="title"><?=$product_name?></strong> 
                          <strong class="price"><?=$offer_price?></strong>
                          <strong class="cut-price"><?=$normal_price?></strong><br/> 
                      </div>
                                        
                                        <div class="text-box">
                          <strong class="title2">Buy before: </strong> 
                          <strong class="expires"><?=$expiry_text?></strong>
                      </div>
                                        
                                        <div class="text-box">
                          <a href="<?=$offer_url?>" class="textbox-link" itemprop="name">More drinks ...</a>
                      </div>
                                        
                    </div>
                  </div>
              </div>
                          
                            <?php
      
                }
              
              ?>
                            
                     
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
                        <h2 class="main-links"><a href="<?=SITEPATH?>restaurants" class="red_link">RESTAURANT OFFERS</a></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                
                <section class="cp_new-releases padd-tb-30 blog-style">
            
                    <div class="container2">
    
                        <div id="featured-items2" class="featured-items">
                           
                            <?php
                //get restaurant offers
                $est_name_short = SHORT_HOME_TITLE_LENGTH;
                $offer_name_short = SHORT_HOME_TITLE_LENGTH;
                $items = $db->getOffers(RESTAURANT_ID, "", 1, 8, "", "", "", "normal", "", USER_ID, 1, "", $est_name_short, $offer_name_short ); //get club offers with offer products
                                    
                foreach ($items['rows'] as $key => $val) {
        
                  $offer_status = ""; 
                  
                  $id = $val["id"];
                  $est_name = $val["est_name"];
                  $est_name_short = $val["est_name_short"];
                  $offer_name = $val["offer_name"];
                  $offer_name_short = $val["offer_name_short"];
                  $offer_url = $val["offer_url"];
                  $offer_start_date = $val["offer_start_date"];
                  $offer_start_date_day = $val["offer_start_date_day"];
                  $offer_start_date_date = $val["offer_start_date_date"];
                  $offer_start_date_month = $val["offer_start_date_month"];
                  $offer_start_date_year = $val["offer_start_date_year"];
                  $expiry_date_fmt3 = $val["expiry_date_fmt3"];
                  $offer_image = $val["offer_image"];
                  $offer_status = $val["status_id"];
                  $est_image = $val["est_image"];
                  $main_offer_product = $val["main_offer_product"];
                  
                  //set title class
                  if ($offer_status == EXPIRED_STATUS) { $title_class="strike"; }  else { $title_class=""; }
                  
                  //does itme have photo?
                  /*if (!$db->doesItemHavePhoto(OFFER_PHOTO, $id)){
                    $offer_image = $est_image;
                  }*/
                  
                  if ($main_offer_product) {
                    $product_name = $main_offer_product["name"];
                    $normal_price = $main_offer_product["normal_price_fmt"];
                    $offer_price = $main_offer_product["offer_price_fmt"];
                  } else {
                    $product_name = "";
                    $normal_price = "";
                    $offer_price = "";
                  }
                
                  if ($offer_start_date_day) { $offer_day = $offer_start_date_day; } else { $offer_day = ""; }
                  if ($offer_start_date_date) { $offer_date = $offer_start_date_date; } else { $offer_date = ""; }
                  if ($offer_start_date_month) { $offer_month = $offer_start_date_month; } else { $offer_month = ""; }
                  if ($offer_start_date_year) { $offer_year = $offer_start_date_year; } else { $offer_year = ""; }
                  
                  $the_image = $offer_image;
                  
                  $expiry_text = $expiry_date_fmt3;
                
              ?>
                            
                            <div class="item relative">
                <div class="tkt-evt shadow1 tkt-border">
                    <a itemprop="url" class="image" href="<?=$offer_url?>">
                    <img src="<?=SITEPATH?>includes/image.php/<?=$the_image?>?width=400&height=400&quality=100&cropratio=1:1&image=<?=$the_image?>" alt="<?=$est_name?> - <?=$offer_name?>">
            
                    </a>
                    <div class="evt-info equalheight relative">
                      <a href="<?=$offer_url?>" class="date-box evt" itemprop="startDate" content="<?=$offer_start_date?>"> 
                        <span class="day"><?=$offer_day?></span> 
                        <span class="date"><?=$offer_date?></span>  
                        <span class="month"><?=$offer_month?></span> 
                        <span class="year"><?=$offer_year?></span>  
                      </a>  
                                                                
                                        <h3 class="restaurant truncate margin-right-10">
                                        <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$offer_name?>">
                      <span class="<?=$title_class?> caps">
                        <?=$offer_name_short?>
                                            </span>
                                        </a>
                                        </h3>
                                        
                                        <h3 class="bt truncate margin-right-10">
                                            <a href="<?=$offer_url?>" itemprop="name" data-toggle="tooltip" data-placement="bottom" title="<?=$est_name?>">
                                                <span class="<?=$title_class?> caps">
                                                  <?=$est_name_short?>
                                                </span>
                                            </a>
                                        </h3>
                                        
                        <div class="text-box">
                          <strong class="title"><?=$product_name?></strong> 
                          <strong class="price"><?=$offer_price?></strong>
                          <strong class="cut-price"><?=$normal_price?></strong><br/> 
                      </div>
                                        <div class="text-box">
                          <strong class="title2">Buy before: </strong> 
                          <strong class="expires"><?=$expiry_text?></strong>
                      </div>
                                        
                                        <div class="text-box">
                          <a href="<?=$offer_url?>" class="textbox-link" itemprop="name">More drinks ...</a>
                      </div>
                                        
                    </div>
                  </div>
              </div>
                          
                            <?php
      
                }
              
              ?>
                     
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

        <?php include_once("includes/footer.php"); ?>

    </div>

    

</body>

</html>