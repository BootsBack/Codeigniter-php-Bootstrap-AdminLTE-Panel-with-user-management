<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eerror_404 extends Admin_Controller
{
	// redirect to login page if 404 && not logged user
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
	}
	
	public function index()
	{
		header("HTTP/1.0 404 Not Found");
		$this->data['page_title'] = '404 Page Not Found';
		$this->render_template('error_404', $this->data);
	}
}
