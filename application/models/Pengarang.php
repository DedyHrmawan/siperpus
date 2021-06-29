<?php
    class Pengarang extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_PENGARANG', 'DESC');
            return $this->db->get('pengarang')->result();
        }
        public function get($param){
            return $this->db->get_where('pengarang', $param)->row();
        }
        public function insert($param){
            $this->db->insert('pengarang', $param);
        }
        public function update($param){
            $this->db->where('ID_PENGARANG', $param['ID_PENGARANG'])->update('pengarang', $param);
        }
        public function delete($param){
            $this->db->where('ID_PENGARANG', $param['ID_PENGARANG'])->delete('pengarang');
        }
    }
?>