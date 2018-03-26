<!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   <style>
	
   
   </style>
   
   </head>
   
   <body>
     <div class="container"> <!-----conatiner------>
		<div class="row">  <!------row--->
			<div class="col-mid-12"> <!--col----->
			<?php
			
			include_once "header.php";
			?>
			
		</div>
		</div>
		<div class="row"><!-----menu row---->
			<div class="col-mid-12">
			
			<?php
			
			include_once "menu.php";
			?>
			</div>
			</div><!-----------menu row--------->
<!----------------------------------------------------------------------------------------->
			<div class="row"><!---containt----->
				<div class="col-mid-12">
				</div>
					<!------------------panal------------------->
					<div class = "panel panel-primary">
					   <div class = "panel-heading">
						  <h3 class = "panel-title">Add Student Records</h3>
					   </div>
					   
					   <div class = "panel-body">
							<!-------add student------>
							<table class="table">
								<tr>
									<td> Condidate Name :</td>
									<td> <input type="text" id="nametxt" placeholder="Your Name"/></td>
								</tr>
								<tr>
									<td> Condidate Email :</td>
									<td> <input type="text" id="emailtxt" placeholder="Your Email"/></td>
								</tr>
								<tr>
									<td> condidate Course :</td>
									<td> <input type="text" id="coursetxt"placeholder="Your Course"/></td>
								</tr>
								
							</table>
						  
						  <input type="button" value="SaveRecord" 
						  id="btnsave"
						  value="SaveRecord"
						  class="btn btn-primary"/>
						  <!------add student---->
						  
						  
					   </div>
					</div>


					<!--------------pannal---------------------->
									
				</div><!-------containt row--->
<!----------------------------------------------------------------------------------------->
				<div class="row"><!---containt----->
					<div class="col-mid-12">
					<?php
					include_once "footer.php";
					?>
					</div>

				
				</div><!-------containt row--->
			</div> <!-----container---->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
	  
	  
	  <!---------------------save.js-------------->
	  <script src="save.js"></script>
   </body>
</html>