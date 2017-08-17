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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
    
        <div id="wheel">
            <canvas id="canvas" width="1200" height="800"></canvas>
        </div>
    
        <br>
        <button id="spin">Spin!</button>

        <script type="text/javascript" charset="utf-8">
        function rand(min, max) {
            return Math.random() * (max - min) + min;
        }

        var color = ['#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88', "#f67", '#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88'];
        
        var label = ['Lose', '(2x)', '(1x)', '(4x)', '(0.5x)', '(3x)', '(5x)', 'Lose', "JPOT!", 'Lose', '(2x)', '(1x)', '(4x)', '(0.5x)', '(3x)', '(5x)', 'Lose'];
        var slices = color.length;
        var sliceDeg = 360/slices;
        var deg = rand(0, 360);
        var speed = 0;
        var slowDownRand = 0;
        var ctx = canvas.getContext('2d');
        var width = canvas.width; // size
        var center = width/2;      // center
        var spinning = false;
        var lock = false;
        var rng = "";
        var bg_off = new Image();
        var bg_on = new Image();
        var cont = new Image();
        var lyt = 0;
        var lyt_ctr = 0;
        var wheel_x = 780;
        var wheel_y = 350;
        var cont_x = 80;
        var bglights_x = 500 ;
        var bglights_y = 50 ;
        var bglights_height = 570 ;
        var bglights_width = 570 ;
        
        bg_off.src = '../assets/images/wheel/bg_off.png';
        bg_on.src = '../assets/images/wheel/bg_on.png';
        cont.src = '../assets/images/wheel/container.png';
        
        function deg2rad(deg) {
            return deg * Math.PI/180;
        }
        function drawcont(){
             
        }
        function drawBg(lit) {
            if (0 == lit) {
                ctx.drawImage(bg_off, bglights_x, bglights_y, bglights_height, bglights_width);
            }
            else {
                ctx.drawImage(bg_on, bglights_x, bglights_y, bglights_height, bglights_width);
            }
        }
        
        function drawSlice(deg, color) {
            ctx.beginPath();
            ctx.fillStyle = color;
            ctx.moveTo(wheel_x, wheel_y);
            ctx.arc(wheel_x, wheel_y, (500)/2, deg2rad(deg), deg2rad(deg+sliceDeg));
            ctx.lineTo(wheel_x, wheel_y);
            ctx.fill();
        }

        function drawText(deg, text) {
            ctx.save();
            ctx.translate(wheel_x, wheel_y);
            ctx.rotate(deg2rad(deg));
            ctx.textAlign = "right";
            ctx.fillStyle = "black";
            ctx.font = 'bold 20px sans-serif';
            ctx.fillText(text, 140, 10);
            ctx.restore();
        }

        function drawImg() {
            ctx.clearRect(0, 0, 500, 500);
            
            for(var i=0; i<slices; i++){
                drawSlice(deg, color[i]);
                drawText(deg+sliceDeg/2, label[i]);
                deg += sliceDeg;
            }
            ctx.drawImage(cont, cont_x,195, 410 , 80); 
            ctx.drawImage(cont, cont_x,285, 300 , 80); 
            ctx.drawImage(cont, cont_x,375, 250 , 80); 
            ctx.fillStyle="black";
            ctx.font = "35px Georgia";
            ctx.fillText("Credits", 135, 250);
            ctx.fillRect(260,215,170,40);
            ctx.fillText("Win", 135, 335);
            ctx.fillRect(220,305,100,40);
            ctx.fillRect(170,395,80,40);
            drawBg(lyt);
        }

        function anim() {
            deg += speed;
            deg %= 360;

            /*  Increase Speed  */
            if ((spinning)
            && (20 > speed)) {
                speed = speed + 1 * 0.1;
            }
            else {
                /*  Wait for AJAX calculation of result before setting stopping spin */
                if (!lock) {
                    rng     = "300";
                    
                    /*  Odds of winning */
                    var lady_luck   = rand(0.5, 100);
                    console.log('LADY LUCK BE KIND: '+lady_luck);
                    
                    if ((0.5 <= lady_luck) && (1 > lady_luck)) {
                        rng_idx = 8;
                    }
                    else if ((1 <= lady_luck) && (3 > lady_luck)) {
                        rng_idx = 6;
                    }
                    else if ((3 <= lady_luck) && (8 > lady_luck)) {
                        rng_idx = 3;
                    }
                    else if ((8 <= lady_luck) && (15 > lady_luck)) {
                        rng_idx = 5;
                    }
                    else if ((15 <= lady_luck) && (25 > lady_luck)) {
                        rng_idx = 1;
                    }
                    else if ((25 <= lady_luck) && (40 > lady_luck)) {
                        rng_idx = 2;
                    }
                    else if ((40 <= lady_luck) && (60 > lady_luck)) {
                        rng_idx = 4;
                    }
                    else {
                        rng_idx = 0;
                    }
                    
                    rng_idx++;
                    rng_stop = rand(1.1, 12.9);
                    console.log('STOP AT: '+rng_stop);
                    rng_deg = ((360 - 90) - (rng_idx * sliceDeg)) + (sliceDeg / rng_stop);

                    if (0 > rng_deg) {
                        rng_deg = (360 + rng_deg);
                    }
                    
                    lock        = true;
                    spinning    = false;
                }
                else {
                    /* Decrease Speed   */
                    var ai2 = Math.floor(((360 - deg - 90) % 360) / sliceDeg); // deg 2 Array Index

                    ai2 = (slices+ai2)%slices; // Fix negative index
                    if (Math.floor(deg) == Math.floor(rng_deg)) {
                    //if (label[ai2] == rng) {
                        speed = 0;
                    }
                    else {
                        if (0.777 >= speed) {
                            speed = speed;
                        }
                        else {
                            speed *= 0.977;
                        }
                    }
                }
            }
            
            if (lyt_ctr >= 20) {
                if (0 == lyt) {
                    lyt = 1;
                }
                else {
                    lyt = 0;
                }
                
                lyt_ctr = 0;
            }
            else {
                lyt_ctr++;
            }
            
            /*  Stop    */
            if (0 >= speed) {
                lyt = 0;
                drawImg();

                return console.log("You got:\n"+ label[ai2] ); // Get Array Item from end Degree
            }
            
            drawImg();
            window.requestAnimationFrame( anim );
        };
        
        drawImg();
        drawBg(0);

        
        $("#spin").click(function(){
            spinning    = true;
            lock        = false;
            window.requestAnimationFrame( anim );
        });

    </script>
</body>
</html>