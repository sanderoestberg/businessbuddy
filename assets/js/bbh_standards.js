(function($) {
    /*========================================
    =           Gravity Forms                  =
    ========================================*/
    /*-------------- Active state -------------*/
    $('.gform_wrapper input:not(:checkbox), .gform_wrapper textarea').focus(function(){
        $(this).siblings('label').addClass('active')
        $(this).parent().siblings('label').addClass('active')
    })

    $('.gform_wrapper input:not(:checkbox), .gform_wrapper textarea').on('blur', function(){
        if(!this.value) {
            $(this).siblings('label').removeClass('active')
            $(this).parent().siblings('label').removeClass('active')
        }
    })

    /*-------------- Validation -------------*/
    $('.gform_wrapper form').each(function() {
        $(this).find('li.gfield_contains_required').each(function() {
            if($(this).find('input').attr('type') == 'email') {
                $(this).find('input').prop('pattern', '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$')
            }
            $(this).find('input, textarea').prop('required', 'required')
        })
    })

    /*========================================
    =                DEBOUNCE                =
    ========================================*/
    function debounce(func, wait, immediate) {
        var timeout
        return function() {
            var context = this, args = arguments
            var later = function() {
                timeout = null
                if (!immediate) func.apply(context, args)
            }
            var callNow = immediate && !timeout
            clearTimeout(timeout)
            timeout = setTimeout(later, wait)
            if (callNow) func.apply(context, args)
        }
    }
    /*========================================
    =                THROTTLE                =
    ========================================*/
    function throttle(func, wait, options) {
        var context, args, result
        var timeout = null
        var previous = 0
        if (!options) options = {}
        var later = function() {
            previous = options.leading === false ? 0 : Date.now()
            timeout = null
            result = func.apply(context, args)
            if (!timeout) context = args = null
        }
        return function() {
            var now = Date.now()
            if (!previous && options.leading === false) previous = now
            var remaining = wait - (now - previous)
            context = this
            args = arguments
            if (remaining <= 0 || remaining > wait) {
                if (timeout) {
                    clearTimeout(timeout)
                    timeout = null
                }
                previous = now
                result = func.apply(context, args)
                if (!timeout) context = args = null
            } else if (!timeout && options.trailing !== false) {
                timeout = setTimeout(later, remaining)
            }
            return result
        }
    }

    /*=============================================
             = Typewriter effect banner =
   ===============================================*/

  var TxtRotate = function TxtRotate(el, toRotate, period) {
    let ref = this;
    this.toRotate = toRotate;
    this.el = el;
    this.parentNode = this.el.parentNode;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = el.textContent;
    this.tick();
    this.isDeleting = true;
    this.height = this.parentNode.clientHeight;
    ref.parentNode.style.minHeight = this.height + 'px';
    window.addEventListener('resize', function () {
      ref.height = 0;
      ref.parentNode.style.minHeight = ref.height + 'px';
    });
  };

  TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.classList.add('writing');
    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
    var that = this;
    var delta = Math.random() * (150 - 80) + 80; //var delta = 300 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
      this.el.classList.remove('writing');
      this.height = this.height < this.parentNode.clientHeight ? this.parentNode.clientHeight : this.height;
      this.parentNode.style.minHeight = this.height + 'px';
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.el.classList.remove('writing');
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName('txt-rotate');

    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');

      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
  };

    /*========================================
    =                EQUAL HEIGHT            =
    ========================================*/
    // (function($) {
    //     'use strict'
    //     $.fn.equalHeight = function() {
    //         var heights = []
    //         $.each(this, function(i, element) {
    //             var $element = $(element)
    //             var elementHeight
    //             var includePadding = ($element.css('box-sizing') === 'border-box') || ($element.css('-moz-box-sizing') === 'border-box')
    //             if (includePadding) {
    //                 elementHeight = $element.innerHeight()
    //             } else {
    //                 elementHeight = $element.height()
    //             }
    //             heights.push(elementHeight)
    //         })
    //         this.css('height', Math.max.apply(window, heights) + 'px')
    //         return this
    //     }
    //     $.fn.equalHeightGrid = function(columns) {
    //         var $tiles = this.filter(':visible')
    //         $tiles.css('height', 'auto')
    //         for (var i = 0; i < $tiles.length; i++) {
    //             if (i % columns === 0) {
    //                 var row = $($tiles[i])
    //                 for (var n = 1; n < columns; n++) {
    //                     row = row.add($tiles[i + n])
    //                 }
    //                 row.equalHeight()
    //             }
    //         }
    //         return this
    //     }
    //     $.fn.detectGridColumns = function() {
    //         var offset = 0,
    //         cols = 0,
    //         $tiles = this.filter(':visible')
    //         $tiles.each(function(i, elem) {
    //             var elemOffset = $(elem).offset().top
    //             if (offset === 0 || elemOffset === offset) {
    //                 cols++
    //                 offset = elemOffset
    //             } else {
    //                 return false
    //             }
    //         })
    //         return cols
    //     }
    //     var grids_event_uid = 0
    //     $.fn.responsiveEqualHeightGrid = function() {
    //         var _this = this
    //         var event_namespace = '.grids_' + grids_event_uid
    //         _this.data('grids-event-namespace', event_namespace)
    //
    //         function syncHeights() {
    //             var cols = _this.detectGridColumns()
    //             _this.equalHeightGrid(cols)
    //         }
    //         $(window).bind('resize' + event_namespace + ' load' + event_namespace, syncHeights)
    //         syncHeights()
    //         grids_event_uid++
    //         return this
    //     }
    //     $.fn.responsiveEqualHeightGridDestroy = function() {
    //         var _this = this
    //         _this.css('height', 'auto')
    //         $(window).unbind(_this.data('grids-event-namespace'))
    //         return this
    //     }
    // })(window.jQuery);

    /*========================================
    =                RESIZE                 =
    ========================================*/
    function resizeGrid() {
        if($('.parent')) {
            $('.parent .child').responsiveEqualHeightGrid()
        }
    }

    $(document).ready(function() {
        resizeGrid()
    })

    var resizeThrottle = throttle(function(){
        resizeGrid()
    }, 20)

    $(window).resize(function(){
        resizeThrottle()
    })


    /*=============================================
              = Enter-view animations =
    ===============================================*/
    // let bbhEnterView = function(){
    //     $('[data-animation]').each(function(){
    //         let offset = this.getAttribute('data-animation-offset') || 0.1;
    //         let once = this.getAttribute('data-animation-once') || true;
    //         let delay = this.getAttribute('data-animation-delay') || 0;
    //         enterView({
    //             selector: [this],
    //             enter: function enter(el) {
    //                 setTimeout(function(){
    //                     let animationClass = el.getAttribute("data-animation");
    //                     el.classList.add('animated');
    //                     el.classList.add(animationClass); //change this class to change animation
    //                 }, delay);
    //
    //             },
    //             exit: function exit(el) {
    //                 let animationClass = el.getAttribute("data-animation");
    //                 el.classList.remove('animated');
    //                 el.classList.remove(animationClass); //change this class to change animation
    //             },
    //             offset: parseFloat(offset),
    //             once: once
    //         });
    //     })
    // }
    // $(document).ready(function(){
    //     let test = new bbhEnterView();
    // })

})( jQuery )
