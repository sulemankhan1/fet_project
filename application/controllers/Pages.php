<?php
/*
 * Code written by: M.suleman khan
 * m.sulemankhan@hotmail.com
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{


	public function __construct() {
		parent::__construct();
		$this->load->model('news_model', 'nm');
	}

	public function index()
	{

		$data = array(
			'title' => 'Home',
			'sliders' => $this->bm->getAll('slider_setting','id','desc'),
			'headlines' => $this->nm->getHeadlines(10),
			'latest_news' => $this->nm->getLatestNews(4),
			'notices' => $this->nm->getNotices(5),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/homepage');
		$this->load->view('includes/footer');

	}

	public function view_profile() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/profile');
		$this->load->view('includes/footer');
	}

	public function timetable() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/timetable');
		$this->load->view('includes/footer');

	}

	public function faculty() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/faculty');
		$this->load->view('includes/footer');

	}

	public function contact_us() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/contact_us');
		$this->load->view('includes/footer');

	}

	public function news() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/news');
		$this->load->view('includes/footer');

	}

	public function single_news($title) {

		$data = array(
			'news' => $this->nm->getNotificationByTitle(myUrlDecode($title)),
			'recent_news' => $this->nm->getLatestNews(8),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/single_news');
		$this->load->view('includes/footer');

	}

}
