<?php

class ImageController extends Controller {
	
    // GETS SPECIFIC IMAGE BASED ON IMAGE_ID
	public function index ($img_id) {
        $viewbag['images'] = $this->model('image')->get_image($img_id);
        $this->view('image', 'img', $viewbag);
    }    

    // UPLOAD IMAGE IF FORM IS SUBMITTED
    public function upload () {
    if($this->logged_in()) {
      if($this->method('post')) {
            $this->model('image')->upload();
            Header('Location: /image/upload');
      } else {
          $this->view('image', 'upload');
      }
      } else {
	  header('Location: /user/login');
      }
    }

    // FIND ALL IMAGES FROM ALL USERS
    public function imagelist () {
        $viewbag['images'] = $this->model('image')->get_images();
        $this->view('image', 'table', $viewbag);       
    }

    // FIND ALL IMAGES FROM ONE USER
    public function all_userimages ($username) {
        $viewbag['images'] = $this->model('image')->get_userimages($username);
        $this->view('image', 'img', $viewbag);      
    }
	
}