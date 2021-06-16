<?php

class home extends CI_Controller{ 
public function index(){

	if($this->session->userdata('logged_in')){
            //Get the logged in users id
            $user_id = $this->session->userdata('user_id');
            //Get all tasks from the model
            $data['tasks'] = $this->task_model->get_all_tasks($user_id);
            $data['notes'] = $this->note_model->get_users_notes($user_id);
        }
       
		$data['main_content'] = 'home';
        $this->load->view('layouts/main',$data);
}

}