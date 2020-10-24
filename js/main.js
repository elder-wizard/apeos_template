$(document).ready(function() {

    //slider
    $('.flexslider').flexslider({
        animation: "fade",
        directionNav: false,
    });
});

(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
}(jQuery));




$(window).scroll(function() {
    var hT = $('#circle').offset().top,
        hH = $('#circle').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    // console.log((hT - wH), wS);
    if (wS > (hT + hH - wH)) {
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 900,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        }); {
            $('.count').removeClass('count').addClass('counted');
        }
    }
});
    


  



