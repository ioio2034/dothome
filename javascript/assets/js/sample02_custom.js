//count
function counter() {
    if ($('.counter .count').size()) {
        $c = $('.counter .count');

        $c.each(function () {
            var $this = $(this);
            $this.data('target', parseInt($this.html()));
            $this.data('counted', false);
            $this.html('0');
        });

        $(window).bind('scroll', function () {
            var speed = 2000;

            $c.each(function (i) {
                var $t = $(this);
                if (!$t.data('counted') && $(window).scrollTop() + $(window).height() >= $t.offset().top) {
                    
                    $(".skill-wrap").addClass("show");
                    
                    $t.data('counted', true);

                    $t.animate({
                        dummy: 1
                    }, {
                        duration: speed,
                        step: function (now) {
                            var $this = $(this);
                            var val = Math.round($this.data('target') * now);
                            $this.html(val);
                        },
                        easing: 'easeInOutQuart'
                    });

                    // easy pie
                    $('.pie').easyPieChart({
                        barColor: '#fff',
                        trackColor: '#121212',
                        scaleColor: '#ccc',
                        scaleLength: 5,
                        lineWidth: 10,
                        size: 300,
                        lineCap: 'round',
                        animate: { duration: speed, enabled: true }
                    });
                }
            });
        }).triggerHandler('scroll');
    }
}


//imageProgress
function imagesProgress(){
    var $container = $("#progress"),
        $progressBar = $container.find(".e-loadholder"),
        $progressText = $container.find(".progress-text"),
        imgLoad = imagesLoaded("body"), 
        imgTotal = imgLoad.images.length,   
        imgLoaded = 0,                                      
        current = 0,                            
        progressTimer = setInterval(updateProgress, 1000 / 60);
    
    imgLoad.on("progress", function(){
        imgLoaded++;
    });

    function updateProgress(){
        var target = ( imgLoaded / imgTotal) * 100;
        
        current += ( target - current) * 0.1;
        $progressText.text( Math.floor(current) + '%' );
        
        if(current >= 100){
            clearInterval(progressTimer);
            $container.addClass("progress-complete");
            $progressBar.add($progressText)
                .delay(500)
                .animate({opacity: 0},250,function(){
                    $container.animate({top: '-100%'},1000,'easeInOutQuint');
                });
            $("body").addClass("active");
        }
        if(current > 99.9){
            current = 100;
        }
    }   
}

//parallax 
var dot = $(".dot ul li");
var cont = $("#contents > div");

dot.click(function(e){
    e.preventDefault();
    var target = $(this);
    var index = target.index();
    var section = cont.eq(index);
    var offset = section.offset().top;
    offset = parseInt(offset);  
    $("html,body").animate({ scrollTop:offset },600,"easeInOutExpo");
});

$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    wScroll = parseInt(wScroll);

    if(wScroll > $(window).height()/2 ){
        $(".site").addClass("hide");
        $(".sns").addClass("hide");
        $(".dot").removeClass("hide");
    } else {
        $(".site").removeClass("hide");
        $(".sns").removeClass("hide");
        $(".dot").addClass("hide");
    }
    
    if(wScroll >= cont.eq(0).offset().top){
        dot.removeClass("active");
        dot.eq(0).addClass("active");
    }
    if(wScroll >= cont.eq(1).offset().top){
        dot.removeClass("active");
        dot.eq(1).addClass("active");
    }
    if(wScroll >= cont.eq(2).offset().top){
        dot.removeClass("active");
        dot.eq(2).addClass("active");
    }
    if(wScroll >= cont.eq(3).offset().top){
        dot.removeClass("active");
        dot.eq(3).addClass("active");
    }
    if(wScroll >= cont.eq(4).offset().top){
        dot.removeClass("active");
        dot.eq(4).addClass("active");
    }

    if(wScroll >= cont.eq(2).offset().top - $(window).height()/2){
        cont.eq(2).find(".sec3").addClass("show");
    }

    if(wScroll >= $(".box-list.img1").offset().top - $(window).height()/2 ){
        $(".box-list.img1").addClass("show");
    } else {
        $(".box-list.img1").removeClass("show");
    }
    if(wScroll >= $(".box-list.img2").offset().top - $(window).height()/2 ){
        $(".box-list.img2").addClass("show");
    } else {
        $(".box-list.img2").removeClass("show");
    }
    if(wScroll >= $(".box-list.img3").offset().top - $(window).height()/2 ){
        $(".box-list.img3").addClass("show");
    } else {
        $(".box-list.img3").removeClass("show");
    }
    if(wScroll >= $(".box-list.img4").offset().top - $(window).height()/2 ){
        $(".box-list.img4").addClass("show");
    } else {
        $(".box-list.img4").removeClass("show");
    }
    if(wScroll >= $(".box-list.img5").offset().top - $(window).height()/2 ){
        $(".box-list.img5").addClass("show");
    } else {
        $(".box-list.img5").removeClass("show");
    }


});

particlesJS("particleCanvas-Blue", {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: {
            value: "#fff"
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000"
            },
            polygon: {
                nb_sides: 3
            },
            image: {
                src: "img/github.svg",
                width: 100,
                height: 100
            }
        },
        opacity: {
            value: 0.5,
            random: false,
            anim: {
                enable: true,
                speed: 1,
                opacity_min: 0.1,
                sync: false
            }
        },
        size: {
            value: 10,
            random: true,
            anim: {
                enable: false,
                speed: 10,
                size_min: 0.1,
                sync: false
            }
        },
        line_linked: {
            enable: false,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 0.5,
            direction: "none",
            random: true,
            straight: false,
            out_mode: "bounce",
            bounce: false,
            attract: {
                enable: false,
                rotateX: 394.57382081613633,
                rotateY: 157.82952832645452
            }
        }
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: true,
                mode: "grab"
            },
            onclick: {
                enable: false,
                mode: "push"
            },
            resize: true
        },
        modes: {
            grab: {
                distance: 200,
                line_linked: {
                    opacity: 0.2
                }
            },
            bubble: {
                distance: 1500,
                size: 40,
                duration: 7.272727272727273,
                opacity: 0.3676323676323676,
                speed: 3
            },
            repulse: {
                distance: 50,
                duration: 0.4
            },
            push: {
                particles_nb: 4
            },
            remove: {
                particles_nb: 2
            }
        }
    },
    retina_detect: true
});

particlesJS("particleCanvas-White", {
    particles: {
        number: {
            value: 250,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: {
            value: "#ffffff"
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000"
            },
            polygon: {
                nb_sides: 3
            },
            image: {
                src: "img/github.svg",
                width: 100,
                height: 100
            }
        },
        opacity: {
            value: 0.5,
            random: true,
            anim: {
                enable: false,
                speed: 0.2,
                opacity_min: 0,
                sync: false
            }
        },
        size: {
            value: 15,
            random: true,
            anim: {
                enable: true,
                speed: 10,
                size_min: 0.1,
                sync: false
            }
        },
        line_linked: {
            enable: false,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 0.5,
            direction: "none",
            random: true,
            straight: false,
            out_mode: "bounce",
            bounce: false,
            attract: {
                enable: true,
                rotateX: 3945.7382081613637,
                rotateY: 157.82952832645452
            }
        }
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: false,
                mode: "grab"
            },
            onclick: {
                enable: false,
                mode: "push"
            },
            resize: true
        },
        modes: {
            grab: {
                distance: 200,
                line_linked: {
                    opacity: 0.2
                }
            },
            bubble: {
                distance: 1500,
                size: 40,
                duration: 7.272727272727273,
                opacity: 0.3676323676323676,
                speed: 3
            },
            repulse: {
                distance: 50,
                duration: 0.4
            },
            push: {
                particles_nb: 4
            },
            remove: {
                particles_nb: 2
            }
        }
    },
    retina_detsect: true
});