<?php

class Category extends CI_Model {



	public function get_category_main()
	{
	        $this->load->database();

	        return $this->db->get_where('category',array('Sub_Category' => Null))->result();
	}

	public function get_sub_category($Main_category_id)
	{
	        $this->load->database();

	        return $this->db->get_where('category',array('Sub_Category' => $Main_category_id))->result();
	}



}

?>