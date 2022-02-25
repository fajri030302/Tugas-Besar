<?php

class Job_model extends CI_Model{

    public function getAllJob(){

        return  $this->db->get('user')->result_array();
        

        }

        public function tambahData(){

            $data = [
                
                "username" => $this->input->post('username',true),
                "world_name" => $this->input->post('worldName',true),
                "gaji" => $this->input->post('gaji',true)
                
            ];

            $this->db->insert('user',$data);
        }

        public function hapus($id){
            $this->db->where('user_id',$id);
            $this->db->delete('user');
        }

        public function detailkan($id){
            return $this->db->get_where('user', ['user_id'=> $id])->row_array();
        }

        public function ubah(){

            $data = [
                
                "username" => $this->input->post('username',true),
                "world_name" => $this->input->post('worldName',true),
                "gaji" => $this->input->post('gaji',true)
                
            ];
            $this->db->where('user_id',$this->input->post('id'));
            $this->db->update('user',$data);
        }

        public function cari(){

            $keyword = $this->input->post('keyword',true);
            $this->db->like('username',$keyword);
            return  $this->db->get('user')->result_array();
        }
}

?>