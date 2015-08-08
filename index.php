<?php
/**********************************************
/* Define things here
**********************************************/
/*

.intro-header {
    padding-top: 50px;
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
    background: url(../img/intro-bg.jpg) no-repeat center center;
    background-size: cover;
}

*/


$path = "/var/www/utdbattlebots.com/template/";

require($path . "head.php");
?>

    <div class="container theme-showcase" role="main">
	<div class="row">
		<div class="col-md-12"><br></div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
			<div class="col-md-12">
				<div style="background: url(/assets/img/teeth.jpg) no-repeat center center; background-size: cover;" class="bg-image">
					<div style="position:relative; padding-top:25%; width:100%; height:0; stroke: black; stroke-width:2px; stroke-linejoin: round; font-weight:bold;">
						<svg height="100%" width="100%" style="height:100%; width:100%; display:block; font-family: 'Open Sans', Calibri, sans-serif; fill: #FEFEFE; color: #FEFEFE; position: absolute; top:0; left:0;" viewBox="0 0 600 200" preserveAspectRatio="xMinYMin meet">
 						 	<text width="100%" style="font-size: 80px;" y="80" x='8'>UTD BATTLEBOTS</text>
							 <text width="100%" style="font-size: 50px;" y="130" x='13'>HOME OF THE BLENDER</text>
						</svg>
					</div>
					<br><br><br>
      					<p style="padding-left: 2%; padding-bottom: 2%;">
						<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#contactUs">
  							CONTACT US
						</button>
					</p>
					<br>
				</div>
			</div>
			</div>
			<div class="row">
                        <div class="col-md-12">
				<div class="page-header">
              				  <h1>Our Mission:</h1>
       				</div>

                		<strong><ul>
                        	<li>Build productive and educational relationships between engineering students and industry professionals.</li> 
                        	<li>Enhance the skills of UT Dallas engineering students through practice and application.</li>
                        	<li>To be excellent to each other. </li>
                        	</ul></strong>
			</div>
			</div>
	</div>
		<div class="col-md-3">
			<div class="panel panel-warning">
                                        <div class="panel-heading">
                                                <h3 class="panel-title">Thank You!</h3>
                                        </div>
                                        <div class="panel-body">
						<img src="https://placehold.it/500x500" style="margin-top: 10%; margin-bottom: 3%;" class="center-block img-thumbnail" alt="$SPONSOR">
                                                <p>$SPONSORNAME made a very generous contribution to the team on $DATE, in the form of $MONEY. 
						Thanks to them, we were able to purchase some much-needed supplies to improve the Blender. 
						<p class="text-right"><a href="/news/$SPONSOR" class="btn btn-warning" role="button">MORE</a></p></p>
                                        </div>
                       </div>
		</div>
	</div>
	

	<div class="page-header">
		<h1>Team News</h1>
	</div>

	<div class="row">
		<div class="col-md-4">
       				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Sponsors</h3>
					</div>
					<div class="panel-body">
    						<ul>
						<li>will be listed here</li>
						</ul>
					</div>
					</div>
				
		</div>
		<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Skills</h3>
					</div>
					<div class="panel-body">
    						<ul>
						<li>Winning</li>
						<li>Pickin' up chicks</b>
						</ul>
					</div>
					</div>
		</div>
		<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Panel</h3>
					</div>
					<div class="panel-body">
    						<ul>
						<li>List Item</li>
						<li><a>Click here</a> for rare pepe's</li>
						</ul>
					</div>
				</div>
		</div>
	</div>
    </div> <!-- /container -->

<?php
	include($path . 'contact.php');
	include($path . 'foot.php');
?>
