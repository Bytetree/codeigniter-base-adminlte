<?php
	class MY_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			if( ! $this->session->has_userdata('user_role') )
			{
				redirect('auth/login');
			}
			if( $this->uri->segment(1) == "admin" && $this->session->userdata('user_role') != 1 )
			{
				redirect('auth');
			}
		}
	}
?>

    