(function($) {
    
    "use strict";

    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if($('.preloader').length){
            $('.preloader').delay(200).fadeOut(500);
        }
    }

    //Make divs same height
    function makeSameHeight() {
        if($('.same-height').length){
            $('.same-height').matchHeight();
        }
    }

    /* ==========================================================================
   When document is loaded, do
   ========================================================================== */
    
    $(window).on('load', function() {
        handlePreloader();
        enableMasonry();
        makeSameHeight();
    });

    $(".hidden-field").show(1000);
                        
    //noty messges
    function generateNotyMessage(type, text, layout, closeit, closeTime) {

        var n = noty({
            text        : text,
            type        : type,
            dismissQueue: true,
            layout      : layout,
            theme       : 'relax',
            maxVisible  : 10,
            animation   : {
                open  : 'animated fadeInUp',
                close : 'animated fadeOutUp'
            }
        });
        //console.log('html: ' + n.options.id);
        
        //close the notification if var is set
        if (closeit=='y') {
            //if (closeTime==''){ closeTime = 5000; }
            setTimeout(function() { $.noty.closeAll(); }, closeTime);
        }
        
    }
    
    function generateStickyNotyMessage(type, text, layout) {
        
        var n = noty({
          text          : text,
          type          : type,
          dismissQueue  : true,
          layout        : layout,
          theme         : 'relax',
          animation     : {
                open  : 'animated fadeInUp',
                close : 'animated fadeOutUp'
          },
          buttons: [
                {addClass: 'btn btn-primary', text: 'Ok', onClick: function($noty) {
                    // this = button element
                    // $noty = $noty element
            
                    //console.log($noty.$bar.find('input#example').val());
            
                    $noty.close();
                    //noty({text: 'You clicked "Ok" button', type: 'success'});
                  }
                }
                /*
                ,
                {addClass: 'btn btn-danger', text: 'Cancel', onClick: function($noty) {
                    $noty.close();
                    noty({text: 'You clicked "Cancel" button', type: 'error'});
                  }
                }
                */
              ]
        });
        
    } 

    //remove hidden from loaded_items items
    if ($('.loaded_items').length) {
         $('.loaded_items').css("display", "inline");
    }

    //EQUAL HEIGHT DIVS
    if ($('.same-height').length) { $('.same-height').matchHeight(); }
    //END EQUAL HEIGHT DIVS

})(window.jQuery);