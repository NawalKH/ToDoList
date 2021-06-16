<?php
class task_model extends CI_Model{
public function get_tasks(){
$query=$this->db->get('tasks');
return $query->result();
}

 public function get_all_tasks($user_id){
        $this->db->where('task_userid',$user_id);
        $this->db->order_by('create_date', 'asc'); 
        $query = $this->db->get('tasks');
        return $query->result();
    }

public function get_task($id){
        $this->db->select('*');
        $this->db->from('tasks');
        $this->db->where('id',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }



         public function get_task_notes($task_id){
        $this->db->select('
            notes.note_name,
            notes.note_body,
            notes.id as note_id,
            tasks.task_name,
            tasks.task_body
            ');
        $this->db->from('notes');
        $this->db->join('tasks', 'tasks.id = notes.task_id');
        $this->db->where('notes.task_id',$task_id);
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();   
    }



public function create_task($data){
	$insert = $this->db->insert('tasks', $data);
	return $insert;
    }

   public function edit_task($task_id,$data){
        $this->db->where('id', $task_id);
        $this->db->update('tasks', $data); 
        return TRUE;
    }

    public function get_task_data($task_id){
        $this->db->where('id',$task_id);
        $query = $this->db->get('tasks');
        return $query->row();
    }
    
    public function delete_task($task_id){
        $this->db->where('id',$task_id);
        $this->db->delete('tasks');
        $this->delete_notes_of_task($task_id);
        return;
    }

    // if we delete a task -> all task's notes will be deleted  
    private function delete_notes_of_task($task_id){
        $this->db->where('task_id',$task_id);
        $this->db->delete('notes');
        return;
    }
}