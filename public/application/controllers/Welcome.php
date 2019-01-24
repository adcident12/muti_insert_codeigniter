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
		$this->load->model('Users_model');
		$data['profile'] = $this->Users_model->get_users();
		$this->load->view('welcome_message',$data);
	}
	public function save() {
		$this->load->model('Users_model');
		$this->load->model('Price_model');
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('lname', 'lname', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger"><span><b>ผิดพลาด</b>"กรุณากรอกอีกครั้ง"</span></div>');
            redirect('Welcome','refresh');
		}
		else {
			$array_table1['fname'] = $this->input->post('fname');
			$array_table1['lname'] = $this->input->post('lname');
			$array_table2['price'] = $this->input->post('price');
			$insert_id_table1 = $this->Users_model->insert($array_table1);
			$array_table2['user_id'] = $insert_id_table1;
			$insert_id_table2 = $this->Price_model->insert($array_table2);
			$array['price_id'] = $insert_id_table2;
			$this->Users_model->update($insert_id_table1, $array);
			$this->session->set_flashdata('status', '<div class="alert alert-success"><span><b>สำเร็จ</b>"บันทึกเรียบร้อย"</span></div>');
			redirect('Welcome','refresh');
		}

	}
}
