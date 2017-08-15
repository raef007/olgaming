<html><head>
    <meta charset="UTF-8">
    <style type="text/css">
    html { height: 100% }
    body { padding: 0px;
           margin: 0px;
           overflow: hidden;
           height: 100%;
           background: linear-gradient(#000, #820, #000); }
    </style>
  </head>
  <body>
    <canvas id="canvas" width="1545" height="509"></canvas>
    <script>

var sections = ["£25", "£15", "£50", "£1000", "£25",
                "£500", "£15", "£100", "£1000", "£15",
                "£100", "£500"];

var colors = ["#F84", "#8F4", "#48F", "#F8F"];

function repaint(angle) {
    canvas.width = innerWidth;
    canvas.height = innerHeight;
    var r = Math.min(innerWidth, innerHeight) / 2.25;
    var cx = innerWidth/2, cy = innerHeight/2;
    var ctx = canvas.getContext("2d");
    var g = ctx.createRadialGradient(cx, cy, 0, cx, cy, r);
    g.addColorStop(0, "rgba(0,0,0,0)");
    g.addColorStop(1, "rgba(0,0,0,0.5)");
    var selected = (Math.floor((- 0.2 - angle) * sections.length / (2*Math.PI))
                    % sections.length);
    if (selected < 0) selected += sections.length;
    for (var i=0; i<sections.length; i++) {
        var a0 = angle + 2*Math.PI*i/sections.length;
        var a1 = a0 + 2*Math.PI/(i == 0 ? 1 : sections.length);
        var a = angle + 2*Math.PI*(i+0.5)/sections.length;
        ctx.beginPath();
        ctx.moveTo(cx, cy);
        ctx.arc(cx, cy, r, a0, a1, false);
        ctx.fillStyle = colors[i % 4];
        ctx.fill();
        ctx.fillStyle = g;
        ctx.fill();
        ctx.save();
        if (i == selected) {
            ctx.fillStyle = "#FFF";
            ctx.shadowColor = "#FFF";
            ctx.shadowBlur = r/20;
        } else {
            ctx.fillStyle = "#AAA";
            ctx.shadowColor = "#000";
            ctx.shadowBlur = r/100;
        }
        ctx.font = "bold " + r/sections.length*1.6 + "px serif";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.translate(cx, cy);
        ctx.rotate(a);
        ctx.fillText(sections[i], r*0.62, 0);
        ctx.restore();
    }
    ctx.shadowOffsetX = r/80;
    ctx.shadowOffsetY = r/80;
    ctx.shadowBlur = r/40;
    ctx.shadowColor = "rgba(0,0,0,0.5)";
    ctx.beginPath();
    ctx.arc(cx, cy, r*1.025, 0, 2*Math.PI, true);
    ctx.arc(cx, cy, r*0.975, 0, 2*Math.PI, false);
    ctx.fillStyle = "#444";
    ctx.fill();
    ctx.shadowOffsetX = r/40;
    ctx.shadowOffsetY = r/40;
    g = ctx.createRadialGradient(cx-r/7, cy-r/7, 0, cx, cy, r/3);
    g.addColorStop(0, "#FFF");
    g.addColorStop(0.2, "#F44");
    g.addColorStop(1, "#811");
    ctx.fillStyle = g;
    ctx.beginPath();
    ctx.arc(cx, cy, r/3.5, 0, 2*Math.PI, false);
    ctx.fill();
    ctx.translate(cx, cy);
    ctx.rotate(Math.PI - 0.2);
    ctx.beginPath();
    ctx.moveTo(- r*1.1, - r*0.05);
    ctx.lineTo(- r*0.9, 0);
    ctx.lineTo(- r*1.1, r*0.05);
    ctx.fillStyle = "#F44";
    ctx.fill();
}

var angle = 0;

function spin(speed, duration) {
    var start = (new Date).getTime();
    function frame() {
        var now = (new Date).getTime();
        var t = (now - start) / duration;
        if (t > 1) t = 1;
        angle += speed * (1 - t);
        repaint(angle);
        if (t < 1) setTimeout(frame, 10);
    }
    setTimeout(frame, 10);
}

canvas.onmousedown = function() {
    spin(0.2, 5000);
};

repaint(angle);

setInterval(function() {
    if (canvas.width != innerWidth || canvas.height != innerHeight) {
        repaint(angle);
    }
}, 10);

    </script>
  

</body></html>