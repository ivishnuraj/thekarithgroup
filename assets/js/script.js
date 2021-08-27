$(document).on("ready",function(){
	new WOW().init();
$("html").niceScroll();
 $("[data-anime-delay]").each(function(e){
       $(this).css({"animation-delay":$(this).data("anime-delay")});
 })
 
        WOW.prototype.isPositionFixed = function(element) {
            var position;

            position = getComputedStyle(element).position;

            while (element.parentNode && element.parentNode.localName !== 'body' && position !== 'fixed') {
                position = getComputedStyle(element).position;
                if (position === 'fixed') { break; }
                element = element.parentNode;
            }

            return position === 'fixed' ? true : false;
        };


})


    $(window).on("scroll load",function(e){
        var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
        $('.imager').css("background-position","center "+scrollPercent+"%")
    })