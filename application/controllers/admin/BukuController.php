<?php
class BukuController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vBuku()
    {
        $data['title']          = 'Buku | e-Libs';

        $this->admin->view('admin/VBuku', $data);
    }
}
