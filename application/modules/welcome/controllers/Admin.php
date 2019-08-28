<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                
        }
	public function index()
	{
	
		$this->load->view('welcome_message');
	}

    public function add() {

        $this->form_validation->set_error_delimiters('<small class="form_validation_error" style="color:#d57171";>', '</small>');
        $this->form_validation->set_message('required', 'This field is required.');
        $this->form_validation->set_rules('term[]', 'term price', 'callback_validateTermPrice', array('required' => 'Atleast anyone price field is required.'));
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->session_price_model->add_record();
            $this->session->set_flashdata('success', 'Session price has been added successfully.');
            redirect(base_url('invoicing/prices/sessions'));
        }
        $this->load->view('add');
    }
}
