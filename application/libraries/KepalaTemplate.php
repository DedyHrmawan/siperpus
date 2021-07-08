<?php
class KepalaTemplate
{
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function view($content, $data = null){
        $this->_ci->load->view('template/kepalaperpus/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('template/kepalaperpus/footer', $data); // Footer
    }
}
?>