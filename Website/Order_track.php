<?php 


include 'connect.php';


$name = $_POST['name1'];
$number = $_POST['number'];
$date = $_POST['date'];
$lon = $_POST['lon'];
$lat =  $_POST['lat'];
$mail =  $_POST['mail'];

$order = "";
$sql = "INSERT into orders(Name, phoneNumber, email, birthdate, longitude, latitude, isRest) values('$name', '$number', '$mail', '1997-07-16', '$lon','$lat', 0)";

if($result = mysqli_query($conn, $sql)){
    $sql = "SELECT orderID from orders where phoneNumber = '$number'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $order = $row['orderID'];

}
else{

    echo "error";
}


?>

<html>    
<head>
    <title>Puzzles</title>


<style>

@font-face {
    font-family: Font;
    src: url(Mission-Script.otf);
}
         #ul1{
            list-style-type:none;
            text-align:right;
            padding: 8px;
            margin: 0px;
            height:40px;
            width:100%;
            position:fixed;
            z-index: 1001;
        }
        li{

            display:inline;
            padding: 24px;
            font-size: 18;   

        }
        a{
            margin-top:7px;
             display: inline-block;
            position: relative;
            text-decoration:none;
            color:white;
            height:100px; 
            
        }
        a:after {
    border-radius: 1.5px;
    content: '';
    margin:auto;
    display: block;
    height: 3px;
    width: 0px;
    background: transparent;
    transition: width .2s ease, background-color .2s ease;
    margin-top:5px;
}
a:hover:after {
    width: 100%;
    background: white;

}
#current:after{
    width: 100%;
    background: white;
    
}
body{
    margin:0px;
    color:white;
    background-color:#3C3C3B;

}
.menu{
    height: 50px;
    width: 500px;
    position: fixed;
    top: 0;
    background-color: red;
}
.container {
    position: relative;
}
.line{
    height:10px;
    width:120px;
    background-color: #5b5b5a;
    display: :inline;
    position: relative;
    float:left;
    margin-top:10px;
    margin-left:-1px;
    margin-right:-1px;
    overflow:hidden;

}
.circle{
    height:30px;
    width:30px;
    background-color: #5b5b5a;
    display: :inline;
    border-radius: 15px;
    position: relative;
    float:left;
    overflow:hidden;

}
.timeline{
    margin:50px 0px 50px 200px;
    padding:20px;
    width:700px;
}
#load1{
    width:100%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load2{
    width:00%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}
#load3{
    width:00%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load4{
    width:00%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load5{
    width:00%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load6{
    width:00%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load7{
    width:0%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load8{
    width:0%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}

#load9{
    width:0%;
    background-color: rgb(87,198,108);
    height:50px;
    float:left;
}
#timeCircle1{

    border-radius:50%;
    background-color:rgb(242,72,80);
    width:200px;
    height:200px;
    vertical-align: middle;
  text-align: center;
  display: table-cell;

     background-image:
        /* 10% = 126deg = 90 + ( 360 * .1 ) */
        linear-gradient(90deg, transparent 50%, white 50%),
        linear-gradient(90deg, white 50%, transparent 50%);


}
#innerCircle1 {
  width: 180px;
  display: inline-block;
  height:180px;
  border-radius:50%;
  background-color: #3C3C3B;

}
#timeCircle2{

    border-radius:50%;
    background-color:rgb(0,128,256);
    width:200px;
    height:200px;
    vertical-align: middle;
  text-align: center;
  display: table-cell;

     background-image:
        /* 10% = 126deg = 90 + ( 360 * .1 ) */
        linear-gradient(90deg, transparent 50%, white 50%),
        linear-gradient(90deg, white 50%, transparent 50%);


}
#innerCircle2 {
  width: 180px;
  display: inline-block;
  height:180px;
  border-radius:50%;
  background-color: #3C3C3B;
  content-size:17;
}
#minutes{
    display: inline-block;
    font-size: 72;

}
#seconds{
    display: inline-block;
    font-size: 72;

}
</style>
</head>
<body>
            <ul id = "ul1">
            <li ><a href="apple.html">Home</a>
            <li><a href="apple.html">About Us</a>
            <li><a href="apple.html">Menu</a>
            <li><a href="apple.html">I'm at the Restaurant</a>
            <li> <a href="apple.html">Order Online</a>
            <li><a id="current" href="apple.html">Track Order</a>
            <li><a href="apple.html">Contact Us</a>
            </ul>
    </ul>
    <br>
       <div class = "container">
    <img id = "image1" src="delivery_Scooter.png" style=" margin: 125px 200px 0px 0px; display:inline; max-height: 300px; max-width: 300px; float:right;">
    <h1 id ="text1"style="float:right; margin: 450px -170px 0px 0px;">Preparing!</h1>
    </div>
    <div style="background: url(Check_mark.png) no-repeat scroll 0px 0px; padding-left:35px; background-size:100px 100px; margin: 125px 0px 50px 400px; height:auto; padding:25px">
    <h1 style="color:#d0f441; margin: 0px 0px 0px 80px; " >All Done!</h2>
    <h4 style="color:white; margin: 0px 0px 0px 80px;">Your tracking ID is <?php echo $order; ?></h6>

    </div>
        <div class="timeline">
        <center>
        <div class="circle"><div id ="load1"></div></div>
        <div class="line"><div id ="load2"></div></div>
        <div class="circle"><div id ="load3"><h6 style="margin-top:50px;">Boom</h6></div></div>
        <div class="line"><div id ="load4"></div></div>
        <div class="circle"><div id ="load5"></div></div>
        <div class="line"><div id ="load6"></div></div>
        <div class="circle"><div id ="load7"></div></div>
        <div class="line"><div id ="load8"></div></div> 
        <div class="circle"><div id ="load9"><h6>Boom</h6></div></div>

        </center>

        <h5 id ="text1" style="margin-top:20px; margin-right:100px; margin-left: -10px; float:left;">Ordered</h5>
        <h5 id ="text2" style="margin-top:20px; margin-right:100px; float:left;">Prepared</h5>
        <h5 id ="text3" style="margin-top:20px; margin-right:90px; float:left;">Packed</h5>
        <h5 id ="text4" style="margin-top:20px; margin-right:80px; float:left;">Out for delivery</h5>
        <h5 id ="text5" style="margin-top:20px; margin-right:0px; float:left;">Recieved</h5>
    
    </div>
        <br><br><br><br><br><br><br><br><br><br>
 <br><br> <center>
<div style="width:1000px; height:auto; border-spacing:120px;">
 <div id = "timeCircle1" style="margin-right:50px;">
    <div id = "innerCircle1">
        <h1 id ="minutes">nn</h1>
        <h2  style = "color:rgb(242,72,80)">Minutes</h2>
    </div>
 </div>
  <div id = "timeCircle2">
    <div id = "innerCircle2">
        <h1 id = "seconds">nn</h1>
        <h2 style ="color:rgb(0,128,256)">Seconds</h2>
    </div>

 </div>
</div>
</center>


<script>
function addMinutes(date, minutes) {
    return new Date(date.getTime() + minutes*60000);
}

var date = new Date();
var countDownDate = addMinutes(date,30);

var x = setInterval(function() {

    var now = new Date().getTime();
    var distance = countDownDate - now;
    var minutes = ((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = ((distance % (1000 * 60)) / 1000);
    if(minutes<=0){
        document.getElementById("seconds").innerHTML = 0;
         document.getElementById("minutes").innerHTML = 0;
         clearInterval(x);
         

    }
    
        if(seconds < 30){
        var secAngle = 90 + (360 * seconds/60);
        var secCircle = document.getElementById("timeCircle2").style.backgroundImage = 'linear-gradient(' + secAngle + 'deg, transparent 50%, #5b5b5a 50%)' + ',' +
        'linear-gradient(90deg, #5b5b5a 50%, transparent 50%)';
         document.getElementById("seconds").innerHTML = Math.floor(seconds);
    }
    else{
        var secAngle = 18/5 * seconds/60 * 100 - 90;
        var secCircle = document.getElementById("timeCircle2").style.backgroundImage = 'linear-gradient(' + secAngle + 'deg, transparent 50%, rgb(0,128,256) 50%)' + ',' +
        'linear-gradient(90deg, #5b5b5a 50%, transparent 50%)';
        document.getElementById("seconds").innerHTML = Math.floor(seconds);
        }
    if(minutes<2){
        var minAngle = 90 + (360*(minutes/30));
        var minCircle = document.getElementById("timeCircle1").style.backgroundImage = 'linear-gradient(' + minAngle + 'deg, transparent 50%, #5b5b5a 50%)' + ',' +
        'linear-gradient(90deg, #5b5b5a 50%, transparent 50%)';
        document.getElementById("minutes").innerHTML = Math.floor(minutes);
    }
    else{
        var minAngle = 18/5 * minutes/30 * 100 - 90;
        var minCircle = document.getElementById("timeCircle1").style.backgroundImage = 'linear-gradient(' + minAngle + 'deg, transparent 50%, rgb(242,72,80) 50%)' + ',' +
        'linear-gradient(90deg, #5b5b5a 50%, transparent 50%)';
        document.getElementById("minutes").innerHTML = Math.floor(minutes);
    }
    var stops = Math.floor(minutes);
    switch(stops){
        case 3:
            document.getElementById("image1").src = "cartoon-chef-2.png";
            document.getElementById("text1").innerHTML = "Preparing";

            break;
        case 2:
            document.getElementById("image1").src = "Packing.png";
            document.getElementById("image1").style.marginTop  = "200px";
            document.getElementById("text1").marginTop = "300px";
            document.getElementById("text1").innerHTML = "Packing!";
            document.getElementById("load2").style.width = "100%";
            document.getElementById("load3").style.width = "100%";
            break;
        case 1:
            document.getElementById("image1").src = "delivery_Scooter.png";
            document.getElementById("image1").style.marginTop = "125px";
            document.getElementById("text1").marginTop = "450px";
            document.getElementById("text1").innerHTML = "On My Way!";
            document.getElementById("load4").style.width = "100%";
            document.getElementById("load5").style.width = "100%";
            document.getElementById("load6").style.width = "100%";
            document.getElementById("load7").style.width = "100%";
            break;

}
    
    
        

}, 10);
</script>
   </body>
</html>