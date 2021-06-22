<?php
class PenerbitController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vPenerbit()
    {
        $data['title']          = 'Penerbit | e-Libs';

        $this->admin->view('admin/VPenerbit', $data);
    }
}
