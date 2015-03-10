<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<body background="../images/background5.png">
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Cruz-Rabe Maternity and General Hospital </h1>


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

<img name="slide" id="slide" alt ="my images" height="285" width="1000" src="screensho1.jpg"/> 

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
                <h2>Mission</h2>

                <p>
		SSMC regards all those it serve with the respect,kindness and compassion; <br>


		<li>SSMC promotes health and wellness pratices in the worplaces of its client as well as of itself for sound business outcomes;</li>
		<li>SSMC continiously strives to have a full assortment of suitable equipment and facilities to etter serve its patients;/li>
		<li>SSMC promotes the development of a consortium of competent and effective health professionals and workers who are recognized 
			as part of the healthcare family worthhy of being treated with loyalthy, respect and dignity;</li>
		<li>SSMC networks with labor intensive institutions and acts with outmost, honesty ,integrity and fairness to the best interest of 
			the working masses;</li>
		<li>SSMC maintains a sound Quality Assurance Program, continiously strives for improvement and supports its efforts with 
		certification from various recognized accrediting bodies in Quality, Environment, Safety and health and other areas that may 
		redeemed relevant and beneficial for all concerned at any given time; and,</li>
		<li>SSMC networks with benevolent individuals and intstitutions to ensure that resources are made available to effectively 
		and advocacy programs.</li>
				
				</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Vision</h2>

                <p>
				<li> SSMC is one of the country's leading, trusted and affordable one stop 
				provider of health care solutions for employers, their workforce and the working class in general.</li>
				<li> SSMC is an advocate of the business principle of Corporate Citizenship whereby its business 
				interest is served best with profitability and growth being a ccomplished alongside the development of the communities,
				the protection and sustainability of the environment, and the improvement of people's quality of life. </li>
				
				</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            
        </div>

    </div>
</div>

