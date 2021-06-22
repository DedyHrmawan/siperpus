<?php
class PengarangController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vPengarang()
    {
        $data['title']          = 'Pengarang | e-Libs';

        $this->admin->view('admin/VPengarang', $data);
    }
}
