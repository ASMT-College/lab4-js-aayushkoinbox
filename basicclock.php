<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAyushkoclock</title>
    <Style>
body {
    background: black;
}

.myclock {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: #17D4FE;
    font-size: 60px;
    font-family: Orbitron;
    letter-spacing: 7px;
}
#demo{
    position: absolute;
    color: white;
}
    </Style>
</head>
<body>
<button class="apex" type="button" onclick="document.getElementById('demo').innerHTML = Date()">
Todays date</button>

<p id="demo"></p>
<br>
<hr>
    <div class="myclock" id="meroghadi"  onload="showTime()"></div>
</body>
<script>
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("meroghadi").innerText = time;
    document.getElementById("meroghadi").textContent = time;
    
    setTimeout(showTime, 1000);
    
}


showTime();

</script>
</html>