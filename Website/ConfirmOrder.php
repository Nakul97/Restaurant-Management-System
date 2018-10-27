<html>    
<head>
    <title>Puzzles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

#current:after{
    width: 100%;
    background: white;
    
}
a:hover:after {
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


.parallax {
    /* The image used */
    background-image: url("page-title-3.jpg");

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.formDiv{
	margin:30px;
	padding:15px;
	border-style: solid;
	border-width: 1px;
	border-radius:8px;
	width:700px;
}
.BillAmount{
	float:right;
	width: 700px;
		margin:30px;
	padding:15px;
	border-style: solid;
	border-width: 1px;
	border-radius:8px;
	overflow-y: scroll;
	height:404px;
}
input[type=text],[type=email],[type=date]{
    width:325px;
    border: 0;
    padding:13px;
    font-size: 13;
    background-color: white;
    border-radius: 5px;
    outline: none;
    margin:10px;

}
.bodyDiv{
	background: -moz-linear-gradient(top, rgba(60,60,59,0) 0%, rgba(60,60,59,1) 16%, rgba(60,60,59,1) 26%, rgba(60,60,59,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(60,60,59,0) 0%,rgba(60,60,59,1) 16%,rgba(60,60,59,1) 26%,rgba(60,60,59,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(60,60,59,0) 0%,rgba(60,60,59,1) 16%,rgba(60,60,59,1) 26%,rgba(60,60,59,1) 100%);
}

#coupon{
    width:30%;
    border: 0;
    border-bottom: 3px solid white;
    padding:13px;
    font-size: 18;
    color :white;
    background-color: #3C3C3B;
    outline: none;
    border-radius: 0px;

}
.applyCoup{
	    border: none;
    color: white;
     padding: 10px 16px 10px 16px;
    border-radius: 8px;
    text-decoration: none;
    margin: 10px;
    cursor: pointer; 
    background-color: rgb(242,72,80);
    font-size: 18;
}
.Items{
	height:100px;
	width:95%;
	padding : 10px;

}
.ItemImage{
	height:20px;
	width:20px;
	border-radius:10px;
}
.cancel{
	float:right;
	background:transparent;
	border:none;
	display:-ms-flexbox;
	margin-top: 30px;
}
.Items:hover{
	border-style:solid;
	border-width: 1px;
}
.Order{
border: none;
    color: white;
     padding: 10px 40px 10px 40px;
    border-radius: 8px;
    text-decoration: none;
    margin: 10px;
    cursor: pointer; 
    background-color: rgb(0,128,256);
    font-size: 18;
}
</style>

</head>
<body> 
	<div class="parallax">

		            <ul id = "ul1">
            <li ><a href="apple.html">Home</a>
            <li><a href="apple.html">About Us</a>
            <li><a href="apple.html">Menu</a>
            <li><a href="apple.html">I'm at the Restaurant</a>
            <li> <a   href="apple.html">Order Online</a>
            <li><a id="current" href="apple.html">Track Order</a>
            <li><a href="apple.html">Contact Us</a>
            </ul>
            <br><br><br><br><br><br><br><br><br><br><br><br>

<center><h1 style="color:#d0f441; font-family:Font; font-size:48;">
 One More Step....</h1></center>
<br><br><br><br><br><br>
 <div class="bodyDiv">
  	<br><br><br><br><br><br><br><br>
  
  <div class="BillAmount">
  	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>
  	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>


  	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>

    	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>

    	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>

    	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>
    	<div class = "Items">
  		  		
  		<img src = "menu-item-08.png" style = "float:left;">
  		<h3 style = "float:left;"> <pre>        Item Name        </pre></h3>
  		  		<h3 style = "float:left;"><pre>   500.00    </pre></h3>
  		  	<button class = "cancel"> <img src ="cancel-32.jpg" class="ItemImage"></button>

  </div><br>

</div>
  <div class ="formDiv">
  	<h2>Confirm your details: </h2>
	<form method="POST" action = "Order_track.php">
		<input type = "text" name = "name1" placeholder = "Full Name" required>
		<input type = "text" name = "number" placeholder = "Phone number" pattern = "[0-9]{10}" required><br><br>
		<input type = "email" name = "mail" placeholder = "Email Address" style="width:525px" required>
		<input type = "date" name = "date" placeholder = "Birthdate" style="width:125px" required><br><br>
		<input type = "text" name = "state" placeholder = "State" required>
		<input type = "text" name = "city" placeholder = "City" required> <br><br>
		<input type = "text" name = "Street" placeholder = "Street and  House number">
		<input type = "text" name = "pincode" placeholder = "Pincode" pattern = "[0-9]{6}"><br><br>
    <input type ="hidden" name = "lat" value = "<?php  echo $_GET['lat']?>">
    <input type ="hidden" name ="lon" value = "<?php  echo $_GET['lon']?>">
    <center><button type="submit" class="Order">
  Place Order
</button></center>
	</form>
  </div>
  <h2 style="margin-left:925px;"><pre>Total:       Rs. 500<pre></h2>
    	<center>
  	<input type = "text" placeholder = "Got a coupon?" id ="coupon" style = "background: url(coupon.png) no-repeat scroll 5px 15px; padding-left:35px; background-size:20px 20px"><br>
  	  <button type="button" class="applyCoup">
  Apply
</button><br><br><br><br><br><br><br><br><br>


</center>


</div>


	</div>

<script type="text/javascript">
$ulBar = document.getElementById("ul1");
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 100 ) {
    	document.getElementById("ul1").style.backgroundColor = "rgb(78,102,96)";
        
    } 
    else {
        document.getElementById("ul1").style.backgroundColor = "transparent";
    }
};

function getorderID


</script>

         <div style="background-color:rgb(78,102,96);"><hr><center>
                <a href="apple.html" class="fa fa-facebook" style ="margin:5px;"></a>
                <a href="apple.html" class="fa fa-twitter" style ="margin:5px;"></a>
                <a href="apple.html" class="fa fa-instagram" style ="margin:5px;"></a>
                <a href="apple.html" class="fa fa-linkedin" style ="margin:5px;"></a>
            </center><hr>
            </div>



            <footer height = "50px">
                <div >
                    <h5 style="float:left; padding-left:10px;">Copyright Puzzles 2017. All rights reserved.</h5>
                    <h5 style="float:right; padding-right:10px;"><a href="hello.html" class="term">Policies</a> | <a href="hello.html" class="term">Disclaimer</a> | <a href="hello.html" class="term">Terms and Conditions</a></h5>
                </div>
            </footer>
</body>
</html>