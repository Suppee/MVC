<?php

/** Default Controller */
class HomeController extends Controller {
	
	/**
	 * Default function for HomeController
	 * 
	 * Collects info in "viewbag":
	 * - using functino parameters
	 * - using services
	 * - using models
	 * and sending it to the view
	 */
	public function index () {
	        
		if($this->logged_in()) {
			$viewbag['users'] = $this->model('user')->get_users();
			$viewbag['images'] = $this->model('image')->get_images();
			$this->view('home', 'index', $viewbag);

		} else {
			header('Location: /user/login');
		}
	}
	
}