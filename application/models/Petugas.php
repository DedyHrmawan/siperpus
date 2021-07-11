<?php
    class Petugas extends CI_Model{
        public function getAll(){
            $this->db->order_by('USERNAME_PETUGAS', 'DESC');
            return $this->db->get('petugas')->result();
        }
        public function get($param){
            return $this->db->get_where('petugas', $param)->row();
        }
        public function insert($param){
            $this->db->insert('petugas', $param);
        }
        public function update($param){
            $usernameOld = $param['USERNAMEOLD_PETUGAS'];
            unset($param['USERNAMEOLD_PETUGAS']);
            $this->db->where('USERNAME_PETUGAS', $usernameOld)->update('petugas', $param);
        }
        public function delete($param){
            $this->db->where('USERNAME_PETUGAS', $param['USERNAME_PETUGAS'])->delete('petugas');
        }
        public function getTotalData(){
            return $this->db->count_all('petugas');
        }
    }
?>