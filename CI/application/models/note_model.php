<?php
class note_model extends CI_Model{

	  public function get_note($id){
        $this->db->select('
            notes.note_name,
            notes.id,
            notes.create_date,
            notes.note_body,
            tasks.id as task_id,
            tasks.task_name,
            tasks.task_body
            ');
        $this->db->from('notes');
        $this->db->join('tasks', 'tasks.id = notes.task_id','LEFT');
        $this->db->where('notes.id',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }

  public function delete_note($note_id){
        $this->db->where('id',$note_id);
        $this->db->delete('notes');
        return;
    }


    
     public function get_users_notes($user_id){
        $this->db->where('task_userid',$user_id);
        $this->db->join('notes', 'tasks.id = notes.task_id');
        $this->db->order_by('notes.create_date', 'asc'); 
        $query = $this->db->get('tasks');
        return $query->result();
    }



       public function get_task_name($task_id){
        $this->db->where('id',$task_id);
        $query = $this->db->get('tasks');
        return $query->row()->task_name;
    }

    public function create_note($data){
	$insert = $this->db->insert('notes', $data);
	return $insert;
    }

     public function get_note_task_id($note_id){
        $this->db->where('id',$note_id);
        $query = $this->db->get('notes');
        return $query->row()->task_id;
    }

    public function edit_note($note_id,$data){
        $this->db->where('id', $note_id);
        $this->db->update('notes', $data); 
        return TRUE;
    }
    
 public function get_note_data($note_id){
        $this->db->where('id',$note_id);
        $query = $this->db->get('notes');
        return $query->row();
    }
}