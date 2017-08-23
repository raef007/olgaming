<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WHEEL OF KAYAMANAAAN</title>
        
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
            #canvas{
              color: #0cff15; 
              background-image: url("../assets/images/wheel/back.png");
              border:1px solid black;
            }
        </style>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
    
            <canvas id="canvas" width="1200" height="800"></canvas>
        <br>
            <label style="font-size: 80px"> MONEY MULTIPLIER WHEEL </label>
        <script type="text/javascript" charset="utf-8">
        function rand(min, max) {
            return Math.random() * (max - min) + min;
        }

        var color = ['#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88', "#f67", '#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88'];
        var double = 2
        var one = 1
        var quadruple = 4
        var half = .5
        var triple = 3
        var penta = 5
        var lose = 0
        var jpot = 10
        var label = [lose, double, one, quadruple, half, triple, penta, lose, jpot , lose , double, one, quadruple, half, triple, penta, lose];
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
        var spin = new Image();
        var add = new Image();
        var sub = new Image();
        var lyt = 0;
        var lyt_ctr = 0;
        var wheel_x = 780;
        var wheel_y = 350;
        var cont_x = 80;
        var bglights_x = 500 ;
        var bglights_y = 50 ;
        var bglights_height = 570 ;
        var bglights_width = 570 ;
        var result = '';
        var credits = 1000;
        var bet = 100;
        
        bg_off.src = '../assets/images/wheel/bg_off.png';
        bg_on.src = '../assets/images/wheel/bg_on.png';
        cont.src = '../assets/images/wheel/container.png';
        spin.src = '../assets/images/wheel/spin.png';
        add.src = '../assets/images/wheel/add.png';
        sub.src = '../assets/images/wheel/reduce.png';
        
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
            ctx.drawImage(cont, cont_x,375, 200 , 80); 
            ctx.drawImage(spin, cont_x,500, 150 , 150); 
            ctx.fillStyle="black";
            ctx.font = "35px Georgia";
            ctx.fillText("Credits", 135, 250);
            ctx.fillRect(260,215,170,40);
            ctx.fillText("Win", 135, 335); 
            ctx.fillRect(220,305,100,40);
            ctx.fillRect(145,395,75,40);
            ctx.drawImage(add, 103, 397, 35, 35); 
            ctx.drawImage(sub, 225, 397, 35, 35); 
            ctx.fillStyle="blue";
            ctx.font = "35px Georgia";
            ctx.fillText(result, 225, 337);
            ctx.fillText(credits, 275, 249);
            ctx.fillText(bet, 150, 425);
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
                
                console.log(result+label[ai2]);
                result = label[ai2] * bet;
                credits = credits += result;
                drawImg();
                return console.log("You got:\n"+ label[ai2] );
                
                 // Get Array Item from end Degree
                

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

    <script language="JavaScript">
            var spin = new Image();
            spin.src = '../assets/images/wheel/spin.png';
            var elem = document.getElementById('canvas'),
                elemLeft = elem.offsetLeft,
                elemTop = elem.offsetTop,
                context = elem.getContext('2d'),
                spincoms = [];
            
            // Add event listener for `click` events.
            elem.addEventListener('click', function(event) {
                var x = event.pageX - elemLeft,
                    y = event.pageY - elemTop;
                spincoms.forEach(function(spincom) {
                    if (y > spincom.top && y < spincom.top + spincom.height && x > spincom.left && x < spincom.left + spincom.width) {
                        spinning    = true;
                        lock        = false;
                    window.requestAnimationFrame( anim );
                    credits -= bet;
                    drawImg()
                    }
                });
            
            }, false);
            
            // Add spincom.
            spincoms.push({
                colour: 'white',
                width: 110,
                height: 110,
                top: 520, 
                left: 100
            });
            
            // Render spincoms.
            spincoms.forEach(function(spincom) {
                context.fillStyle = spincom.colour;
                context.fillRect(spincom.left, spincom.top, spincom.width, spincom.height);
                ctx.drawImage(spin, 80,500, 150 , 150);
            });
    </script>
    <script language="JavaScript">
    var add = new Image();
    add.src = '../assets/images/wheel/add.png';
    var elem = document.getElementById('canvas'),
        elemLeft = elem.offsetLeft,
        elemTop = elem.offsetTop,
        context = elem.getContext('2d'),
        addbets = [];
    
    // Add event listener for `click` events.
    elem.addEventListener('click', function(event) {
        var x = event.pageX - elemLeft,
            y = event.pageY - elemTop;
        addbets.forEach(function(addbet) {
             if (y > addbet.top && y < addbet.top + addbet.height && x > addbet.left && x < addbet.left + addbet.width) {
                bet += 50;
                drawImg()
                console.log('ADD!');
            }
        });
    
    }, false);
    
    // Add addbet.
    addbets.push({
        colour: 'Red',
        width: 25,
        height: 25,
        top: 402, 
        left: 105
    });
    
    // Render addbets.
    addbets.forEach(function(addbet) {
        context.fillStyle = addbet.colour;
        context.fillRect(addbet.left, addbet.top, addbet.width, addbet.height);
        ctx.drawImage(add, 102, 397, 35, 35);
    });
    </script>
    <script language="JavaScript">
    var sub = new Image();
    sub.src = '../assets/images/wheel/reduce.png';
    var elem = document.getElementById('canvas'),
        elemLeft = elem.offsetLeft,
        elemTop = elem.offsetTop,
        context = elem.getContext('2d'),
        subbets = [];
    
    // Add event listener for `click` events.
    elem.addEventListener('click', function(event) {
        var x = event.pageX - elemLeft,
            y = event.pageY - elemTop;
        subbets.forEach(function(subbet) {
             if (y > subbet.top && y < subbet.top + subbet.height && x > subbet.left && x < subbet.left + subbet.width) {
                bet -= 50;
                console.log(bet)
                drawImg()
                console.log('SUBTRACT!');
            }
        });
    
    }, false);
    
    // Add subbet.
    subbets.push({
        colour: 'Red',
        width: 25,
        height: 25,
        top: 402, 
        left: 230
    });
    
    // Render subbets.
    subbets.forEach(function(subbet) {
        context.fillStyle = subbet.colour;
        context.fillRect(subbet.left, subbet.top, subbet.width, subbet.height);
        ctx.drawImage(sub, 225, 397, 35, 35);
    });
    </script>

</body>
</html>