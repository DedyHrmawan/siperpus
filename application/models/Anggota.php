<?php
    class Anggota extends CI_Model{
        public function getAll(){
            $this->db->order_by('USERNAME_ANGGOTA', 'DESC');
            return $this->db->get('anggota')->result();
        }
        public function get($param){
            return $this->db->get_where('anggota', $param)->row();
        }
        public function insert($param){
            $this->db->insert('anggota', $param);
        }
        public function update($param){
            $usernameOld = $param['USERNAMEOLD_ANGGOTA'];
            unset($param['USERNAMEOLD_ANGGOTA']);
            $this->db->where('USERNAME_ANGGOTA', $usernameOld)->update('anggota', $param);
        }
        public function delete($param){
            $this->db->where('USERNAME_ANGGOTA', $param['USERNAME_ANGGOTA'])->delete('anggota');
        }
        public function getTotalData(){
            return $this->db->query('SELECT COUNT(*) as TOTAL_ANGGOTA FROM anggota')->row();
        }
    }
?>