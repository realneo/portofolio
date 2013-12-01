$(document).ready(function(){
    
    //top menu animation
    $('.top_menu').hover(function(){
        $(this).stop().animate({'padding-top' : '60px'}, 250);
        $("p", this).stop().delay(50).fadeIn();
    },function(){
        $(this).stop().animate({'padding-top' : '0px'}, 250);
        $("p", this).stop().delay(50).fadeOut();
    });
    
    // top menu scroll animation
    var $root = $('html, body');
    $('.top_menu a').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    });
    
    //button animation
    $('a.btn').hover(function(){
        $(this).stop().animate({'border-color':'#fff'});
    });
    
    // btn scroll animation
    var $root = $('html, body');
    $('a.btn').click(function() {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    });
    
    // PERSONAL STATS **************************************/
    $('.ps_inner_box').hover(function(){
        $(this).stop().animate({'top' : '-250px'});
    },function(){
        $(this).stop().animate({'top' : '0px'});
    });
    
});