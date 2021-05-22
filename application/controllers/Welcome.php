<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function GetCategory()
	{


		$result = $this->Category->get_category_main();

  		$data['SelectOption'] =  '<select name="Category" id="Category">';
 
		for ($i=0; $i < count($result); $i++) { 
			
			$data['SelectOption'] .= '<option value="'.$result[$i]->Category_id.'" >';
			$data['SelectOption'] .= $result[$i]->Category_Name;
			$data['SelectOption'] .= "</option>";
		}

		$data['SelectOption'] .= "</select>";

		//return $data['SelectOption'];

		$this->load->view('Category', $data);
	}


	public function GetSubCategory($id)
	{


		$result = $this->Category->get_sub_category($id);

  		echo "<ul>";
 
		for ($i=0; $i < count($result); $i++) { 
			
			echo "<li>";
			echo $result[$i]->Category_Name;
			echo "</li>";
		}

		echo "</ul>";


	}

}
