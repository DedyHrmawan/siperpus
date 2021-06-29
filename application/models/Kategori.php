<?php
    class Kategori extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_KATEGORI', 'DESC');
            return $this->db->get('kategori')->result();
        }
        public function get($param){
            return $this->db->get_where('kategori', $param)->row();
        }
        public function insert($param){
            $this->db->insert('kategori', $param);
        }
        public function update($param){
            $this->db->where('ID_KATEGORI', $param['ID_KATEGORI'])->update('kategori', $param);
        }
        public function delete($param){
            $this->db->where('ID_KATEGORI', $param['ID_KATEGORI'])->delete('kategori');
        }
    }
?>