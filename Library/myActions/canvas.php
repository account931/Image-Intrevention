<?php

//creates a new empty image resource with red background

//Loads Intervention
require_once("../intervention_image_2.4.2.0_require/vendor/autoload.php"); 
						  
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'gd'));   //imagick IS NOT WORKING ON ZZZ HOST

// and you are ready to go ...
//$image = Image::make('images/bg-pattern.JPEG')->resize(300, 200);
						 
					

// create a new empty image resource with red background
$img = Image::canvas(32, 120, '#ff0000'); //->insert('image_int/des.ico.png');
				 		
// send HTTP header and output image data
 echo $img->response('jpg', 70);  //must have!!!!!!
						
?>
