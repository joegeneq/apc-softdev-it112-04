<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\Carousel */

$this->title = 'CRMGH-PMS';
?>
        <!---div class="jumbotron">
		<h1>Welcome to Cruz-Rabe Maternity and General Hospital </h1>
    </div---->

<header><img src="../images/header1.png" width="1100" height="250" >
<center><body background="../images/background5.png">
<div class="site-index">

<script type="text/javascript"> 

var i = 0; 

var image = new Array();   

// LIST OF IMAGES 

image[0] = "../images/screenshot1.jpg"; 

image[1] = "../images/screenshot2.jpg"; 

image[2] = "../images/screenshot3.jpg";    

image[3] = "../images/screenshot4.jpg"; 

image[4] = "../images/screenshot5.jpg"; 

image[5] = "../images/screenshot6.jpg"; 

var k = image.length-1;    

var caption = new Array(); 

// LIST OF CAPTİONS  

caption[0] = ""; 

caption[1] = ""; 

caption[2] = "";   

caption[3] = "";   

caption[4] = "";   

caption[5] = "";   
function swapImage(){ 

var el = document.getElementById("mydiv"); 

el.innerHTML=caption[i]; 

var img= document.getElementById("slide"); 

img.src= image[i];  

if(i < k ) { i++;}  

else  { i = 0; } 

setTimeout("swapImage()",3000);  

} 

function addLoadEvent(func) { 

var oldonload = window.onload; 

if (typeof window.onload != 'function') { 

window.onload = func; 

} else  { 

window.onload = function() { 

if (oldonload) { 

oldonload(); 

} 

func(); 

} 

} 

}  

addLoadEvent(function() { 

swapImage(); 

});  

</script> 

<table style="border:3px solid #01DF3A;"> 

<tr> 

<td> 

<img name="slide" id="slide" alt ="my images" height="285" width="1000" src="screenshot1.jpg"/> 

</td> 

</tr> 

<tr> 

<td align="center"style="font:small-caps bold 15px georgia; color:green;"> 

<div id ="mydiv"></div> 

</tr> 

</td> 

</table> 



	
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
