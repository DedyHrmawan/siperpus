<?php
    class Peminjaman extends CI_Model{
        public function getAll(){
            $this->db->order_by('ID_PEMINJAMAN', 'DESC');
            return $this->db->get('v_peminjaman')->result();
        }
        public function getAllDetail($param){
            return $this->db->get_where('peminjaman_detail', $param)->result();
        }
        public function get($param){
            return $this->db->get_where('v_peminjaman', $param)->row();
        }
        public function getForPengembalian(){
            $sql = "
            select 
                p3.ID_PEMINJAMAN 
            from 
                pengembalian p2 
            right join
                peminjaman p3 
            on p2.ID_PEMINJAMAN = p3.ID_PEMINJAMAN 
            where p2.ID_PEMINJAMAN is null ";

            return $this->db->query($sql)->result();
        }
        public function getForSanksi(){
            $sql = "
            select 
                p3.ID_PEMINJAMAN 
            from 
                sanksi s
            right join
                peminjaman p3 
            on s.ID_PEMINJAMAN = p3.ID_PEMINJAMAN 
            where s.ID_PEMINJAMAN is null ";

            return $this->db->query($sql)->result();
        }
        public function insert($param){
            $this->db->insert('peminjaman', $param);
        }
        public function insertDetail($param){
            $this->db->insert_batch('peminjaman_detail', $param);
        }
        public function update($param){
            $this->db->where('ID_PEMINJAMAN', $param['ID_PEMINJAMAN'])->update('peminjaman', $param);
        }
        public function delete($param){
            $this->db->where('ID_PEMINJAMAN', $param['ID_PEMINJAMAN'])->delete('peminjaman');
        }
        public function deleteDetail($param){
            $this->db->where('ID_PEMINJAMAN', $param['ID_PEMINJAMAN'])->delete('peminjaman_detail');
        }
        public function getTotalData(){
            return $this->db->count_all('v_peminjaman');
        }
    }
?>