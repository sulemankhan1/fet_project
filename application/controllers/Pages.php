<?php
/*
 * Code written by: M.suleman khan
 * m.sulemankhan@hotmail.com
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{


	public function __construct()
	{
		
		parent::__construct();

	}

	public function index()
	{

		$data = [
			
			'title' => 'Home',

			'sliders' => $this->bm->getAll('slider_setting','id','desc')

		];

		$this->load->view('includes/header',$data);
		$this->load->view('pages/homepage');
		$this->load->view('includes/footer');

	}
}
