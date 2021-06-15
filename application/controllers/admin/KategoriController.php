<?php
class KategoriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vKategori()
    {
        $data['title']          = 'Kategori | e-Libs';

        $this->template->view('admin/VKategori', $data);
    }
}
