<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jPOT by Roko CB</title>
    
    <style>
        body{text-align:center;}
        #wheel{
          display:inline-block;
          position:relative;
          overflow:hidden;
        }
        #wheel:after{
          content:"";
          background:red;
          border:2px solid white;
          position:absolute;
          top:-7px;
          left:50%;
          width:10px;
          height:10px;
          margin-left:-7px;
          transform: rotate(45deg)
        }
    </style>
  </head>
  <body>

    
 <div id="wheel">
    <canvas id="canvas" width="300" height="300"></canvas>
 </div>
    
    <br>
    <button id="spin">Stop!</button>


    <script type="text/javascript" charset="utf-8">
        function rand(min, max) {
          return Math.random() * (max - min) + min;
        }

        var color = ['#fbc','#f88','#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88', "#f67"];
        var label = ['10', '200', '50', '100', '5', '500', '0', '300', '3', '600', "jPOT"];
        var slices = color.length;
        var sliceDeg = 360/slices;
        var deg = rand(0, 360);
        var speed = 0;
        var slowDownRand = 0;
        var ctx = canvas.getContext('2d');
        var width = canvas.width; // size
        var center = width/2;      // center
        var isStopped = false;
        var lock = false;
        var rng = "";
        
        function deg2rad(deg) {
          return deg * Math.PI/180;
        }

        function drawSlice(deg, color) {
          ctx.beginPath();
          ctx.fillStyle = color;
          ctx.moveTo(center, center);
          ctx.arc(center, center, width/2, deg2rad(deg), deg2rad(deg+sliceDeg));
          ctx.lineTo(center, center);
          ctx.fill();
        }

        function drawText(deg, text) {
          ctx.save();
          ctx.translate(center, center);
          ctx.rotate(deg2rad(deg));
          ctx.textAlign = "right";
          ctx.fillStyle = "#fff";
          ctx.font = 'bold 30px sans-serif';
          ctx.fillText(text, 130, 10);
          ctx.restore();
        }

        function drawImg() {
          ctx.clearRect(0, 0, width, width);
          for(var i=0; i<slices; i++){
            drawSlice(deg, color[i]);
            drawText(deg+sliceDeg/2, label[i]);
            deg += sliceDeg;
          }
        }

        (function anim() {
          deg += speed;
          deg %= 360;

          // Increment speed
          if(!isStopped && speed<3){
            speed = speed+1 * 0.1;
          }
          // Decrement Speed
          if(isStopped){
            if(!lock){
                lock = true;
                
                rng = "300";
                
                rng_idx = 1;
                rng_idx++;
                rng_deg = ((360 - 90) - (rng_idx * sliceDeg)) + (sliceDeg / 2.77);
                //rng_deg = Math.abs(rng_deg)

                if (0 > rng_deg) {
                    rng_deg = (360 + rng_deg);
                }
            }
            //console.log('RNG DEG:'+rng_deg)
            //console.log('Curr:'+deg);
            var ai2 = Math.floor(((360 - deg - 90) % 360) / sliceDeg); // deg 2 Array Index

            ai2 = (slices+ai2)%slices; // Fix negative index
            //console.log('RNG:'+rng);
            //console.log('Curr:'+label[ai2]);
            if (Math.floor(deg) == Math.floor(rng_deg)) {
            //if (label[ai2] == rng) {
                speed = 0;
            }
            else {
                speed = 0.977;
            }
            //speed = speed>0.2 ? speed*=slowDownRand : 0;
            
          }
          // Stopped!
          if(lock && !speed){
            console.log(deg);
            //deg += 5.7;
            drawImg();
            
            var ai = Math.floor(((360 - deg - 90) % 360) / sliceDeg); // deg 2 Array Index
            
            ai = (slices+ai)%slices; // Fix negative index
            
            
          
            return console.log("You got:\n"+ label[ai] ); // Get Array Item from end Degree
          }

          drawImg();
          window.requestAnimationFrame( anim );
        }());

        document.getElementById("spin").addEventListener("mousedown", function(){
          isStopped = true;
        }, false);

    </script>
</body>
</html>