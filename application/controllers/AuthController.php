<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('VLogin');
    }

    public function vLoginPerpus()
    {
        $this->load->view('vLoginPerpus');
    }

    public function auth_perpus()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        if ($email === "petugas@siperpus.com" && $pass === "admin") {
            $session = array(
                'who' => "admin",
                'isLogin' => true
            );
            $this->session->set_userdata($session);

            redirect('admin-overview');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email / password salah! </div>');
            redirect('LoginController');
        }
    }

}
