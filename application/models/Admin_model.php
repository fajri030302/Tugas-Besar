<?php

class Admin_model extends CI_Model{


    public function getAllUser(){
        return $this->db->get('user')->result_array();
    }

    public function getUser($limit, $start,$keyword = null){

        if($keyword){
         
            $this->db->like('username',$keyword);
        }
    return $this->db->get('user',$limit, $start)->result_array();
    }


public function hapuss($id){
    $this->db->where('user_id',$id);
    $this->db->delete('user');
}


    public function countAll(){

        return $this->db->get('user')->num_rows();
    }
}


?>