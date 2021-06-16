<?php
class notes extends CI_Controller{

public function show($id){
        //Get single note info
        $data['note'] = $this->note_model->get_note($id);
       
        //Load view and layout
        $data['main_content'] = 'notes/show';
        $this->load->view('layouts/main',$data);
    }

    public function add($task_id = null){
        $this->form_validation->set_rules('note_name','note Name','trim|required');
        $this->form_validation->set_rules('note_body','note Body','trim');       
        if($this->form_validation->run() == FALSE){
            //Get task name for view
            $data['task_name'] = $this->note_model->get_task_name($task_id); 
            //Load view and layout
            $data['main_content'] = 'notes/add_note';
            $this->load->view('layouts/main',$data);  
        } else {
             //Post values to array
            $data = array(             
                'note_name'    => $this->input->post('note_name'),
                'note_body'    => $this->input->post('note_body'),
                'task_id'      => $task_id
            );
           
           if($this->note_model->create_note($data)){
                $this->session->set_flashdata('note_created', 'Your note has been created');
                //Redirect to index page with error above
                redirect('tasks/show/'.$task_id.'');
           }
        }
    }
    
public function edit($note_id){
        $this->form_validation->set_rules('note_name','note Name','trim|required');
        $this->form_validation->set_rules('note_body','note Body','trim');       
        if($this->form_validation->run() == FALSE){
            //Get task id
            $data['task_id'] = $this->note_model->get_note_task_id($note_id);
            //Get task name for view
            $data['task_name'] = $this->note_model->get_task_name($data['task_id']); 
            //Get the current note info
            $data['this_note'] = $this->note_model->get_note_data($note_id);
            //Load view and layout
            $data['main_content'] = 'notes/edit_note';
            $this->load->view('layouts/main',$data);  
        } else {
            //Get task id
            $task_id = $this->note_model->get_note_task_id($note_id);
            //Post values to array
            $data = array(             
                'note_name'    => $this->input->post('note_name'),
                'note_body'    => $this->input->post('note_body'),
                'task_id'      => $task_id
            );
           if($this->note_model->edit_note($note_id,$data)){
                $this->session->set_flashdata('note_updated', 'Your note has been updated');
                //Redirect to index page with error aboves
                redirect('tasks/show/'.$task_id.'');
           }
        }
    }


    
    
    public function delete($task_id,$note_id){    
            //Delete task
            $this->note_model->delete_note($note_id);
            //Create Message
            $this->session->set_flashdata('note_deleted', 'Your note has been deleted');        
            //Redirect to task index
            redirect('tasks/show/'.$task_id.'');
     }
}