jQuery(function ($) { 
$('.content-cta-button').click( function() {
    $("#section-dropdown").toggleClass("show-dd");
} );
});

jQuery(function ($) { 
    //caches a jQuery object containing the header element
    var header = $(".clearHeader");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 5) {
            header.removeClass('clearHeader').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('clearHeader');
        }
    });
});

jQuery(function ($) { 

var divs = $(".clients-center > .client-image-holder");
for(var i = 0; i < divs.length; i+=5) {
  divs.slice(i, i+5).wrapAll("<div class='client-row'></div>");
}
});


jQuery(function ($) { 

var divs = $(".page-team > .team-section");
for(var i = 0; i < divs.length; i+=3) {
  divs.slice(i, i+3).wrapAll("<div class='join'></div>");
}
});

jQuery(function ($) { 

var divs = $(".cs > .half-section");
for(var i = 0; i < divs.length; i+=4) {
  divs.slice(i, i+4).wrapAll("<div class='cs-row'></div>");
}
});

jQuery(function ($) { 

var divs = $(".section-inner > .tests");
for(var i = 0; i < divs.length; i+=3) {
  divs.slice(i, i+3).wrapAll("<div class='tests-row'></div>");
}
});

jQuery(function ($) { 
jQuery( ".wpcf7 input, .wpcf7 textarea" ).focus( function() {
jQuery( ".wpcf7-response-output, .wpcf7-not-valid-tip" ).hide('slow');
});
});


jQuery(function ($) { 
(function($) {
  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

$(window).scroll(function(event) {
  
  $(".hidden-down").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("fadeIn"); 
    } else {
      el.removeClass("fadeIn");
    }
  });
});

$(window).scroll(function(event) {
  
  $(".hidden-left").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("fadeInleft"); 
    } else {
      el.removeClass("fadeInleft");
    }
  });
});

$(window).scroll(function(event) {
  
  $(".hidden-right").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("fadeInright"); 
    } else {
      el.removeClass("fadeInright");
    }
  });
});

$(window).scroll(function(event) {
  
  $(".hidden-top").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("fadeIntop"); 
    } else {
      el.removeClass("fadeIntop");
    }
  });
});

$(window).scroll(function(event) {
  
  $(".hidden-fade").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("fadeInfade"); 
    } else {
      el.removeClass("fadeInfade");
    }
  });
});

});

// color box

/* Initialize jQuery Colorbox*/
jQuery(function( $ ){
 $('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').colorbox({
    transition:'none',
    rel: 'gallery',
    opacity:.85,
 
    title: function() {
    return $(this).find('img').attr('alt');
    } 
    });
});

jQuery(function ($) { 
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1'});
        $(".group2").colorbox({rel:'group2', transition:"fade"});
        $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
        $(".group4").colorbox({rel:'group4', slideshow:true});
        $(".ajax").colorbox();
        $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
        $(".inline").colorbox({inline:true, slideshow:true , width:"100%", height:"100%" , position:"fixed" , overflow:"hidden"});
        $(".callbacks").colorbox({
          onOpen:function(){ alert('onOpen: colorbox is about to open'); },
          onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
          onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
          onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
          onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
        });

        $('.non-retina').colorbox({rel:'group5', transition:'none'})
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
        
        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){ 
          $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
          return false;
        });
      });

jQuery(function ($) { 
//Isotope with images loaded ...
  var $container = $('#galcontainer').imagesLoaded( function() {
    $container.isotope({
    // options

   itemSelector: '.item',
      masonry: {
      gutter: 30
      }
     });
  });
  
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };
  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $container.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

  });


jQuery(function ($) { 
$( document ).ready(function() {
var ctrlVideo = document.getElementsByClassName("active-vid-slides"); 
 
$('button#playpause').click(function(){
  if ($('button#playpause').hasClass("active")){
    
    $(".active-vid-slides .mp-video").get(0).play();
    $('button#playpause').html("");
    $('button#playpause').toggleClass("active");
  } else {
    
    $(".active-vid-slides .mp-video").get(0).pause();
    $('button#playpause').html("");
    $('button#playpause').toggleClass("active");
  }
});
 
});
});

jQuery(function ($) { 
$('.main-hamburger-menu').click( function() {
    $(".header-titles-wrapper").toggleClass("hide-branding");
} );
});

jQuery(function ($) { 
$('span.qs-gal-img-button:first-of-type').click( function() {
    $(".qs-gal-img:first-of-type").toggleClass("image-active");
    $(".qs-gal-img:nth-of-type(2)").removeClass("image-active");
    $(".qs-gal-img:last-of-type").removeClass("image-active");
    $("span.qs-gal-img-button:first-of-type").toggleClass("thumb-active");
    $("span.qs-gal-img-button:nth-of-type(2)").removeClass("thumb-active");
    $("span.qs-gal-img-button:last-of-type").removeClass("thumb-active");
} );
});

jQuery(function ($) { 
$('span.qs-gal-img-button:nth-of-type(2)').click( function() {
    $(".qs-gal-img:first-of-type").removeClass("image-active");
    $(".qs-gal-img:nth-of-type(2)").toggleClass("image-active");
    $(".qs-gal-img:last-of-type").removeClass("image-active");
    $("span.qs-gal-img-button:first-of-type").removeClass("thumb-active");
    $("span.qs-gal-img-button:nth-of-type(2)").toggleClass("thumb-active");
    $("span.qs-gal-img-button:last-of-type").removeClass("thumb-active");
} );
});

jQuery(function ($) { 
$('span.qs-gal-img-button:last-of-type').click( function() {
    $(".qs-gal-img:first-of-type").removeClass("image-active");
    $(".qs-gal-img:nth-of-type(2)").removeClass("image-active");
    $(".qs-gal-img:last-of-type").toggleClass("image-active");
    $("span.qs-gal-img-button:first-of-type").removeClass("thumb-active");
    $("span.qs-gal-img-button:nth-of-type(2)").removeClass("thumb-active");
    $("span.qs-gal-img-button:last-of-type").toggleClass("thumb-active");
} );
});




