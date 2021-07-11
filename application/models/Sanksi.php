<?php
    class Sanksi extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_SANKSI', 'DESC');
            return $this->db->get('v_sanksi')->result();
        }
        public function get($param){
            return $this->db->get_where('v_sanksi', $param)->row();
        }
        public function insert($param){
            $this->db->insert('sanksi', $param);
        }
        public function update($param){
            $this->db->where('ID_SANKSI', $param['ID_SANKSI'])->update('sanksi', $param);
        }
        public function delete($param){
            $this->db->where('ID_SANKSI', $param['ID_SANKSI'])->delete('sanksi');
        }
    }
?>