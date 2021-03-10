<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
  {
        parent::__construct();

				$this->load->model('Main_model');

				if (empty($this->session->userdata('username'))) {

						redirect('login');

				}

				if ($this->session->userdata('language_to_user') == 'AR') {

						$language = 'Arabic';
				}
				else{

					$language = 'Eng';

				}

					$this->load->language($language,$language);


  }


  public function getDepartByColgId($id)
  {

			$departments = $this->Main_model->getDepartmentsByColgId($id);

		    $output = '';
		    $output .= '<option value="">'.__('select_depart_txt').'</option>';

		      foreach ($departments as $v) {

		        $output .='<option value="'.$v->depart_id.'">'.$v->depart_name.'</option>';

		      }


		    echo $output;

  }

  public function getLabByDepartId($id)
  {

		$labs = $this->Main_model->getLabsByDepartId($id);

			$output = '';
			$output .= '<option value="">'.__('select_lab_txt').'</option>';

				foreach ($labs as $v) {

					$output .='<option value="'.$v->lab_id.'">'.$v->lab_name.'</option>';

				}


			echo $output;

  }

  public function getEquipmentByLabId($id)
  {

		$machines = $this->Main_model->getEquipmentByLabId($id);

			$output = '';
			$output .= '<option value="">'.__('select_machine_txt').'</option>';

				foreach ($machines as $v) {

					$output .='<option value="'.$v->machine_id.'">'.$v->machine_name.'</option>';

				}


			echo $output;

  }

	public function getCagesByLabId($id)
	{

			$this->load->model('Animal_inv_model');

			$cages = $this->Animal_inv_model->getAvailableCages($id);

			$output = '';
			$output .= '<option value="">'.__('select_cage_txt').'</option>';

				foreach ($cages as $v) {

					$output .='<option value="'.$v['id'].'">'.$v['name'].'</option>';

				}

			echo $output;

	}

	public function getAnimalsByCageId($id)
	{

		$this->load->model('Animal_inv_model');

		$animals = $this->Animal_inv_model->getAnimalsByCageId($id);

			$output = '';
			$output .= '<option value="">'.__('select_animal_txt').'</option>';

				foreach ($animals as $v) {

					$output .='<option value="'.$v->id.'">'.$v->stock_no.'('.$v->type.')</option>';

				}

			echo $output;

	}



}
