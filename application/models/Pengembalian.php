<?php
    class Pengembalian extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_PENGEMBALIAN', 'DESC');
            return $this->db->get('v_pengembalian')->result();
        }
        public function get($param){
            return $this->db->get_where('v_pengembalian', $param)->row();
        }
        public function insert($param){
            $this->db->insert('pengembalian', $param);
        }
        public function update($param){
            $this->db->where('ID_PENGEMBALIAN', $param['ID_PENGEMBALIAN'])->update('pengembalian', $param);
        }
        public function delete($param){
            $this->db->where('ID_PENGEMBALIAN', $param['ID_PENGEMBALIAN'])->delete('pengembalian');
        }
    }
?>