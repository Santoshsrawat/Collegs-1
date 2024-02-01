jQuery(function($) {
    
    // Header fix on scroll
      jQuery(window).on("scroll", function () {
        var scrollTop = jQuery(window).scrollTop();
        if (scrollTop > 100) {
          jQuery("#header").addClass("fixed");
        } else {
          jQuery("#header").removeClass("fixed");
        }
      });


    
            
      jQuery(".openNav").on('click', function () {
        jQuery('#nav').addClass('open');
      });
        
      jQuery(".closeNav").on('click', function () {
        jQuery('#nav').removeClass('open');
      });
      
    
    jQuery(window).on('load', function() {
        if (jQuery(this).width() < 991) {
            jQuery('ul.dropdown-menu').hide();
        }
    });
    
    if (window.matchMedia("(max-width:991px)").matches) {
       jQuery('ul.dropdown-menu').hide();
    }
    
    jQuery('.drop_btn').on('click focusin', function(){
        jQuery(this).toggleClass("active").next('ul.dropdown-menu').toggle(200);
//        var dropId = jQuery(this).attr('data-id');
//        jQuery('.dropdown-menu#' + dropId).toggle(200);
          
      });
        
    
    //   $('.dropdoen_contentArea .content_list:first').show();
    //   $('.dropdoen_listArea .dropdown_item:first>a').addClass('active');
    //   $('.dropdoen_listArea .dropdown_item>a').on('mouseover', function(){
    //       var menuItem = $(this).attr('href');
    //       $('.dropdoen_listArea .dropdown_item>a.active').removeClass('active');
    //       $(this).addClass('active');
    //       $('.dropdoen_contentArea .content_list').hide();
    //       $(menuItem).show();
    //   });


      // Smooth scrolling & Active link switching
      jQuery(document).ready(function () {
        var scrollLink = jQuery('.page-scroll');
        scrollLink.click(function (e) {
            jQuery(".page-scroll.active").removeClass("active");
            jQuery(this).addClass("active");
          e.preventDefault();
          jQuery('body,html').animate({
            scrollTop: jQuery(this.hash).offset().top - 100
          }, 300);
        });
      });
      
      jQuery(".filter_openBtn").on('click', function () {
        jQuery('.filter_sidebar').addClass('open');
        jQuery('.filter_closeBtn').addClass('active');
      });
      jQuery(".filter_closeBtn").on('click', function () {
        jQuery('.filter_sidebar').removeClass('open');
        jQuery(this).removeClass('active');
      });
    
//      jQuery(".dropBtn").on('click', function () {
//        jQuery(this).closest(".dropdownBox").find(".dropdownMenu").toggle(200);
//      });
//      jQuery('.dropdownBox').click( function(e) { e.stopPropagation(); });
//      jQuery('body').click( function() { jQuery('.dropdownMenu').hide(200); });

    $(".videoPlayBtn").on('click', function() {
        var video_src = $(this).attr('data-video');
        $(".video_playPopup").show(400);
        $("#review_video").attr('src', video_src);

    });

    $(".close_playPopup").on('click', function() {
        $(".video_playPopup").hide(200);
        $("#review_video").attr('src', '');
    }); 

    
});

           

const images = document.querySelectorAll('img[data-src]');
const config = {
  rootMargin: '50px 0px',
  threshold: 0.01
};

let observer;

if ('IntersectionObserver' in window) {
  observer = new IntersectionObserver(onChange, config);
  images.forEach(img => observer.observe(img));
} else {
  console.log('%cIntersection Observers not supported', 'color: red');
  images.forEach(image => loadImage(image));
}

const loadImage = image => {
  image.classList.add('fade-in');
  image.src = image.dataset.src;
}

function onChange(changes, observer) {
  changes.forEach(change => {
    if (change.intersectionRatio > 0) {
      // Stop watching and load the image
      loadImage(change.target);
      observer.unobserve(change.target);
    }

  });
}
