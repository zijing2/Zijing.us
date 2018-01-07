(function ($) {

    'use strict'

    var canvas = document.getElementById('c');
    var CharacterRainInstant = new CharacterRain({ canvas :canvas }).init();

    $(document).one('CharacterRainColumnFinish', function(){

        $('#Character_Rain_Sec').fadeIn();
        $('#preloader').fadeOut();
        $('#contentWrapper').fadeIn();

        ParticleApi.init({width:CharacterRainInstant._canvas.width, height: CharacterRainInstant._canvas.height});
    });



    
    var i = 0 , prec;
    var degs = 360;
    var activeBorder = $("#activeBorder");

    function loopit(dir){
        if (dir == "c")
            i = i+3
        else
            i = i-3;
        if (i < 0)
            i = 0;
        if (i > degs)
            i = degs;

        prec = (100*i)/360;

        if (i<=180){
            activeBorder.css('-webkit-background-image','-webkit-linear-gradient(0deg, black 50%, transparent 50%), -webkit-linear-gradient(' + (-i) + 'deg, transparent 50%, black 50%)');//android
            activeBorder.css('background-image','linear-gradient(90deg, black 50%, transparent 50%), linear-gradient(' + (90+i) + 'deg, transparent 50%, black 50%)');
        } else {
            activeBorder.css('-webkit-background-image','-webkit-linear-gradient(' + (360-i) + 'deg, #0F0 50%,  transparent 50%),-webkit-linear-gradient('+(-180)+'deg, transparent 50%, black 50%)');//android
            activeBorder.css('background-image','linear-gradient(' + (i-90) + 'deg, transparent 50%, #0F0 50%),linear-gradient(90deg, black 50%, transparent 50%)');
        }
    }

    /**
     * Get random arbitrary
     *
     * @param min
     * @param max
     * @returns {*}
     */
    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }


    var plusloopTimeId, minerLoopTimeId, fireX, fireY, fpSvg;

    fpSvg = $('#fpSvg');

    function coordidateHandler(){

        fireX = fpSvg.offset().left+fpSvg.width()/getRandomArbitrary(0.8, 7);
        fireY = fpSvg.offset().top+fpSvg.height()/getRandomArbitrary(1.2, 2);
        ParticleApi.setCoordinate(fireX, fireY);

    };


    $('#svg2').on('mousedown.fp touchstart.fp', function(e){

        e.preventDefault();

        clearInterval(minerLoopTimeId);

        plusloopTimeId = setInterval(function(){

            loopit("c");

            if(i == 360) {

                clearInterval(plusloopTimeId);

                coordidateHandler();

                var coorTimer = setInterval(function(){coordidateHandler();}, 300);

                var timer=setInterval("ParticleApi.update()", 40);

                $(this).off('mousedown.fp touchstart.fp mouseup.fp touchend.fp');

                $("#nav").fadeIn();

                $('#INTRODUCTION').textillate({
                    "loop": false,
                    "in": {"effect": "fadeInRightBig", "shuffle": false, "reverse": false, "sync": false},
                    "out": {"effect": "bounceOutLeft", "shuffle": false, "reverse": true, "sync": false}
                });

                $('#APPLY').textillate({
                    "loop": false,
                    "in": {"effect": "fadeInLeftBig", "shuffle": false, "reverse": false, "sync": false},
                    "out": {"effect": "bounceOutRight", "shuffle": false, "reverse": true, "sync": false}
                });

                $('#WORKS').on('inAnimationEnd.tlt',function(){
                    $('.tlt').textillate();
                }).textillate({
                    "loop": false,
                    "in": {"effect": "fadeInRightBig", "shuffle": false, "reverse": false, "sync": false},
                    "out": {"effect": "bounceOutLeft", "shuffle": false, "reverse": true, "sync": false}
                });


                //CharacterRainInstant.destroy();
            }

        },0);

    }).on('mouseup.fp touchend.fp', function(e){
        if(i < 360) {
            clearInterval(plusloopTimeId);
            minerLoopTimeId = setInterval(function() {
                loopit("nc");
                if(i == 0)  clearInterval(minerLoopTimeId);
            },0);

           }
    });



})(jQuery)