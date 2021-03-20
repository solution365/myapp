<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller{
  public function __Construct() {       
     parent::__Construct();
     $this->load->helper('url');
    }

    public function index()
    {
		$this->load->view('event_landing');
	}


	public function form()
	{
		$this->load->view('registration_form');
	}


	public function sidebar()
	{
		$this->load->view('sidebar');
	}


	public function admin_settings()
	{
		$this->load->view('event_settings');  
	}

	public function admin_package()
	{
        $this->load->view('event_package');
	}


	public function admin_event()
	{
		$this->load->view('transaction_event'); 
	}


	public function admin_registeredusers()
	{
		$this->load->view('transaction_registeredusers');
	}
		echo "Hello Students";

}