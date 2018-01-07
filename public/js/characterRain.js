/**
 * Character Rain Plugin
 */
(function($){

    'use strict';

    var defaults = {
        canvas : ''
    };

    /**
     *
     * @param opts
     * @constructor
     */
    function CharacterRain(opts)
    {
        var opts = $.extend({}, defaults, opts);
        //an array of this._drops - one per column
        this._drops = [];

        //chinese characters - taken from the unicode charset
        this._chinese = "stevens cs";

        this._font_size = 11;
        
        this._canvas = opts.canvas ? opts.canvas : document.getElementById('CharacterRain');

        this._id = Math.random();

        if(!this._canvas) throw new DOMException('You must setup a \'canvas\' argument ');
    };

    /**
     * Initialize CharacterRain Plugin
     */
    CharacterRain.prototype.init = function ()
    {
        var _this = this;

        this._ctx = this._canvas.getContext("2d");

        //making the canvas full screen
        this._canvas.height = window.innerHeight;
        this._canvas.width = window.innerWidth;

        this._columns = this._canvas.width / this._font_size; //number of this._columns for the rain

        //x below is the x coordinate
        //1 = y co-ordinate of the drop(same for every drop initially)
        for (var x = 0; x < this._columns; x++)
            this._drops[x] = 1;

        this._drawTimeID = setInterval(function () {
            CharacterRain.prototype.draw.call(_this);
        }, 50);

        $(window).one('resize', function(){
            _this.destroy();
            _this.init();
        });

        return this;
    };

    /**
     * Draw character rain drop
     */
    CharacterRain.prototype.draw = function()
    {
        //Black BG for the canvas
        //translucent BG to show trail
        this._ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
        this._ctx.fillRect(0, 0, this._canvas.width, this._canvas.height);

        this._ctx.fillStyle = "#0F0"; //green text
        this._ctx.font = this._font_size + "px arial";
        //looping over drops
        for (var i = 1; i < this._drops.length-1; i++) {

            //a random this._chinese character to print
            var text = this._chinese[Math.floor(Math.random() * this._chinese.length)];
            //x = i*this._font_size, y = value of this._drops[i]*this._font_size
            this._ctx.fillText(text, i * this._font_size, this._drops[i] * this._font_size);

            //sending the drop back to the top randomly after it has crossed the screen
            //adding a randomness to the reset to make the drops scattered on the Y axis
            if (this._drops[i] * this._font_size > this._canvas.height && Math.random() > 0.975) {
                this._drops[i] = 0;
                $(document).trigger('CharacterRainColumnFinish', [this])
            }

            //incrementing Y coordinate
            this._drops[i]++;

        }

        return this;
    }

    /**
     * Destroy CharacterRain Plugin
     */
    CharacterRain.prototype.destroy = function()
    {
        if(this._drawTimeID) clearInterval(this._drawTimeID);
        this._ctx.clearRect(0, 0, this._canvas.width, this._canvas.height);
        return this;
    };

    //export
    window['CharacterRain'] = CharacterRain;

})(jQuery);
