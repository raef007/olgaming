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

            var duo         = 2;
            var one         = 1;
            var quadruple   = 4;
            var half        = 0.5;
            var triple      = 3;
            var penta       = 5;
            var lose        = 0;
            var jpot        = 10;
            
            var color       = ['#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88', "#f67", '#fbc','#f88','#fbc','#f88', "#fbc", '#f88', "#fbc", '#f88'];
            var spinr_val   = [lose, duo, one, quadruple, half, triple, penta, lose, jpot , lose , duo, one, quadruple, half, triple, penta, lose];
            var spinr_lbl   = ['LOSE', '2x', '1x', '4x', 'HALF', '3x', '5x', 'LOSE', 'JACKPOT', 'LOSE', '2x', '1x', '4x', 'HALF', '3x', '5x', 'LOSE'];
            
            
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
            var bglights_x = 495 ;
            var bglights_y = 50 ;
            var bglights_height = 570 ;
            var bglights_width = 570 ;
            var result = 0;
            var credits = 1000;
            var bet = 100;
            var max_bet = 350;
            var min_bet = 50;
            
            bg_off.src = '../assets/images/wheel/bg_off.png';
            bg_on.src = '../assets/images/wheel/bg_on.png';
            cont.src = '../assets/images/wheel/container.png';
            spin.src = '../assets/images/wheel/spin.png';
            add.src = '../assets/images/wheel/add.png';
            sub.src = '../assets/images/wheel/reduce.png';
            
            function deg2rad(deg) {
                return deg * Math.PI/180;
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
                
                ctx.textAlign   = "right";
                ctx.fillStyle   = "white";
                ctx.font        = 'bold 18px sans-serif';
                ctx.fillText(text, 170, 8);
                ctx.restore();
            }

            function drawImg() {
                
                ctx.clearRect(0, 0, 500, 500);
                
                for(var i=0; i<slices; i++){
                    drawSlice(deg, color[i]);
                    drawText(deg+sliceDeg/2, spinr_lbl[i]);
                    deg += sliceDeg;
                }
                
                ctx.drawImage(cont, cont_x, 195, 410 , 80); 
                ctx.drawImage(cont, cont_x, 285, 410 , 80); 
                ctx.drawImage(cont, cont_x, 375, 300 , 80); 
                //ctx.drawImage(cont, cont_x, 285, 300 , 80); 
                //ctx.drawImage(cont, cont_x, 375, 200 , 80); 
                ctx.drawImage(spin, cont_x, 500, 150 , 150); 
                ctx.fillStyle       ="black";
                ctx.font            = "30px Georgia";
                ctx.fillText("Credits", 135, 250);
                ctx.fillRect(260,215,170,40);
                ctx.fillText("Win", 135, 335); 
                ctx.fillRect(220,305,190,40);
                ctx.fillRect(145,395,75,40);
                ctx.drawImage(add, 103, 397, 35, 35); 
                ctx.drawImage(sub, 225, 397, 35, 35); 
                ctx.fillStyle   = "#FFFFFF";
                ctx.font        = "20px Georgia";
                ctx.fillText(result, 225, 330);
                ctx.fillText(credits, 270, 240);
                ctx.fillText(bet, 150, 420);
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
                    
                    console.log(result+spinr_val[ai2]);
                    result = spinr_val[ai2] * bet;
                    credits = credits += result;
                    
                    if (credits < bet) {
                        bet = min_bet;
                    }
                    
                    drawImg();
                    
                    return console.log("You got:\n"+ spinr_val[ai2] );
                    
                     // Get Array Item from end Degree
                    

                }
                
                drawImg();
                window.requestAnimationFrame( anim );
            };
            
            drawImg();
            drawBg(0);

        </script>
        
        <script language="JavaScript">            
            var elem        = document.getElementById('canvas');
            var clkbl_elems = [];
            
            // Add event listener for `click` events.
            elem.addEventListener('click', function(event) {
                var elemLeft    = elem.offsetLeft;
                var elemTop     = elem.offsetTop;
                var context     = elem.getContext('2d');
                
                var x = event.pageX - elemLeft;
                var y = event.pageY - elemTop;
                
                console.log(x, y);
                clkbl_elems.forEach(function(element) {
                    console.log('foreach');
                    if (y > element.top && y < element.top + element.height && x > element.left && x < element.left + element.width) {
                        
                        if (0 >= speed) {
                            if ('spin-btn' == element.id) {
                                if ((min_bet <= bet)
                                && (0 < credits)) {
                                    spinning    = true;
                                    lock        = false;
                                    result      = 0;
                                    
                                    window.requestAnimationFrame( anim );
                                    
                                    credits -= bet;
                                    
                                    drawImg();
                                    console.log('SPIN!');
                                }
                                else {
                                    console.log('bet cannot be greater than credits');
                                }
                            }
                            else if ('add-btn' == element.id) {
                                var bet_add = bet + 50;
                                if ((max_bet >= bet_add)
                                && (credits >= bet_add)) {
                                    bet = bet_add;
                                    drawImg();
                                    console.log('ADD!');
                                }
                                else {
                                    console.log("sorry can't add");
                                }
                            }
                            else if ('subtract-btn' == element.id) {
                                var bet_sub = bet - 50;
                                if (min_bet <= bet_sub) {
                                    bet = bet_sub;
                                    drawImg();
                                    console.log('Subtract!');
                                }
                                else {
                                    console.log('sorry no more subtraction');
                                }
                            }
                        }
                    }
                    
                });
            
            }, false);
            
            // Add addbet.
            clkbl_elems.push({
                colour: 'white',
                width: 110,
                height: 110,
                top: 520,
                left: 100,
                id: 'spin-btn',
            });
            
            clkbl_elems.push({
                colour: 'Red',
                width: 25,
                height: 25,
                top: 402, 
                left: 105,
                id: 'add-btn',
            });
            
            clkbl_elems.push({
                colour: 'Red',
                width: 25,
                height: 25,
                top: 402, 
                left: 230,
                id: 'subtract-btn'
            });
            
            /*  Render Clickable elements overlay for testing   */
            /*
            clkbl_elems.forEach(function(addbet) {
                context.fillStyle = addbet.colour;
                context.fillRect(addbet.left, addbet.top, addbet.width, addbet.height);
            });
            */
            
        </script>

    </body>
</html>