<header id="cp_header">

    <section class="navigation-row">
        <div class="container2">
            <div class="col-sm-3">
                <strong class="logo big-logo"><a href="" title="{{ config('app.name') }}"><img src="images/logo_big.png" alt="{{ config('app.name') }}"></a></strong>
            </div>
            <div class="col-sm-9">
                
                <section class="cp_top-bar">
                    <div class="container2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-boxx account align-left">
                                 
                                    @if (Auth::guest())

                                        <div class="login-box">
                                            <a href="/login">Login</a> | <a href="/register">Register</a>
                                        </div>

                                    @else

                                        <div class="account-box">
                                        
                                            <div class="dropdown">
                                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary user_data" data-target="#" href="/page.html">
                                                             Logged in - {{ Auth::user()->first_name }} <span class="caret"></span>
                                                        </a>
                                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                                    <li><a href="account">My Account</a></li>
                                                    <li><a  href="/change-password">Change Password</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" class="logout">Logout</a></li>
                                                </ul>
                                            </div>

                                        </div>

                                    @endif
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-box" style="float:right;"> 
                                    <ul id="topnavlinks">
                                        <li><a href="">Home</a> </li>
                                        <li><a href="about">About us</a> </li>
                                        <li><a href="contacts">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="right-box">
                                                                        
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <div class="navigation-box">
                    <nav class="margin-tb-20">
                        <div class="cp-mega-menu">
                            <label for="mobile-button"> <i class="fa fa-bars"></i> </label>
    
                            <input id="mobile-button" type="checkbox">
                            <ul class="collapse">
    
                                <li class="title">  </li>
    
                                <li> <a href="clubs">Clubs</a>
                                    <ul class="drop-down full-width hover-zoom" id="club-menus">
    
                                        <div id="club-menus"></div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4" style=""><a class="btn-style-1" href="clubs">More Clubs...</a></div>
                                            <div class="col-sm-4"></div>
                                        </div>
                                        
                                    </ul>
                                    
                                </li>
                                
                                <li> <a href="events">Events</a>
                                    <ul class="drop-down full-width hover-zoom" id="event-menus">
    
                                        <div id="event-menus"></div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4" style=""><a class="btn-style-1" href="events">More Events...</a></div>
                                            <div class="col-sm-4"></div>
                                        </div>
                                        
                                    </ul>
                                </li>
                                
                                <li> <a href="restaurants">Restaurants</a>
                                    <ul class="drop-down full-width hover-zoom">
    
                                        <div id="restaurant-menus"></div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4" style=""><a class="btn-style-1" href="restaurants">More Restaurants...</a></div>
                                            <div class="col-sm-4"></div>
                                        </div>
                                        
                                    </ul>
                                </li>
                                
                                @if (Auth::user()) 

                                    @if (Auth::user()->hasRole('superadministrator'))
                                    <li> <a href="admin" class="green">Admin</a></li>
                                    @endif
                                    
                                @endif

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </nav>
                </div>
                
                <section class="cp_top-bar-below">
                    <div class="container2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-box padding-top-10"> 
                                    <ul>
                                        <li><a href="discounts" class="iframeFull">Super Discounts</a></li>
                                        <li><a href="howtobuy" class="iframeFull">How to Buy Your Drinks</a></li>
                                        <li><a href="faqs" class="iframeFull">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                 
                                    <div class="top-search">
                                        <div class="widget widget_search">
                                            <form class="search-form" action="search/">
                                                <input class="search-field" placeholder="Search …" type="search">
                                                <input class="search-submit" type="submit">
                                            </form>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </section>

</header>

<div class="clearfix"></div>

@section('page_scripts')

    <script>
    
    //CREATE MENU ITEMS

        (function($) {
                         
             //fetch data url
             var estab_item_url = "http://localhost:8000/clubs";
             var events_item_url = "http://localhost:8000/offers";
            
             //menus
             var menu_loader_div = "#club-menus";
             var menu_loader_div2 = "#restaurant-menus";
             var menu_loader_div3 = "#event-menus";
             
             var menu_params = { "limit" : 8, "cat_id" : "2", "random" : true, "status" : "1" };
             var menu_params2 = { "limit" : 8, "cat_id" : "3", "random" : true, "status" : "1" };
             var menu_params3 = { "limit" : 8, "offer_type" : "event", "random" : true, "with_offer" : 1, "status" : "1" };
            
             var counter_div = "";
            
             //FETCH MENU ITEMS
             fetching = false;
             //show featured club MENU ITEMS
             retrieveEstItems(estab_item_url, menu_loader_div, counter_div, menu_params);
            
             fetching = false;
             //show featured restaurant  MENU ITEMS                 
             retrieveEstItems(estab_item_url, menu_loader_div2, counter_div, menu_params2);
            
             fetching = false;
             //show event  MENU ITEMS                   
             retrieveEstItems(events_item_url, menu_loader_div3, counter_div, menu_params3);
                     
         
         function retrieveEstItems(myUrl, loader_div, counter_div, params)
            {
                if(fetching==false) //we are not loading
                {
                
                    $(loader_div).html(loader_object);
                    //load_overlay(loader_div);
            
                    fetching = true;
            
                    $.ajax({
                        url: myUrl,
                        type: 'GET',
                        data: params,
                        success : function(data) {
                            
                            $(loader_div).html("");
                                                            
                            //set current page
                            $(counter_div).data('page',data.page);
                            
                            //print out the data
                            if (data.rows.length == 0) {
                                
                                $(loader_div).html("<div class='text-center text-danger no-records'><h3 class='text-danger'>No items Found</h3></div>");
                                
                            } else {
                                
                                $.each(data.rows, function(index, item){
                                    var row = create_menu_entry(item);
                                    $(loader_div).append(row);
                                });
                                
                                //match height
                                // remove the old group
                                $('.evt-info').matchHeight({ remove: true });
                            
                                // apply matchHeight on the new selection, which includes the new element
                                $('.evt-info').matchHeight();
                            
                            }
                            
                            //hide_overlay(loader_div);
                            
                            //onload, click on first item after 2 seconds
                            setTimeout(function() {
                                $('.chat-item').first().click();
                            }, 2000);
                            
                            
                            fetching = false;
                            //refresh waypoints
                            //Waypoint.refreshAll();
                    
                        },
                        error : function(xhr, statusText, error) { 
                            console.log("Error! Could not retrieve the data.");
                            fetching = false;
                            //refresh waypoints
                            //Waypoint.refreshAll();
                        }
                    });
                
                }
                
            }   
            
            //DISPLAY menu ITEMMS
            function create_menu_entry (item) {                                     
                
                var html =     '<li class="float-none">';
                html = html +  '  <ul>';
                html = html +  '    <li>';
                html = html +  '      <div class="menu-image">';
                html = html +  '        <a href="' + item.url + '">';
                html = html +  '            <img src="' + item.image + '" alt="' + item.name + '" width="291" height="291">';
                html = html +  '        </a>';                      
                html = html +  '      </div>';
                html = html +  '      <p class="caps">' + item.name + '</p>';
                html = html +  '    </li>';
                html = html +  '  </ul>  ';
                html = html +  '</li>  ';               
                
                return html;
                
            }   

        })(window.jQuery);              
        
     //END CREATE MENU ITEMS
    </script>

@endsection
