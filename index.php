<?php
//header('Content-Type: text/html; charset=utf-8'); //sets for russian letters
?>

<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="myFacebook" />
      <meta name="keywords" content="myFacebook">
      <title>Intervention</title>
  
      <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 

      <link rel="stylesheet" type="text/css" media="all" href="css/myIntervention.css">
	  
      <script src="js/myIntervention.js"></script>         <!-- Core myIntervention JS-->
	  <script src="js/changeStyleTheme.js"></script>   <!-- Change wallpapers,changeStyleTheme JS-->
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Fa-fa library-->
	  
	
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

     </head>

     <body>  
	 
	 

   



       <div id="headX" class="jumbotron text-center gradient alert-success my-background head-style" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Intervention on-line</span> <i class="fa fa fa-book" style="font-size:48px;color:"></i><!--</span> <img src="http://78.media.tumblr.com/tumblr_m2hq5tt3ma1qav3uso1_400.gif" style="width:3%"/>--> </h1> 
		   
           <!--<p class="header_p">QR Codes on-line processor   <span class="glyphicon glyphicon-duplicate"></span>-->    <!--generates random lists, ramdomizes integers, etc-->
           </p>
		   <!--<p class="language"><a href="/eng">ENG</a></p>-->
		   
		  

		   
	   </div>



       
         <div class="wrapper grey">
    	     <div class="container">
		         <div class="row row1">
			 
			     
					 
			  
			         <!-------------- GENERATE FB Form Start------------->	
			         <!-- Each div should have id = checkboxID + "Div",  to automate it in js_controls.js -->
		             <div class="col-sm-4 col-xs-12 my-background coreDivs-toHide head-style" style="background-color:lavender;" id="qrGenerateDiv" >
		                 <!-------------- GENERATE Form Start------------->	
                         <form action="" id="myFormZ" method="post">
						 
                             <div class="form-group">
                                  <label for="fbCity">Image: <span class="glyphicon glyphicon-transfer"></span></label>
                                  <input type="text" class="form-control" id="fbCity" name="qr">
                             </div>
					
                            <button type="button" class="btn btn-default" id="submitEvents">Places</button>
							<button type="button" class="btn btn-default" id="submitPeople">People</button>
				            <button type="button" class="btn btn-default" id="clear">Clear</button>
                        </form>				   
                        <!---------------- END GENERATE  Form -------->				   
				  
			         </div> <!--END <div class="col-sm-4" style="background-color:lavender;">-->
				     <!--</div>--> <!--"row">-->
				 
				 			 
					 
					 
				 
				   </div>  <!-- END class="row row1"> here, to make sure QR img appears on the same line in desktop-->
				 
				 
				 
				    <!---------  -------->
				    <br>
				    <div class="col-sm-12 col-xs-12 head-style" id="status"> 
                       <img src='Classes/Intervention.php' alt='' />
					   
					   <?php
					   //checks if GD is installed
                          if (extension_loaded('gd')) {
                              echo "<br>GD support is loaded ";
                          }else{
                              echo "<br>GD support is NOT loaded ";
                          }
                          if(function_exists('gd_info')){
                              echo "<br>GD function support is available ";
                          }else{
                              echo "<br>GD function support is NOT available<br><br> ";
                          }
                       ?>
					   
					    <!---- /Loads Intervention --------->
                   		<br><img src="Library/myActions/canvas.php" alt=""/>	
                        <br><img src="Library/myActions/imageX.php"/>					
				    </div>
				    <!---------  -------->
				 
				  
				  
				 
				
				
				 
				
				

				<!------    JUST TO FIX OVERLAPPING by footer ------->
				<div class="col-sm-12 col-xs-12 head-style" style="height:400px;">
				</div>
				
				
	 

	 
	 
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
        
                


    	          
    	
		
		
		
			      <!-----------------  Button to change Style theme------------------------->
	              <input type="button" class="btn" value=">>" id="changeStyle" style="position:absolute;top:0px;left:0px;" title="click to change theme"/>
	              <!-----------------  Button to change Style theme------------------------->
				  
				  
				  
				  
				  
		
		          <!------------- Footer ------------->
				  <div class="footer navbar-fixed-bottom"> <!--navbar-fixed-bottom  fixxes bootom problem-->
				      Contact: <strong>dimmm931@gmail.com</strong><br>
					  <?php  echo date("Y"); ?>
				  </div>
		          <!------------ END Footer ----------->  
		
		
		
		
		<!-- ##### -- Advertise -- #### -->
		<!--
		   <div class="ads ">
		        <a target="_blank" href="https://www.facebook.com/events/165143454205556/" id="link">
				    <img src="images/ads/sub_od.jpg" alt="Submerged"/>  
				</a>	
			</div>
			-->
		<!-- ##### -- END Advertise -- #### -->
		
		
		
		
    
    </body>
</html>





<?php

// Record (with CLASS) all the  input  to  txt;  //;
      include("Classes/RecordTxt.php");
      RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/myIntervention.txt');// Record  to  text;
//End  Record;
?>
