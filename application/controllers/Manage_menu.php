<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_menu extends CI_Controller {


	function __construct(){
		parent::__construct();
		//$this->load->database();
		$this->load->model('menu_model','Menu');
	}

	public function index()
	{
		
		
		$this->load->view('formadd_menu');
		
	}

	public function getcategory(){
		$result = $this->Menu->_getCategory();
		$this->load->view('formadd_menu',$result);
	}

	public function insert_menu(){
		$data = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'mprice' => $this->input->post('price')
		);
		$this->Menu->menu_insert($data);
		
		$this->load->view('formadd_menu');
		
	}

	 

	public function delete_menu(){
		$del_cid = $this->input->get('m_id');
		$this->Menu->_delete_menu_id($del_cid);
		echo "<center>";
		echo "ลบประเภท".$del_cid."เรียบร้อยแล้ว";
		echo "<a href='http://localhost/lifecafe/index.php/Manage_menu/showmenu'>Back</a>";
	}

	public function edit_menu(){
		$editid = $this->input->get('m_id');
		$result = $this->Menu->_getMenuByID($editid);
		$this->load->view('formadd_menuedit',$result);
	}


	public function edit_menu_totable(){
		$cid = $this->input->post('catid');
		$data = array(
			'menu_name' => $this->input->post('muname'),
			'menu_name' => $this->input->post('catid'),
			'menu_name' => $this->input->post('catname')
		);
		$this->Menu->menu_edit($data,$cid);
		$result = $this->Mune->_getMenu();
		$this->load->view('menu',$result);
		
	}


	public function showmenu(){
		$result = $this->Menu->_getMenu();
		$this->load->view('menu',$result);

	}

	public function update(){
		$menu = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'mprice' => $this->input->post('price')
		);

		$this->Menu->menu_update($menu,$this->input->post('menu_id'));
		$result = $this->Menu->_getMenu();
		$this->load->view('menu',$result);
	}



}
