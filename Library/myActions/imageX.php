<?php

//creates a new empty image resource with red background

//Loads Intervention
require_once("../intervention_image_2.4.2.0_require/vendor/autoload.php"); 
						  
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));

// and you are ready to go ...
//$image = Image::make('image_int/img.jpg')->resize(300, 200);   
$image = Image::make('image_int/img')->getRealPath(); 						 
					

// create a new empty image resource with red background
//$img = Image::canvas(32, 32, '#ff0000');
				 		
// send HTTP header and output image data
 //echo $img->response('jpg', 70);  //must have!!!!!!
						
?>
