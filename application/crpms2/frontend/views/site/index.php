<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\Carousel */

$this->title = 'CRMGH-PMS';
?>
        <!---div class="jumbotron">
		<h1>Welcome to Cruz-Rabe Maternity and General Hospital </h1>
    </div---->

<header><img src="../web/images/header1.png" width="1100" height="250" >
<center><body background="../web/images/background5.png">
<div class="site-index">

<script type="text/javascript"> 

var i = 0; 

var image = new Array();   

// LIST OF IMAGES 

image[0] = "../web/images/screenshot1.jpg"; 

image[1] = "../web/images/screenshot2.jpg"; 

image[2] = "../web/images/screenshot3.jpg";    

image[3] = "../web/images/screenshot4.jpg"; 

image[4] = "../web/images/screenshot5.jpg"; 

image[5] = "../web/images/screenshot6.jpg"; 

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
                <h2>Company Profile</h2>

                <p>
				
				<b> With the mission to help the constituents of Taguig in their Medical needs. <b> <br>

			<li>	1969 - Year of founding, as a 3-bed maternity. <br></li>
			<li>	1974 - Expanded into a primary general hospital with 12 beds capacity. <br></li>
			<li>	1981 - Expanded and upgraded into a secondary hospital with 50 beds. <br></li>
		</p>
		 <p><a class="btn btn-default" href="http://localhost/crpms2/frontend/web/index.php?r=site%2Fabout">View More &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Vision</h2>

                <p>
				
				<li> SSMC is one of the country's leading, trusted and affordable one stop provider of health care solutions for employers, 
			their workforce and the working class in general.</li> <br>
				<li>SSMC is an advocate of the business principle of Corporate Citizenship whereby its business interest is served 
					best with profitability and growth being a ccomplished alongside the development of the communities, the protection 
					and sustainability of the environment, and the improvement of people's quality of life. </li> <br>
				</p>
	 <p><a class="btn btn-default" href="http://localhost/crpms2/frontend/web/index.php?r=site%2Fabout">View More &raquo;</a></p>
 
            </div>
            <div class="col-lg-4">
                <h2>Mission</h2>

                <p>
				
		<li> SSMC regards all those it serve with the respect,kindness and compassion;</li><br>
		<li>SSMC promotes health and wellness pratices in the worplaces of its client as well as of itself for sound business outcomes;</li><br>
		<li>SSMC continiously strives to have a full assortment of suitable equipment and facilities to etter serve its patients;</li><br>
	 <p><a class="btn btn-default" href="http://localhost/crpms2/frontend/web/index.php?r=site%2Fabout">View More &raquo;</a></p>

				
				</p>
            </div>
        </div>

    </div>
</div>
