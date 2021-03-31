<?php


class globalTester {
	
	public function globalTester(){
		
		//$this->createThumbs("imgs/","imgs/thumbs/",100, 100);
	}
	
	// call createThumb function and pass to it as parameters the path
	// to the directory that contains images, the path to the directory
	// in which thumbnails will be placed and the thumbnail's width.
	// We are assuming that the path will be a relative path working
	// both in the filesystem, and through the web for links
	function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth, $thumbHeight )
	{
		// open the directory
		$dir = opendir( $pathToImages );

		// loop through it, looking for any/all JPG files:
		while (false !== ($fname = readdir( $dir ))) {
			// parse path for the extension
			$info = pathinfo($pathToImages . $fname);
// 			echo "<pre>";
// 			print_r($info);
// 			echo "<br /> $fname";
// 			echo "</pre>";
// 			echo (strpos($fname, "c") !== false) ? "true" : "false";
// 			continue;
			// continue only if this is a JPEG image
			if ( strtolower($info['extension']) == 'jpg' && strpos($fname, "c") !== false)
			{
				$newfname = "tmb_".$fname;
				echo "Creating thumbnail for {$pathToThumbs} / {$newfname} <br />";

				// load image and get image size
				$img = imagecreatefromjpeg( "{$pathToImages}/{$fname}" );
				$width = imagesx( $img );
				$height = imagesy( $img );

				// calculate thumbnail size
				$new_width = $thumbWidth;
				//$new_height = floor( $height * ( $thumbWidth / $width ) );
				$new_height = $thumbHeight;

				// create a new temporary image
				$tmp_img = imagecreatetruecolor( $new_width, $new_height );

				// copy and resize old image into new image
				imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

				// save thumbnail into a file
				imagejpeg( $tmp_img, "{$pathToThumbs}/{$newfname}", 100 );
			}
		}
		// close the directory
		closedir( $dir );
	}
	
}

$tester = new globalTester();
$folder = "pictures_to_crop/Winsby";
// $tester->createThumbs($folder, $folder, 135, 106);

?>