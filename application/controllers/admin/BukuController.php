<?php
class BukuController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku');
        $this->load->model('Kategori');
        $this->load->model('Pengarang');
        $this->load->model('Penerbit');
    }
    public function vBuku()
    {
        $data['title']      = 'Buku | e-Libs';
        $data['bukus']      = $this->Buku->getAll(); 
        $data['kategoris']  = $this->Kategori->getAll();
        $data['pengarangs'] = $this->Pengarang->getAll();
        $data['penerbits']  = $this->Penerbit->getAll();

        $this->admintemplate->view('admin/VBuku', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Buku->insert($param);
        redirect('buku');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Buku->get(['ID_BUKU' => $param['ID_BUKU']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Buku->update($param);
        redirect('buku');
    }
    public function destroy(){
        $param = $_POST;
        $this->Buku->delete($param);
        redirect('buku');
    }
}
