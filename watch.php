<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 1clockAayu</title>
<style>
    body{
        background-color: bisque;
        font-size: 40px ;

    }
    #timer{
        text-align: center;
        flex-wrap: wrap;
        justify-content: center;
        
    }
    #timex{ 
        background-color: aliceblue;
        color: black;
        width: 200px;
        height: 60px;
        margin: 40px auto;

    }
</style>
</head>
<body>
    <div id="timer">
        <div id="timex">
            00:00
        </div>
        <button onclick="pause()">pause</button>
    </div>
</body>
<script>
    var timex;
var ele=document.getElementById('timex');
(function (){
var sec=0;
timex=setInterval(()=>{
    ele.innerHTML="00:"+sec;
    sec++;
},1000)
})()

function pause(){
    clearInterval(timex);
}
</script>
</html>