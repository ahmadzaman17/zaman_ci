<?php

class Calculator extends CI_Controller
{
	 function index()
	{
		$data = array('judul' => 'ci' );
		$this->load->view('1',$data);
	}
}