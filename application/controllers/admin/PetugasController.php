<?php
class PetugasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vPetugas()
    {
        $data['title']          = 'Petugas | e-Libs';

        $this->admin->view('admin/VPetugas', $data);
    }
}
