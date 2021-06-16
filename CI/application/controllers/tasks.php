<?php
class tasks extends CI_Controller{

	public function __construct(){
		 parent::__construct();

		if(!$this->session->userdata('logged_in')){

		$this->session->set_flashdata('noaccess','Sorry, you are not logged in');
		redirect('home/index'); 
		}
	}

	 public function index(){
        //Get the logged in users id
        $user_id = $this->session->userdata('user_id');
        //Get all tasks from the model
        $data['tasks'] = $this->task_model->get_all_tasks($user_id);
        
        //Load view and layout
        $data['main_content'] = 'tasks/index';
        $this->load->view('layouts/main',$data);
    }



    

	   public function show($id){
        //Get all tasks from the model
        $data['task'] = $this->task_model->get_task($id);
        //Get all  notes for this task
        $data['notes'] = $this->task_model->get_task_notes($id);
           
        //Load view and layout
        $data['main_content'] = 'tasks/show';
        $this->load->view('layouts/main',$data);
    }


	public function add(){
        $this->form_validation->set_rules('task_name','task Name','trim|required');
        $this->form_validation->set_rules('task_body','task Body','trim');
       

        
        if($this->form_validation->run() == FALSE){
            //Load view and layout
            $data['main_content'] = 'tasks/add_task';
            $this->load->view('layouts/main',$data);  
        } else {
            //Validation has ran and passed  
             //Post values to array
            $data = array(                    
                'task_name'    => $this->input->post('task_name'),
                'task_body'    => $this->input->post('task_body'),
                'due_date'    => $this->input->post('due_date'),
                'task_userid' => $this->session->userdata('user_id')
            );
           if($this->task_model->create_task($data)){
                $this->session->set_flashdata('task_created', 'Your note task has been created');
                //Redirect to index page with error above
                redirect('tasks/index');
           }
        }
    }
    
    
     public function quickadd(){
        $this->form_validation->set_rules('task_name','task Name','trim|required');
        if($this->form_validation->run() == FALSE){
            //Load view and layout
            $data['main_content'] = 'home';
            $this->load->view('layouts/main',$data);  
        } else {
            $data['task_name'] = $this->input->post('task_name');
            //Load view and layout
            $data['main_content'] = 'tasks/add_task';
            $this->load->view('layouts/main',$data);  
        }
    }
    public function edit($task_id){
        $this->form_validation->set_rules('task_name','task Name','trim|required');
        $this->form_validation->set_rules('task_body','task Body','trim');
        
        if($this->form_validation->run() == FALSE){
            //Get the current task info
            $data['this_task'] = $this->task_model->get_task_data($task_id);
            //Load view and layout
            $data['main_content'] = 'tasks/edit_task';
            $this->load->view('layouts/main',$data);  
        } else {
            //Validation has ran and passed  
             //Post values to array
            $data = array(             
                'task_name'    => $this->input->post('task_name'),
                'task_body'    => $this->input->post('task_body'),
                'due_date'    => $this->input->post('due_date'),
                'task_userid' => $this->session->userdata('user_id')
            );
           if($this->task_model->edit_task($task_id,$data)){      
                $this->session->set_flashdata('task_updated', 'Your note task has been updated');
                //Redirect to index page with error above
                redirect('tasks/index');
           }
        }
    }
    
    
    public function delete($task_id){      
            //Delete task
            $this->task_model->delete_task($task_id);
            //Create Message
            $this->session->set_flashdata('task_deleted', 'Your task has been deleted');        
            //Redirect to task index
            redirect('tasks/index');
     }
}

