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
              background-image: url("../assets/images/wheel/back.jpg");
              border:1px solid black;
            }
        </style>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
    
        <canvas id="canvas" width="1200" height="800"></canvas>
        <br>
        
        <script type="text/javascript" charset="utf-8">
            function rand(min, max) {
                return Math.random() * (max - min) + min;
            }
            
            $(document).ready(function() {
                
                var v1          = 10000;
                var v2          = 20000;
                var v3          = 50000;            
                var v4          = 100000;                      
                var lose        = 0;
                var jpot        = 100;
                
                var color       = ['green','red','green','orange', "grey", 'green', "red", 'grey', "indigo", 'grey','green','grey','blue', "grey", 'red', "orange", 'grey'];
                var spinr_val   = [];
                var spinr_lbl   = [];
                var spin_res    = [];
                
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
                var cont = new Image();
                var pin = new Image();
                var bg_off = new Image();
                var bg_on = new Image();
                var audiobtn = new Image();
                var lyt = 0;
                var lyt_ctr = 0;
                var wheel_x = 780;
                var wheel_y = 350;
                var cont_x = 80;
                var bglights_x = 473 ;
                var bglights_y = 40 ;
                var bglights_height = 612 ;
                var bglights_width = 695 ;
                var result = 0;
                var tickets = 0;
                var total = 0;            
                var multiplier = 1   
                
                
                var audio       = new Audio("../assets/sounds/reel.mp3");
                var win         = new Audio("../assets/sounds/win.mp3");
                var click       = new Audio("../assets/sounds/start_reel.mp3");
                
                cont.src        = '../assets/images/wheel/container.png';
                pin.src         = '../assets/images/wheel/pin.png';
                bg_off.src      = '../assets/images/wheel/bg_off.png';
                bg_on.src       = '../assets/images/wheel/bg_on.png';
                audiobtn.src    = '../assets/images/wheel/audio.png';
                
                function deg2rad(deg) {
                    return deg * Math.PI/180;
                }

                function drawBg(lit) {
                    ctx.drawImage(pin, 730 , 290 , 100 ,100);
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
                    ctx.lineWidth = 6;
                    ctx.lineTo(wheel_x, wheel_y);
                    ctx.arc(wheel_x, wheel_y, ( 450)/2, deg2rad(deg), deg2rad(deg+sliceDeg));                
                    ctx.lineTo(wheel_x,wheel_y);
                    ctx.stroke();
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
                    
                    ctx.clearRect(0, 0,500, 500);
                    
                    for(var i=0; i<slices; i++){
                        drawSlice(deg, color[i]);
                        drawText(deg+sliceDeg/2, spinr_lbl[i]);
                        deg += sliceDeg;
                    }
                    
                    ctx.drawImage(cont, cont_x, 195, 270 , 80); 
                    ctx.drawImage(cont, cont_x, 285, 340 , 80); 
                    ctx.drawImage(cont, cont_x, 375, 340 , 80); 
                    ctx.drawImage(audiobtn, 1100, 680, 50 , 50); 
                    //ctx.drawImage(cont, cont_x, 285, 300 , 80); 
                    //ctx.drawImage(cont, cont_x, 375, 200 , 80); 

                    ctx.fillStyle       ="black";
                    ctx.font            = "30px Georgia";
                    ctx.fillText("Tickets", 130, 245);
                    ctx.fillRect(230,215,70,40);
                    ctx.fillText("Win", 135, 335); 
                    ctx.fillRect(210,305,150,40);
                    ctx.fillRect(210,395,150,40);
                    ctx.fillText("Total", 130, 425);
                    ctx.fillStyle   = "#FFFFFF";
                    ctx.font        = "20px Georgia";
                    ctx.fillText(result, 220, 330);
                    ctx.fillText(tickets, 240, 240);
                    ctx.fillText(total, 220, 420);
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
                            
                            /* Set index according to spin   */
                            spin_res[tickets-1];
                            
                            switch(spin_res[tickets]) {
                                case 0:
                                    rng_idx = 9;
                                    break;
                                    
                                case 1:
                                    rng_idx = 5;
                                    break;
                                
                                case 2:
                                    rng_idx = 1;
                                    break;
                                    
                                case 3:
                                    rng_idx = 15;
                                    break;
                                
                                case 4:
                                    rng_idx = 12;
                                    break;
                                
                                case 5:
                                    rng_idx = 2;
                                    break;
                                
                                case 10:
                                    rng_idx = 2;
                                    break;
                            }
                            
                            rng_idx++;
                            rng_stop = rand(1.1, 12.7);
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
                        result = spinr_val[ai2] * multiplier
                        audio.pause();
                        audio.currentTime = 0;
                        if (spinr_val[ai2] > 1){
                            win.play();
                            total = total+=result;
                        }
                        else {
                            total = total+=result;
                        }
                        
                        drawImg();
                        
                        return console.log("You got:\n"+ spinr_val[ai2] );
                        
                         // Get Array Item from end Degree
                        

                    }
                    
                    drawImg();
                    window.requestAnimationFrame( anim );
                };
                
                
                $.get('../front-api/get-wheel-details/1', function(srv_resp) {
                    console.log(srv_resp);
                    spinr_val   = srv_resp.spinr_val;
                    spinr_lbl   = srv_resp.spinr_lbl;
                    spin_res    = srv_resp.spin_result;
                    tickets     = srv_resp.spin_result.length;
                    drawImg();
                    drawBg(0);
                });
                
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
                                        if (tickets > 0){
                                            spinning    = true;
                                            lock        = false;
                                            result      = 0;
                                            
                                            window.requestAnimationFrame( anim );
                                            tickets -= 1;
                                            
                                            drawImg();
                                            console.log('SPIN!');
                                            click.play();
                                            audio.play();
                                        }
                                        else {  
                                            alert("NO MORE TICKETS");
                                        }
                                    }  
                                else if ('audiobtn' == element.id) {
                                    console.log("audio");
                                    audio.muted = true;
                                    win.muted = true;
                                    click.muted = true;

                                    drawImg();
                                }
                            }
                         }                    
                    });
                
                }, false);            
                // Add addbet.
                    colour: 'white',
                    clkbl_elems.push({
                    width: 110,
                    height: 110,
                    top: 290,
                    left: 730,
                    id: 'spin-btn',
                });
                clkbl_elems.push({
                    colour: 'Red',
                    width: 50,
                    height: 50,
                    top: 687, 
                    left: 1100,
                    id: 'audiobtn',
                });
            });
        </script>
    </body>
</html>