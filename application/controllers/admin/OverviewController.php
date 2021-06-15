<?php
class OverviewController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function vOverview()
    {
        $data['title']          = 'Overview | e-Libs';

        $this->template->view('admin/VOverview', $data);
    }
}
