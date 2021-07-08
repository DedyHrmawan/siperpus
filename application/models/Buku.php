<?php
    class Buku extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_BUKU', 'DESC');
            return $this->db->get('v_buku')->result();
        }
        public function get($param){
            return $this->db->get_where('v_buku', $param)->row();
        }
        public function insert($param){
            $this->db->insert('buku', $param);
        }
        public function update($param){
            $this->db->where('ID_BUKU', $param['ID_BUKU'])->update('buku', $param);
        }
        public function delete($param){
            $this->db->where('ID_BUKU', $param['ID_BUKU'])->delete('buku');
        }
    }
?>