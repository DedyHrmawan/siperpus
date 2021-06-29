<?php
    class Penerbit extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_PENERBIT', 'DESC');
            return $this->db->get('penerbit')->result();
        }
        public function get($param){
            return $this->db->get_where('penerbit', $param)->row();
        }
        public function insert($param){
            $this->db->insert('penerbit', $param);
        }
        public function update($param){
            $this->db->where('ID_PENERBIT', $param['ID_PENERBIT'])->update('penerbit', $param);
        }
        public function delete($param){
            $this->db->where('ID_PENERBIT', $param['ID_PENERBIT'])->delete('penerbit');
        }
    }
?>