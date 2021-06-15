<?php
class AnggotaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vAnggota()
    {
        $data['title']          = 'Anggota | e-Libs';

        $this->template->view('admin/VAnggota', $data);
    }
}
