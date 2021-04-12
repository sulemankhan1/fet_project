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
		$this->load->model('pages_model', 'pm');
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

		// parameters
		$get = $this->input->get();

		$news = [];
		if(isset($get['search']) && $get['search'] != '') {
			// search
			$news = $this->nm->searchNews($get['search']);
		} elseif(isset($get['notifications_for']) && $get['notifications_for'] != "") {
			// notification for filter
			$news = $this->nm->getNewsByFilter('notification_for', $get['notifications_for']);
		} elseif(isset($get['keyword']) && $get['keyword'] != "") {
			// get notifications by keywords
			$news = $this->nm->getNewsByKeywords($get['keyword']);
		} else {
			// Normal Load Latest News
			$news = $this->nm->getLatestNews(20);
		}

		$data = array(
			'news' => $news,
			'get' => $get,
			'top_keywords' => $this->pm->getTopKeywords(),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/news');
		$this->load->view('includes/footer');

	}

	public function single_news($title) {
		// getting news by title
		$news = $this->nm->getNotificationByTitle(myUrlDecode($title));
		$keywords_txt = "";
		if(!empty($news)) {
			// get notification keywords
			$keywords = $this->bm->getRowsWithMultipleWhere('keywords', array(
				'type' => 'news',
				'news_id' => $news->id,
			));
			$keywords_txt = "";
			if(!empty($keywords)) {
				foreach($keywords as $keyword) {
					$keywords_txt .= "$keyword->keyword,";
				}
				$keywords_txt = substr($keywords_txt, 0, -1);
			}
		}

		$data = array(
			'news' => $news,
			'keywords' => $keywords_txt,
			'recent_news' => $this->nm->getLatestNews(8),
			'top_keywords' => $this->pm->getTopKeywords(),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/single_news');
		$this->load->view('includes/footer');

	}

}
