<?php
class Petugas
{
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function view($content, $data = null){
        $this->_ci->load->view('template/petugas/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('template/petugas/footer', $data); // Footer
    }
}
?>