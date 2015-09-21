<?php 

namespace App\Http\Handlers;

use Intervention\Image\ImageManager;

class UploadHandler {

	public function save($file, $path, $filename, $extension) {
		
		if($file->isValid()) {

			$manager = new ImageManager();

			$filename .= '-'.time().'.'.$extension;

			$img = $manager->make($_FILES['upload']['tmp_name'])
			->crop(200,200)
			->save($path.$filename);
			
			return $filename;
			}

		return false;
		}
	}