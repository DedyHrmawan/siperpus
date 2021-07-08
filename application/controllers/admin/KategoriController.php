<?php
class KategoriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori');
    }
    public function vKategori()
    {
        $data['title']      = 'Kategori | e-Libs';
        $data['kategoris']  = $this->Kategori->getAll(); 

        $this->admintemplate->view('admin/VKategori', $data);
    }
    public function store(){
        $param = $_POST;
        $this->Kategori->insert($param);
        redirect('kategori');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Kategori->get(['ID_KATEGORI' => $param['ID_KATEGORI']]));
    }
    public function edit(){
        $param = $_POST;
        $this->Kategori->update($param);
        redirect('kategori');
    }
    public function destroy(){
        $param = $_POST;
        $this->Kategori->delete($param);
        redirect('kategori');
    }
}
