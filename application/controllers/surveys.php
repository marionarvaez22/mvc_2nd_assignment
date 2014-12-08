<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller 
{
	public function index()
	{
		$this->load->view('survey');
	}

	public function process()
	{
		$new_survey = $this->input->post();

		if(empty($new_survey['name']))
		{
		    $this->session->set_userdata('error', "Please enter your name.");
		    redirect('/surveys');
		}
		else
		{
			$this->session->set_userdata($new_survey);

			if(isset($this->session->userdata['views']))
				$views = $this->session->userdata['views'] + 1;
			else
				$views = 1;

			$this->session->set_userdata('views', $views);

			redirect('/results');
		}
	}

	public function results()
	{	
		$this->load->view('results');		
	}

}
