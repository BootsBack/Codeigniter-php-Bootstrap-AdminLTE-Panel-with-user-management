<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();


		$this->data['page_title'] = 'Dashboard';
	}

	public function index()
	{
		$group_id = $this->data['group_data']['group_id'];
		$is_admin = ($group_id == 1) ? true :false;
		$this->load->model('Model_groups');
		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard/index', $this->data);
	}
	
}