<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
 body {
   background-color: #403060;
   background-image: radial-gradient( circle, rgba(  0, 0, 0, 0 ) 0%, rgba( 0, 0, 0, 0.8 ) 100% );
   background-position: center center;
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
}
th{ background-color:lightsalmon;
  height:22px;
  
}tr{
  height:40px;}
  td{
    background-color:rgb(240, 227, 222);
  
} .update{
        background:green;
        color:white;
        border:0;
        outline:none;
        border-radius:10px;
        height:22px;
        width:70px;
        font-weight:bold;
        cursor:pointer;
        padding-left:2px;
    }
    .delete{
        background:red;
        color:white;
        border:0;
        outline:none;
        border-radius:10px;
        height:22px;
        width:70px;
        font-weight:bold;
        cursor:pointer;
    }.mb-5{
      color:red;
    }
        </style>
    </head>
    <body>
      <div>

      <div class="container">
    	<h1 class="mt-5 mb-5">CLASS TEACHER'S RATING GIVEN BY STUDENTS</h1>
    	<div class="card">
    		<div class="card-header"></div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>

    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>




  </div>

    </body>
    <script>
        /**
 * Ribbons Class File.
 * Creates low-poly ribbons background effect inside a target container.
 */
;(function(name, factory) {
  if (typeof window === 'object') {
    window[name] = factory()
  }
})('Ribbons', function() {
  var _w = window,
    _b = document.body,
    _d = document.documentElement

  // random helper
  var random = function() {
    if (arguments.length === 1) {
      // only 1 argument
      if (Array.isArray(arguments[0])) {
        // extract index from array
        var index = Math.round(random(0, arguments[0].length - 1))
        return arguments[0][index]
      }
      return random(0, arguments[0]) // assume numeric
    } else if (arguments.length === 2) {
      // two arguments range
      return Math.random() * (arguments[1] - arguments[0]) + arguments[0]
    } else if (arguments.length === 4) {
      //

      var array = [arguments[0], arguments[1], arguments[2], arguments[3]]
      return array[Math.floor(Math.random() * array.length)]
      //return console.log(item)
    }
    return 0 // default
  }

  // screen helper
  var screenInfo = function(e) {
    var width = Math.max(
        0,
        _w.innerWidth || _d.clientWidth || _b.clientWidth || 0
      ),
      height = Math.max(
        0,
        _w.innerHeight || _d.clientHeight || _b.clientHeight || 0
      ),
      scrollx =
        Math.max(0, _w.pageXOffset || _d.scrollLeft || _b.scrollLeft || 0) -
        (_d.clientLeft || 0),
      scrolly =
        Math.max(0, _w.pageYOffset || _d.scrollTop || _b.scrollTop || 0) -
        (_d.clientTop || 0)

    return {
      width: width,
      height: height,
      ratio: width / height,
      centerx: width / 2,
      centery: height / 2,
      scrollx: scrollx,
      scrolly: scrolly
    }
  }

  // mouse/input helper
  var mouseInfo = function(e) {
    var screen = screenInfo(e),
      mousex = e ? Math.max(0, e.pageX || e.clientX || 0) : 0,
      mousey = e ? Math.max(0, e.pageY || e.clientY || 0) : 0

    return {
      mousex: mousex,
      mousey: mousey,
      centerx: mousex - screen.width / 2,
      centery: mousey - screen.height / 2
    }
  }

  // point object
  var Point = function(x, y) {
    this.x = 0
    this.y = 0
    this.set(x, y)
  }
  Point.prototype = {
    constructor: Point,

    set: function(x, y) {
      this.x = x || 0
      this.y = y || 0
    },
    copy: function(point) {
      this.x = point.x || 0
      this.y = point.y || 0
      return this
    },
    multiply: function(x, y) {
      this.x *= x || 1
      this.y *= y || 1
      return this
    },
    divide: function(x, y) {
      this.x /= x || 1
      this.y /= y || 1
      return this
    },
    add: function(x, y) {
      this.x += x || 0
      this.y += y || 0
      return this
    },
    subtract: function(x, y) {
      this.x -= x || 0
      this.y -= y || 0
      return this
    },
    clampX: function(min, max) {
      this.x = Math.max(min, Math.min(this.x, max))
      return this
    },
    clampY: function(min, max) {
      this.y = Math.max(min, Math.min(this.y, max))
      return this
    },
    flipX: function() {
      this.x *= -1
      return this
    },
    flipY: function() {
      this.y *= -1
      return this
    }
  }

  // class constructor
  var Factory = function(options) {
    this._canvas = null
    this._context = null
    this._sto = null
    this._width = 0
    this._height = 0
    this._scroll = 0
    this._ribbons = []
    this._options = {
      // ribbon color HSL saturation amount
      colorSaturation: '80%',
      // ribbon color HSL brightness amount
      colorBrightness: '60%',
      // ribbon color opacity amount
      colorAlpha: 0.65,
      // how fast to cycle through colors in the HSL color space
      colorCycleSpeed: 6,
      // where to start from on the Y axis on each side (top|min, middle|center, bottom|max, random)
      verticalPosition: 'center',
      // how fast to get to the other side of the screen
      horizontalSpeed: 150,
      // how many ribbons to keep on screen at any given time
      ribbonCount: 3,
      // add stroke along with ribbon fill colors
      strokeSize: 0,
      // move ribbons vertically by a factor on page scroll
      parallaxAmount: -0.5,
      // add animation effect to each ribbon section over time
      animateSections: true
    }
    this._onDraw = this._onDraw.bind(this)
    this._onResize = this._onResize.bind(this)
    this._onScroll = this._onScroll.bind(this)
    this.setOptions(options)
    this.init()
  }

  // class prototype
  Factory.prototype = {
    constructor: Factory,

    // Set and merge local options
    setOptions: function(options) {
      if (typeof options === 'object') {
        for (var key in options) {
          if (options.hasOwnProperty(key)) {
            this._options[key] = options[key]
          }
        }
      }
    },

    // Initialize the ribbons effect
    init: function() {
      try {
        this._canvas = document.createElement('canvas')
        this._canvas.style['display'] = 'block'
        this._canvas.style['position'] = 'fixed'
        this._canvas.style['margin'] = '0'
        this._canvas.style['padding'] = '0'
        this._canvas.style['border'] = '0'
        this._canvas.style['outline'] = '0'
        this._canvas.style['left'] = '0'
        this._canvas.style['top'] = '0'
        this._canvas.style['width'] = '100%'
        this._canvas.style['height'] = '100%'
        this._canvas.style['z-index'] = '-1'
        this._onResize()

        this._context = this._canvas.getContext('2d')
        this._context.clearRect(0, 0, this._width, this._height)
        this._context.globalAlpha = this._options.colorAlpha

        window.addEventListener('resize', this._onResize)
        window.addEventListener('scroll', this._onScroll)
        document.body.appendChild(this._canvas)
      } catch (e) {
        console.warn('Canvas Context Error: ' + e.toString())
        return
      }
      this._onDraw()
    },

    // Create a new random ribbon and to the list
    addRibbon: function() {
      // movement data
      var dir = Math.round(random(1, 9)) > 5 ? 'right' : 'left',
        stop = 1000,
        hide = 200,
        min = 0 - hide,
        max = this._width + hide,
        movex = 0,
        movey = 0,
        startx = dir === 'right' ? min : max,
        starty = Math.round(random(0, this._height))

      // asjust starty based on options
      if (/^(top|min)$/i.test(this._options.verticalPosition)) {
        starty = 0 + hide
      } else if (/^(middle|center)$/i.test(this._options.verticalPosition)) {
        starty = this._height / 2
      } else if (/^(bottom|max)$/i.test(this._options.verticalPosition)) {
        starty = this._height - hide
      }

      // ribbon sections data
      var ribbon = [],
        point1 = new Point(startx, starty),
        point2 = new Point(startx, starty),
        point3 = null,
        color = Math.round(random(35, 35, 40, 40)),
        delay = 0

      // buils ribbon sections
      while (true) {
        if (stop <= 0) break
        stop--

        movex = Math.round(
          (Math.random() * 1 - 0.2) * this._options.horizontalSpeed
        )
        movey = Math.round((Math.random() * 1 - 0.5) * (this._height * 0.25))

        point3 = new Point()
        point3.copy(point2)

        if (dir === 'right') {
          point3.add(movex, movey)
          if (point2.x >= max) break
        } else if (dir === 'left') {
          point3.subtract(movex, movey)
          if (point2.x <= min) break
        }
        // point3.clampY( 0, this._height );
        //console.log(Math.round(random(1, 5)))
        ribbon.push({
          // single ribbon section
          point1: new Point(point1.x, point1.y),
          point2: new Point(point2.x, point2.y),
          point3: point3,
          color: color,
          delay: delay,
          dir: dir,
          alpha: 0,
          phase: 0
        })

        point1.copy(point2)
        point2.copy(point3)

        delay += 4
        //color += 1
        //console.log('colorCycleSpeed', color)
      }
      this._ribbons.push(ribbon)
    },

    // Draw single section
    _drawRibbonSection: function(section) {
      if (section) {
        if (section.phase >= 1 && section.alpha <= 0) {
          return true // done
        }
        if (section.delay <= 0) {
          section.phase += 0.02
          section.alpha = Math.sin(section.phase) * 1
          section.alpha = section.alpha <= 0 ? 0 : section.alpha
          section.alpha = section.alpha >= 1 ? 1 : section.alpha

          if (this._options.animateSections) {
            var mod = Math.sin(1 + section.phase * Math.PI / 2) * 0.1

            if (section.dir === 'right') {
              section.point1.add(mod, 0)
              section.point2.add(mod, 0)
              section.point3.add(mod, 0)
            } else {
              section.point1.subtract(mod, 0)
              section.point2.subtract(mod, 0)
              section.point3.subtract(mod, 0)
            }
            section.point1.add(0, mod)
            section.point2.add(0, mod)
            section.point3.add(0, mod)
          }
        } else {
          section.delay -= 0.5
        }
        //console.log('section.color', section.color)
        var s = this._options.colorSaturation,
          l = this._options.colorBrightness,
          c =
            'hsla(' +
            section.color +
            ', ' +
            s +
            ', ' +
            l +
            ', ' +
            section.alpha +
            ' )'

        this._context.save()

        if (this._options.parallaxAmount !== 0) {
          this._context.translate(
            0,
            this._scroll * this._options.parallaxAmount
          )
        }
        this._context.beginPath()
        this._context.moveTo(section.point1.x, section.point1.y)
        this._context.lineTo(section.point2.x, section.point2.y)
        this._context.lineTo(section.point3.x, section.point3.y)
        this._context.fillStyle = c
        this._context.fill()

        if (this._options.strokeSize > 0) {
          this._context.lineWidth = this._options.strokeSize
          this._context.strokeStyle = c
          this._context.lineCap = 'round'
          this._context.stroke()
        }
        this._context.restore()
      }
      return false // not done yet
    },

    // Draw ribbons
    _onDraw: function() {
      // cleanup on ribbons list to rtemoved finished ribbons
      for (var i = 0, t = this._ribbons.length; i < t; ++i) {
        if (!this._ribbons[i]) {
          this._ribbons.splice(i, 1)
        }
      }

      // draw new ribbons
      this._context.clearRect(0, 0, this._width, this._height)

      for (
        var a = 0;
        a < this._ribbons.length;
        ++a // single ribbon
      ) {
        var ribbon = this._ribbons[a],
          numSections = ribbon.length,
          numDone = 0

        for (
          var b = 0;
          b < numSections;
          ++b // ribbon section
        ) {
          if (this._drawRibbonSection(ribbon[b])) {
            numDone++ // section done
          }
        }
        if (numDone >= numSections) {
          // ribbon done
          this._ribbons[a] = null
        }
      }
      // maintain optional number of ribbons on canvas
      if (this._ribbons.length < this._options.ribbonCount) {
        this.addRibbon()
      }
      requestAnimationFrame(this._onDraw)
    },

    // Update container size info
    _onResize: function(e) {
      var screen = screenInfo(e)
      this._width = screen.width
      this._height = screen.height

      if (this._canvas) {
        this._canvas.width = this._width
        this._canvas.height = this._height

        if (this._context) {
          this._context.globalAlpha = this._options.colorAlpha
        }
      }
    },

    // Update container size info
    _onScroll: function(e) {
      var screen = screenInfo(e)
      this._scroll = screen.scrolly
    }
  }

  // export
  return Factory
})

new Ribbons({
  colorSaturation: '60%',
  colorBrightness: '50%',
  colorAlpha: 0.5,
  colorCycleSpeed: 5,
  verticalPosition: 'random',
  horizontalSpeed: 200,
  ribbonCount: 3,
  strokeSize: 0,
  parallaxAmount: -0.2,
  animateSections: true
})
    </script>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">





                <label class="form-control-label">Select Teachers<span class="text-danger ml-2">*</span></label>
                         <?php
                         
include 'connection.php';
                        $qry= "SELECT * FROM tblclassteacher ORDER BY firstName & lastName ASC";
                        $result = $conn->query($qry);
                        $num = $result->num_rows;		
                        if ($num > 0){
                          echo ' <select required name="user_name" id="user_name">';
                          echo'<option value="">--Select Teachers--</option>';
                          while ($rows = $result->fetch_assoc()){
                          echo'<option value="'.$rows['firstName'].''.$rows['lastName'].'" >'.$rows['firstName'].''.$rows['lastName'].'</option>';
                              }
                                  echo '</select>';
                              }
                            ?> 
	        	</div>


                
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here & Also Mention their Subjects"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>
<script>
  
var rating_data = 0;

$('#add_review').click(function(){

    $('#review_modal').modal('show');

});

$(document).on('mouseenter', '.submit_star', function(){

    var rating = $(this).data('rating');

    reset_background();

    for(var count = 1; count <= rating; count++)
    {

        $('#submit_star_'+count).addClass('text-warning');

    }

});

function reset_background()
{
    for(var count = 1; count <= 5; count++)
    {

        $('#submit_star_'+count).addClass('star-light');

        $('#submit_star_'+count).removeClass('text-warning');

    }
}

$(document).on('mouseleave', '.submit_star', function(){

    reset_background();

    for(var count = 1; count <= rating_data; count++)
    {

        $('#submit_star_'+count).removeClass('star-light');

        $('#submit_star_'+count).addClass('text-warning');
    }

});

$(document).on('click', '.submit_star', function(){

    rating_data = $(this).data('rating');

});

$('#save_review').click(function(){

    var user_name = $('#user_name').val();

    var user_review = $('#user_review').val();

    if(user_name == '' || user_review == '')
    {
        alert("Please Fill Both Field");
        return false;
    }
    else
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
            success:function(data)
            {
                $('#review_modal').modal('hide');

                load_rating_data();

                alert(data);
            }
        })
    }

});


$('#save_review').click(function(){

var user_name = $('#user_name').val();

var user_review = $('#user_review').val();

if(user_name == '' || user_review == '')
{
    alert("Please Fill Both Field");
    return false;
}


});

load_rating_data();

function load_rating_data()
{
$.ajax({
    url:"submit_rating.php",
    method:"POST",
    data:{action:'load_data'},
    dataType:"JSON",
    success:function(data)
    {
        $('#average_rating').text(data.average_rating);
        $('#total_review').text(data.total_review);

        var count_star = 0;

        $('.main_star').each(function(){
            count_star++;
            if(Math.ceil(data.average_rating) >= count_star)
            {
                $(this).addClass('text-warning');
                $(this).addClass('star-light');
            }
        });

        $('#total_five_star_review').text(data.five_star_review);

        $('#total_four_star_review').text(data.four_star_review);

        $('#total_three_star_review').text(data.three_star_review);

        $('#total_two_star_review').text(data.two_star_review);

        $('#total_one_star_review').text(data.one_star_review);

        $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

        $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

        $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

        $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

        $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

        if(data.review_data.length > 0)
        {
            var html = '';

            for(var count = 0; count < data.review_data.length; count++)
            {
                html += '<div class="row mb-3">';

                html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                html += '<div class="col-sm-11">';

                html += '<div class="card">';

                html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                html += '<div class="card-body">';

                for(var star = 1; star <= 5; star++)
                {
                    var class_name = '';

                    if(data.review_data[count].rating >= star)
                    {
                        class_name = 'text-warning';
                    }
                    else
                    {
                        class_name = 'star-light';
                    }

                    html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                }

                html += '<br />';

                html += data.review_data[count].user_review;

                html += '</div>';

                html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                html += '</div>';

                html += '</div>';

                html += '</div>';
            }

            $('#review_content').html(html);
        }
    }
})
}


</script>